<?php
/**
 * Veritrans Mandiriclickpay form block
 *
 * @category   Mage
 * @package    Mage_Veritrans_Mandiriclickpay_Block_Form
 * when Veritrans payment method is chosen, vtdirect/info.phtml template will be rendered at the right side, in progress bar.
 */
class Veritrans_Mandiriclickpay_Block_Info extends Mage_Payment_Block_Info
{
    
    protected function _construct()
    {
        parent::_construct();
	$this->setInfoMessage( Mage::helper('mandiriclickpay/data')->_getInfoTypeIsImage() == true ? 
		'<img src="'. $this->getSkinUrl('images/Veritrans.png'). '"/>' : '<b>'. Mage::helper('mandiriclickpay/data')->_getTitle() . '</b>');
	$this->setPaymentMethodTitle( Mage::helper('mandiriclickpay/data')->_getTitle() );
        $this->setTemplate('mandiriclickpay/info.phtml');
    }
}
?>
