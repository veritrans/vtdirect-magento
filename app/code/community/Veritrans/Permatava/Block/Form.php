<?php
/**
 * Veritrans VT Direct permata virtual account form block
 *
 * @category   Mage
 * @package    Mage_Veritrans_Permatava_Block_Form
 * when Veritrans payment method is chosen, permatava/form.phtml template will be rendered through this class.
 */
class Veritrans_Permatava_Block_Form extends Mage_Payment_Block_Form
{
    
    protected function _construct()
    {
        parent::_construct();
		$this->setFormMessage(Mage::helper('permatava/data')->_getFormMessage());
        $this->setTemplate('permatava/form.phtml');
    }
}
?>