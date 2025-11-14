<?php 
require_once 'config.php';

if($_c=='logout'){
    session_destroy();
    header('location:/login');
}

$title = 'Dashboard';



$menu=[
    ['title'=>'Accueil','url'=>'/'],
    ['title'=>'Courriers','children'=> [
        ['title'=> 'Nouveau courrier','url'=> 'courrier-nouveau'],
        ['title'=> 'Courriers reçus','url'=> 'courrier-recu'],
        ['title'=> 'Courriers expédiés','url'=> 'courrier-expedie'],
    ]],
    ['title'=>'Classeur','url'=>'classeur'],
    ['title'=>'Utilisateurs','children'=>[
        ['title'=> 'Nouveau','url'=> 'user-form'],
        ['title'=> 'Liste','url'=> 'user-list'],
    ]],
    ['title'=>'Utilisateurs','children'=>[
        ['title'=> 'Nouveau','url'=> 'user-form'],
        ['title'=> 'Liste','url'=> 'user-list'],
    ]],
    ['title'=>'Service','url'=>'service'],

];


$url=is_file("pages/$_c.php")?"pages/$_c.php":"pages/404.php";
ob_start();require_once $url;
$content=ob_get_clean();

if($auth??true){
    if(isset($_SESSION["user-id"])){
        $sql="select user.*,service.lib service_lib from user join service on user.service_id=service.id where user.id={$_SESSION['user-id']}";
        $user=(object) $cn->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    else{
        header('location:login');
        exit;
    }
}

$url='components/sidebar.php';
$sidebar= '';
if(is_file($url)){
    ob_start();require_once $url;
    $sidebar=ob_get_clean();
}

$url='components/header.php';
$header= '';
if(is_file($url)){
    ob_start();require_once $url;
    $header=ob_get_clean();
}


require 'components/layout.php';