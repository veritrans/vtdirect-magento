<?php
/**
 * Veritrans VT direct cimbclicks form block
 *
 * @category   Mage
 * @package    Mage_Veritrans_Cimbclicks_Block_Form
 * when Veritrans payment method is chosen, vtvirtual/info.phtml template will be rendered at the right side, in progress bar.
 */
class Veritrans_Cimbclicks_Block_Info extends Mage_Payment_Block_Info
{
    
    protected function _construct()
    {
        parent::_construct();
		$this->setInfoMessage( Mage::helper('cimbclicks/data')->_getInfoTypeIsImage() == true ? 
		'<img src="'. $this->getSkinUrl('images/Veritrans.png'). '"/>' : '<b>'. Mage::helper('cimbclicks/data')->_getTitle() . '</b>');
		$this->setPaymentMethodTitle( Mage::helper('cimbclicks/data')->_getTitle() );
        $this->setTemplate('cimbclicks/info.phtml');
    }
}
?>
