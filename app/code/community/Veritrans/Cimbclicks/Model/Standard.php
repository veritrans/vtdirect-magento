<?php
/**
 * Veritrans VT Direct virtual account Model Standard
 *
 * @category   Mage
 * @package    Mage_Veritrans_CimbclicksModel_Standard
 * this class is used after placing order, if the payment is Veritrans, this class will be called and link to redirectAction at Veritrans_Vtvirtual_PaymentController class
 */
class Veritrans_Cimbclicks_Model_Standard extends Mage_Payment_Model_Method_Abstract {
	protected $_code = 'cimbclicks';
	
	protected $_isInitializeNeeded      = true;
	protected $_canUseInternal          = true;
	protected $_canUseForMultishipping  = false;
	
	protected $_formBlockType = 'cimbclicks/form';
  protected $_infoBlockType = 'cimbclicks/info';
	
	// call to redirectAction function at Veritrans_Vtweb_PaymentController
	public function getOrderPlaceRedirectUrl() {
		return Mage::getUrl('cimbclicks/payment/redirect', array('_secure' => true));
	}
}
?>