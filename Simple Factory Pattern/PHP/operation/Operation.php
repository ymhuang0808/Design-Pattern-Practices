<?php

abstract class Operation
{
	protected $number1;
	protected $number2;

	public function setNumber1($num1)
	{
		$this->number1 = $num1;
	}

	public function setNumber2($num2)
	{
		$this->number2 = $num2;
	}

	abstract protected function getResult();
}