require('./bootstrap');

import Vue from "vue";
import Breadcrumb from "./import_components"


window._ = require("lodash");
window.axios = require("axios");
window.moment = require("moment");
window.Vue = Vue;
import axios from "axios";
import moment from "moment";
const app = new Vue({
    el: '#app',
    components: {
        Breadcrumb // Khai báo component breadcrumb
    }
})
// register globally


