<?php

require_once 'operation/PlusOperation.php';
require_once 'operation/SubOperation.php';
require_once 'operation/MultiOperation.php';
require_once 'operation/DivOperation.php';


class OperationFactory
{
	public static function createOperation($operationType)
	{
		switch($operationType) {
			case '+':
				$opt = new PlusOperation();
				break;

			case '-':
				$opt = new SubOperation();
				break;

			case 'x':
				$opt = new MultiOperation();
				break;

			case '/':
				$opt = new DivOperation();
				break;

			default:
				throw new Exception("Not found operation type");
		}

		return $opt;
	}
}