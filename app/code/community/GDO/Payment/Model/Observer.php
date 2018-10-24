<?php

class GDO_Payment_Model_Observer
{

    public function paymentMethodIsActive(Varien_Event_Observer $observer)
    {
        $event = $observer->getEvent();
        $method = $event->getMethodInstance();
        $result = $event->getResult();
        $login = Mage::getSingleton('customer/session')->isLoggedIn();
        $customerGroupId = Mage::getSingleton('customer/session')->getCustomerGroupId();
//        var_dump($result);exit();
        if ($customerGroupId == 0) {
            //$isAvaible = get is_avaible from gdo_payment_filter where group_id =  $customerGroupId
            //$MethodID
            $isAvaible = true;
            // get Payment collection add filter($MethodID)
            if ($method->isAvailable && $isAvaible) {
                $result->isAvailable = true;
            }
        } else {
            $result->isAvailable = false;
        }
    }

}