define([
    'jquery',
    'mage/translate',
    'jquery/ui',
        'Magento_Catalog/js/catalog-add-to-cart'
], function ($, $t) {

    $.widget('mage.catalogAddToCart', $.mage.catalogAddToCart,  {

        submitForm: function (form) {
            if (confirm($t('Are you sure?'))) {
                this._super(form);
            } else return false;
        }

    });

    return $.mage.catalogAddToCart;

    }
);