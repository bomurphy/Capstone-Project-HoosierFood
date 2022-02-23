<?php

if(isset($_POST['search']))
{


}

else{
	$query = "SELECT * FROM 'filter'";
	$search_result = filterTable($query);
}

function filterTable($query)
{
	$connect = mysqli_connect("db.soic.indiana.edu", "i494f21_team51", "my+sql=i494f21_team51", "i494f21_team51");
	$filterResult = mysqli_query($connect,$query);
	return $filterResult;
}

?>


<!DOCTYPE HTML>

<html>
	<head>

		<title>Filter</title>

	</head>

	<body>

		<form>
			<input type="text" name="valueToSearch" placeholder="Type a Value"><br><br>
			<input type="text" name="search" value="Filter"><br><br>

			<table>

				<tr>
					<th>ID</th>
					<th>Restaurant Name</th>
					<th>Picture</th>
					<th>Phone Number</th>
				</tr>
				<?php while($row = mysqli_fetch_array($search_result)):?>
					<tr>
						<td><?php echo $row['restaurantID'];?></td>
						<td><?php echo $row['RestaurantName'];?></td>
						<td><?php echo $row['PictureURL'];?></td>
						<td><?php echo $row['PhoneNum'];?></td>
					</tr>
				<?php endwhile;?>
			</table>

		</form>

	</body>
</html>