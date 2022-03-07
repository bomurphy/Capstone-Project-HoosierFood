<?php
    require_once 'vendor/autoload.php';
    
    $connect = mysqli_connect("db.soic.indiana.edu", "i494f21_team51", "my+sql=i494f21_team51", "i494f21_team51");

    if (!$con) {
        die("Failed to connect to server: " .mysqli_connect_error());
    } else {
        {echo "Connected to server";}
        
        $client = new Google_Client(['client_id' => $CLIENT_ID]);
        $payload = $client->verifyIdToken($id_token);

        if ($payload) {
            $userid = $payload['sub'];
            {echo "connected";}
            {echo $userid;}
        } else {
            {echo "failed";}
        }


        // $requestData = file_get_contents("php://input");
        // var_dump($requestData);

        // $object = json_decode($requestData);
        // $var_name = mysqli_real_escape_string($connect, $_POST['name']);
        // $var_email = mysqli_real_escape_string($connect, $_POST['email']);

        // $sql = "INSERT INTO users (FirstName, Email) VALUES ('$var_name', $var_email)";
    }
?>