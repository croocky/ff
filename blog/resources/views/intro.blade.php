@extends('lay.index')
@section('content')


<div class="chart">
</div>



    <ul class="cb-slideshow">
        <li><span>Image 01</span><div><h3>CRYP·TO·CUR·RENCY</h3></div></li>
        <li><span>Image 02</span><div><h3>IN·VEST·MENTS</h3></div></li>
        <li><span>Image 03</span><div><h3>IN·DE·PEN·DEN·CE</h3></div></li>
        <li><span>Image 04</span><div><h3>BIT·COIN</h3></div></li>
        <li><span>Image 05</span><div><h3>BLOCK·CHAIN</h3></div></li>
        <li><span>Image 06</span><div><h3>WIS·DOM</h3></div></li>
    </ul>

    <div class="superstar">
      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
    </div>

    <div class="button-registration"><a href="/login" class="button-registration__inner">Registration</div></a>

    <div class=" bg_black">
      <div class="sector">
      <div class="heading text_white">ADVANTAGES</div>
      <div class="row text-center">
        <div class="four columns">
          <div class="subheading"> Growth dynamics</div>
          <img src="{{ asset('imgsvg/i-increase.svg') }}" alt="Increase" class="i-big">
          <div class="text text_small-width">Stable and steady growth of the crypto currencies rate</div>
        </div>
        <div class="four columns">
          <div class="subheading"> Security</div>
          <img src="{{ asset('imgsvg/i-secure.svg') }}" alt="Increase" class="i-big">
          <div class="text text_small-width">Cryptocurrencies are digital assets that use cryptography, an encryption technique, for security. </div>
        </div>
        <div class="four columns">
          <div class="subheading">Everywhere</div>
          <img src="{{ asset('imgsvg/i-world.svg') }}" alt="Increase" class="i-big">
          <div class="text text_small-width">
            You can use the currency anywhere in the worldе</div>
        </div>
      </div>
    </div>
    </div>



    <div class="sector">
        <div  class="heading">Geography of the company</div>
        <img src="{{ asset('imgsvg/world.svg') }}" class="img_full-page" alt="heading">
        <br>
        <div class="row text-center">
          <div class="three columns">
            <img src="{{ asset('imgsvg/germany.svg') }}" alt="Germany" class="i-flag">
            <div class="subheading subheading_thin">Germany</div>
          </div>
          <div class="three columns">
            <img src="{{ asset('imgsvg/belgium.svg') }}" alt="Belgium" class="i-flag">
            <div class="subheading subheading_thin">Belgium</div>
          </div>
          <div class="three columns">
            <img src="{{ asset('imgsvg/czech-republic.svg') }}" alt="Belgium" class="i-flag">
            <div class="subheading subheading_thin">Czech Republic</div>
          </div>
          <div class="three columns">
            <img src="{{ asset('imgsvg/denmark.svg') }}" alt="Denmark" class="i-flag">
            <div class="subheading subheading_thin">Denmark</div>
          </div>
        </div>
    </div>

    <div class="bg_black">
      <div class="sector">
        <div class="heading heading_white">Cryptocurrencies</div>
        <div class="row cryptostats">
          <div class="four columns">
            <p class="cryptostats__heading">1 <img src="{{ asset('imgsvg/cc_white/btc.svg') }}" alt="BTC"> BTC = 14550$</p>
            <img class="cryptostats__img" src="{{ asset('imgsvg/cryptostats/1.svg') }}" alt="BTC GRAPH">
          </div>
          <div class="four columns">
            <p class="cryptostats__heading">1 <img src="{{ asset('imgsvg/cc_white/eth.svg') }}" alt="ETH"> ETH = 1228$</p>
            <img class="cryptostats__img" src="{{ asset('imgsvg/cryptostats/2.svg') }}" alt="ETH GRAPH">
          </div>
          <div class="four columns">
            <p class="cryptostats__heading">1 <img src="{{ asset('imgsvg/cc_white/ltc.svg') }}" alt="LTC"> LTC = 250$</p>
            <img class="cryptostats__img" src="{{ asset('imgsvg/cryptostats/3.svg') }}" alt="LTC GRAPH">
          </div>
        </div>
      </div>



    </div>

    <div class="sector promo-block__wrapper">
        <div class="heading">Choose your investment plan</div>
        <div class="row">
          <div class="four columns">
            <div class="promo-block">
              <div class="promo-block__heading">
                PROMO
              </div>
              <div class="promo-block__body">
                <div class="promo-block__img-wrapper">
                  <img class="promo-block__img" src="{{ asset('imgsvg/packages/1.svg') }}" alt="Icon">
                </div>
                <div class="promo-block__body-inner">
                  <div class="promo-block__body-label">
                  Amount of investment</div>
                  <div class="promo-block__body-content">300$ - 5,999$</div>
                </div>
              </div>
              <div class="promo-block__subheading">
                ROI
              </div>
              <div class="promo-block__footer">
                <div class="promo-block__footer-item">
                  <div class="promo-block__footer-item-content">
                    40%
                  </div>
                  <div class="promo-block__footer-item-label">
                    per annum
                  </div>
                </div>
                <div class="promo-block__footer-item">
                  <div class="promo-block__footer-item-content">
                    3.4%
                  </div>
                  <div class="promo-block__footer-item-label">
                    per month
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="four columns">
            <div class="promo-block">
              <div class="promo-block__heading">
                Trader
              </div>
              <div class="promo-block__body">
                <div class="promo-block__img-wrapper">
                  <img class="promo-block__img" src="{{ asset('imgsvg/packages/2.svg') }}" alt="Icon">
                </div>
                <div class="promo-block__body-inner">
                  <div class="promo-block__body-label"> Amount of investment</div>
                  <div class="promo-block__body-content">6000$ - 17,999$</div>
                </div>
              </div>
              <div class="promo-block__subheading">
                ROI
              </div>
              <div class="promo-block__footer">
                <div class="promo-block__footer-item">
                  <div class="promo-block__footer-item-content">
                    55%
                  </div>
                  <div class="promo-block__footer-item-label">
                    per annum
                  </div>
                </div>
                <div class="promo-block__footer-item">
                  <div class="promo-block__footer-item-content">
                    4.6%
                  </div>
                  <div class="promo-block__footer-item-label">
                    per month
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="four columns">
            <div class="promo-block">
              <div class="promo-block__heading">
                Advanced
              </div>
              <div class="promo-block__body">
                <div class="promo-block__img-wrapper">
                  <img class="promo-block__img" src="{{ asset('imgsvg/packages/3.svg') }}" alt="Icon">
                </div>
                <div class="promo-block__body-inner">
                  <div class="promo-block__body-label"> Amount of investment</div>
                  <div class="promo-block__body-content">6000$ - 17,999$</div>
                </div>
              </div>
              <div class="promo-block__subheading">
                ROI
              </div>
              <div class="promo-block__footer">
                <div class="promo-block__footer-item">
                  <div class="promo-block__footer-item-content">
                   75%
                  </div>
                  <div class="promo-block__footer-item-label">
                    per annum
                  </div>
                </div>
                <div class="promo-block__footer-item">
                  <div class="promo-block__footer-item-content">
                    6.25%
                  </div>
                  <div class="promo-block__footer-item-label">
                    per month
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>

  <footer class="footer">THERE SHOULD BE FOOTER</footer>

  </div>




@endsection
