<?php 
if($_a=='rows'):
    $sql="select * from groupe_user";
    $ret=Db::rows($sql);
endif;
if($_a=='row'):
    $sql="select * from groupe_user where id=$id";
    $ret=Db::row($sql);
endif;
if($_a=='insert'):
    $sql="insert into groupe_user(lib) values('$lib')";
    $ret['id']=Db::execute($sql);
endif;
if($_a=='update'):
    $sql="update groupe_user set lib='$lib' where id=$id";
    Db::execute($sql);
endif;
if($_a=='delete'):
    $sql="delete from groupe_user where id=$id";
    Db::execute($sql);
endif;