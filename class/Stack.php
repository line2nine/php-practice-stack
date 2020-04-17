<?php


class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 5)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($data)
    {
        if (count($this->stack) < $this->limit){
            array_unshift($this->stack, $data);
        } else {
            throw new RuntimeException("Stack is full now");
        }
    }

    public function pop()
    {
        if ($this->isEmpty()){
            throw new RuntimeException("Stack is empty");
        } else {
            array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}