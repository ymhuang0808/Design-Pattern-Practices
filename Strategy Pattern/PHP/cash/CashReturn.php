<?php

require_once 'CashBase.php';

class CashReturn extends CashBase
{
	private $_moneyCondition = 0;
	private $_moneyReturn = 0;

	public function __construct($moneyCondition, $moneyReturn)
	{
		$this->_moneyCondition = $moneyCondition;
		$this->_moneyReturn = $moneyReturn;
	}

	public function acceptCash($money)
	{
		$result = $money;

		if($money > $this->_moneyCondition) {
			return $result = $money - floor($money / $this->_moneyCondition) * $this->_moneyReturn;
		}

		return $result;
	}
}