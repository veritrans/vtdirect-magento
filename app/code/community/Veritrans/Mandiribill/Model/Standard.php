<?php
/**
 * Veritrans VT Direct permata virtual account Model Standard
 *
 * @category   Mage
 * @package    Mage_Veritrans_Mandiribill_Model_Standard
 * this class is used after placing order, if the payment is Veritrans, this class will be called and link to redirectAction at Veritrans_Permatava_PaymentController class
 */
class Veritrans_Mandiribill_Model_Standard extends Mage_Payment_Model_Method_Abstract {
	protected $_code = 'mandiribill';
	
	protected $_isInitializeNeeded      = true;
	protected $_canUseInternal          = true;
	protected $_canUseForMultishipping  = false;
	
	protected $_formBlockType = 'mandiribill/form';
  	protected $_infoBlockType = 'mandiribill/info';
	
	// call to redirectAction function at Veritrans_Permatava_PaymentController
	public function getOrderPlaceRedirectUrl() {
		return Mage::getUrl('mandiribill/payment/redirect', array('_secure' => true));
	}
}
?>