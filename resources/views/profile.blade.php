<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile | OpFin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f9fafc;
            margin: 0;
            padding: 0;
        }

        .profile-header {
            background: linear-gradient(90deg, #1c4f81, #2e659c);
            color: white;
            padding: 3rem 1rem;
            text-align: center;
            border-radius: 0 0 20px 20px;
        }

        .profile-header img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid #ffffff;
            margin-top: -60px;
        }

        .profile-header h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-top: 1rem;
        }

        .profile-header p {
            font-size: 1.2rem;
            margin-top: 0.5rem;
        }

        .profile-header .btn {
            margin-top: 1.5rem;
            padding: 0.6rem 1.5rem;
            border-radius: 30px;
            background: white;
            color: #2e659c;
            font-weight: bold;
            transition: background 0.3s, color 0.3s;
        }

        .profile-header .btn:hover {
            background: #2e659c;
            color: white;
        }

        .profile-details {
            margin-top: 2rem;
            padding: 1rem;
        }

        .profile-card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
        }

        .profile-card h4 {
            font-size: 1.3rem;
            font-weight: bold;
        }

        .profile-card p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 0.5rem;
        }

        .tabs {
            margin-top: 2rem;
        }

        .tabs .nav-tabs .nav-link {
            border: none;
            background: #f9fafc;
            color: #555;
            font-weight: bold;
            transition: background 0.3s, color 0.3s;
        }

        .tabs .nav-tabs .nav-link.active {
            background: #2e659c;
            color: white;
            border-radius: 30px;
        }

        .tabs .tab-content {
            margin-top: 1.5rem;
        }

        footer {
            text-align: center;
            margin-top: 3rem;
            padding: 1rem;
            background: #f8f9fa;
            font-size: 0.9rem;
            color: #666;
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
            margin-left: 250px; /* Prevent overlap with sidebar */
            padding: 2rem;
        }
    </style>
</head>

<body>
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
            <li><a href="{{ route('loginsignup') }}"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="{{ route('profile') }}"><i class="fas fa-user"></i> Profile</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </aside>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <!-- Content -->
    <div class="content">
        <!-- Profile Header -->
        <div class="profile-header">
            <img src="{{ $user->profile_picture ?? 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/41cf8839-5908-4766-83ba-32e036bce4ef/dgadz5w-2c25bf4e-4b18-44c1-8832-d4734f54ab33.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzQxY2Y4ODM5LTU5MDgtNDc2Ni04M2JhLTMyZTAzNmJjZTRlZlwvZGdhZHo1dy0yYzI1YmY0ZS00YjE4LTQ0YzEtODgzMi1kNDczNGY1NGFiMzMuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.IwtraSxQ855gDrCoJ-w05XqqXevpZkafqofWoExfLi4' }}" alt="Profile Picture">
            <h2>{{ $user->name }}</h2>
            <p>{{ $user->bio ?? 'Write something about yourself.' }}</p>
            <button class="btn" data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit Profile</button>
        </div>
        
        <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="bio" class="form-label">Bio</label>
                                <input type="text" class="form-control" id="bio" name="bio" value="{{ $user->bio }}">
                            </div>
                            <div class="mb-3">
                                <label for="bio" class="form-label">Password</label>
                                <input type="text" class="form-control" id="password" name="password" value="{{ $user->password }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        

        <!-- Profile Details -->
        <div class="container profile-details">
            <div class="row">
                <div class="col-md-6">
                    <div class="profile-card">
                        <h4>Contact Information</h4>
                        <p>Email: johndoe@example.com</p>
                        <p>Phone: +123 456 7890</p>
                        <p>Address: 123 Main Street, Springfield</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-card">
                        <h4>Employment Details</h4>
                        <p>Position: Senior Developer</p>
                        <p>Department: IT</p>
                        <p>Start Date: January 1, 2020</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <p>© 2025 OpFin. All rights reserved.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
