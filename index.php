<?php
session_start();
require_once "./config.php";
require_once "./mvc/Bridge.php";
$myApp = new App();
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > TIME_OUT)) {
    unset($_SESSION['admin']);
}
$_SESSION['LAST_ACTIVITY'] = time();
// Function to get the client IP address
function get_client_ip(){
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
if(!isset($_SESSION["admin"])){
    if(!empty(session_id())){
        file_put_contents("counter.log",session_id().",".time().",".get_client_ip()."\r\n",FILE_APPEND);
    }
}
?>