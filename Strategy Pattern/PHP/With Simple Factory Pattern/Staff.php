<?php

require_once 'CashContext.php';

/**
 * Usage: php Staff.php TYPE ORIGINAL_PRICE
 * TYPE: normal, rebate, return
 * ORIGINAL_PRICE: original price
 * 
 * Example:
 * 	php Staff.php normal 1000
 */

if (sizeof($argv) != 3) {
	echo 'Argument error' . PHP_EOL;
	exit;
}

try {
	$cash = new CashContext($argv[1]);
	echo 'price = ' . $cash->getResult($argv[2]) . PHP_EOL;
} catch (Exception $e) {
	echo '>>> Error: ' . $e->getMessage() . PHP_EOL;
}
