<?php
/**
 * Veritrans VT Direct virtual account form block
 *
 * @category   Mage
 * @package    Mage_Veritrans_Cimbclicks_Block_Form
 * when Veritrans payment method is chosen, vtvirtual/form.phtml template will be rendered through this class.
 */
class Veritrans_Cimbclicks_Block_Form extends Mage_Payment_Block_Form
{
    
    protected function _construct()
    {
        parent::_construct();
		$this->setFormMessage(Mage::helper('cimbclicks/data')->_getFormMessage());
        $this->setTemplate('cimbclicks/form.phtml');
    }
}
?>