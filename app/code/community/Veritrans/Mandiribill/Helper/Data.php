<?php
/**
 * Veritrans VT Direct permata virtual account Helper Data
 *
 * @category   Mage
 * @package    Mage_Veritrans_Permatava_PaymentController
 * this class is used for declaring variable of Veritrans's constant.
 */
class Veritrans_Mandiribill_Helper_Data extends Mage_Core_Helper_Abstract
{

	// Veritrans payment method title 
	function _getTitle(){
		return Mage::getStoreConfig('payment/mandiribill/title');
	}
	
	// progress side bar, if true then show logo image, vice versa
	function _getInfoTypeIsImage(){
		return Mage::getStoreConfig('payment/mandiribill/info_type');
	}
	
	// Message to be shown when Veritrans payment method is chosen
	function _getFormMessage(){
		return Mage::getStoreConfig('payment/mandiribill/form_message');
	}
}