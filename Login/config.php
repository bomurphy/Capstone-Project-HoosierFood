<?php 
    require_once('google-api/vendor/autoload.php');
    $gClient = new Google_Client();
    $gClient->setClientID('
    1027531663911-al3p7o7qrb5eqdpq6j3ea1mn63tvg5jc.apps.googleusercontent.com');
    $gClient->setClientSecret('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');
    $gClient->setApplicationName('Hoosier Restaurant');
    $gClient->setRedirectUri('https://localhost:5500');
    $gClient->setScope('https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email');

    $login_url = $gClient->createAuthUrl();
?>