define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'mj_payumoney',
                component: 'ManishJoy_PayUMoney/js/view/payment/method-renderer/mj_payumoney-method'
            }
        );
        return Component.extend({});
    }
);