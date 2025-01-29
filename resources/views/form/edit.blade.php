<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpFin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Styles n stuff -->
    <style>
        body {
            font-family: "Poppins", "Segoe UI", Arial, sans-serif;
            background-color: #f9f9fb;
            color: #333;
            margin: 0;
        }

        .navbar {
            background: linear-gradient(90deg, #1c4f81, #2e659c);
            padding: 1rem;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff;
        }

        .content {
            max-width: 900px;
            margin: 2rem auto;
            padding: 2rem;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            text-align: center;
            color: #2e659c;
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 600;
            color: #1c4f81;
        }

        .form-control,
        .form-select {
            border-radius: 8px;
            padding: 0.8rem;
        }

        .btn-primary {
            background: linear-gradient(90deg, #1c4f81, #2e659c);
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            background: linear-gradient(90deg, #1364ba, #1c4f81);
        }

        .btn-secondary {
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 30px;
        }

        .btn-delete-rounded {
            background-color: #ff4d4d;
            border: none;
            border-radius: 50px;
            padding: 10px 30px;
            color: white;
            font-weight: 600;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .btn-delete-rounded:hover {
            background-color: #e60000;
            transform: scale(1.05);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        footer {
            text-align: center;
            margin-top: 2rem;
            padding: 1rem;
            background: #f1f1f1;
            border-top: 1px solid #ccc;
        }

        /* Button Spacing */
        .d-flex>* {
            margin-right: 50px;
        }

        .d-flex>*:last-child {
            margin-right: 0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <a class="navbar-brand" href="#">OpFin</a>
    </nav>

    <!-- Content -->
    <div class="content">
        <h1>Edit User</h1>
        <!-- Save Changes Form -->
        <form action="{{ route('form.update', $form->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('PUT')

            <!-- Form Fields -->
            <div class="mb-3">
                <label for="name" class="form-label">Full Employee Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $form->name }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $form->email }}" required>
            </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select id="department" name="department" class="form-select" required>
                    @foreach(['Human Resources', 'Engineering', 'Marketing', 'Sales', 'Finance'] as $department)
                        <option value="{{ $department }}" {{ $form->department === $department ? 'selected' : '' }}>
                            {{ $department }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label">Employment Start Date</label>
                <input type="date" id="start_date" name="start_date" class="form-control"
                    value="{{ $form->start_date }}" required>
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label">Employment End Date</label>
                <input type="date" id="end_date" name="end_date" class="form-control" value="{{ $form->end_date }}">
            </div>

            <div class="mb-3">
                <label for="company_name" class="form-label">Company Name</label>
                <select id="company_name" name="company_name" class="form-select" required>
                    @foreach(['OpFin Ltd', 'TechCorp', 'InnovateX', 'Global Solutions', 'Future Ventures'] as $company)
                        <option value="{{ $company }}" {{ $form->company_name === $company ? 'selected' : '' }}>
                            {{ $company }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="work_schedule" class="form-label">Work Schedule</label>
                <select id="work_schedule" name="work_schedule" class="form-select" required>
                    @foreach(['Full Time', 'Part Time', 'Contract'] as $schedule)
                        <option value="{{ $schedule }}" {{ $form->work_schedule === $schedule ? 'selected' : '' }}>
                            {{ $schedule }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="gross_salary" class="form-label">Gross Salary</label>
                <input type="number" id="gross_salary" name="gross_salary" class="form-control"
                    value="{{ $form->gross_salary }}" required>
            </div>

            <div class="mb-3">
                <label for="net_salary" class="form-label">Net Salary</label>
                <input type="number" id="net_salary" name="net_salary" class="form-control"
                    value="{{ $form->net_salary }}" required>
            </div>

               <!-- Save Changes Button -->
        <div class="d-flex justify-content-start mt-4">
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form>

    <!-- Buttons for Delete and Cancel -->
    <div class="d-flex justify-content-center align-items-center mt-4">
        <!-- Delete Button Form -->
        <form action="{{ route('form.destroy', $form->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-delete-rounded" onclick="return confirm('Are you sure you want to delete this entry?');">
                <i class="fa fa-trash"></i> Delete
            </button>
        </form>
    </div>

    <div class="d-flex justify-content-end mt-4">
        <a href="{{ route('loginsignup') }}" class="btn btn-secondary">Cancel</a>
    </div>
</div>
<!-- My skibidi centre radar broke, now its a feature :3 we ball -->
    <footer>&copy; {{ date('Y') }} OpFin. All rights reserved.</footer>
</body>

</html>