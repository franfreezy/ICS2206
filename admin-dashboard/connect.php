
<?php



 $conn = mysqli_connect($hostname,$user,$pword,$db );
    $mysqli= $conn;
     if(!$conn){
            echo  "unsuccessful" ; 
     }
     else{
   echo "successful";
     }
?>