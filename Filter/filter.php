<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
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
        <title>FilterFeature</title>
        <style>
			H1 
			{ 
				text-align: center;
				color: #990000;
				
			}
			
			 table,tr
            {
                border: 1px solid black;
				width: 98%;
				border-collapse: collapse;
				margin:20px;				
            }
			
			#FoodCategories th 
			{
				background-color: #990000;
				color: beige;
				padding: 15px;
				border: 2px solid black;
			}
			
			#dataTable th
			{
				border: 3px solid;
				border-color: black;
				color: beige;
				background-color: #990000;
				
			}
			
			#dataTable td {
				text-align: left;
				border: 1px solid;
				border-color: black;
				color: beige;
				background-color: #990000;
				padding: 8px;
			}
			
			p {
				color: black;
				font-weight: bold;
				text-transform: uppercase;
				margin-left:20px;
				color: #990000;
			}
			
			#Value {
				margin-left:20px;
			}
		
			#Click  {
				margin-left:20px;
				margin-top:10px;
			}
			
        </style>
    </head>
    <body style= "background-color:beige;">
        
		<h1> Food Types </h1>
		
		<table id="FoodCategories">
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
        <form action="filter.php" method="post">
            <input id="Value" type="text" name="valueToSearch" placeholder="Food Type Search"><br>
            <input id="Click" type="submit" name="search" value="Filter">
			
			<p>Click Filter button for All Restaurants</p>
            
            <table id="dataTable">
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