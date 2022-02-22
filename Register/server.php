<?php

$con = mysqli_connect("db.luddy.indiana.edu", "i494f21_team51", "my+sql=i494f21_team51", "i494f21_team51");

if (!con) {
	die("Failed to connect to MySQL: " . mysqli_connect_error());
} else
	{echo "Established Database Connection";}
?>