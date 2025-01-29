<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OpFin Dashboard</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- Custom Styling -->
  <style>
    /* Global Styles */
    body {
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
      background-color: #f5f6f7;
      color: #333;
      margin: 0;
      padding: 0;
    }

    /* Navbar */
    .navbar {
      background: #1c4f81;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 1rem 2rem;
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 1.5rem;
    }

    .navbar .nav-link {
      font-size: 1rem;
      color: #ffffff;
    }

    .navbar .nav-link:hover {
      color: #000;
    }

    /* Sidebar */
    .sidebar {
      background: #2e659c;
      border-right: 1px solid #e0e0e0;
      height: 100vh;
      padding: 2rem 1rem;
      position: fixed;
      width: 250px;
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
    }

    .sidebar ul li {
      margin-bottom: 1rem;
    }

    .sidebar ul li a {
      color: #ffffff;
      font-size: 1rem;
      text-decoration: none;
      display: flex;
      align-items: center;
      transition: color 0.3s;
    }

    .sidebar ul li a:hover {
      color: #ffffff;
    }

    .sidebar ul li a i {
      margin-right: 0.5rem;
    }

    /* Content */
    .content {
      margin-left: 260px;
      padding: 2rem;
    }

    .content-header {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 1rem;
    }

    /* Cards */
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Buttons */
    .btn-primary {
      background-color: #007bff;
      border: none;
      border-radius: 30px;
      padding: 0.8rem 2rem;
      font-size: 1rem;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    .btn-primary:hover {
      background-color: #1364ba;
    }

    /* Footer */
    footer {
      text-align: center;
      margin-top: 2rem;
      padding: 1rem;
      background: #f8f9fa;
      border-top: 1px solid #e0e0e0;
    }

    footer p {
      margin: 0;
      color: #555;
    }
  </style>
</head>

<!--Header separation, moving onto login/signup stuff now-->
<body>
@auth
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#" style="color: #ffffff">OpFin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">About Us</a></li>
      </ul>
    </div>
  </nav>
  <!-- Sidebar -->
  <aside class="sidebar">
    <ul>
      <li><a href="#"><i class="fas fa-home"></i> Dashboard</a></li>
      <li><a href="{{ route('profile') }}"><i class="fas fa-user"></i> Profile</a></li>
      <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
      <li><a href="#"><i class="fas fa-sign-out-alt" action="/logout" method="POST"></i> Logout</a></li>
    </ul>
  </aside>
  
  <!-- Main Content -->
  <div class="content">
    <div class="content-header">Welcome to OpFin</div>

    <p>Congratulations on succesfully logging in! Welcome to OpFin!</p>
    <form action="/logout" method="POST">
      @csrf
      <button class="btn btn-primary" style="background-color: rgb(61,157,241); color:aliceblue; border-color: rgb(42,59,95);">Log out</button>
      <br>

      <hr>

    <!-- Cards -->
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">MVW Nominations</h5>
            <p class="card-text">Nominate your most valued workmates for this year's awards!</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Office Memo</h5>
            <p class="card-text">The Keurig is broken. Use the regular coffee pot!</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Table -->
    <div class="mt-4">
      <h4>YourFin</h4>
      <a href="{{ route('form.page') }}" class="btn btn-primary" style="background-color: rgb(61,157,241); color:aliceblue; border-color: rgb(42,59,95);">Add New Op</a>

      <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Company Name</th>
                <th>Department</th>
                <th>Employee Name</th>
                <th>Employee Email</th>
                <th>Employment Start Date</th>
                <th>Employment End Date</th>
                <th>Work Schedule</th>
                <th>Gross Salary</th>
                <th>Net Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($forms) && $forms->isNotEmpty())
                @foreach($forms as $index => $form)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $form->company_name }}</td>
                    <td>{{ $form->department }}</td>
                    <td>{{ $form->name }}</td>
                    <td>{{ $form->email }}</td>
                    <td>{{ $form->start_date }}</td>
                    <td>{{ $form->end_date }}</td>
                    <td>{{ $form->work_schedule }}</td>
                    <td>${{ number_format($form->gross_salary, 2) }}</td>
                    <td>${{ number_format($form->net_salary, 2) }}</td>
                    <td>
                        <a href="{{ route('form.edit', $form->id) }}" class="btn btn-primary btn-sm" style="background-color: rgb(61,157,241); color:aliceblue; border-color: rgb(42,59,95);">Edit</a>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="11" class="text-center">No data available</td>
                </tr>
            @endif
        </tbody>
    </table>    

    </div>
  </div>

  <!-- Footer -->
  <footer>
    <p>© 2025 OpFin. All rights reserved.</p>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


      <!--Other register and login stuff, so the page before the you have succesfully logged in page-->

      @else
      <div class="d-flex justify-content-center align-items-center animate__animated animate__fadeIn" style="min-height: 100vh; background-color: #f8f9fa;">
        <div class="card shadow-lg p-4" style="width: 400px; border-radius: 15px;">
            <div class="card-body">
                <h2 class="text-center mb-4">Welcome to OpFin</h2>
    
                <!-- Register Form -->
                <form action="/register" method="POST">
                    @csrf
                    <h4 class="mb-3">Register</h4>
                    <div class="mb-3">
                        <input name="name" type="text" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control is-invalid" placeholder="Enter your email">
                      <div class="invalid-feedback">
                          Please provide a valid email.
                      </div>
                    </div>
                    <div class="mb-3">
                        <input name="password" type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button class="btn btn-primary w-100" style="background-color: #3d9df1;">Register</button>
                </form>
    
                <hr class="my-4">
    
                <!-- Login Form -->
                <form action="/login" method="POST">
                    @csrf
                    <h4 class="mb-3">Login</h4>
                    <div class="mb-3">
                        <input name="loginname" type="text" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <input name="loginpassword" type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button class="btn btn-primary w-100" style="background-color: #3d9df1;" href="{{ route('loginsignup') }}">Log In</button>
                </form>
            </div>
        </div>
    </div>
    
      @endauth
</body>
</html>
