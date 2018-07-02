<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Swifty</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->

    <link rel="stylesheet" href="{!! asset('css/fonts.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/bootstrap.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">

    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="preloader-item">
          <div class="diamond"></div>
          <div class="diamond"></div>
          <div class="diamond"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header" id="home">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="40px" data-xl-stick-up-offset="40px" data-xxl-stick-up-offset="40px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-outer"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="imgsvg/logo-black.svg" alt="" width="105" height="38" srcset="images/logo-default-210x76.png 2x"/><img class="brand-logo-light" src="images/logo-inverse-105x38.png" alt="" width="105" height="38" srcset="images/logo-inverse-210x76.png 2x"/></a>
                </div>
              </div>
              <div class="rd-navbar-nav-outer">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#home">Home</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#about">About us</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#features">Features</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#team">Investments</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">Contacts</a>
                  </li>
                </ul>
              </div>
              <div class="btc-to-usd">
                <p class="btc-to-usd__title">BTC\USD</p>
                <div class="btc-price">
                  <div class="btcwdgt-price" data-bw-theme="light"></div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

      <!-- Slider-->
      <section class="section bg-gray-800">
        <div class="slick-group-slider bg-gray-700">
          <div class="carousel-parent-outer">
            <svg class="carousel-parent-shape" width="1216px" height="625px" viewBox="0 0 1216 625" preserveAspectRatio="none">
              <path fill-rule="evenodd" d="M-0.000,311.382 C-0.000,311.382 62.999,372.037 102.727,273.078 C118.498,233.793 168.280,306.657 186.342,249.138 C203.245,195.310 231.848,195.447 246.067,143.801 C266.856,68.285 291.661,3.867 310.569,0.159 C341.089,-5.826 374.891,182.287 422.852,134.224 C468.160,88.821 511.245,170.842 535.135,177.317 C545.468,180.117 579.312,194.321 613.972,189.287 C635.941,186.097 655.397,155.251 678.475,172.529 C726.537,208.512 730.880,342.989 781.202,397.567 C807.168,425.730 831.757,373.189 862.428,356.869 C890.078,342.156 923.937,365.255 946.043,356.869 C975.409,345.727 998.875,341.716 1015.324,294.624 C1027.442,259.931 1032.880,184.101 1048.770,155.771 C1068.789,120.077 1110.838,156.070 1129.996,129.436 C1169.461,74.571 1216.000,43.251 1216.000,43.251 L1216.000,624.999 L-0.000,624.999 L-0.000,311.382 Z"></path>
            </svg>
            <div class="parallax-scene parallax-scene-js" data-scalar-x="5" data-scalar-y="10">
              <div class="layer-1">
                <div class="layer" data-depth=".55"><img src="images/bitcoin-424x427.png" alt="" width="424" height="427"/>
                </div>
              </div>
              <div class="layer-2">
                <div class="layer" data-depth=".25"><img src="images/bitcoin-424x427.png" alt="" width="424" height="427"/>
                </div>
              </div>
              <div class="layer-3">
                <div class="layer" data-depth=".2"><img src="images/bitcoin-424x427.png" alt="" width="424" height="427"/>
                </div>
              </div>
              <div class="layer-4">
                <div class="layer" data-depth=".25"><img src="images/bitcoin-424x427.png" alt="" width="424" height="427"/>
                </div>
              </div>
            </div>
            <div class="slick-slider carousel-parent" data-arrows="true" data-loop="true" data-autoplay="true" data-dots="true" data-swipe="true" data-items="1" data-fade="true" data-child="#slider-child-carousel" data-for="#slider-child-carousel">
              <div>
                <div class="slick-slide-caption">
                  <h6>Industry-leading cryptocurrency exchange</h6>
                  <h1>INVESTMENTS</h1>
                  <h3 class="decoration-heading-1">Revolutionizing finances</h3>
                  <p>Welcome to Bitcoin, #1 resource for all your cryptocurrency needs. We are the most reliable exchange & blockchain news portal.</p>
                  <div class="slick-slide-caption__footer"><a href="/register" class="button button-primary" href="#">Register</a></div>
                </div>
              </div>
              <div>
                <div class="slick-slide-caption">
                  <h6>Introducing the most powerful cryptocurrency</h6>
                  <h1>CRYPTOCURRENCY</h1>
                  <h3 class="decoration-heading-1">Of Worldwide Payments</h3>
                  <p>Bitcoin empowers people all over the world with new ways of payments for their favorite products and services</p>
                  <div class="slick-slide-caption__footer"><a href="/register" class="button button-primary" href="#">Register</a></div>
                </div>
              </div>
              <div>
                <div class="slick-slide-caption">
                  <h6>We provide regular updates on the blockchain</h6>
                  <h1>BLOCKCHAIN</h1>
                  <h3 class="decoration-heading-1">About #1 cryptocurrency</h3>
                  <p>Our qualified team provides daily publications and regular updates about events that happen in the world of the blockchain.</p>
                  <div class="slick-slide-caption__footer"><a href="/register" class="button button-primary" href="#">Register</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="slick-slider carousel-child" id="slider-child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="true" data-dots="false" data-swipe="false" data-fade="true" data-items="1" data-slide-to-scroll="1">
            <div class="item" style="background-image: url(images/slider-slide-1.jpg);"></div>
            <div class="item" style="background-image: url(images/slider-slide-2.jpg);"></div>
            <div class="item" style="background-image: url(images/slider-slide-3.jpg);"></div>
          </div>
        </div>
      </section>

      <!-- Welcome-->
      <section class="section section-md bg-white" id="about">
        <div class="container">
          <div class="row row-50 justify-content-center flex-md-row-reverse align-items-center">
            <div class="col-md-10 col-lg-6">
              <p class="text-initial-letter">Welcome! Please keep in mind that this is a commercial website that lists wallets, exchanges and other bitcoin related info.</p>
              <div class="divider-modern"></div>
              <p>Fusce vestibulum, elit quis maximus consequat, nunc elit fermentum orci, ac porttitor nisl ligula vitae sem. In egestas consequat fermentum. Donec dignissim eros et tincidunt venenatis. Integer pulvinar dignissim purus nec ornare. Integer nec elit est. Curabitur vehicula, mauris vel aliquam luctus, nulla ex venenatis diam, non elementum lacus ante sit amet nunc. Nulla facilisi. Maecenas fringilla mauris est. Curabitur tempus dictum amet sed.</p>
              <div class="group group-middle"><a class="button button-primary" href="/register">Register</a></div>
            </div>
            <div class="col-md-10 col-lg-6">
              <div class="image-group-1"><img class="wow fadeIn" src="images/about-image-1-399x307.jpg" alt="" width="399" height="307"/><img class="wow fadeIn" src="images/about-image-2-421x332.jpg" alt="" width="421" height="332" data-wow-delay=".3s"/>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Video-->
      <!--
      <section class="section context-dark section-1">
        <div class="section-inner bg-gray-700">
          <svg class="section-svg__shape" width="1920" height="398.24" viewbox="0 0 1920 398.24301" preserveAspectRatio="none">
            <path d="m576.43 1.8147e-4c-19.223-0.0151-40.578 115.66-70.682 85.517-28.89-28.932-56.364 23.333-71.597 27.458-6.5881 1.7855-28.169 10.835-50.27 7.628-14.008-2.0332-26.414-21.688-41.129-10.678-30.647 22.928-33.416 108.62-65.504 143.4-16.558 17.946-32.236-15.533-51.794-25.933-17.631-9.3747-39.22 5.3444-53.316 0-18.725-7.0987-33.688-9.6549-44.176-39.663-7.7266-22.107-11.194-70.427-21.326-88.479-12.765-22.744-39.578 0.19087-51.793-16.78-25.165-34.961-54.84-54.917-54.84-54.917v370.69h1920v-369.18c-19.079 48.542-33.214 53.843-43.483 70.186-10.132 18.052-13.599 66.372-21.326 88.479-10.488 30.008-25.451 32.564-44.177 39.663-14.096 5.3444-35.685-9.3747-53.316 0-19.558 10.4-35.236 43.879-51.793 25.933-32.087-34.777-34.857-120.47-65.504-143.4-14.715-11.01-27.121 8.6452-41.129 10.678-22.101 3.2068-43.682-5.8425-50.27-7.628-15.234-4.1256-42.706-56.39-71.597-27.458-30.582 30.626-52.136-89.241-71.596-85.427-12.057 2.3632-27.873 43.41-41.13 91.529-9.0658 32.91-27.305 32.823-38.083 67.121-11.517 36.652-43.26-9.7772-53.316 15.255-25.333 63.057-72.071-11.879-94.23-20.193-33.931-12.732-57.955 40.666-93.14 30.67-35.185-9.995-55.072-158.22-91.312-158.43-37.954-0.21468-58.252 199.9-95.191 210.03-18.469 5.0612-47.18-106.42-66.126-133.12-18.946-26.704-25.276 30.357-46.02 37.684-20.744 7.3278-52.061 96.415-77.393 33.358-10.056-25.033-41.799 21.397-53.316-15.255-10.778-34.299-29.017-34.212-38.082-67.121-13.257-48.119-29.073-89.166-41.13-91.529-0.30425-0.0597-0.60907-0.0892-0.91419-0.0896z" fill="#4497dd" opacity=".039" stroke-width="1"></path>
          </svg>
        </div>
        <div class="container">
          <div class="thumbnail-video-1">
            <div class="embed-responsive">
              <iframe width="560" height="315" src="//www.youtube.com/embed/-AhmuMqZB0s" allowfullscreen=""></iframe>
            </div>
            <div class="thumbnail-video__overlay video-overlay" style="background-image: url(images/video-preview-2-1171x503.jpg)">
              <h6>About bitcoins</h6>
              <h2>No idea <strong>what’s</strong> going on?</h2>
              <div class="button-video"></div>
            </div>
          </div>
        </div>
      </section>
      -->
      <!-- How it works-->
      <section class="section section-lg bg-white text-center">
        <div class="container container-md-smaller">
          <div class="row justify-content-center">
            <div class="col-sm-10 col-md-12">
              <h6 class="wow fadeInUpSmall">ADVANTAGES</h6>
              <h2 class="wow fadeInUpSmall" data-wow-delay=".1s"><span class="d-inline-block" style="max-width: 570px;">The way to <strong>bitcoins</strong> is not as complex as it seems</span></h2>
            </div>
          </div>
          <ul class="list-steps">
            <li class="list-steps__item wow fadeInLeftSmall" data-wow-delay=".1s">
              <div class="list-steps__item-counter"></div>
              <div class="list-steps__item-divider"></div>
              <div class="list-steps__item-main">
                <h4><a href="#">Growth dynamics</a></h4>
                <p>Stable and steady growth of the crypto currencies rate</p>
              </div>
            </li>
            <li class="list-steps__item wow fadeInLeftSmall" data-wow-delay=".2s">
              <div class="list-steps__item-counter"></div>
              <div class="list-steps__item-divider"></div>
              <div class="list-steps__item-main">
                <h4><a href="#">Security</a></h4>
                <p>Cryptocurrencies are digital assets that use cryptography, an encryption technique, for security</p>
              </div>
            </li>
            <li class="list-steps__item wow fadeInLeftSmall" data-wow-delay=".3s">
              <div class="list-steps__item-counter"></div>
              <div class="list-steps__item-divider"></div>
              <div class="list-steps__item-main">
                <h4><a href="#">Everywhere</a></h4>
                <p>You can use the currency anywhere in the worldе</p>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!--include ../sections/_section-cta-get-a-wallet-->
      <!-- Counters-->
      <section class="section parallax-container section-lg section-overlay-5 context-dark text-center" data-parallax-img="images/parallax-2.jpg">
        <div class="parallax-content">
          <div class="container">
            <div class="row row-30">
              <div class="col-6 col-md-3">
                <!-- Counter Classic-->
                <article class="counter-classic">
                  <div class="counter-classic__main"><span>1.6</span><span class="small">k</span></div>
                  <p class="counter-classic__title">Positive Reviews</p>
                </article>
              </div>
              <div class="col-6 col-md-3">
                <!-- Counter Classic-->
                <article class="counter-classic">
                  <div class="counter-classic__main">
                    <div class="counter">27</div>
                  </div>
                  <p class="counter-classic__title">Awards Won</p>
                </article>
              </div>
              <div class="col-6 col-md-3">
                <!-- Counter Classic-->
                <article class="counter-classic">
                  <div class="counter-classic__main">
                    <div class="counter">20</div><span class="small">k</span>
                  </div>
                  <p class="counter-classic__title">Wallet Downloads</p>
                </article>
              </div>
              <div class="col-6 col-md-3">
                <!-- Counter Classic-->
                <article class="counter-classic">
                  <div class="counter-classic__main">
                    <div class="counter">99</div><span class="small small_top">%</span>
                  </div>
                  <p class="counter-classic__title">Satisfied Customers</p>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- FSection-->
      <!--
      <section class="section section-md bg-white">
        <div class="container">

          <article class="profile-light">
            <figure class="profile-light__figure"><img src="images/features-1-193x201.jpg" alt="" width="193" height="201"/>
            </figure>
            <div class="profile-light__main">
              <div class="profile-light__inner">
                <h4 class="profile-light__title">Hi! I am Alice Thompson.</h4>
                <div class="profile-light__text">
                  <p>Your way to bitcoins begins here. Are you ready? Perfect for beginners, the Bitcoin Wallet makes using and holding bitcoins easy. No logins are required.</p>
                </div>
              </div>
            </div>
          </article>
          <div class="row row-30">
            <div class="col-lg-6 wow fadeInUpSmall">
              <a class="link-box" href="#"><span class="icon link-box__icon linearicons-mouse-right"></span>
                <div class="link-box__main">
                  <h4>Download a Wallet</h4>
                  <p>Easily gain access to your own wallet in a few clicks.</p>
                </div></a>
            </div>
            <div class="col-lg-6 wow fadeInUpSmall" data-wow-delay=".02s">
              <a class="link-box" href="#"><span class="icon link-box__icon linearicons-cart-exchange"></span>
                <div class="link-box__main">
                  <h4>Use Bitcoin</h4>
                  <p>You can use your Bitcoins for all kinds of transactions.</p>
                </div></a>
            </div>
            <div class="col-lg-6 wow fadeInUpSmall" data-wow-delay=".1s">
              <a class="link-box" href="#"><span class="icon link-box__icon linearicons-bag-dollar"></span>
                <div class="link-box__main">
                  <h4>Time to Buy Bitcoins</h4>
                  <p>Every registered user can buy or exchange bitcoins.</p>
                </div></a>
            </div>
            <div class="col-lg-6 wow fadeInUpSmall" data-wow-delay=".12s">
              <a class="link-box" href="#"><span class="icon link-box__icon linearicons-folder-search"></span>
                <div class="link-box__main">
                  <h4>Knowledge Base</h4>
                  <p>Find an answer to any Bitcoin-related question.</p>
                </div></a>
            </div>
          </div>
        </div>
      </section>
      -->

      <!--

      <section class="section bg-gray-100">
        <div class="container">
          <div class="row justify-content-center justify-content-lg-between flex-md-row-reverse align-items-end">
            <div class="col-md-8 col-lg-6">
              <div class="section-lg">
                <h6>Available on any device</h6>
                <h2>Ideal <strong>for</strong> beginners and advanced users</h2>
                <p>In ligula massa, semper quis odio accumsan, cursus efficitur nisl. Nam ullamcorper pellentesque purus, vel ornare quam. Integer at purus venenatis, egestas ex eu, aliquam nibh. Maecenas viverra at elit nec mattis.</p>
                <div class="group group-1"><a class="box-lite" href="#">
                    <div class="icon box-lite__icon mdi mdi-android"></div>
                    <p class="box-lite__title">Android</p></a><a class="box-lite" href="#">
                    <div class="icon box-lite__icon mdi mdi-apple"></div>
                    <p class="box-lite__title">IOS</p></a><a class="box-lite" href="#">
                    <div class="icon box-lite__icon mdi mdi-windows"></div>
                    <p class="box-lite__title">Windows</p></a><a class="box-lite" href="#">
                    <div class="icon box-lite__icon mdi mdi-linux"></div>
                    <p class="box-lite__title">Linux</p></a></div>
              </div>
            </div>
            <div class="col-md-4 col-xl-5">
              <div class="mobile-app-frame"><img class="mobile-app-frame__image" src="images/mobile-app-frame-443x487.png" alt="" width="443" height="487"/>
                <div class="mobile-app-frame__content"><img src="images/mobile-frame-slide-336x541.jpg" alt="" width="336" height="541"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      -->

      <!-- Most Popular Guides-->
      <section class="section parallax-container section-md bg-gray-700 section-overlay-3 text-center" data-parallax-img="images/features-parallax-1.jpg">
        <div class="parallax-content">
          <div class="container">
            <h6>Most Popular Guides</h6>
            <h2>Bitcoin <strong>Knowledge</strong> Base</h2>
            <p>Educational content to help you learn about Bitcoin</p>
            <!-- Bootstrap collapse-->
            <div class="card-group-custom card-group-line" id="accordion-guide" role="tablist" aria-multiselectable="true">
              <div class="row row-5 justify-content-center">
                <div class="col-sm-10 col-lg-6">
                  <!-- Bootstrap card-->
                  <article class="card card-custom card-line">
                    <div class="card-header" id="accordion-guideHeading1" role="tab">
                      <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion-guide" href="#accordion-guideCollapse1" aria-controls="accordion-guideCollapse1" aria-expanded="true">How to Get Started with Bitcoin
                          <div class="card-arrow"></div></a>
                      </div>
                    </div>
                    <div class="collapse show" id="accordion-guideCollapse1" role="tabpanel" aria-labelledby="accordion-guideHeading1">
                      <div class="card-body">
                        <p>Curabitur vulputate, dui quis interdum elementum, nulla urna vestibulum magna, eu accumsan enim lectus ac risus. In tincidunt tortor mi, et finibus erat pulvinar ut. Vestibulum ut dui placerat.</p><a class="link link-arrow" href="#">Read more</a>
                      </div>
                    </div>
                  </article>
                  <!-- Bootstrap card-->
                  <article class="card card-custom card-line">
                    <div class="card-header" id="accordion-guideHeading2" role="tab">
                      <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-guide" href="#accordion-guideCollapse2" aria-controls="accordion-guideCollapse2">What is Bitcoin Mining?
                          <div class="card-arrow"></div></a>
                      </div>
                    </div>
                    <div class="collapse" id="accordion-guideCollapse2" role="tabpanel" aria-labelledby="accordion-guideHeading2">
                      <div class="card-body">
                        <p>Maecenas laoreet quis turpis eget dapibus. Donec in ullamcorper neque, ornare rhoncus ante. Morbi nec pretium tortor, ac aliquet metus. Nunc eget efficitur sapien. Praesent sodales est.</p><a class="link link-arrow" href="#">Read more</a>
                      </div>
                    </div>
                  </article>
                  <!-- Bootstrap card-->
                  <article class="card card-custom card-line">
                    <div class="card-header" id="accordion-guideHeading3" role="tab">
                      <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-guide" href="#accordion-guideCollapse3" aria-controls="accordion-guideCollapse3">How to Choose the Best Bitcoin Wallet
                          <div class="card-arrow"></div></a>
                      </div>
                    </div>
                    <div class="collapse" id="accordion-guideCollapse3" role="tabpanel" aria-labelledby="accordion-guideHeading3">
                      <div class="card-body">
                        <p>Curabitur vulputate, dui quis interdum elementum, nulla urna vestibulum magna, eu accumsan enim lectus ac risus. In tincidunt tortor mi, et finibus erat pulvinar ut.</p><a class="link link-arrow" href="#">Read more</a>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-sm-10 col-lg-6">
                  <!-- Bootstrap card-->
                  <article class="card card-custom card-line">
                    <div class="card-header" id="accordion-guideHeading4" role="tab">
                      <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-guide" href="#accordion-guideCollapse4" aria-controls="accordion-guideCollapse4">How to Set Up Bitcoin Cold Storage
                          <div class="card-arrow"></div></a>
                      </div>
                    </div>
                    <div class="collapse" id="accordion-guideCollapse4" role="tabpanel" aria-labelledby="accordion-guideHeading4">
                      <div class="card-body">
                        <p>Nam sed pellentesque mi. Nam dignissim nibh nunc, et accumsan leo pretium non. Vestibulum id interdum nisi, porttitor sagittis metus. Quisque sit amet mauris in nisl bibendum faucibus.</p><a class="link link-arrow" href="#">Read more</a>
                      </div>
                    </div>
                  </article>
                  <!-- Bootstrap card-->
                  <article class="card card-custom card-line">
                    <div class="card-header" id="accordion-guideHeading5" role="tab">
                      <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-guide" href="#accordion-guideCollapse5" aria-controls="accordion-guideCollapse5">Calculating Bitcoin Mining Profitability
                          <div class="card-arrow"></div></a>
                      </div>
                    </div>
                    <div class="collapse" id="accordion-guideCollapse5" role="tabpanel" aria-labelledby="accordion-guideHeading5">
                      <div class="card-body">
                        <p>Quisque rutrum fringilla vulputate. Sed sagittis elit at turpis maximus mattis et eget ex. Sed nec ex eu tortor sodales commodo. Etiam non nibh ultrices, finibus justo ut, auctor sapien.</p><a class="link link-arrow" href="#">Read more</a>
                      </div>
                    </div>
                  </article>
                  <!-- Bootstrap card-->
                  <article class="card card-custom card-line">
                    <div class="card-header" id="accordion-guideHeading6" role="tab">
                      <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-guide" href="#accordion-guideCollapse6" aria-controls="accordion-guideCollapse6">How to Set Up a Bitcoin ASIC Miner
                          <div class="card-arrow"></div></a>
                      </div>
                    </div>
                    <div class="collapse" id="accordion-guideCollapse6" role="tabpanel" aria-labelledby="accordion-guideHeading6">
                      <div class="card-body">
                        <p>Vestibulum varius malesuada dui nec vestibulum. Quisque egestas augue at euismod ultrices. In scelerisque rutrum quam in ultricies. Pellentesque sit amet magna vel felis.</p><a class="link link-arrow" href="#">Read more</a>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div><a class="button button-primary" href="#">See all articles</a>
          </div>
        </div>
      </section>


      <!-- Features-->
      <section class="section bg-white" id="features">
        <div class="container">
          <div class="row row-bordered-1">
            <div class="col-sm-6 col-lg-4 wow fadeIn">
                    <!-- Box Minimal-->
                    <article class="box-minimal"><span class="icon box-minimal__icon linearicons-lock"></span>
                      <h4 class="box-minimal__title">Safe &amp; Secure</h4>
                      <div class="box-minimal__divider"></div>
                      <p>Be sure in your account security and your funds safety.</p>
                    </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".1s">
                    <!-- Box Minimal-->
                    <article class="box-minimal"><span class="icon box-minimal__icon linearicons-cloud-upload"></span>
                      <h4 class="box-minimal__title">Instant Exchange</h4>
                      <div class="box-minimal__divider"></div>
                      <p>Exchange your bitcoins instantly without any extra payments.</p>
                    </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".2s">
                    <!-- Box Minimal-->
                    <article class="box-minimal"><span class="icon box-minimal__icon linearicons-umbrella2"></span>
                      <h4 class="box-minimal__title">Expert Support</h4>
                      <div class="box-minimal__divider"></div>
                      <p>We provide 24/7 expert support for our registered clients.</p>
                    </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeIn">
                    <!-- Box Minimal-->
                    <article class="box-minimal"><span class="icon box-minimal__icon linearicons-tablet2"></span>
                      <h4 class="box-minimal__title">Mobile Apps</h4>
                      <div class="box-minimal__divider"></div>
                      <p>Perfectly developed mobile apps will open you new opportunities.</p>
                    </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".1s">
                    <!-- Box Minimal-->
                    <article class="box-minimal"><span class="icon box-minimal__icon linearicons-credit-card"></span>
                      <h4 class="box-minimal__title">Personal Wallet</h4>
                      <div class="box-minimal__divider"></div>
                      <p>Our easy-to-use personal wallet system will keep your bitcoins safe.</p>
                    </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeIn" data-wow-delay=".2s">
                    <!-- Box Minimal-->
                    <article class="box-minimal"><span class="icon box-minimal__icon linearicons-sync"></span>
                      <h4 class="box-minimal__title">Recurring Buys</h4>
                      <div class="box-minimal__divider"></div>
                      <p>Bitcoin allows you to set up recurring transactions in just two clicks.</p>
                    </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Be one step ahead-->
      <section class="section bg-gray-700 particles-js-outer">
        <div id="particles-js"></div>
        <div class="container">
          <div class="row justify-content-center justify-content-xl-between align-items-end">
            <div class="col-md-10 col-lg-6">
              <div class="section-lg">
                <h6 class="wow fadeInLeftSmall">Be one step ahead</h6>
                <h2 class="wow fadeInLeftSmall" data-wow-delay=".1s">Learning <strong>80%</strong> of what the experts know is easy</h2>
                <p class="lead wow fadeInLeftSmall" data-wow-delay=".15s">Join our FREE 10-day email course and start today.</p>
                <!-- RD Mailform-->
                <form class="form form-lg rd-mailform form-inline wow fadeInLeftSmall" data-wow-delay=".2s" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                  <div class="form-wrap">
                    <input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required">
                    <label class="form-label" for="subscribe-form-email">Enter your e-mail</label>
                  </div>
                  <div class="form-button">
                    <button class="button button-primary" type="submit">Send</button>
                  </div>
                </form>
                <p class="wow fadeInLeftSmall" data-wow-delay=".25s"><span style="opacity: .25;">*We promise not to send spam</span></p>
              </div>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-5">
              <div class="bitcoin-widget bitcoin-widget_windowed bitcoin-widget_windowed-1"><img class="bitcoin-widget__top-panel" src="images/decoration-browser-panel-564x36.png" alt="" width="564" height="36"/>
                <div class="btcwdgt-chart" data-bw-theme="light"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Feedback-->
      <section class="section bg-gray-100 slider-group_testimonials">
        <div class="slick-slider carousel-child wow fadeIn" id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="true" data-autoplay="true" data-dots="false" data-swipe="false" data-fade="true" data-swiper="true" data-items="1">
          <div class="item"><img src="images/home-testimonials-3-744x623.png" alt="" width="744" height="623"/>
          </div>
          <div class="item"><img src="images/home-testimonials-2-744x623.png" alt="" width="744" height="623"/>
          </div>
          <div class="item"><img src="images/home-testimonials-1-744x623.png" alt="" width="744" height="623"/>
          </div>
        </div>
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-md-8 col-lg-7">
              <h2><strong>What</strong> People Say</h2>
              <div class="slick-slider carousel-parent" data-arrows="false" data-loop="false" data-dots="true" data-swipe="false" data-items="1" data-fade="true" data-child="#child-carousel" data-for="#child-carousel">
                <div class="item">
                  <blockquote class="quote-classic">
                    <div class="quote-classic__text">
                      <p>I chose this website to trade bitcoin and a few other currencies. They have clear trading venue with good reputation over the past years and  many exchange directions. Most people I know are using it. I hope to work with Bitcoin more in the future and I will recommend this site to all my colleagues and friends.</p>
                    </div>
                    <div class="quote-classic__meta">
                      <cite class="quote-classic__cite">Bryan Thompson</cite>
                      <p class="quote-classic__info">Businessman </p>
                    </div>
                  </blockquote>
                </div>
                <div class="item">
                  <blockquote class="quote-classic">
                    <div class="quote-classic__text">
                      <p>As an expert in finance, I truly believe that cryptocurrencies are the future. I’m glad to say that your website is a perfect source for both newbies and professionals in bitcoin trading and exchange as it allows to better understand how it works. What’s more important, your team is always ready to help if a user has any questions.</p>
                    </div>
                    <div class="quote-classic__meta">
                      <cite class="quote-classic__cite">Joan McMillan</cite>
                      <p class="quote-classic__info">Finance Expert</p>
                    </div>
                  </blockquote>
                </div>
                <div class="item">
                  <blockquote class="quote-classic">
                    <div class="quote-classic__text">
                      <p>I started bitcoin trading as a hobby and your website was the only source I found on the Internet to be completely reliable. Your Support Team helped me avoid all twists and turns that appeared to be risky and now I can successfully exchange and trade my bitcoins on your website. Thank you for your help and understanding!</p>
                    </div>
                    <div class="quote-classic__meta">
                      <cite class="quote-classic__cite">Sam Wilson</cite>
                      <p class="quote-classic__info">Designer           </p>
                    </div>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="text-extra-large">Feedback</p>
      </section>

      <!-- Our Team-->
      <section class="section section-md bg-white text-center" id="team">
        <div class="container">
          <h6>Investment</h6>
          <h2>Choose your <strong>investment</strong> plan</h2>
          <p>Our packages</p>
          <div class="row row-50">
            <div class="col-lg-4">
              <!-- Profile Modern-->
              <article class="profile-modern">
                <div class="profile-modern__main">
                  <div class="profile-modern__inset">
                    <h4 class="profile-modern__name">PROMO</h4>
                    <h5 class="profile-modern__position">Amount of investment <strong>300$ - 5,999$</strong></h5>
                  </div>
                  <p>
                  ROI 40% per annum
                  </p>
                  <p>
                  ROI 3.4% per month
                  </p>
                </div>
              </article>
            </div>
            <div class="col-lg-4">
              <!-- Profile Modern-->
              <article class="profile-modern">
                <div class="profile-modern__main">
                  <div class="profile-modern__inset">
                    <h4 class="profile-modern__name">Trader</h4>
                    <h5 class="profile-modern__position">Amount of investment <strong>6000$ - 17,999$</strong></h5>
                  </div>
                  <p>
                  ROI 55% per annum
                  </p>
                  <p>
                  ROI 4.6% per month
                  </p>
                </div>
              </article>
            </div>
            <div class="col-lg-4">
              <!-- Profile Modern-->
              <article class="profile-modern">
                <div class="profile-modern__main">
                  <div class="profile-modern__inset">
                    <h4 class="profile-modern__name">Advanced</h4>
                    <h5 class="profile-modern__position">Amount of investment <strong>18,000$ and more</strong></h5>
                  </div>
                  <p>
                  ROI 75% per annum
                  </p>
                  <p>
                  ROI 6.25% per month
                  </p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Download wallet-->
      <!--
      <section class="section section-md bg-gray-700 text-center">
        <div class="container">
          <h6>Download wallet</h6>
          <h2><span class="d-inline-block" style="max-width: 520px;">Wallet makes using and holding <strong>bitcoins</strong> easy.</span></h2>
          <div class="row row-40 offset-top-1">
            <div class="col-6 col-md-3"><a class="box-lily" href="#">
                <div class="icon box-lily__icon mdi mdi-windows"></div>
                <p class="box-lily__title">Windows</p></a></div>
            <div class="col-6 col-md-3"><a class="box-lily" href="#">
                <div class="icon box-lily__icon mdi mdi-linux"></div>
                <p class="box-lily__title">Linux</p></a></div>
            <div class="col-6 col-md-3"><a class="box-lily" href="#">
                <div class="icon box-lily__icon mdi mdi-apple"></div>
                <p class="box-lily__title">IOS</p></a></div>
            <div class="col-6 col-md-3"><a class="box-lily" href="#">
                <div class="icon box-lily__icon mdi mdi-android"></div>
                <p class="box-lily__title">Android</p></a></div>
          </div>
        </div>
      </section>
      -->

      <!-- Mailform-->
      <section class="section section-lg" id="contacts">
        <div class="container">
          <div class="row justify-content-center justify-content-lg-between row-2-columns-bordered row-50">
            <div class="col-md-10 col-lg-4">
              <h3>Get in Touch</h3>
              <ul class="list-creative">
                <li>
                  <dl class="list-terms-medium">
                    <dt>Phones</dt>
                    <dd>
                      <ul class="list-xs">
                        <li><a href="tel:#">+1-800-700-6200</a></li>
                        <li><a href="tel:#">+1-800-955-4567</a></li>
                      </ul>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-medium">
                    <dt>E-mails</dt>
                    <dd>
                      <ul class="list-xs">
                        <li><a href="mailto:#">mail@demolink.org</a></li>
                        <li><a href="mailto:#">info@demolink.org</a></li>
                      </ul>
                    </dd>
                  </dl>
                </li>
              </ul>
            </div>
            <div class="col-md-10 col-lg-7">
              <h3>Contact Form</h3>
              <!-- RD Mailform-->
              <form class="form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-20">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-name">Enter your name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric">
                      <label class="form-label" for="contact-phone">Enter your phone</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Your Message</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email">Enter your e-mail</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <button class="button button-block button-primary" type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Page Footer-->
      <footer class="section footer-classic context-dark">
        <div class="container">
          <div class="footer-classic__main">
            <div class="row row-50">
              <div class="col-lg-6">
                <div class="unit unit-spacing-sm flex-column flex-sm-row align-items-sm-center">
                  <div class="unit-left"><a class="brand" href="index.html"><img class="brand-logo-dark" src="imgsvg/logo-black.svg" alt="" width="105" height="38" srcset="images/logo-default-210x76.png 2x"/><img class="brand-logo-light" src="images/logo-inverse-105x38.png" alt="" width="105" height="38" srcset="imgsvg/logo-black.svg"/></a>
                  </div>
                  <div class="unit-body">
                    <p><span style="max-width: 380px;">Bitcoin is the leading exchange of #1 cryptocurrency offering you the best conversion rates.</span></p>
                  </div>
                </div>
                <!--
                <div class="group group-lg group-middle">
                  <p class="large">Connect with Community</p>
                  <div class="group-item">
                    <ul class="list-inline list-inline-sm">
                      <li><a class="icon icon-lg link-default mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon icon-lg link-default mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon icon-lg link-default mdi mdi-youtube-play" href="#"></a></li>
                      <li><a class="icon icon-lg link-default mdi mdi-instagram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
                -->
              </div>
              <div class="col-lg-6">
                <div class="box-inset-3">
                  <h4>Sign Up for Our Newsletter</h4>
                  <!-- RD Mailform-->
                  <form class="form form-lg form_light rd-mailform form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                    <div class="form-wrap">
                      <input class="form-input" id="footer-subscribe-form-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="footer-subscribe-form-email">Enter your e-mail</label>
                    </div>
                    <div class="form-button">
                      <button class="button button-color-2" type="submit">Subscribe</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="footer-classic__aside">
            <div class="list-wrap">
              <ul class="list-nav">
                <li><a href="#">FAQ</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">News</a></li>
                <li>
                  <button data-toggle="modal" data-target="#modal-login-register">Sign In</button>
                </li>
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Contacts</a></li>
              </ul>
            </div>
            <div class="list-wrap">
              <ul class="list-bordered">
                <li>
                  <!-- Rights-->
                  <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Swifty</span><span>.&nbsp;</span></p>
                </li>
                <li><a href="mailto:#">info@demolink.org</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <!-- Modal Login/Register-->
    <div class="modal modal-login-register fade" id="modal-login-register" tabindex="-1" role="dialog" aria-labelledby="modal-login-register-label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="font-weight-bold modal-title" id="modal-login-register-label">Login Form</h2>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <div class="group-sm group-sm-justify"><a class="button button-sm button-facebook button-icon button-icon-left" href="#"><span class="icon fa fa-facebook"></span>Facebook</a><a class="button button-sm button-twitter button-icon button-icon-left" href="#"><span class="icon fa fa-twitter"></span>Twitter</a><a class="button button-sm button-google button-icon button-icon-left" href="#"><span class="icon fa fa-google-plus"></span>Google+</a></div>
            <p class="text-uppercase">or</p>
            <!-- RD Mailform-->
            <form class="form rd-mailform form-centered">
              <div class="form-wrap">
                <input class="form-input" id="popup-form-login-email" type="email" name="email" data-constraints="@Email @Required">
                <label class="form-label" for="popup-form-login-email">E-mail</label>
              </div>
              <div class="form-wrap">
                <input class="form-input" id="popup-form-login-password" type="password" name="password" data-constraints="@Required">
                <label class="form-label" for="popup-form-login-password">Password</label>
              </div>
              <div class="form-wrap">
                <label class="checkbox-inline">
                  <input name="checkbox" value="checkbox-1" type="checkbox" checked>Remember me 
                </label>
              </div>
              <div class="group"> 
                <button class="button button-primary" type="submit">Login</button>
                <button class="button button-default-outline">Create an Account</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{!! asset('js/core.js') !!}"></script>
    <script src="{!! asset('js/script.js') !!}"></script>
    <script src="https://widgets.bitcoin.com/widget.js"></script>
    <!-- coded by Himic-->

  </body>
</html>