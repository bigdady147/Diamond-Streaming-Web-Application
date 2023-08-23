import Vue from 'vue';
import Breadcrumb from './import_components';
import axios from 'axios';
import moment from 'moment';
import DateRangePicker from 'vue2-daterange-picker';
import 'vue2-daterange-picker/dist/vue2-daterange-picker.css';

window._ = require('lodash');

Vue.component('date-range-picker', DateRangePicker);

window.Vue = Vue;
window.axios = axios;
window.moment = moment;
