<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Navbar Brand */
        .navbar-brand {
          font-size: 24px; /* Increase font size */
          font-weight: bold; /* Make font bold */
          color: #ffcc00; /* Set color to yellow */
          text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add text shadow */
          transition: transform 0.3s ease-in-out;
        }

        .navbar-brand:hover {
          transform: scale(1.1);
        }

        /* Navbar Links */
        .navbar-nav .nav-link {
          padding: 0.5rem 1rem;
          transition: transform 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover {
          background-color: rgba(255, 255, 255, 0.1);
          border-radius: 0.25rem;
          transform: scale(1.1);
          color: #fff; /* Change text color on hover */
        }

        /* Custom background color */
        body {
          background-color: #f8f9fa; /* Light gray background color */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
   
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">
    <span style="color: white;">Easy</span><span style="color: #608bd1;">Hire</span>
</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <!-- Display Hello and Username -->
        <li class="nav-item nav-link">
          Hello, <?php echo $_SESSION['user_first_name']; ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="admin/">Candidate</a>
        </li>
        <!-- Logout Link -->
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Bootstrap JS (optional, if you need it) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
