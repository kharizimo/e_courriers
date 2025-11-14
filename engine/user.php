<?php  
if($_a=='login'){
    $sql="select * from user where email='$email' and pwd='$pwd'";
    $st=$cn->query($sql);
    if($row=$st->fetch(PDO::FETCH_ASSOC)){
        $_SESSION['user-id']=$row['id'];
        $location='';
    }
    else{$location='login?err';}
}