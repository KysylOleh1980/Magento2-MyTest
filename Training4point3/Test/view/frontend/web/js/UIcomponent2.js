define([
    'uiComponent',
    'jquery',
    'ko'
], function (Component, $, ko) {
    'use strict';
    return Component.extend({
// for possible additional functionality

        initialize: function () {
            console.log('init ui2');
            return this._super()
        }
    });
});