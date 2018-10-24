<?php

class GDO_Payment_Model_Method extends Mage_Payment_Model_Method_Abstract
{

    protected $_code = 'gdopayment';
    protected $_formBlockType = 'gdopayment/form';
    protected $_infoBlockType = 'gdopayment/info';


    public function validate()
    {

        $code = Mage::app()->getRequest()->getParam('secret_code');
        if($code != $this->getConfigData('secret_code')){
            Mage::throwException(Mage::helper('gdopayment')->__("This code doesn't work!"));
        }
        return parent::validate();
    }

}
