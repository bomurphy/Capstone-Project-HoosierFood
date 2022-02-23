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
    <link rel="stylesheet" href="restaurant.css" >
    <title>Hoosier Food Home Page</title>
    
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
                <a class="nav-link red-text" href="../Orders/orders.php">Orders</a>
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
            <!-- <form class="d-flex">
              <button class="btn btn-outline-danger me-1">Login</button>
              <button class="btn btn-outline-danger" type="submit">Register</button>
            </form> -->
            <form action="" class="d-flex">
                <button id="login-btn" class="login me-2">Login</button>
                <a href='../UserProfile/user-profile.html' class="user hide"></a>
                <a href="https://cgi.luddy.indiana.edu/~team51/Register/register.php" id="register-btn" class="login">Register</button></a>
                <button class="signOutBtn login hide">Sign Out</button>
            </form>
          </div>
        </div>
      </nav>

	<div class="choice">
	
	<h1> Select up to 3 choices</h1>
		Pizza   <input type = "checkbox" name = "checkbox1" >
		Italian <input type = "checkbox" name = "checkbox2" >
		Chinese <input type = "checkbox" name = "checkbox3" >
		Japanese <input type = "checkbox" name = "checkbox4" >
		Indian <input type = "checkbox" name = "checkbox5" >
		
	</br>
	
		Thai <input type = "checkbox" name = "checkbox6" >
		American <input type = "checkbox" name = "checkbox7" >
		Vegan <input type = "checkbox" name = "checkbox8" >
		Breakfast <input type = "checkbox" name = "checkbox9" >
		Fast Food <input type = "checkbox" name = "checkbox10" >
		
	</br>
	
		Lunch <input type = "checkbox" name = "checkbox11" >
		Cheap <input type = "checkbox" name = "checkbox12" >
		Expensive <input type = "checkbox" name = "checkbox13" >
		Bar Food <input type = "checkbox" name = "checkbox14" >
		Winery <input type = "checkbox" name = "checkbox15" >
	</br>
	</br>
	</div>

	<div class="float-container">
		<div class="float-child1">
			<h2>How far are you willing to travel?</h2>
			</br>
			</br>
			<div class="slidecontainer">
				<input type="range" min="0" max="10" value="5" class="slider" id="myRange">
				<p>Miles: <span id="demo"></span></p>
			</div>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
		</div>
	
		<div class="float-child2">
			<h2>You should dine at</h2>
			<?php

$con = mysqli_connect("db.soic.indiana.edu", "i494f21_team51", "my+sql=i494f21_team51", "i494f21_team51");

if (!$con) {
	die("Failed to connect: " .
		mysqli_connect_error() );
} else{
	echo"";
}

$sql = "SELECT RestaurantName FROM restaurants
		ORDER BY RAND()
		LIMIT 1";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "" . $row["RestaurantName"];
    }
} else {
    echo "0 results";
}


mysqli_close($con)

?>
</br>			
			<form method="POST" action="restaurant.php">
            <input type="submit" value = "Generate another Restaurant" class="button">
            </form>
		

			<form method="POST" action="../Orders/orders.php">
            <input type="submit" value = "Eat Here!" class="button">
            </form>
		</div>
	</div>



      <footer class="footer-bg d-flex align-items-center position-fixed bottom-0 justify-content-end w-100 p-2">
        <div class="mt-3 d-flex">
            <a href="" class="me-3 footer-link">Rewards</a>
            <a href="" class="me-3 footer-link">Contact</a>
        </div>
     
      </footer>


    
    <script src="login.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!--adding bootstrap and jQuery extentions-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>


