<?php

class GDO_Payment_Block_Adminhtml_Payment extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
        $this->_controller = 'adminhtml_payment';
        $this->_blockGroup = 'gdopayment';
        $this->_headerText = Mage::helper('gdopayment')->__('GDO payment');
        $this->_addButtonLabel = Mage::helper('gdopayment')->__('Add New Payment');
        parent::__construct();
    }

}
