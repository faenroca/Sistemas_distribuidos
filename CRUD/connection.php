<?php

function connection(){
    $host="localhost";
    $user =  "id22188751_fabricio";
    $pass= "Code0019442*";
    
    $bd= "id22188751_crud";
    $connect = mysqli_connect($host,$user,$pass);
    mysqli_select_db($connect, $bd);
    return $connect;
};


?>