<?php
$installer = $this;
$installer->startSetup();
$installer->run("
ALTER TABLE `{$installer->getTable('sales/quote_payment')}` 
ADD `condition` VARCHAR( 255 ) NOT NULL;
  
ALTER TABLE `{$installer->getTable('sales/order_payment')}` 
ADD `condition` VARCHAR( 255 ) NOT NULL
");
$installer->endSetup();