<?php
    require_once './google-api/vendor/autoload.php';
    
    $connect = mysqli_connect("db.sice.indiana.edu", "i494f21_team51", "my+sql=i494f21_team51", "i494f21_team51");

    if (!$connect) {
        die("Failed to connect to server: " . mysqli_connect_error());
    } else {
        
        $client = new Google_Client(['client_id' => $CLIENT_ID]);
        $payload = $client->verifyIdToken($id_token);

        if ($payload) {
            $userid = $payload['sub'];
            echo "connected";
            echo $username;
            $requestData = file_get_contents("php://input");
            var_dump($requestData);
    
            $object = json_decode($requestData);
            $var_name = mysqli_real_escape_string($connect, $object['name']);
            $var_email = mysqli_real_escape_string($connect, $object['email']);
    
            $sql = "INSERT INTO users (FirstName, Email) VALUES ('$var_name', $var_email)";
        } else {
            {echo "failed";}
        }


    }
?>