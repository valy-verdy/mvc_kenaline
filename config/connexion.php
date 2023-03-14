<?php

try{
$access=new pdo("mysql:host=localhost;dbname=kenaline;charset=utf8","root","");
//:charset=utf8 c'est lencodage pour pourvoir permettre les accent par exemple
//:localhost veutt dire que notre site n'est pas herbergé en ligne mais sur notre machine
$access->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}
catch(Exception $e){
    $e->getMessage();

}


?>