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

import './plugins/jquery-ui/jquery-ui'
window.$.widget.bridge('uibutton', window.$.ui.button)
import './plugins/bootstrap/js/bootstrap.bundle'
import './plugins/chart.js/Chart'
import './plugins/jquery-knob/jquery.knob.min'

import './plugins/jqvmap/jquery.vmap'
import './plugins/jqvmap/maps/jquery.vmap.usa'

import './plugins/summernote/summernote-bs4'
import './plugins/overlayScrollbars/js/jquery.overlayScrollbars'
import './plugins/daterangepicker/daterangepicker'
import './plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4'
import './plugins/adminlte/js/adminlte'

import './js/dashboard'
import './styles/app.scss'
import './js/script'


