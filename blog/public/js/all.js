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
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

//AJAX PAGES


console.log('maximka1');

var pages = {
  indexpage: ['/index.html', '/'],
  services: '/services.html',
  servicespages: ['/services-landing-page.html', '/services-e-shop.html', '/services-visit-card-site.html', '/services-corporative-site.html', '/services-support.html'],
  contextadvpage: '/services-context.html',
  advpage: '/services-advertising.html'
};

function checkajaxpage() {

  if (!arguments) {
    return false;
  }

  var check = false;

  function checkIt(pagenameitemskey) {

    // CHECK OBJECT

    if (typeof pagenameitemskey == 'string') {
      if (window.location.pathname == pagenameitemskey) {
        check = true;
      }
    }

    if ((typeof pagenameitemskey === 'undefined' ? 'undefined' : _typeof(pagenameitemskey)) == 'object' || typeof pagenameitemskey == 'array') {
      for (i = 0; i < pagenameitemskey.length; i++) {
        if (window.location.pathname == pagenameitemskey[i]) {
          check = true;
        }
      }
    }
  };

  //CHECK PARAMETERS

  for (var i = 0; i < arguments.length; i++) {
    checkIt(arguments[i]);
    if (check == true) {
      return true;
    }
  }

  return false;
}

function fullpageload() {

  // BLACK PAGE AND HEIGHT 100%

  if (checkajaxpage(pages.indexpage)) {
    $('.content-ajax-wrapper').css('height', '100%');
    // $('head').append($("<link rel='stylesheet' class='imblack' href='css/black.css' type='text/css' />"));
  } else {
    $('.content-ajax-wrapper').css('height', 'auto');
    // $('.imblack').remove();
  }

  // OWL SERVICES

  if (checkajaxpage(pages.services)) {
    $('.row_services').owlCarousel({

      margin: 0,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true,
          loop: true
        },
        768: {
          items: 3,
          nav: false,
          loop: false
        }
      }
    });
  }

  //Инфографики

  if (checkajaxpage(pages.contextadvpage)) {
    var ctx = document.getElementById("chart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ["Yandex", "Google"],
        datasets: [{
          data: [60, 40],
          borderColor: '#333',
          borderWidth: '6',
          backgroundColor: ['#27AE60', '#EB5757']
        }]

      },
      options: {
        title: {
          display: true
        }
      }
    });
  }

  if (checkajaxpage(pages.advpage)) {
    var ctx = document.getElementById("chart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ["Контекстная реклама", "Реклама в блогах", "СПА", "Соц. сети"],
        datasets: [{
          data: [50, 10, 18, 15],
          borderColor: '#333',
          borderWidth: '6',
          backgroundColor: ['#27AE60', '#EB5757', '#F2C94C', '#2D9CDB']
        }]

      },
      options: {
        title: {
          display: true,
          borderColor: ['rgba(255,99,132,1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)']
        }
      }
    });
  }

  //CANVAS ON INDEXPAGE
  /*
  
    if(checkajaxpage(pages.indexpage)) {
      var canvas = document.getElementById('canvas-main'),
      ctx = canvas.getContext('2d'),
      fps = 20,
      fov = 200,
      waveHeight = 20,
      cols = 15,
      rows = 15,
      offsetX = 0,
      offsetY = 0,
      inc = 0.01,
      mesh = [];
  
    function resizeCanvas() {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight
    }
  
    function generateMesh(){
  
      mesh=[];
      var gridWidth = (canvas.width)/cols;
      var gridHeight = (canvas.height)/rows;
      var gridDepth = fov/rows;
  
      for(var col=0; col < cols; col++){
        for(var row=0; row < rows; row++){
          mesh.push([
            {
              x: col * gridWidth,
              y: row * gridHeight+gridHeight,
              z: fov - (row * gridDepth+gridDepth),
            },
            {
              x: col * gridWidth,
              y: row * gridHeight,
              z: fov - (row * gridDepth),
            },
            {
              x: col * gridWidth+gridWidth,
              y: row * gridHeight,
              z: fov - (row * gridDepth)
            }
          ]);
          // Reflext
          mesh.push([
            {
              x: col * gridWidth+gridWidth,
              y: row * gridHeight,
              z: fov - (row * gridDepth)
            },
            {
              x: col * gridWidth+gridWidth,
              y: row * gridHeight+gridHeight,
              z: fov - (row * gridDepth+gridDepth),
            },
            {
              x: col * gridWidth,
              y: row * gridHeight+gridHeight,
              z: fov - (row * gridDepth+gridDepth),
            }
          ]);
        }
      }
  
    }
  
  function drawMesh(){
  
    ctx.strokeStyle = 'steelblue';
    ctx.fillStyle = 'rgba(150,200,220,0.2)';
    ctx.clearRect(0, 0, canvas.width, canvas.height);
  
    for(var m=0; m < mesh.length; m++){
      var poly = mesh[m];
      ctx.beginPath();
      ctx.moveTo(poly[0].x, poly[0].y);
      for(var p=0; p < poly.length; p++){
        ctx.lineTo(poly[p].x, poly[p].y);
      }
      ctx.closePath();
      ctx.stroke();
      //ctx.fill(); // This really impacts performance
    }
  }
  
  function addNoise(offsetX,offsetY){
    // You could do all sorts of things to cause different motion
    for(var m=0; m < mesh.length; m++){
      var poly = mesh[m];
      for(var p=0; p < poly.length; p++){
        poly[p].y = poly[p].y + (waveHeight * noise((poly[p].x/50)+offsetX,(poly[p].y/50)+offsetY) );
      }
    }
  
  }
  
  // Helper funtion for projection
  function clip(x,w){
    return x-w/2;
  }
  
  // Tihs is a little crude
  function projectMesh(){
    for(var m=0; m < mesh.length; m++){
      var poly = mesh[m];
      for(var p=0; p < poly.length; p++){
        var scale = fov/(fov+poly[p].z);
        poly[p].x = clip(poly[p].x, canvas.width) * scale + canvas.width/2;
        poly[p].y = clip(poly[p].y, canvas.height) * scale + canvas.height/3;
  
      }
    }
  
  }
  
  function draw() {
  
    // ToDo: inc should not be tied to framerate
    offsetX += inc;
    offsetY -= inc;
  
    generateMesh(); // ToDo: Probably don't need to do this every frame
    addNoise(offsetX,offsetY);
    projectMesh();
    drawMesh();
  
  }
  
  // Initialise and set frame rate.
  (function(){
    var now;
    var then = Date.now();
    var interval = 1000/fps;
    var delta;
    function tick() {
  
        now = Date.now();
        delta = now - then;
  
        if (delta > interval) {
            then = now - (delta % interval);
            draw();
        }
        requestAnimationFrame(tick);
    }
    window.addEventListener('resize', resizeCanvas, false);
    resizeCanvas();
    tick();
  })();
    }
  
  */
}

