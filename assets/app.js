/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)


// start the Stimulus application
//import './bootstrap';

const $ = require('jquery');
global.$ = global.jQuery = $;

import 'jquery-ui-bundle/jquery-ui'
window.$.widget.bridge('uibutton', window.$.ui.button)

import 'bootstrap/dist/js/bootstrap.bundle'
import 'jquery-knob/dist/jquery.knob.min'
import 'summernote/dist/summernote-bs4'
import 'overlayscrollbars/js/jquery.overlayScrollbars'
import 'daterangepicker'
import 'tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4'

import './plugins/chart.js/Chart'
import './plugins/jqvmap/jquery.vmap'
import './plugins/jqvmap/maps/jquery.vmap.usa'
import './plugins/adminlte/js/adminlte'

import './js/dashboard'
import './styles/app.scss'
import './js/script'


