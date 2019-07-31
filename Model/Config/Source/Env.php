<?php

namespace ManishJoy\PayUMoney\Model\Config\Source;

use Magento\Payment\Model\Method\AbstractMethod;

class Env implements \Magento\Framework\Option\ArrayInterface
{
	const SANDBOX = 'sandbox';
	const PRODUCTION = 'production';

	public function toOptionArray()
	{
		return array(
				array('value' => self::SANDBOX, 'label' => 'Sandbox'),				
				array('value' => self::PRODUCTION, 'label' => 'Production')
			);
	}
}