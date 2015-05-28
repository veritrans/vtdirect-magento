<?php
/**
 * Veritrans VT Direct Model Standard
 *
 * @category   Mage
 * @package    Mage_Veritrans_Vtdirect_Model_Standard
 * @author     denny
 * this class is used after placing order, if the payment is Veritrans, this class will be called and link to redirectAction at Veritrans_Vtdirect_PaymentController class
 */
class Veritrans_Vtdirect_Model_Standard extends Mage_Payment_Model_Method_Abstract {
	protected $_code = 'vtdirect';
	
	protected $_isInitializeNeeded      = true;
	protected $_canUseInternal          = true;
	protected $_canUseForMultishipping  = false;
	
	protected $_formBlockType = 'vtdirect/form';
  protected $_infoBlockType = 'vtdirect/info';
	
	// call to redirectAction function at Veritrans_Vtweb_PaymentController
	public function getOrderPlaceRedirectUrl() {
		return Mage::getUrl('vtdirect/payment/redirect', array('_secure' => true));
	}
}
?>