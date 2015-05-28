<?php
/**
 * Veritrans VT direct form block
 *
 * @category   Mage
 * @package    Mage_Veritrans_Vtdirect_Block_Form
 * @author     denny
 * when Veritrans payment method is chosen, vtdirect/info.phtml template will be rendered at the right side, in progress bar.
 */
class Veritrans_Vtdirect_Block_Info extends Mage_Payment_Block_Info
{
    
    protected function _construct()
    {
        parent::_construct();
	$this->setInfoMessage( Mage::helper('vtdirect/data')->_getInfoTypeIsImage() == true ? 
		'<img src="'. $this->getSkinUrl('images/Veritrans.png'). '"/>' : '<b>'. Mage::helper('vtdirect/data')->_getTitle() . '</b>');
	$this->setPaymentMethodTitle( Mage::helper('vtdirect/data')->_getTitle() );
        $this->setTemplate('vtdirect/info.phtml');
    }
}
?>
