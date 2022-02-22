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
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>