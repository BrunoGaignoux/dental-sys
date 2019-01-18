
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/**
 * Default components from bootstrap vue
 */
Vue.component('example', require('./components/base/Example.vue'));
Vue.component('vc-alert', require('./components/base/VcAlert.vue'));
Vue.component('vc-box', require('./components/base/VcBox.vue'));
Vue.component('vc-button', require('./components/base/VcButton.vue'));
Vue.component('vc-col', require('./components/base/VcCol.vue'));
Vue.component('vc-form', require('./components/base/VcForm.vue'));
Vue.component('vc-form-box', require('./components/base/VcFormBox.vue'));
Vue.component('vc-input', require('./components/base/VcInput.vue'));
Vue.component('vc-input-range', require('./components/base/VcInputRange.vue'));
Vue.component('vc-modal', require('./components/base/VcModal.vue'));
Vue.component('vc-row', require('./components/base/VcRow.vue'));
Vue.component('vc-table', require('./components/base/VcTable.vue'));

/**
 * Children`s of vue components
 */
Vue.component('vc-checkbox', require('./components/base/filhos/VcCheckbox.vue'));
Vue.component('vc-input-date', require('./components/base/filhos/VcInputDate.vue'));
Vue.component('vc-input-file', require('./components/base/filhos/VcInputFile.vue'));
Vue.component('vc-input-number', require('./components/base/filhos/VcInputNumber.vue'));
Vue.component('vc-input-text', require('./components/base/filhos/VcInputText.vue'));
Vue.component('vc-radio-button', require('./components/base/filhos/VcRadioButton.vue'));
Vue.component('vc-select', require('./components/base/filhos/VcSelect.vue'));
Vue.component('vc-select-api', require('./components/base/filhos/VcSelectApi.vue'));
Vue.component('vc-textarea', require('./components/base/filhos/VcTextarea.vue'));

/**
 * Laravel components from vue
 */
Vue.component('evaluation-schedule', require('./components/laravel/schedule/EvaluationSchedule.vue'));
const app = new Vue({
    el: '#app'
});
