<?php
/**
 * Veritrans VT Direct permata virtual account Helper Data
 *
 * @category   Mage
 * @package    Mage_Veritrans_Permatava_PaymentController
 * this class is used for declaring variable of Veritrans's constant.
 */
class Veritrans_Bcaklikpay_Helper_Data extends Mage_Core_Helper_Abstract
{

	// Veritrans payment method title 
	function _getTitle(){
		return Mage::getStoreConfig('payment/bcaklikpay/title');
	}
	
	// progress side bar, if true then show logo image, vice versa
	function _getInfoTypeIsImage(){
		return Mage::getStoreConfig('payment/bcaklikpay/info_type');
	}
	
	// Message to be shown when Veritrans payment method is chosen
	function _getFormMessage(){
		return Mage::getStoreConfig('payment/bcaklikpay/form_message');
	}
}