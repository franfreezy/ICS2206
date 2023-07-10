
<?
    $hostname = 'localhost';
    $user = 'root';
    $pword = '';
    $db= 'savannah_agile';

 $conn = mysqli_connect($hostname,$user,$pword,$db );
    $mysqli= $conn;
     if(!$conn){
            echo  "unsuccessful" ; 
     }
     else{
   echo "successful";
     }
?>