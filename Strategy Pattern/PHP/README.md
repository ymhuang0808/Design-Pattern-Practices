Strategy Pattern for PHP
==============================

* strategy class in cash/
  - *CashBase.php* is for different strategies and algorithm interface *acceptCash()*
  - *CashNormal.php* implements normal price calculation.

* CashContext.php
  - packages different price calculation classes

* Staff.php
  - client program