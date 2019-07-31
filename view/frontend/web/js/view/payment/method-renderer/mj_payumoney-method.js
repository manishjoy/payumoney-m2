define(
    [
        'Magento_Checkout/js/view/payment/default'
    ],
    function (Component) {
        'use strict';
        return Component.extend({
            defaults: {
                template: 'ManishJoy_PayUMoney/payment/mj_payumoney'
            },
            getMailingAddress: function () {
                return window.checkoutConfig.payment.checkmo.mailingAddress;
            },
            getInstructions: function () {
                return 'Test';
                return window.checkoutConfig.payment.instructions[this.item.method];
            },
        });
    }
);
