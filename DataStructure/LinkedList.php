<?php
class ListNode
{
    public $data;
    public $next;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }

    public function readNode()
    {
        return $this->data;
    }
}
class LinkedList
{
    private $firstnode;
    private $lastnode;
    private $count;

    public function __construct()
    {
        $firstnode = null;
        $lastnode = null;
        $this->count = 0;
    }
    public function insertlast($data)
    {

        if ($this->firstnode == null && $this->lastnode == null) {
            $link = new ListNode($data);
            $this->firstnode = &$link;
            $this->lastnode = &$link;
            $this->count++;
        } else {
            $link = new ListNode($data);
            $this->lastnode->next = &$link;
            $link->next = null;
            $this->lastnode = &$link;
            $this->count++;
        }
    }
    public function deleteelement($key)
    {
        $current = $this->firstnode;
        $previous = $this->firstnode;
        if($this->firstnode == NULL)
        return 0;
        while ($current->data != $key) {
            if ($current->next == null) {
                return 0;
            } else {
                $previous = $current;
                $current = $current->next;
            }
        }
        if ($current == $this->firstnode) {
            if ($this->count == 1) {
                $this->lastnode = $this->firstnode;
            }
            $this->firstnode = $this->firstnode->next;
        } else {
            if ($this->lastnode == $current) {
                $this->lastnode = $previous;
            }
            $previous->next = $current->next;
        }
        $this->count--;
       return 1;
    }
    public function sort()
    {
        if ($this->firstnode !== null) {
            if ($this->firstnode->next !== null) {
                for ($i = 0; $i < $this->count; $i++) {
                    $temp = null;
                    $current = $this->firstnode;
                    while ($current !== null) {
                        if ($current->next !== null && $current->data > $current->next->data) {
                            $temp = $current->data;
                            $current->data = $current->next->data;
                            $current->next->data = $temp;
                        }
                        $current = $current->next;
                    }
                }
            }
        }
    }
    public function insertAt($data1)
    {
        $link = new ListNode($data1);
        $temp=$prev = $this->firstnode; 
        while($temp!=Null && ($temp->data) < $data1){
            $prev = $temp;
            $temp = $temp->next;
        }
        if($this->firstnode == $temp)
        {
            $link->next = $this->firstnode;
            $this->firstnode = &$link;
        }
        else if($temp!=Null)
        {
            $prev->next = &$link;
        }
        else
        {
        $link->next =  $prev->next;
        $prev->next = $link;
        }
        $this->count++;

    }

    public function readList()
    {

        $current = $this->firstnode;
        while ($current != null) {
            echo $current->data . " ";
            $current = $current->next;
        }
    }

    public function writefile()
    {
        $myfile = fopen("suman.txt", "w");
        $current = $this->firstnode;
        while ($current != null) {
            fwrite($myfile, $current->data);
            fwrite($myfile," ");
            $current = $current->next;
        }
        fclose($myfile);
    }
    public function writehashing($myfile)
    {
        //$myfile = fopen("suman.txt", "w");
        $current = $this->firstnode;
        while ($current != NULL) {
            fwrite($myfile, $current->data);
            fwrite($myfile," ");
            $current = $current->next;
        }
        
    }
    public function size()
    {
        return $this->count;
    }
}
