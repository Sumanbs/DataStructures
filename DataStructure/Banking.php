<?php
include "Queue.php";
$queue = new Queue();
echo "Enter the Number of people in th Queue \n";
$size=readline();
for ($i=1; $i <=$size; $i++) { 
    echo "Enter ".$i. "st person Name  \n";
    $people =readline();
    $queue->enqueue($people);
}
while(!$queue->isEmpty())
{
      $queue->dequeue();
}
echo "Cash counter closed \n";
?>