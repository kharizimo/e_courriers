<?php 
require_once '../config.php';

$location=null;
$url="$_c.php";
if(is_file($url)){
    require_once $url;
    if(!is_null($location)){
        header("location:/$location");
        exit;
    }
}
else{http_response_code(404);}