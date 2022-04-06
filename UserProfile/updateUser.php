<?php 

$connect = mysqli_connect("db.sice.indiana.edu", "i494f21_team51", "my+sql=i494f21_team51", "i494f21_team51");

if (!$connect) {
    die("Failed to connect to server: " . mysqli_connect_error());
} else {
    $street = mysqli_real_escape_string($connect, $_POST['street']);
    $city = mysqli_real_escape_string($connect, $_POST['city']);
    $zip = mysqli_real_escape_string($connect, $_POST['zip']);
    $state = mysqli_real_escape_string($connect, $_POST['state']);

    $sql = "UPDATE users (Street, City, State, Zip) VALUES ('$street', '$city', '$zip', '$state')";

    if (mysqli_query($connect, $sql)) 
        {echo '1 record added';}
    else 
        {die('sql error: ' . mysqli_error($connect));}

mysqli_close($connect);


}


?>