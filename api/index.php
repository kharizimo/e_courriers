<?php 
require '../init.php';

$url="{$_c}.php";
if(is_file($url)){
    require $url;
}
echo json_encode($ret??(object)[]);