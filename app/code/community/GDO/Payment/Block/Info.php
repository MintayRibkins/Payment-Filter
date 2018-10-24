<?php

class GDO_Payment_Block_Info extends Mage_Payment_Block_Info
{
    public function _construct()
    {
        parent::_construct();

        $this->setTemplate('gdopayment/info.phtml');
    }
}
