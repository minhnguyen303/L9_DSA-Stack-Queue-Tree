<?php
include_once 'Node.php';

class Queue
{
    public $front;
    public $back;

    public function isEmpty()
    {
        return ($this->front == null);
    }

    public function enqueue($item)
    {
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->value = $item;
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
        $removedValue = $this->front->value;
        $this->front = $this->front->next;
        return $removedValue;
    }
}