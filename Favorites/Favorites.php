<?php


if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    $query = "SELECT * FROM `favorites`, `restaurants` WHERE (`userID`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);   
}

 else {
    $query = "SELECT * FROM `favorites`";
    $search_result = filterTable($query);
}

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
        <title>Favorites</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
		<h2>Favorites</h2>
		
		<p>Type your userID</p>
		<br>
        <form action="Favorites.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Favorites"><br><br>
            
            <table>
                <tr>
                    <th>UserID</th>
                    <th>restaurantID</th>
                    <th>UserLocation</th>
					<th>Distance</th>
					<th>Restaurant Name</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['userID'];?></td>
                    <td><?php echo $row['restaurantID'];?></td>
                    <td><?php echo $row['UserLocation'];?></td>
                    <td><?php echo $row['distance'];?></td>
					<td><?php echo $row['RestaurantName'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>

