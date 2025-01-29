<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserForm;

class UserFormController extends Controller
{
    // Show the loginsignup page
    public function loginsignup()
    {
        // Fetch data from user_forms table
        $forms = UserForm::all();

        // Pass data to the loginsignup view
        return view('loginsignup', compact('forms'));
    }

    // Show the "Add New User" form page
    public function showForm()
    {
        return view('add-user-form');
    }

    // Handle form submission
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user_forms,email',
            'department' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'work_schedule' => 'required|string|in:Full Time,Part Time,Contract',
            'gross_salary' => 'required|numeric|min:0', // Ensure it's numeric and non-negative
            'net_salary' => 'required|numeric|min:0|lte:gross_salary', // Ensure net <= gross
        ]);
    
        UserForm::create($validated);
    
        return redirect()->route('loginsignup')->with('success', 'User added successfully!');
    }
    
    public function massAction(Request $request)
{
    $actionType = $request->input('actionType');
    $selectedIds = $request->input('selected_ids', []);

    if (empty($selectedIds)) {
        return redirect()->route('loginsignup')->with('error', 'No records selected.');
    }

    if ($actionType === 'delete') {
        // Delete selected records
        UserForm::whereIn('id', $selectedIds)->delete();
        return redirect()->route('loginsignup')->with('success', 'Selected users deleted successfully!');
    }

    if ($actionType === 'update') {
        // Redirect to a bulk update form
        $forms = UserForm::whereIn('id', $selectedIds)->get();
        return view('form.bulk-edit', compact('forms'));
    }

    return redirect()->route('loginsignup')->with('error', 'Invalid action type.');
}

public function updateMultiple(Request $request)
{
    $ids = $request->input('ids', []);
    $names = $request->input('names', []);
    $emails = $request->input('emails', []);

    foreach ($ids as $index => $id) {
        $form = UserForm::findOrFail($id);
        $form->update([
            'name' => $names[$index],
            'email' => $emails[$index],
        ]);
    }

    return redirect()->route('loginsignup')->with('success', 'Selected users updated successfully!');
}

public function edit($id)
{
    $form = UserForm::findOrFail($id);
    return view('form.edit', compact('form'));
}


public function update(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'department' => 'required|string|max:255',
        'company_name' => 'required|string|max:255',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'work_schedule' => 'required|string|in:Full Time,Part Time,Contract',
        'gross_salary' => 'required|numeric|min:0',
        'net_salary' => 'required|numeric|min:0|lte:gross_salary',
    ]);

    $form = UserForm::findOrFail($id);
    $form->update($validated);

    return redirect()->route('loginsignup')->with('success', 'User updated successfully!');
}

public function destroy($id)
{
    $form = UserForm::findOrFail($id);
    $form->delete();

    return redirect()->route('loginsignup')->with('success', 'User deleted successfully!');
}


}


