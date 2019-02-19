<?php

class Stack
{

	private $queueOne = [];
	private $queueTwo = [];

	public function push($value)
	{
		array_push($this->queueTwo, $value);
	}

	public function pop()
	{

		if (count($this->queueOne) < 0) {
			throw new Exception("Stack is empty!");
		}

		while (count($this->queueOne) > 0) {
			array_unshift($this->queueTwo, array_pop($this->queueOne));
		}

		$temp = $this->queueOne;
		$this->queueOne = $this->queueTwo;
		$this->queueTwo = $temp;

		return array_pop($this->queueOne);

	}
}


$stack = new Stack();

$stack->push(1);
$stack->push(3);
$stack->push(5);
$stack->push(7);
$stack->push(45);

 var_dump($stack->pop());
 var_dump($stack->pop());
 var_dump($stack->pop());
 var_dump($stack->pop());
 
 






