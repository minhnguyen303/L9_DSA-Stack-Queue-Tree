<?php

class Stack
{
    public $stack;
    protected $limit;

    public function __construct($limit = 0)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit)
            array_unshift($this->stack, $item);
        else
            echo "Stack is full!";
    }

    public function pop()
    {
        array_shift($this->stack);
    }

    public function top()
    {
        $length = count($this->stack);
        return $this->stack[$length - 1];
    }

    public function isEmpty()
    {
        return ($this->stack == null);
    }
}