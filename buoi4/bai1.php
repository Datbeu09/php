<?php 
    $server ='localhost';
    $user='root';
    $password = '';

    $conn = new mysqLi($server ,$user ,$password );
    if($conn){
        mysqLi_query($conn, "SET NAMES 'utf8' ");
        echo "da ket noi";
    }
    
    $sql ="CREATE DATABASE  b5_mydb";

    if(mysqLi_query($conn, $sql)){
        echo "da ket noi";
    }
    else {
        echo" looi ket noi";
    }
    mysqLi_close($conn);
?>