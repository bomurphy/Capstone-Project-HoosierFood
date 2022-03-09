
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" 
        content="1027531663911-al3p7o7qrb5eqdpq6j3ea1mn63tvg5jc.apps.googleusercontent.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" >
    
    <title>Login Page</title>
	
    
</head>

<body class="nav-background">
    
    <nav class="navbar navbar-expand-lg p-2 border-bottom nav-background">
        <div class="container-fluid">
          <img src="../photos/iu-logo.svg" class="iu-logo me-5" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active red-text" aria-current="page" href="../Restaurant/restaurant.html">Restaurants</a>
              </li>
              <li class="nav-item">
                <a class="nav-link red-text" href="#">Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link red-text" href="#" tabindex="-1" aria-disabled="true">Reviews</a>
              </li>
              <li class="nav-item">
                <a class="nav-link red-text" href="../Filter/filter1.html" tabindex="-1" aria-disabled="true">Discovery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link red-text" href="#" tabindex="-1" aria-disabled="true">Support</a>
              </li>
            </ul>
            <form action="" class="d-flex">
              <button id="login-btn" class="login me-2">Login</button>
              <a href='../UserProfile/user-profile.html' class="user hide"></a>
              <button id="register-btn" class="login">Register</button>
              <a href='../Login/login.html'><button class="signOutBtn login hide">Sign Out</button></a>

          </form>
          </div>
        </div>
      </nav>




<?php
include_once 'server.php';


if(isset($_POST['submit']))
{    
     $FirstName = $_POST['FirstName'];
     $LastName = $_POST['LastName'];
     $Street = $_POST['Street'];
	 $City = $_POST['City'];
	 $State = $_POST['State'];
	 $Zip = $_POST['Zip'];
	 $Email = $_POST['Email'];
	 $username = $_POST['username'];
	 $password = $_POST['password'];
	 
	 	 
	 
     $sql = "INSERT INTO users (FirstName, LastName, Street, City, State, Zip, Email, username, password)
     VALUES ('$FirstName','$LastName','$Street', '$City', '$State', '$Zip', '$Email', '$username', '$password')";
     if (mysqli_query($con, $sql)) {
        echo "Congratulations you are all signed up! Click the button below to login with your information:";
     } else {
        echo "Error: Please return to home page". mysqli_error($con);
     }
     mysqli_close($conn);
}
?>
</br>
</br>
<div class="button">
<form action="../Login/login1.html">
    <input type="submit" value="Login" />
</form>
</div>















      <footer class="footer-bg d-flex align-items-center position-fixed bottom-0 justify-content-end w-100 p-2">
        <div class="mt-3 d-flex">
            <a href="" class="me-3 footer-link">Rewards</a>
            <a href="" class="me-3 footer-link">Contact</a>
        </div>
     
      </footer>


    <script src="../Login/login.js"></script>
    <script src="../Restaurant/restaurant.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!--adding bootstrap and jQuery extentions-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>