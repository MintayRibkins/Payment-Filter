<?php

class GDO_Payment_Model_Resource_Block extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('gdopayment/block', 'block_id');
    }

}