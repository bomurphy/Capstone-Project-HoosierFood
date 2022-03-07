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