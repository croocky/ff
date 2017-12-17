/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),

/***/ 1:
/***/ (function(module, exports, __webpack_require__) {


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

/*

require('./bootstrap');

window.Vue = require('vue');

*/

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
   el: '#app'
});

global.$ = global.jQuery = require('jquery');


require('./design');

*/

__webpack_require__(13);

/***/ }),

/***/ 13:
/***/ (function(module, exports) {

var windows = 0;
$(document).ready(function () {

  $('body').children().wrapAll('<div class="windows-all">');
  $('body').append('<div class="windows"></div>');
  $('body').append('<div class="windows-overlay"></div>');

  $('.windows-overlay').css('position', 'fixed');
  $('.windows-overlay').css('top', '0');
  $('.windows-overlay').css('width', '100%');
  $('.windows-overlay').css('height', '100%');
  $('.windows-overlay').css('background', 'rgba(51, 51, 51, 0.51)');
  $('.windows-overlay').css('display', 'none');
  $('.windows-overlay').css('z-index', '1');
  $('.windows-all').css('z-index', '1');
  $('.windows').css('z-index', '2');
  $('.windows-all').css('width', '100%');
  $('.windows').css('position', 'relative');
  $('.windows').css('display', 'none');

  $('.windows-overlay').click(function () {
    closeWindows();
  });
});

function openWindows(name) {
  if ($('.windows-all').hasClass('hide')) {
    return false;
  }

  windows = $(window).scrollTop();

  $('.windows-all').css('margin-top', '-' + (windows + 50) + 'px');
  $('.windows-all').css('position', 'fixed');
  $('.windows-overlay').css('display', 'block');
  $('.windows').css('display', 'block');

  $(name).show();
};

function closeWindows() {
  $(name).hide();
  $(window).scrollTop(windows);

  $('.windows-all').css('margin-top', '0');
  $('.windows-all').css('overflow-y', 'hidden');
  $('.windows-all').css('position', 'static');
  $('.windows-overlay').css('display', 'none');
  $('.windows').css('display', 'none');

  windows = $(window).scrollTop(windows);
};

/* REG*/

$(document).ready(function () {
  $('.windows').append('<div class="windows__item wi-reg">\
    <div class="windows__item-heading">Registration</div>\
    <div class="windows__item-body">\
    <form method="POST" action="cgi/auth.php" class="form" action="">\
    <div class="form-group">\
    <input name="auth_name" class="form-control">\
    </div>\
    <div class="form-group">\
    <input name="auth_pass" class="form-control">\
    </div>\
    <div class="form-group">\
    <input type="submit" value="Log in">\
    </div>\
    </form>\
    </div>\
  </div>');
});

/***/ }),

/***/ 2:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })

/******/ });