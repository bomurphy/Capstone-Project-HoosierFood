<?php
$con = mysqli_connect("db.luddy.indiana.edu", "i494f21_fmcsween", "my+sql=i494f21_fmcsween", "i494f21_fmcsween");

if (!con) {
	die("Failed to connect to MySQL: " . mysqli_connect_error());
} else
	{echo "Established Database Connection";}
?>