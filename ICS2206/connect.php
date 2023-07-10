

    $hostname = 'https://8b7b-102-215-76-91.ngrok-free.app';
    $user = 'root';
    $pword = '';
    $db= 'users';

 $conn = mysqli_connect($hostname,$user,$pword,$db );
    $mysqli= $conn;
     if(!$conn){
            echo  "unsuccessful" ; 
     }
