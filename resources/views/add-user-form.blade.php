<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>OpFin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/1.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


<div class="content">
<p>Welcome to OpFin!</p>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="#">OpFin</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
    </ul> 


    <form class="d-flex" action=" ">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button style="background-color: rgb(61,157,241); color:aliceblue; border-color: rgb(42,59,95);" class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</div>
</nav>

<section class="container">
<div class="bg-image">
</div>

</section>

<style>
    body {
        background: linear-gradient(135deg, #f3f4f6, #ffffff);
        font-family: 'Roboto', sans-serif;
    }

    h1 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
    }

    .form-control, .form-select {
        border-radius: 10px;
    }

    .input-group-text {
        background-color: #3d9df1;
        color: #fff;
        border: none;
    }

    .btn-primary {
        background-color: #3d9df1;
        border-color: #3d9df1;
    }

    .btn-primary:hover {
        background-color: #2a3b5f;
        border-color: #2a3b5f;
    }

    .btn-secondary {
        background-color: #6c757d;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    .shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>


</head>
<body>
@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Add New User</h1>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="form-container animate__animated animate__fadeIn">
            <form action="{{ route('form.store') }}" method="POST" class="bg-light p-4 rounded shadow">
                @csrf
                <div class="row mb-3">
                    <!-- Full Name -->
                    <div class="col-md-6">
                        <label for="name" class="form-label">Full Employee Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" required>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <!-- Start Date -->
                    <div class="col-md-6">
                        <label for="start_date" class="form-label">Employment Start Date</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>
                    </div>
                    <!-- End Date -->
                    <div class="col-md-6">
                        <label for="end_date" class="form-label">Employment End Date</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            <input type="date" class="form-control" id="end_date" name="end_date">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <!-- Department -->
                    <div class="col-md-6">
                        <label for="department" class="form-label">Department</label>
                        <select class="form-select" id="department" name="department" required>
                            <option value="" disabled selected>Select a department</option>
                            <option value="Human Resources">Human Resources</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Sales">Sales</option>
                            <option value="Finance">Finance</option>
                        </select>
                    </div>
                    <!-- Company -->
                    <div class="col-md-6">
                        <label for="company_name" class="form-label">Company Name</label>
                        <select class="form-select" id="company_name" name="company_name" required>
                            <option value="" disabled selected>Select a company</option>
                            <option value="OpFin Ltd">OpFin Ltd</option>
                            <option value="TechCorp">TechCorp</option>
                            <option value="InnovateX">InnovateX</option>
                            <option value="Global Solutions">Global Solutions</option>
                            <option value="Future Ventures">Future Ventures</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="work_schedule" class="form-label">Work Schedule</label>
                        <select class="form-control" id="work_schedule" name="work_schedule" required>
                            <option value="" disabled selected>Select a schedule</option>
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                            <option value="Contract">Contract</option>
                        </select>
                    </div>         
                </div>
                <div class="mb-3">
                    <label for="gross_salary" class="form-label">Gross Salary</label>
                    <input type="number" class="form-control" id="gross_salary" name="gross_salary" placeholder="Enter gross salary" step="0.01" required>
                </div>
                
                <div class="mb-3">
                    <label for="net_salary" class="form-label">Net Salary</label>
                    <input type="number" class="form-control" id="net_salary" name="net_salary" placeholder="Enter net salary" step="0.01" required>
                </div>
                
                <!-- Buttons -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-50 mb-3">Save</button>
                    <a href="{{ route('loginsignup') }}" class="btn btn-secondary w-50">Cancel</a>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>


