<?php

require_once 'Operation.php';

class DivOperation extends Operation
{
	public function getResult()
	{
		return $this->number1 / $this->number2;
	}
}