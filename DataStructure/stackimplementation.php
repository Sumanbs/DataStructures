<?php
include "stack.php";

$ref = new Stack();

echo "Enter the expression\n";
$str = readline();
$flag =1;

for ($i=0; $i < strlen($str); $i++) { 
    if($str[$i]=="(")
    {
        $ref->push1("(");   
    }
    else if($str[$i]==")")
    {
        $size = $ref->size();
        if($size==0)
        {
            $flag=0;
            break;
        }
        else
        {
            $ref->pop();
        }
    }
}
if($flag == 1)
{
    if($ref->size()==0)
    {
        echo "\nExpression is balanced\n";
    }
    else{
        echo "\nExpression is not balanced\n";
    }
}else{
    echo "\nExpression is not balanced\n";
}

echo "\n";
?>