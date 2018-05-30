@extends('lay.index')
@section('content')


        <div class="sector sector_mini profile">
          <div class="profile">
              <div class="profile__left padding bg_light">
                <div class="profile-level">
                  <div class="profile-level__heading">
                    <img class="profile-level__heading-i" src="/imgsvg/medal.svg" alt="Medal">
                   <div class="profile-level__heading-login"><span class="profile-level__heading-login-data"> {{ $user->name }}</span></div>
                    <div class="profile-level__heading-level">Level <span class="profile-level__heading-level-data"></span></div>
                  </div>

                  <div class="level-bar">
                    <div class="level-bar__ready"></div>
                    <div class="level-bar__t">${{ $user->deposit }}/$</div>
                  </div>

                  <div class="profile-level__alreadygot">
                      <div class="profile-level__alreadygot-heading">
                        <span class="profile-level__alreadygot-heading-data"></span>% Payout
                      </div>
                      <div class="profile-level__willget-heading">
                        <span class="profile-level__willget-heading-data">11</span>% Payout on next level
                      </div>
                  </div>

                  <div class="profile-level__awards">
                    <div class="profile-level__awards-heading">Awards</div>
                    <div class="profile-level__awards-list">
                      <img class="profile-level__awards-list-item" src="/imgsvg/medal.svg" alt="Medal">
                      <img class="profile-level__awards-list-item" src="/imgsvg/medal.svg" alt="Medal">
                      <img class="profile-level__awards-list-item" src="/imgsvg/medal.svg" alt="Medal">
                      <img class="profile-level__awards-list-item" src="/imgsvg/medal2.svg" alt="Medal">

                      <img class="profile-level__awards-list-item" src="/imgsvg/medal3.svg" alt="Medal">
                      <img class="profile-level__awards-list-item" src="/imgsvg/medal3.svg" alt="Medal">
                      <img class="profile-level__awards-list-item" src="/imgsvg/medal3.svg" alt="Medal">
                      <img class="profile-level__awards-list-item" src="/imgsvg/medal3.svg" alt="Medal">
                      <img class="profile-level__awards-list-item" src="/imgsvg/medal3.svg" alt="Medal">
                    </div>
                  </div>

                  <div class="profile-level__chalenge-list">
                    <div class="profile-level__chalenge-list-item profile-level__chalenge-list-item_done">
                      <img class="profile-level__chalenge-list-item-i" src="/imgsvg/checked.svg" alt="Checked">
                      <div class="profile-level__chalenge-list-item-t">Lvl 3 +$1000</div>
                    </div>
                    <div class="profile-level__chalenge-list-item">
                      <img class="profile-level__chalenge-list-item-i" src="/imgsvg/checked2.svg" alt="Checked">
                      <div class="profile-level__chalenge-list-item-t">Lvl 4 +$2500 </div>
                    </div>
                  </div>

                  <div class="button">Show all</div>

                  <div class="profile-level__contribution">
                    <div class="profile-level__contribution-item">
                      <span  class="profile-level__contribution-item-amount">$
                        <span class="profile-level__contribution-item-amount-data">{{ $user->deposit }}</span>
                      </span>
                      <div class="profile-level__contribution-item-lable">
                        Personal deposit
                      </div>
                    </div>
                    <div class="profile-level__contribution-item">
                      <span  class="profile-level__contribution-item-amount">$
                        <span class="profile-level__contribution-item-amount-data">27000</span>
                      </span>
                      <div class="profile-level__contribution-item-lable">
                        Whole structure deposit
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="profile__right padding">
                <div class="heading">My Structure</div>
                <div class="structure">
                  <div class="structure__heading">
                    <div class="structure__item">
                      <img class="structure__item-img" src="/imgsvg/profile.svg" alt="Profile">
                      <div class="structure__item-name">{{ $user->login }}</div>
                      <div class="structure__item-contrubution">{{ $user->deposit }}</div>
                    </div>
                  </div>

                  <div class="structure__level-heading">Direct Refferals</div>
                  <div class="row">
                    <!--
                  /*  @foreach ($first as $element)
                      <div class="three columns">
                        <div class="structure__item">
                          <div class="structure__item-lead">{{ $element['name'] }}</div>
                          <img class="structure__item-img" src="/imgsvg/profile.svg" alt="Profile">
                          <div class="structure__item-name">{{ $element['name'] }}</div>
                          <div class="structure__item-contrubution">{{ $element['deposit'] }}$</div>
                        </div>
                      </div>

                   @endforeach */

                   -->
                  </div>

                  <div class="structure__level-heading">Рефералы уровня 2</div>
                  <div class="row">
                    <div class="three columns">
                      <div class="structure__item">
                        <div class="structure__item-lead">vladislavn</div>
                        <img class="structure__item-img" src="/imgsvg/profile.svg" alt="Profile">
                        <div class="structure__item-name">vladislavn</div>
                        <div class="structure__item-contrubution">1400$</div>
                      </div>
                    </div>
                    <div class="three columns">
                      <div class="structure__item">
                        <div class="structure__item-lead">vladislavn</div>
                        <img class="structure__item-img" src="/imgsvg/profile.svg" alt="Profile">
                        <div class="structure__item-name">vladislavn</div>
                        <div class="structure__item-contrubution">1400$</div>
                      </div>
                    </div>
                    <div class="three columns">
                      <div class="structure__item">
                        <div class="structure__item-lead">vladislavn</div>
                        <img class="structure__item-img" src="/imgsvg/profile.svg" alt="Profile">
                        <div class="structure__item-name">vladislavn</div>
                        <div class="structure__item-contrubution">1400$</div>
                      </div>
                    </div>
                    <div class="three columns">
                      <div class="structure__item">
                        <div class="structure__item-lead">vladislavn</div>
                        <img class="structure__item-img" src="/imgsvg/profile.svg" alt="Profile">
                        <div class="structure__item-name">vladislavn</div>
                        <div class="structure__item-contrubution">1400$</div>
                      </div>
                    </div>
                  </div>
                  <div class="structure__total-amount">Количество человек в структуре <span class="structure__total-amount-data">9</span></div>
                  <div class="text-center">
                    <a class="button" href="#">Посмотреть полную карту</a>
                  </div>

                </div>
              </div>
          </div>
        </div>



      @endsection
