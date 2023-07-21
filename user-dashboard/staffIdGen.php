<?php 
include "../connect.php";
function generateRandomID($length = 10) {
    $characters = '0123456789JKUAT';
    $id = '';

    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $id .= $characters[$index];
    }

    return $id;
}

// Generate a random ID with a length of 8 characters
// $randomID = generateRandomID(8);

// echo "Random ID: " . $randomID;

?>
