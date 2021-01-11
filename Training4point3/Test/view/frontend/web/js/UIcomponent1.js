define([
    'uiComponent',
    'jquery',
    'ko'
], function (Component, $, ko) {
    'use strict';
    return Component.extend({
// for possible additional functionality

        initialize: function () {
            console.log('init ui1');
            return this._super()
        }
    });
});