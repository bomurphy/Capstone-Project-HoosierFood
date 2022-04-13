<<<<<<< HEAD
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
    <link rel="stylesheet" href="filter.css" >
    <title>FilterPage</title>
    
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
                <a class="nav-link red-text" href="../Filter/filter.php" tabindex="-1" aria-disabled="true">Discovery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link red-text" href="../Menu/menu.php" tabindex="-1" aria-disabled="true">Menus</a>  
              </li>
              <li class="nav-item">
                <a class="nav-link red-text" href="#" tabindex="-1" aria-disabled="true">Support</a>
              </li>
            </ul>
            <form action="" class="d-flex">
              <a href='../UserProfile/user-profile.html' class="user user-icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="42px" viewBox="0 0 24 24" width="42px" fill="#990000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
              </a>
          </form>
            <!-- <form class="d-flex">
              <button class="btn btn-outline-danger me-1">Login</button>
              <button class="btn btn-outline-danger" type="submit">Register</button>
            </form> -->
            <!-- <form action="" class="d-flex">
                <button id="login-btn" class="login me-2">Login</button>
                <a href='../UserProfile/user-profile.html' class="user hide"></a>
                <a href="https://cgi.luddy.indiana.edu/~team51/Register/register.php" id="register-btn" class="login">Register</button></a>
                <button class="signOutBtn login hide">Sign Out</button> -->
            </form>
          </div>
        </div>
      </nav>


<h1> Choose Food Types </h1>


<form action="filterpractice.php">
  <label for="categories">Choose a Food Type:</label>
  <select name="category" id="FoodCategories">
    <option value="Pizza">Pizza</option>
    <option value="Wings">Wings</option>
    <option value="Fast Food">Fast Food</option>
    <option value="Bar & Grill">Bar & Grill</option>
	<option value="Mexican Food">Mexican Food</option>
    <option value="Indian Food">Indian Food</option>
    <option value="Chinese Food">Chinese Food</option>
    <option value="Sweets">Sweets</option>
	<option value="Breakfast/Brunch">Breakfast/Brunch</option>
	<option value="Thai Food">Thai Food</option>
    <option value="Italian">Italian</option>
    <option value="sandwiches">sandwiches</option>
    <option value="Diner">Diner</option>
	<option value="Japanese Food">Japanese Food</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>


	
	

<?php

$conn = mysqli_connect("db.soic.indiana.edu", "i494f21_team51", "my+sql=i494f21_team51", "i494f21_team51");

$sql= "SELECT * FROM restaurants INNER JOIN Category ON restaurants.categoryID=Category.categoryID";
$result= mysqli_query($conn,$sql)

?>



<table>
	<tr>
		<th>Restaurant Name</th>
		<th>Address</th>
		<th>Phone Number</th>
		<th>Pictures</th>
	</tr>
	<?php
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
	?>
	<tr> 
		<td><?php echo $row["RestaurantName"];?></td>
		<td><?php echo $row["Street"] . " " .$row["City"] . " " .$row["State"] . " " .$row["Zip"];?></td>
		<td><?php echo $row["PhoneNum"];?></td>
		<td><a href="<?php echo $row["Pictures"];?>"><?php echo $row["Pictures"];?></a></td>
	</tr>
	<?php
		}
	}
	?>
	
</table>
<br>


	        <footer class="footer-bg d-flex align-items-center position-fixed bottom-0 justify-content-end w-100 p-2">
        <div class="mt-3 d-flex">
            <a href="" class="me-3 footer-link">Rewards</a>
            <a href="../Contact/contact.php" class="me-3 footer-link">Contact</a>
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
=======
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
    <link rel="stylesheet" href="filter.css" >
    <title>FilterPage</title>
    
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
                <a class="nav-link red-text" href="../Filter/filterpractice.php" tabindex="-1" aria-disabled="true">Discovery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link red-text" href="../Menu/menu.php" tabindex="-1" aria-disabled="true">Menus</a>  
              </li>
              <li class="nav-item">
                <a class="nav-link red-text" href="#" tabindex="-1" aria-disabled="true">Support</a>
              </li>
            </ul>
            <form action="" class="d-flex">
              <a href='../UserProfile/user-profile.html' class="user user-icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="42px" viewBox="0 0 24 24" width="42px" fill="#990000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
              </a>
          </form>
            <!-- <form class="d-flex">
              <button class="btn btn-outline-danger me-1">Login</button>
              <button class="btn btn-outline-danger" type="submit">Register</button>
            </form> -->
            <!-- <form action="" class="d-flex">
                <button id="login-btn" class="login me-2">Login</button>
                <a href='../UserProfile/user-profile.html' class="user hide"></a>
                <a href="https://cgi.luddy.indiana.edu/~team51/Register/register.php" id="register-btn" class="login">Register</button></a>
                <button class="signOutBtn login hide">Sign Out</button> -->
            </form>
          </div>
        </div>
      </nav>


<h1> Choose Food Types </h1>


<form action="filterpractice.php">
  <label for="categories">Choose a Food Type:</label>
  <select name="category" id="FoodCategories">
    <option value="Pizza">Pizza</option>
    <option value="Wings">Wings</option>
    <option value="Fast Food">Fast Food</option>
    <option value="Bar & Grill">Bar & Grill</option>
	<option value="Mexican Food">Mexican Food</option>
    <option value="Indian Food">Indian Food</option>
    <option value="Chinese Food">Chinese Food</option>
    <option value="Sweets">Sweets</option>
	<option value="Breakfast/Brunch">Breakfast/Brunch</option>
	<option value="Thai Food">Thai Food</option>
    <option value="Italian">Italian</option>
    <option value="sandwiches">sandwiches</option>
    <option value="Diner">Diner</option>
	<option value="Japanese Food">Japanese Food</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>


	
	

<?php

$conn = mysqli_connect("db.soic.indiana.edu", "i494f21_team51", "my+sql=i494f21_team51", "i494f21_team51");

$sql= "SELECT * FROM restaurants INNER JOIN Category ON restaurants.categoryID=Category.categoryID";
$result= mysqli_query($conn,$sql)

?>



<table>
	<tr>
		<th>Restaurant Name</th>
		<th>Address</th>
		<th>Phone Number</th>
		<th>Pictures</th>
	</tr>
	<?php
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
	?>
	<tr> 
		<td><?php echo $row["RestaurantName"];?></td>
		<td><?php echo $row["Street"] . " " .$row["City"] . " " .$row["State"] . " " .$row["Zip"];?></td>
		<td><?php echo $row["PhoneNum"];?></td>
		<td><a href="<?php echo $row["Pictures"];?>"><?php echo $row["Pictures"];?></a></td>
	</tr>
	<?php
		}
	}
	?>
	
</table>
<br>


	        <footer class="footer-bg d-flex align-items-center position-fixed bottom-0 justify-content-end w-100 p-2">
        <div class="mt-3 d-flex">
            <a href="" class="me-3 footer-link">Rewards</a>
            <a href="../Contact/contact.php" class="me-3 footer-link">Contact</a>
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
>>>>>>> 3bd65908f9e74b2dfcfb7bc9833e27dbbc632627
</html>