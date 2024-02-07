<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Your custom styles -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        #sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 56px; /* Height of the navbar */
        }

        #content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Add some styles for the navbar and other components */
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sevices</a>
                </li>
                <!-- Add more menu items as needed -->
            </ul>
        </div>
    </div>
</nav>

<!-- Sidebar -->
<div id="sidebar">
    <ul class="nav flex-column">        
          <li class="nav-item">
              <a href="{{route('admin.index')}}" class="text-white nav-link text-decoration-none">Dashboard</a>
          </li>
          <li class="nav-item">
              <a href="{{route('admin.manage.course')}}" class="text-white nav-link text-decoration-none">Manage Courses</a>
          </li>
          <li class="nav-item">
              <a href="{{route('admin.manage.category')}}" class="text-white nav-link text-decoration-none">Manage Category</a>
          </li>
          <li class="nav-item">
              <a href="{{route('admin.manage.student')}}" class="text-white nav-link text-decoration-none">Manage Students</a>
          </li>
    </ul>
</div>

<!-- Page Content -->
<div id="content" class="mt-5">

  @section('content')
      
  @show

</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>



