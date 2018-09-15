<?php
class Stack
{
    static $stack1 = array();
    static $top = -1;
    public function push1($data)
    {
        Stack ::$top =(Stack ::$top)+1;
        Stack :: $stack1[Stack ::$top] = $data;
        //echo "\nStack element = " . Stack :: $stack1[Stack ::$top]; 
    }
    public function pop()
    {
        if (Stack :: $top == -1)
        {
            echo "\nStack is empty";
        }
        else{
          //  echo "\nPoped element =" .  Stack :: $stack1[Stack ::$top];
            Stack ::$top = Stack ::$top-1;
        }
    }
    public function size()
    {
        $val = Stack ::$top+1; 
        return $val;
    }
}
?>