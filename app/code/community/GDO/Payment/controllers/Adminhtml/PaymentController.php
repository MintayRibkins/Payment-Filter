<?php

class GDO_Payment_Adminhtml_PaymentController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->_addContent($this->getLayout()->createBlock('gdopayment/adminhtml_payment'));
        $this->renderLayout();
    }

    public function newAction()
    {

    }

    public function editAction()
    {

    }
}