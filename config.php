<?php 
session_start();
$db_name='e_courrier';$db_host='localhost';
$param=(object)[
    "dsn"=> "mysql:host=$db_host;dbname=$db_name",
    "user"=> "root",
    "pwd"=> "",
];

try{
    $cn=new PDO($param->dsn, $param->user, $param->pwd);
}catch (Exception $e) {
    echo $e->getMessage();
}

extract($_REQUEST);
$_c??='index';
$_a??='';
$_q??='';
$id??='0';