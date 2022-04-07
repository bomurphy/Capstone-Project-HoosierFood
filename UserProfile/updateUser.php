<?php 

session_start();



$connect = mysqli_connect("db.sice.indiana.edu", "i494f21_team51", "my+sql=i494f21_team51", "i494f21_team51");

if (!$connect) {
    die("Failed to connect to server: " . mysqli_connect_error());
} else {



    $street = mysqli_real_escape_string($connect, $_POST['street']);
    $city = mysqli_real_escape_string($connect, $_POST['city']);
    $zip = mysqli_real_escape_string($connect, $_POST['zip']);
    $state = mysqli_real_escape_string($connect, $_POST['state']);
    $email = $_SESSION['useremail'];



    $sql = "UPDATE users SET Street='$street', City='$city', State='$state', Zip='$zip' WHERE Email='$email'";
    echo $sql;

    if (mysqli_query($connect, $sql)) 
        {echo '1 record added, Redirecting back to profile...';
        echo '<html>';
        echo "<script>
        function myFunction() {
            window.location.href = ''
        }

        setTimeout(myFunction, 2500)
        </script>"
        ;}
        
    else 
        {die('sql error: ' . mysqli_error($connect));}

mysqli_close($connect);


}


?>