<?php
/**
 * Veritrans VT Direct form block
 *
 * @category   Mage
 * @package    Mage_Veritrans_Vtdirect_Block_Form
 * when Veritrans payment method is chosen, vtdirect/form.phtml template will be rendered through this class.
 */
class Veritrans_Vtdirect_Block_Form extends Mage_Payment_Block_Form
{
    
    protected function _construct()
    {
        parent::_construct();
	$this->setFormMessage(Mage::helper('vtdirect/data')->_getFormMessage());
        $this->setTemplate('vtdirect/form.phtml');
    }

}
?>