<?php 
    $connect = mysqli_connect("db.soic.indiana.edu", "i494f21_team51", "my+sql=i494f21_team51", "i494f21_team51");

    if (!$connect) {
        die ("failed to connect" . mysqli_connect_error());
    } else {
        {echo "connection made" . "<br>";}

        $sql = "SELECT RestaurantName, menuURL FROM menus";

        $result = $con->query($sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>Restaurant</th><th>URL</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row['RestaurantName']."</td><td>".$row['menuURL']."</td></tr>";
            }

            echo "</table>";
        } else {
            echo "0 results <br>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <div class="">
        <table>
            <tr>
                <td>Restaurant</td>
                <td>URL</td>
            </tr>
            <?php while ($row = $result->fetch_assoc()):?>
            <tr>
                <td><?php echo $row['RestaurantName'];?></td>
                <td><?php echo $row['menuURL'];?></td>
            </tr>
            <?php endwhile;?>
        </table>
    </div>
</body>
</html>