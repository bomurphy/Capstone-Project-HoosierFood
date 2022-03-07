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
    $query = "SELECT * FROM `filter`";
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
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
		<h2> Food Types</h2>
		
		<table>
                <tr>
                    <th>Pizza</th>
                    <th>Wings</th>
                    <th>Fast Food</th>
                    <th>Bar & Grill</th>
					<th>Mexican Food</th>
                    <th>Indian Food</th>
                    <th>Chinese Food</th>
                    <th>Sweets</th>
					<th>Breakfast/Brunch</th>
                    <th>Thai Food</th>
                    <th>Italian</th>
                </tr>
		</table>
		<br>
		<br>
        <form action="filter.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Food Type</th>
                    <th>Restaurant Food</th>
                    <th>Picture</th>
                    <th>Phone Number</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['type'];?></td>
                    <td><?php echo $row['RestaurantName'];?></td>
                    <td><?php echo $row['PictureURL'];?></td>
                    <td><?php echo $row['PhoneNum'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
