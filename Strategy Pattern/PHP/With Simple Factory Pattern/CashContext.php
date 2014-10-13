<?php

require_once '../cash/CashBase.php';
require_once '../cash/CashNormal.php';
require_once '../cash/CashRebate.php';
require_once '../cash/CashReturn.php';

class CashContext
{
	private $_cash;

	public function CashContext($type) 
	{
		switch($type) {
			case 'normal':
				$this->_cash = new CashNormal();
				break;

			case 'rebate':
				$this->_cash = new CashRebate(0.8);
				break;

			case 'return':
				$this->_cash = new CashReturn(300, 10);
				break;

			default:
				throw new Exception("Error: unknown type");
				break;
		}
	}

	public function getResult($money)
	{
		return $this->_cash->acceptCash($money);
	}
}