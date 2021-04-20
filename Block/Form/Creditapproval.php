<?php
class Cammino_Creditapproval_Block_Form_Creditapproval extends Mage_Payment_Block_Form
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('creditapproval/form/creditapproval.phtml');
    }
}