@extends('lay.index')
@section('content')


<div class="chart">
</div>



    <ul class="cb-slideshow">
        <li><span>Image 01</span><div><h3>тех·но·логии</h3></div></li>
        <li><span>Image 02</span><div><h3>com·po·sure</h3></div></li>
        <li><span>Image 03</span><div><h3>e·qua·nim·i·ty</h3></div></li>
        <li><span>Image 04</span><div><h3>bal·ance</h3></div></li>
        <li><span>Image 05</span><div><h3>qui·e·tude</h3></div></li>
        <li><span>Image 06</span><div><h3>re·lax·a·tion</h3></div></li>
    </ul>

    <div class="superstar">
      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
    </div>

    <div class="button-registration"><a href="/login" class="button-registration__inner">Registation</div></a>

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



  </div>


  <footer class="footer">THERE SHOULD BE FOOTER</footer>


@endsection
