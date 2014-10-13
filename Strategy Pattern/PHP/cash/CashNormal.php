<?php

require_once 'CashBase.php';

class CashNormal extends CashBase
{
	public function acceptCash($money)
	{
		return $money;
	}
}