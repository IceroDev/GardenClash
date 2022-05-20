<?php
function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }

    return $ip;
}
$apikey = $_GET["apikey"];
if ($apikey == "77T2kdH2T734pJ6jZS6QdcGjb") {
    $user_ip = getUserIP();
    $link = "http://ip-api.com/json/" . $user_ip . "?fields=18083839";
    $entry = $_GET["name"];
    
    $json = json_decode(file_get_contents($link), true);
    $myfile = fopen("last_ip.txt", "r") or die("Unable to open file!");
    if ($user_ip == fread($myfile, filesize("last_ip.txt"))) {
        fclose($myfile);
	header('Location: https://gardenclash.staffe.net');
    } else {
        file_put_contents("last_ip.txt", $user_ip);
        fclose($myfile);
        file_put_contents("last_name.txt", $entry);
        file_put_contents("last_country.txt", $json['country']);
	header('Location: https://gardenclash.staffe.net');
    }
}
if ($apikey == "") {
    $user_ip = getUserIP();
    $link = "http://ip-api.com/json/" . $user_ip . "?fields=18083839";
    $entry = $_GET["name"];
    
    $json = json_decode(file_get_contents($link), true);
    file_put_contents("last_name.txt", $entry);
    file_put_contents("last_country.txt", $json['country']);
    header('Location: https://gardenclash.staffe.net');
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>API</title>
</head>

<body>
</body>

</html>
