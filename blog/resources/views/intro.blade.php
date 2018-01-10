@extends('lay.index')
@section('content')


<div class="cryptostats">
  <div class="">
    <p class="cryptostats__heading">1 <img src="{{ asset('imgsvg/cc_white/btc.svg') }}" alt="BTC"> BTC = 14550$</p>
    <img class="cryptostats__img" src="{{ asset('imgsvg/cryptostats/1.svg') }}" alt="BTC GRAPH">
  </div>
  <div class="">
    <p class="cryptostats__heading">1 <img src="{{ asset('imgsvg/cc_white/eth.svg') }}" alt="ETH"> ETH = 1228$</p>
    <img class="cryptostats__img" src="{{ asset('imgsvg/cryptostats/2.svg') }}" alt="ETH GRAPH">
  </div>
  <div class="">
    <p class="cryptostats__heading">1 <img src="{{ asset('imgsvg/cc_white/ltc.svg') }}" alt="LTC"> LTC = 250$</p>
    <img class="cryptostats__img" src="{{ asset('imgsvg/cryptostats/3.svg') }}" alt="LTC GRAPH">
  </div>
</div>


@endsection
