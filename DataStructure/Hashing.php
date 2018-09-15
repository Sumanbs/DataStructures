<?php
include "LinkedList.php";
$ref[10] = new LinkedList();
for ($i = 0; $i < 11; $i++) {
    $ref[$i] = null;
}

$myfile = fopen("suman.txt", "r");
$a = array();

$contents = fread($myfile, filesize("suman.txt"));
$a = (explode(" ", $contents));

for ($i = 0; $i < count($a); $i++) {
    $rem = $a[$i] % 11;
    if ($a[$i] != "") {
        if ($ref[$rem] == null) {
            $ref[$rem] = new LinkedList();
            $ref[$rem]->insertlast($a[$i]);
        } else {
            $ref[$rem]->insertlast($a[$i]);
        }
    }
}
for ($i = 0; $i < count($ref); $i++) {
    if ($ref[$i] != null) {
        $ref[$i]->sort();
    }

}
for ($i = 0; $i < count($ref); $i++) {

    if ($ref[$i] != null && $ref[$i]->size() != 0) {
        echo " " . $i . "-";
        echo $ref[$i]->readList();
        echo "\n";
    } else {
        echo " " . $i . "- NULL\n";
    }
}
echo "\nEnter the search element : ";
$key = readline();
$rem1 = ($key) % 11;
if ($ref[$rem1] == null) {
    $ref[$rem1] = new LinkedList();
}

$n = $ref[$rem1]->deleteelement($key);

if ($n == 0) {
    echo "\nSearch element not found,so the element is added to the list and file\n";
    $ref[$rem1]->insertAt($key);
} else {
    echo "\nSearch element found,so the element is deleted from the list\n";
}
for ($i = 0; $i < count($ref); $i++) {

    if ($ref[$i] != null) {
        echo " " . $i . "-";
        echo $ref[$i]->readList();
        echo "\n";
    } else {
        echo " " . $i . "- NULL\n";
    }
}
$myfile = fopen("suman.txt", "w");
for ($i = 0; $i < count($ref); $i++) {
    if ($ref[$i] != null) {
        $ref[$i]->writehashing($myfile);
    }

}
