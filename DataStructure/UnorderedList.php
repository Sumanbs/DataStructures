<?php
include "LinkedList.php";
$ref = new LinkedList();

$myfile = fopen("suman.txt", "r");
$a = array();
$str = "";
while (!feof($myfile)) {
    $str = $str . fgetc($myfile);
}
$a = (explode(" ", $str));
for ($i = 0; $i < count($a); $i++) {
    if($a[$i]!=""){
    $ref->insertLast($a[$i]);
    }
}
$ref->readList();
echo "\nEnter the search element : ";
$key = readline();
$n = $ref->deleteelement($key);
if ($n == 0) {
    echo "\nSearch element not found,so the element is added to the list and file\n";
    $ref->insertLast($key);
} else {
    echo "\nSearch element found,so the element is deleted from the list\n";
}
$ref->readList();
$ref->writefile();
fclose($myfile);
