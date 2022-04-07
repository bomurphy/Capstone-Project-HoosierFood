<?php
    require_once './google-api/vendor/autoload.php';
    
    $connect = mysqli_connect("db.sice.indiana.edu", "i494f21_team51", "my+sql=i494f21_team51", "i494f21_team51");

    if (!$connect) {
        die("Failed to connect to server: " . mysqli_connect_error());
    } else {
        $CLIENT_ID="1027531663911-al3p7o7qrb5eqdpq6j3ea1mn63tvg5jc.apps.googleusercontent.com";
        $id_token=$_POST['idtoken'];
        //echo $id_token;
        $client = new Google_Client(['client_id' => $CLIENT_ID]);
        $payload = $client->verifyIdToken($id_token);

        if ($payload) {
            $userid = $payload['sub'];
            //echo "connected";
            $email = $payload['email'];
            $firstname = $payload['given_name'];
            $lastname=$payload['family_name'];
            $_SESSION['user-email']=$email;
            //$requestData = file_get_contents("php://input");
            //var_dump($requestData);
    
            //$object = json_decode($requestData);
            //$var_name = mysqli_real_escape_string($connect, $object['name']);
            //$var_email = mysqli_real_escape_string($connect, $object['email']);
    
            $sql = "INSERT INTO users(FirstName, LastName, Street, City, State, Zip, Email) VALUES ('$firstname','$lastname','indiana street','Bloomington','IN','47401','$email')";
            //echo $sql;
            if($connect->query($sql)==TRUE){
                echo "User Inserted into DB";

            }
            else{
                echo "Error".$connect->error;
            }
        } else {
            {echo "failed";}
        }


    }
?>