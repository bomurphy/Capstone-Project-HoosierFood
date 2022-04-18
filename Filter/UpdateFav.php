<?php
session_start();
$con = mysqli_connect("db.soic.indiana.edu", "i494f21_team51", "my+sql=i494f21_team51", "i494f21_team51");

if(isset($_POST['save_multicheckbox']))
{
    $Restlist = $_POST['Restlist'];
    foreach($Restlist as $restitems)
    {
        $query = "INSERT INTO FavRestaurant (restName) VALUES ('$restitems')";
        $query_run = mysqli_query($con, $query);
    }

    if($query_run)
    {
        $_SESSION['status'] = "Favorites Added";
        header("Location: filter.php");
    }
    else
    {
        $_SESSION['status'] = "Restaurant(s) already Selected";
        header("Location: filter.php");
    }
}
?> 