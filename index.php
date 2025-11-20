<?php 
require_once 'config.php';
require_once 'components/modal.php';

if($_c=='logout'){
    session_destroy();
    header('location:/login');
}

$title = 'Dashboard';



$menu=[
    ['title'=>'Accueil','url'=>'/'],
    ['title'=>'Courriers','children'=> [
        ['title'=> 'Nouveau courrier','url'=> 'courrier-form'],
        ['title'=> 'Mes Courriers','url'=> 'courrier-list'],
    ]],
    ['title'=>'Recherche','url'=>'search'],
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

if(isset($_SESSION["user-id"])){
    $sql="select user.*,service.lib service_lib from user join service on user.service_id=service.id where user.id={$_SESSION['user-id']}";
    $user=(object) $cn->query($sql)->fetch(PDO::FETCH_ASSOC);
}


$url=is_file("pages/$_c.php")?"pages/$_c.php":"pages/404.php";
ob_start();require_once $url;
$content=ob_get_clean();

$auth??=true;
if($auth && !isset($_SESSION["user-id"])){
    header('location:login');
    exit;
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