<?php 
$cn=new PDO("mysql:host=localhost;dbname=test",'root','') ;
$st=$cn->query("select * from test");
$rows=$st->fetchAll(PDO::FETCH_NUM);
print_r($rows);
