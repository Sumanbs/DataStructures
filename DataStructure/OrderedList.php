<?php
include "LinkedList.php";
$ref = new LinkedList();

$myfile = fopen("suman.txt", "r");
$a = array();

// while (!feof($myfile)) {
//     $str = $str . fgetc($myfile);
// }
$contents = fread($myfile, filesize("suman.txt"));
$a = (explode(" ", $contents));
for ($i = 0; $i < count($a) ; $i++) {
    if($a[$i]!="")
    {
        $ref->insertLast($a[$i]);
    }
}
$ref->sort();
$ref->readList();
echo "\nEnter the search element : ";
$key = readline();
$n = $ref->deleteelement($key);
if ($n == 0) {
    echo "\nSearch element not found,so the element is added to the list and file\n";
    $ref->insertAt($key);
} else {
    echo "\nSearch element found,so the element is deleted from the list\n";
}
$ref->readList();
$ref->writefile();
fclose($myfile);
