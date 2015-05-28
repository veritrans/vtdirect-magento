<?php
/**
 * Veritrans VT Direct Helper Data
 *
 * @category   Mage
 * @package    Mage_Veritrans_Vtdirect_PaymentController
 * @author     denny
 * this class is used for declaring variable of Veritrans's constant.
 */
class Veritrans_Vtdirect_Helper_Data extends Mage_Core_Helper_Abstract
{

	// Veritrans payment method title 
	function _getTitle(){
		return Mage::getStoreConfig('payment/vtdirect/title');
	}
	
	// Installment bank
	function _getInstallmentBank(){
		return Mage::getStoreConfig('payment/vtdirect/installment_bank');
	}

	// Installment terms, separate by comma (,) ex. 3,6,12
	function _getInstallmentTerms(){
		return Mage::getStoreConfig('payment/vtdirect/installment_terms');
	}
	
	// progress side bar, if true then show logo image, vice versa
	function _getInfoTypeIsImage(){
		return Mage::getStoreConfig('payment/vtdirect/info_type');
	}
	
	// Message to be shown when Veritrans payment method is chosen
	function _getFormMessage(){
		return Mage::getStoreConfig('payment/vtdirect/form_message');
	}
}