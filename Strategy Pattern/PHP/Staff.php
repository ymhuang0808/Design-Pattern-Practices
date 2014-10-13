<?php

require_once 'CashContext.php';
require_once 'cash/CashBase.php';
require_once 'cash/CashNormal.php';
require_once 'cash/CashRebate.php';
require_once 'cash/CashReturn.php';

try {
	switch($argv[1]) {
		case 'normal':
			$cc = new CashContext(new CashNormal());
			break;
		case 'rebate':
			$cc = new CashContext(new CashRebate(0.8));
			break;

		case 'return':
			$cc = new CashContext(new CashReturn(300, 10));
			break;

		default:
			throw new Exception("Error: unknown type");
			break;
	}
	
	echo 'price = ' . $cc->getResult($argv[2]) . PHP_EOL;
} catch (Exception $e) {
	echo '>>> Error: ' . $e->getMessage() . PHP_EOL;
}