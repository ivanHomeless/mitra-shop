/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)


// start the Stimulus application
//import './bootstrap';

import 'admin-lte/build/npm/Plugins'
import 'admin-lte/build/npm/DocsPlugins'

import 'admin-lte/build/scss/adminlte.scss'
import 'admin-lte/build/js/AdminLTE'

import './styles/app.scss'

import './js/pages/dashboard'
import './js/script'

