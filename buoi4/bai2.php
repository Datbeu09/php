<?php 
    $server ='localhost';
    $user='root';
    $password = '';
    $db = 'b5_mydb';

    $conn = new mysqLi($server ,$user ,$password ,$db );
    if($conn){
        mysqLi_query($conn, "SET NAMES 'utf8' ");
        echo "da ket noi";
    }
    
    $sql ="CREATE TABLE  MyGyests(
        id INT(6)  UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    
    )";

    if(mysqLi_query($conn, $sql)){
        echo "da ket noi";
    }
    else {
        echo" loi ket noi";
    }
    mysqLi_close($conn);
?>