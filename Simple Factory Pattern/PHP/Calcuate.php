<?php

require_once 'OperationFactory.php';

/**
 * Usage: php Calculate.php NUM1 OPT NUM2
 * 	NUM1: number1
 * 	OPT: operation string (+, -, x, /)
 * 	NUM2: number2
 *
 * Example:
 * 	php Calculate.php 1 + 2
 */

if (sizeof($argv) != 4) {
	echo 'Argument error';
	exit;
}

try {
	$oper = OperationFactory::createOperation($argv[2]);
	$oper->setNumber1($argv[1]);
	$oper->setNumber2($argv[3]);
	echo 'sum = ' . $oper->getResult() . PHP_EOL;
} catch (Exception $e) {
	echo '>>> Error: ' . $e->getMessage() . PHP_EOL;
}