
<?php

    $hostname = 'localhost';
    $user = 'id21047599_localhost';
    $pword = 'Savannah#254';
    $db= 'id21047599_savagile';

 $conn = mysqli_connect($hostname,$user,$pword,$db );
    $mysqli= $conn;
     if(!$conn){
            echo  "unsuccessful" ; 
     }
     else{
   echo "successful";
     }
?>