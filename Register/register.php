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
    <link rel="stylesheet" href="register.css" >
    
    <title>Registration Page</title>
	
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
              <button class="signOutBtn login hide">Sign Out</button></button>
          </form>
          </div>
        </div>
      </nav>
	  
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Registration Form</h2>
                    </div>
         
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="FirstName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="LastName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Street</label>
                            <input type="text" name="Street" class="form-control">
                        </div>
						<div class="form-group">
                            <label>City</label>
                            <input type="text" name="City" class="form-control">
                        </div>
						<div class="form-group">
                            <label>State</label>
                            <select>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>				
		
                        </div>
						<div class="form-group">
                            <label>Zip</label>
                            <input type="text" name="Zip" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Email</label>
                            <input type="text" name="Email" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
										
						
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
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