<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>Student - Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/account.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper">
      <div class="sidebar-heading p-0">
        <a href="index.php">
          <img src="https://res.cloudinary.com/marykaystuff/image/upload/v1592566343/Kingsville%20Schools/vevhgp1vtj07furerdtp.png" class="mt-2" alt="logo">    
      </a>
      </div>
      <div class=" d-flex justify-content-center">
        <img src="https://res.cloudinary.com/rebasive/image/upload/v1598353562/robot_oj5ike.svg" width="100px" alt="passport" class="my-5 rounded-circle">
      </div>
      <div class="list-group list-group-flush">
        <li class="list-group-item list-group-item-action">
          <i class="fas fa-user"></i>
          <a href="profile.php">Profile</a>
        </li>
        <li class="list-group-item list-group-item-action">
          <i class="fab fa-accusoft"></i>                
          <a href="profile.php">Entrance Exam</a>
        </li>
        <li class="list-group-item list-group-item-action">
          <i class="fas fa-user"></i>
          <a href="profile.php">Check Result</a>
        </li>
        <li class="list-group-item list-group-item-action">
          <i class="fas fa-poll-h"></i>                
          <a href="profile.php">Logout</a>
        </li>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar bg-content navbar-light navbar-expand-lg border-bottom">
        <button class="btn" id="menu-toggle"><i class="fas fa-bars"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Settings
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Edit Information</a>
                <a class="dropdown-item" href="#">help</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container">
        <h3 class="mt-2">Student Information</h3>
        <div class="passport">
         <img src="https://res.cloudinary.com/rebasive/image/upload/v1598353562/robot_oj5ike.svg" width="100px" alt="passport" class="my-5">        
        </div>
        <table class="table">
            <tbody>
            <tr>
              <th scope="row">First</th>
              <td>Mark</td>
            </tr>
            <tr>
              <th scope="row">Last</th>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">Date of Birth</th>
              <td>Jacob</td>
            </tr>
            <tr>
              <th scope="row">Gender</th>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">Nationality</th>
              <td>Larry</td>
            </tr>
            <tr>
              <th scope="row">State of Origin</th>
              <td>@twitter</td>
            </tr>
            <tr>
              <th scope="row">Local Government</th>
              <td>Mark</td>
            </tr>
            <tr>
              <th scope="row">Home Address</th>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">Class Applied for</th>
              <td>Jacob</td>
            </tr>
            <tr>
              <th scope="row">Peculiar Ailment</th>
              <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">Physical Disability</th>
              <td>Larry</td>
            </tr>
            <tr>
              <th scope="row">Previous School</th>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
        <table class="table">
          <thead>
            <h3 class="mt-4">Parent / Guardian Information</h3>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Name</th>
              <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">Address</th>
              <td>Jacob</td>
              </tr>
              <tr>
              <th scope="row">Phone Number</th>
              <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">Email</th>
              <td>Larry</td>
            </tr>
            <tr>
              <th scope="row">Occupation</th>
              <td>@twitter</td>
            </tr>
  </tbody>
</table>
           
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
