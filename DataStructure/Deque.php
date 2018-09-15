<?php
class Node
{
    public $data;
    public $next;
    public $prev;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
        $this->next = null;
    }
}
class Deque
{
    private $front;
    private $rear;
    private $size;

    public function __construct()
    {
        $front = null;
        $rear = null;
        $size=0;
       
    }
    public function insertRear($data)
    {
        $node = new Node($data);
        if($this->rear == null)
        {
            $this->rear = $node;
            $this->front = $node;
            $this->size++;
        }else{
            $node->prev = $this->rear;
            $this->rear->next = $node;
            $this->rear = $node;
            $this->size++;
        }
    }
    public function insertFront($data)
    {
        $node = new Node($data);
        if($this->rear == null)
        {
            $this->rear = $node;
            $this->front = $node;
            $this->size++;
        }else{
            $node->next = $this->front;
            $this->front->prev = $node;
            $this->front = $node;
            $this->size++;
        }
    }
    public function removeFront()
    {
        $data = 0;
        if($this->size==0)
        {
            echo "De-Queue is empty";
            return NULL;
        }
        else
        {
            $temp = $this->front;
            $data = $temp->data;
            $this->front =$this->front->next;
            
            if( $this->front==NULL)
            $this->rear == NULL;
            else
            {
                $this->front->prev=NULL;
            }
            $this->size--;
        }
        return $data;
    }
    public function palindromeCheck()
    {
        if($this->size==1)
        {
            echo "\nPAL";
            return;
        }
        else{
        for ($i=0; $i < $this->size; $i++) 
        { 
            if($this->removeFront() != $this->removelast())
            {
                echo "\nNot Pal";
               return;
            }
        }
        echo "\nPAL";
    }
    }
    public function isEmpty()
    {
        return $this->front == NULL;
    }
    public function size()
    {
        return $this->size;
    }
    public function removeLast()
    {
        $data = 0;
        if($this->size==0)
        {
            echo "De-Queue is empty";
            return NULL;
        }
        else
        {
            $temp = $this->rear;
            $data = $temp->data;
            $this->rear =$this->rear->prev;
            
            if( $this->rear==NULL)
            $this->front == NULL;
            else
            {
                $this->rear->next=NULL;
            }
            $this->size--;
        }
        return $data;
    }
    public function display()
    {
        $current = $this->front;
        while ($current != null) {
            echo $current->data . " ";
            $current = $current->next;
        }
    }
}

?>