$(document).ready(function () {

  fullpageload();

  if ($(document).find('#index').length != 0) {
    setTimeout(function () {
      $('#index').fadeIn();
    }, '1000');
  }

  var popped = 'state' in window.history && window.history.state !== null,
      initialURL = location.href;
  var content = $('.content-ajax-wrapper');

  function openURL(href) {
    popupclickclosefunction();

    var link = href; //$(this).attr('href');

    $('.content-ajax-wrapper').load(link + " .content-ajax", function () {
      fullpageload();
      if ($(document).find('#index').length != 0) {
        $('#index').fadeIn();
      }
      window.scrollBy(0, -99999);
    });
  }

  $(document).on('click', 'a', function () {

    var href = $(this).attr("href");

    history.pushState({ page: href }, null, href);
    openURL(href);
    return false; //intercept the link
  });

  $(window).bind('popstate', function (event) {

    // Ignore inital popstate that some browsers fire on page load
    var initialPop = !popped && location.href == initialURL;
    popped = true;
    if (initialPop) return;

    console.log('Popstate');

    // By the time popstate has fired, location.pathname has been changed
    openURL(location.pathname);
  });
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

(function () {

    var width,
        height,
        largeHeader,
        canvas,
        ctx,
        points,
        target,
        animateHeader = true;

    // Main
    initHeader();
    initAnimation();
    addListeners();

    function initHeader() {
        width = window.innerWidth;
        height = window.innerHeight;
        target = { x: width / 2, y: height / 2 };

        largeHeader = document.getElementById('large-header');
        largeHeader.style.height = height + 'px';

        canvas = document.getElementById('demo-canvas');
        canvas.width = width;
        canvas.height = height;
        ctx = canvas.getContext('2d');

        // create points
        points = [];
        for (var x = 0; x < width; x = x + width / 20) {
            for (var y = 0; y < height; y = y + height / 20) {
                var px = x + Math.random() * width / 20;
                var py = y + Math.random() * height / 20;
                var p = { x: px, originX: px, y: py, originY: py };
                points.push(p);
            }
        }

        // for each point find the 5 closest points
        for (var i = 0; i < points.length; i++) {
            var closest = [];
            var p1 = points[i];
            for (var j = 0; j < points.length; j++) {
                var p2 = points[j];
                if (!(p1 == p2)) {
                    var placed = false;
                    for (var k = 0; k < 5; k++) {
                        if (!placed) {
                            if (closest[k] == undefined) {
                                closest[k] = p2;
                                placed = true;
                            }
                        }
                    }

                    for (var k = 0; k < 5; k++) {
                        if (!placed) {
                            if (getDistance(p1, p2) < getDistance(p1, closest[k])) {
                                closest[k] = p2;
                                placed = true;
                            }
                        }
                    }
                }
            }
            p1.closest = closest;
        }

        // assign a circle to each point
        for (var i in points) {
            var c = new Circle(points[i], 2 + Math.random() * 2, 'rgba(255,255,255,0.3)');
            points[i].circle = c;
        }
    }

    // Event handling
    function addListeners() {
        if (!('ontouchstart' in window)) {
            window.addEventListener('mousemove', mouseMove);
        }
        window.addEventListener('scroll', scrollCheck);
        window.addEventListener('resize', resize);
    }

    function mouseMove(e) {
        var posx = posy = 0;
        if (e.pageX || e.pageY) {
            posx = e.pageX;
            posy = e.pageY;
        } else if (e.clientX || e.clientY) {
            posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
            posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
        }
        target.x = posx;
        target.y = posy;
    }

    function scrollCheck() {
        if (document.body.scrollTop > height) animateHeader = false;else animateHeader = true;
    }

    function resize() {
        width = window.innerWidth;
        height = window.innerHeight;
        largeHeader.style.height = height + 'px';
        canvas.width = width;
        canvas.height = height;
    }

    // animation
    function initAnimation() {
        animate();
        for (var i in points) {
            shiftPoint(points[i]);
        }
    }

    function animate() {
        if (animateHeader) {
            ctx.clearRect(0, 0, width, height);
            for (var i in points) {
                // detect points in range
                if (Math.abs(getDistance(target, points[i])) < 4000) {
                    points[i].active = 0.3;
                    points[i].circle.active = 0.6;
                } else if (Math.abs(getDistance(target, points[i])) < 20000) {
                    points[i].active = 0.1;
                    points[i].circle.active = 0.3;
                } else if (Math.abs(getDistance(target, points[i])) < 40000) {
                    points[i].active = 0.02;
                    points[i].circle.active = 0.1;
                } else {
                    points[i].active = 0;
                    points[i].circle.active = 0;
                }

                drawLines(points[i]);
                points[i].circle.draw();
            }
        }
        requestAnimationFrame(animate);
    }

    function shiftPoint(p) {
        TweenLite.to(p, 1 + 1 * Math.random(), { x: p.originX - 50 + Math.random() * 100,
            y: p.originY - 50 + Math.random() * 100, ease: Circ.easeInOut,
            onComplete: function onComplete() {
                shiftPoint(p);
            } });
    }

    // Canvas manipulation
    function drawLines(p) {
        if (!p.active) return;
        for (var i in p.closest) {
            ctx.beginPath();
            ctx.moveTo(p.x, p.y);
            ctx.lineTo(p.closest[i].x, p.closest[i].y);
            ctx.strokeStyle = 'rgba(156,217,249,' + p.active + ')';
            ctx.stroke();
        }
    }

    function Circle(pos, rad, color) {
        var _this = this;

        // constructor
        (function () {
            _this.pos = pos || null;
            _this.radius = rad || null;
            _this.color = color || null;
        })();

        this.draw = function () {
            if (!_this.active) return;
            ctx.beginPath();
            ctx.arc(_this.pos.x, _this.pos.y, _this.radius, 0, 2 * Math.PI, false);
            ctx.fillStyle = 'rgba(156,217,249,' + _this.active + ')';
            ctx.fill();
        };
    }

    // Util
    function getDistance(p1, p2) {
        return Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2);
    }
})();

$.ajax({
    url: "https://api.coindesk.com/v1/bpi/currentprice.json"
}).done(function (data) {
    var jsondata = JSON.parse(data);
    var pound = jsondata.bpi.GBP.symbol + jsondata.bpi.GBP.rate_float;
    var euro = jsondata.bpi.EUR.symbol + jsondata.bpi.EUR.rate_float;
    var dollar = jsondata.bpi.USD.symbol + jsondata.bpi.USD.rate_float;
    $('.chart').append('<i class="chart__item chart__item_lable">Bitcoin Price Index (BPI)</i><i class="chart__item">' + pound + '</i><i class="chart__item">' + euro + '</i><i class="chart__item">' + dollar + '</i>');
});

$(function () {

    var marquee = $(".chart");
    marquee.css({ "overflow": "hidden", "width": "100%" });

    // оболочка для текста ввиде span (IE не любит дивы с inline-block)
    marquee.wrapInner("<span>");
    marquee.find("span").css({ "width": "50%", "display": "inline-block", "text-align": "center" });
    marquee.append(marquee.find("span").clone()); // тут у нас два span с текстом

    marquee.wrapInner("<div>");
    marquee.find("div").css("width", "200%");

    var reset = function reset() {
        $(this).css("margin-left", "0%");
        $(this).animate({ "margin-left": "-100%" }, 12000, 'linear', reset);
    };

    reset.call(marquee.find("div"));
});

/***/ })
/******/ ]);