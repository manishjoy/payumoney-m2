<?php


namespace ManishJoy\PayUMoney\Model\Payment;

class PayUMoney extends \Magento\Payment\Model\Method\AbstractMethod
{

    protected $_code = "mj_payumoney";
    protected $_isGateway = true;
    protected $_isInitializeNeeded = true;

    /**
     * Instantiate state and set it to state object.
     *
     * @param string $paymentAction
     * @param \Magento\Framework\DataObject $stateObject
     */
    public function initialize($paymentAction, $stateObject)
    {
        $payment = $this->getInfoInstance();
        $order = $payment->getOrder();
        $order->setCanSendNewEmailFlag(false);		
		
        $stateObject->setState(\Magento\Sales\Model\Order::STATE_PENDING_PAYMENT);
        $stateObject->setStatus('pending_payment');
        $stateObject->setIsNotified(false);
    }

    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        return parent::isAvailable($quote);
    }
}
