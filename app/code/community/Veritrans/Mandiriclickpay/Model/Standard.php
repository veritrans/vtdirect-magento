<?php
/**
 * Veritrans Mandiriclickpay Model Standard
 *
 * @category   Mage
 * @package    Mage_Veritrans_Mandiriclickpay_Model_Standard
 * this class is used after placing order, if the payment is Veritrans, this class will be called and link to redirectAction at Veritrans_Vtdirect_PaymentController class
 */
class Veritrans_Mandiriclickpay_Model_Standard extends Mage_Payment_Model_Method_Abstract {
	
  protected $_code = 'mandiriclickpay';	
	protected $_isInitializeNeeded      = true;
	protected $_canUseInternal          = true;
	protected $_canUseForMultishipping  = false;
	
	protected $_formBlockType = 'mandiriclickpay/form';
  protected $_infoBlockType = 'mandiriclickpay/info';
	
	// call to redirectAction function at Veritrans_Mandiriclickpay_PaymentController
	public function getOrderPlaceRedirectUrl() {
		return Mage::getUrl('mandiriclickpay/payment/redirect', array('_secure' => true));
	}

	/**
     * Assign data to info model instance
     *
     * @param   mixed $data
     * @return  Mage_Payment_Model_Info
     */
	public function assignData($data)
    {
        if (!($data instanceof Varien_Object)) {
            $data = new Varien_Object($data);
            
        }
/*        $info = $this->getInfoInstance();
        $info->setAdditionalInformation('card_number', $data->getCcNumber());
        $info->setAdditionalInformation('input1', $data->getInput1());
        $info->setAdditionalInformation('input2', $data->getInput2());
        $info->setAdditionalInformation('input3', $data->getInput3());
        $info->setAdditionalInformation('token', $data->getToken());
*/
        $session    = Mage::getSingleton('core/session');
        $session->setCardNumber($data->getCcNumber());
        $session->setInput1($data->getInput1());
        $session->setInput2($data->getInput2());
        $session->setInput3($data->getInput3());
        $session->setToken($data->getToken());
        return $this;
    }
}
?>