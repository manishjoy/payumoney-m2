<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace ManishJoy\PayUMoney\Model\Config\Source\Order\Status;

/**
 * Order Statuses source model
 */
class PendingPayment extends \Magento\Sales\Model\Config\Source\Order\Status
{
    /**
     * @var string[]
     */
    protected $_stateStatuses = [
        \Magento\Sales\Model\Order::STATE_PENDING_PAYMENT,
    ];
}
