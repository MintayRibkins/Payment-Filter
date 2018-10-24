<?php
//
///**
// * CMS block edit form container
// *
// * @category   Mage
// * @package    Mage_Adminhtml
// * @author      Magento Core Team <core@magentocommerce.com>
// */
//class GDO_Payment_Block_Adminhtml_Payment_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
//{
//    public function __construct()
//    {
//        $this->_objectId = 'block_id';
//        $this->_controller = 'cms_block';
//
//        parent::__construct();
//
//        $this->_updateButton('save', 'label', Mage::helper('cms')->__('Save Payment'));
//        $this->_updateButton('delete', 'label', Mage::helper('cms')->__('Delete Payment'));
//
//        $this->_addButton('saveandcontinue', array(
//            'label'     => Mage::helper('adminhtml')->__('Save and Continue Edit'),
//            'onclick'   => 'saveAndContinueEdit()',
//            'class'     => 'save',
//        ), -100);
//
//        $this->_formScripts[] = "
//            function toggleEditor() {
//                if (tinyMCE.getInstanceById('block_content') == null) {
//                    tinyMCE.execCommand('mceAddControl', false, 'block_content');
//                } else {
//                    tinyMCE.execCommand('mceRemoveControl', false, 'block_content');
//                }
//            }
//
//            function saveAndContinueEdit(){
//                editForm.submit($('edit_form').action+'back/edit/');
//            }
//        ";
//    }
//
//    /**
//     * Get edit form container header text
//     *
//     * @return string
//     */
//    public function getHeaderText()
//    {
//        if (Mage::registry('cms_block')->getId()) {
//            return Mage::helper('cms')->__("Edit Payment '%s'", $this->escapeHtml(Mage::registry('cms_block')->getTitle()));
//        }
//        else {
//            return Mage::helper('cms')->__('New Payment');
//        }
//    }
//
//}
