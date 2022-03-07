 <!-- <?php 
    // $connect = mysqli_connect("db.soic.indiana.edu", "i494f21_team51", "my+sql=i494f21_team51", "i494f21_team51");

    // if (!$connect) {
    //     die ("failed to connect" . mysqli_connect_error());
    // } else {
    //     {echo "connection made" . "<br>";}

    //     $sql = "SELECT * FROM menus";

    //     $result = $con->query($sql);

    //     if (mysqli_num_rows($result) > 0) {
    //         echo "<table>";
    //         echo "<tr><th>Restaurant</th><th>URL</th></tr>";

    //         while ($row = $result->fetch_assoc()) {
    //             echo "<tr><td>".$row['RestaurantName']."</td><td>".$row['menuURL']."</td></tr>";
    //         }

    //         echo "</table>";
    //     } else {
    //         echo "0 results <br>";
    //     }

    // }
?> -->

<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `filter` WHERE (`type`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `menus`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("db.soic.indiana.edu", "i494f21_team51", "my+sql=i494f21_team51", "i494f21_team51");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Menu</title>
        <meta name="google-signin-client_id" 
        content="1027531663911-al3p7o7qrb5eqdpq6j3ea1mn63tvg5jc.apps.googleusercontent.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body {
                background-color: beige;
            }
        </style>
    </head>
    <body>
    nav class="navbar navbar-expand-lg p-2 border-bottom nav-background">
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
                <a class="nav-link red-text" href="#" tabindex="-1" aria-disabled="true">Support</a>
              </li>
            </ul>
            <!-- <form class="d-flex">
              <button class="btn btn-outline-danger me-1">Login</button>
              <button class="btn btn-outline-danger" type="submit">Register</button>
            </form> -->
            <form action="" class="d-flex">
              <a href='../UserProfile/user-profile.html' class="user"></a>
                <!-- <button id="login-btn" class="login me-2">Login</button>
                
                <a href="https://cgi.luddy.indiana.edu/~team51/Register/register.php" id="register-btn" class="login">Register</button></a>
                <button class="signOutBtn login hide">Sign Out</button> -->
                <a href="#" onclick="signOut();"><button class="login signOutBtn">Sign Out</button></a>
            </form>
          </div>
        </div>
      </nav>
		<h2>Menu</h2>
		
		<table>
                <tr>
                    <th>Restaurant</th>
                    <th>Menu URL</th>
                </tr>
		</table>
		<br>
		<br>
        <form action="menu.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['RestaurantName'];?></td>
                    <td><?php
                        $HTML = "<a href=".$row['menuURL'].">".$row['menuURL']."</a>";
                        echo $HTML;
                    ?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
        <script src="https://apis.google.com/js/platform.js" async defer></script> 
    <!--adding bootstrap and jQuery extentions-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </body>
</html>
