<?php
/**
 * Veritrans Mandrici Clickpay form block
 *
 * @category   Mage
 * @package    Mage_Veritrans_Mandiriclickpay_Block_Form
 * when Veritrans payment method is chosen, vtdirect/form.phtml template will be rendered through this class.
 */
class Veritrans_Mandiriclickpay_Block_Form extends Mage_Payment_Block_Form
{
    
    protected function _construct()
    {
        parent::_construct();
	$this->setFormMessage(Mage::helper('mandiriclickpay/data')->_getFormMessage());
        $this->setTemplate('mandiriclickpay/form.phtml');
    }
}
?>