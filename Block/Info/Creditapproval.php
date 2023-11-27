<?php
class Cammino_Creditapproval_Block_Info_Creditapproval extends Mage_Payment_Block_Info
{
    protected function _prepareSpecificInformation($transport = null)
    {
        if (null !== $this->_paymentSpecificInformation) 
        {
            return $this->_paymentSpecificInformation;
        }

        $data = array();

        Mage::log($this->getInfo()->getCondition(), null, 'creditapproval.log');
        if ($this->getInfo()->getCondition()) 
        {
          $data['Condição'] = $this->getInfo()->getCondition();
        }
 

        $transport = parent::_prepareSpecificInformation($transport);

        return $transport->setData(array_merge($data, $transport->getData()));
    }
}