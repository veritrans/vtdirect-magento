<?php
/**
 * Veritrans VT direct Permata virtual account form block
 *
 * @category   Mage
 * @package    Mage_Veritrans_Permatava_Block_Form
 * when Veritrans payment method is chosen, permatava/info.phtml template will be rendered at the right side, in progress bar.
 */
class Veritrans_Mandiribill_Block_Info extends Mage_Payment_Block_Info
{
    
    protected function _construct()
    {
        parent::_construct();
		$this->setInfoMessage( Mage::helper('mandiribill/data')->_getInfoTypeIsImage() == true ? 
		'<img src="'. $this->getSkinUrl('images/Veritrans.png'). '"/>' : '<b>'. Mage::helper('mandiribill/data')->_getTitle() . '</b>');
		$this->setPaymentMethodTitle( Mage::helper('mandiribill/data')->_getTitle() );
        $this->setTemplate('mandiribill/info.phtml');
    }
}
?>
