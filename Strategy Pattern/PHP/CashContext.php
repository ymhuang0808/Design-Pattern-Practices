<?php

require_once 'cash/CashBase.php';

class CashContext
{
	private $_cash;

	public function __construct($cash)
	{
		$this->_cash = $cash;
	}

	public function getResult($money)
	{
		return $this->_cash->acceptCash($money);
	}
}