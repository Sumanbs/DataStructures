<?php
class Node
{
    public $data;
    public $next;

}
class Queue
{
    private $front = null;
    private $back = null;
    private $totalammount = 20000000;
    public function isEmpty()
    {
        return $this->front == null;
    }
 public function getInt()
    {
        $num = readline();
        if (filter_var($num, FILTER_VALIDATE_INT) && (preg_match('/[0-9]/', $num))) {
            return $num;
        } else {
            echo "enter valid number  \n";
            return $this->getInt();
        }
    }
   
    public function enqueue($name)
    {
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->data = $name;
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->front->data;
        echo "person name : " . $removedValue . "\n";
        echo "enter the operation 1: deposite , 2 : withdraw , 3 :check balance \n";
        $operation = $this->getInt();
        if ($operation == 1 || $operation == 2) {
            echo "enter the amount \n";
            $amount = $this->getInt();
        } else {
            $amount = 0;
        }

        $this->cash($amount, $operation);
        $this->front = $this->front->next;
    }
    public function cash($amount, $operation)
    {
        switch ($operation) {
            case 1:
                $this->totalammount = $this->totalammount + $amount;
                echo "Deposited " . $amount . " into bank \n";
                break;
            case 2:
                if ($amount <= $this->totalammount) {
                    $this->totalammount = $this->totalammount - $amount;
                    echo "Withdrawn " . $amount . " from bank \n";
                } else {
                    echo "Sorry no cash in bank ,see you next time \n";
                }

                break;
            default:
                echo "bank cash amount available is : " . $this->totalammount . "\n";
                break;
        }
    }
}