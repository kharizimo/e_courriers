<?php 
require 'init.php';

$_c=$_c?:'index';

$_content='';
$_layout='layout';
$title='Dashboard';

$url="view/contents/$_c.php";
if(is_file($url)){
    ob_start();require $url;
    $_content=ob_get_clean();
}

if(in_array($_c,['login'])){
    $_layout=$_c;
}
require "view/pages/$_layout.php";