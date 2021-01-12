/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

define([
    'jquery',
    'underscore',
    'mage/utils/wrapper'
], function ($, _, wrapper) {
    'use strict';

    return function (placeOrderAction) {

        /** Override default place order action and add agreement_ids to request */
        return wrapper.wrap(placeOrderAction, function (originalAction, paymentData, messageContainer) {

            var additionalData = [];
            additionalData['additional_data'] = [];
            additionalData['additional_data']['printed-invoice'] =
                $('#printed-invoice').prop('checked');

            paymentData = _.extend(paymentData, additionalData);

            return originalAction(paymentData, messageContainer);
        });
    };
});