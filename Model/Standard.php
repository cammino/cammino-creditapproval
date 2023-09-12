<?php
class Cammino_Creditapproval_Model_Standard extends Mage_Payment_Model_Method_Abstract {

    protected $_code = 'cammino_creditapproval';
    protected $_formBlockType = 'cammino_creditapproval/form_creditapproval';
    protected $_infoBlockType = 'cammino_creditapproval/info_creditapproval';

    public function assignData($data)
    {
        $info = $this->getInfoInstance();
        if ($data->getCondition())
        {
            $info->setCondition($data->getCondition());
        }

        return $this;
    }

    public function validate()
    {
        parent::validate();
        $info = $this->getInfoInstance();
        if (!$info->getCondition())
        {
            $errorCode = 'invalid_data';
            $errorMsg = $this->_getHelper()->__("Condição é um campo obrigatório!");
        }

        if ($errorMsg) 
        {
            Mage::throwException($errorMsg);
        }

        return $this;
    }
}