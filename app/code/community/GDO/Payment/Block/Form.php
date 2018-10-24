<?php

class GDO_Payment_Block_Form extends Mage_Payment_Block_Form
{
    public function _construct()
    {
        parent::_construct();

        $this->setTemplate('gdopayment/form.phtml');
    }
}
