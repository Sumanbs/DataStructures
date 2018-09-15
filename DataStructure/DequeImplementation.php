<?php
include "Deque.php";
$ref = new Deque();

echo "Enter the String\n";
$str = readline();

for ($i=0; $i <strlen($str) ; $i++) { 
    //$ref->insertRear($str[$i]);
    $ref->insertFront($str[$i]);
}
//$ref->display();
$ref->palindromeCheck();
echo "\n";
?>
