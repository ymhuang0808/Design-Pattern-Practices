<?php
require_once "Operation.php";

class PlusOperation extends Operation
{
	public function getResult()
	{
		return $this->number1 + $this->number2;
	}
}