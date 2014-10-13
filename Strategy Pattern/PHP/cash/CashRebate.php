<?php

require_once 'CashBase.php';

class CashRebate extends CashBase
{
	private $_moneyRebate = 1;

	public function __construct($moneyRebate)
	{
		$this->_moneyRebate = $moneyRebate;
	}

	public function acceptCash($money)
	{
		return $money * $this->_moneyRebate;
	}
}