<?php 
session_start();

require_once 'vendor/orchis/Db.php';
require_once 'vendor/orchis/Combo.php';

extract($_REQUEST);

$_c??='';
$_a??='';
$id??='0';
$_l??=null;

$init=json_decode(file_get_contents(__DIR__.'/init.json'),true);
$launch=$init['launch'];
Db::connect((object)$init[$launch]);