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

    <div class="sector bg_black">
      <div class="heading text_white">ADVANTAGES</div>
      <div class="row text-center">
        <div class="four columns">
          <div class="subheading"> НЕВЕРОЯТНЫИ РОСТ</div>
          <img src="{{ asset('imgsvg/i-increase.svg') }}" alt="Increase" class="i-big">
          <div class="text text_small-width">Тут быквы чисто для примера, ну думаю хватит, еще чутка, и еще</div>
        </div>
        <div class="four columns">
          <div class="subheading"> ЗАМОК WI-FI</div>
          <img src="{{ asset('imgsvg/i-secure.svg') }}" alt="Increase" class="i-big">
          <div class="text text_small-width">Тут быквы чисто для примера, ну думаю хватит, еще чутка, и еще</div>
        </div>
        <div class="four columns">
          <div class="subheading">ПЛАНЕТА ЗЕМЛЯ</div>
          <img src="{{ asset('imgsvg/i-world.svg') }}" alt="Increase" class="i-big">
          <div class="text text_small-width">Тут быквы чисто для примера, ну думаю хватит, еще чутка, и еще</div>
        </div>
      </div>

    </div>



    <div class="sector">
        <div class="heading">FOR TRAIDERS</div>
        <img src="{{ asset('imgsvg/world.svg') }}" class="img_full-page" alt="heading">
        <br>
        <div class="row text-center">
          <div class="three columns">
            <img src="{{ asset('imgsvg/germany.svg') }}" alt="Germany" class="i-flag">
            <div class="subheading subheading_thin">Германия</div>
          </div>
          <div class="three columns">
            <img src="{{ asset('imgsvg/belgium.svg') }}" alt="Belgium" class="i-flag">
            <div class="subheading subheading_thin">Бельгия</div>
          </div>
          <div class="three columns">
            <img src="{{ asset('imgsvg/czech-republic.svg') }}" alt="Belgium" class="i-flag">
            <div class="subheading subheading_thin">Чехия</div>
          </div>
          <div class="three columns">
            <img src="{{ asset('imgsvg/denmark.svg') }}" alt="Denmark" class="i-flag">
            <div class="subheading subheading_thin">Дания</div>
          </div>
        </div>
    </div>

    <div class="sector bg_black">
      <div class="heading">FAQ</div>
      <div class="row">
        <div class="six columns">
          <div class="subheading-small">1. Question</div>
          <div class="text">Summer is almost here and what better way to motivate your employees than with an abundance of brand name gifts that are perfect for summer activities! Whether you already have an employee incentive</div>
        </div>
        <div class="six columns">
          <div class="subheading-small">1. Question</div>
          <div class="text">Summer is almost here and what better way to motivate your employees than with an abundance of brand name gifts that are perfect for summer activities! Whether you already have an employee incentive</div>
        </div>
      </div>

      <div class="row">
        <div class="six columns">
          <div class="subheading-small">1. Question</div>
          <div class="text">Summer is almost here and what better way to motivate your employees than with an abundance of brand name gifts that are perfect for summer activities! Whether you already have an employee incentive</div>
        </div>
        <div class="six columns">
          <div class="subheading-small">1. Question</div>
          <div class="text">Summer is almost here and what better way to motivate your employees than with an abundance of brand name gifts that are perfect for summer activities! Whether you already have an employee incentive</div>
        </div>
      </div>

      <div class="row">
        <div class="six columns">
          <div class="subheading-small">1. Question</div>
          <div class="text">Summer is almost here and what better way to motivate your employees than with an abundance of brand name gifts that are perfect for summer activities! Whether you already have an employee incentive</div>
        </div>
        <div class="six columns">
          <div class="subheading-small">1. Question</div>
          <div class="text">Summer is almost here and what better way to motivate your employees than with an abundance of brand name gifts that are perfect for summer activities! Whether you already have an employee incentive</div>
        </div>
      </div>



    </div>

    <div class="sector promo-block__wrapper">
        <div class="heading">ПАКЕТЫ ИНВЕСТИЦИЙ</div>
        <div class="row">
          <div class="four columns">
            <div class="promo-block">
              <div class="promo-block__heading">
                PROMO
              </div>
              <div class="promo-block__body">
                <div class="promo-block__body-label">СУММА ИНВЕСТИЦИЙ</div>
                <div class="promo-block__body-content">300$ - 5,999$</div>
              </div>
              <div class="promo-block__subheading">
                Доходность
              </div>
              <div class="promo-block__footer">
                <div class="promo-block__footer-item">
                  <div class="promo-block__footer-item-content">
                    40%
                  </div>
                  <div class="promo-block__footer-item-label">
                    в год
                  </div>
                </div>
                <div class="promo-block__footer-item">
                  <div class="promo-block__footer-item-content">
                    3.4%
                  </div>
                  <div class="promo-block__footer-item-label">
                    в месяц
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="four columns">
            <div class="promo-block">
              <div class="promo-block__heading">
                PROMO
              </div>
              <div class="promo-block__body">
                <div class="promo-block__body-label">СУММА ИНВЕСТИЦИЙ</div>
                <div class="promo-block__body-content">300$ - 5,999$</div>
              </div>
              <div class="promo-block__subheading">
                Доходность
              </div>
              <div class="promo-block__footer">
                <div class="promo-block__footer-item">
                  <div class="promo-block__footer-item-content">
                    40%
                  </div>
                  <div class="promo-block__footer-item-label">
                    в год
                  </div>
                </div>
                <div class="promo-block__footer-item">
                  <div class="promo-block__footer-item-content">
                    3.4%
                  </div>
                  <div class="promo-block__footer-item-label">
                    в месяц
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="four columns">
            <div class="promo-block">
              <div class="promo-block__heading">
                PROMO
              </div>
              <div class="promo-block__body">
                <div class="promo-block__body-label">СУММА ИНВЕСТИЦИЙ</div>
                <div class="promo-block__body-content">300$ - 5,999$</div>
              </div>
              <div class="promo-block__subheading">
                Доходность
              </div>
              <div class="promo-block__footer">
                <div class="promo-block__footer-item">
                  <div class="promo-block__footer-item-content">
                    40%
                  </div>
                  <div class="promo-block__footer-item-label">
                    в год
                  </div>
                </div>
                <div class="promo-block__footer-item">
                  <div class="promo-block__footer-item-content">
                    3.4%
                  </div>
                  <div class="promo-block__footer-item-label">
                    в месяц
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>



  </div>


  <footer class="footer">THERE SHOULD BE FOOTER</footer>


@endsection
