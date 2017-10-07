<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Swifty</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="{!! asset('css/all.css') !!}">


  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

</head>
<body>
  <div class="content content_guest">
      //= templates/header.html

      <div class="content__inner">

        <div class="sector sector_mini profile">
          <div class="profile">
              <div class="profile__left padding bg_light">
                <div class="profile-level">
                  <div class="profile-level__heading">
                    <img class="profile-level__heading-i" src="imgsvg/medal.svg" alt="Medal">
                   <div class="profile-level__heading-login">@<span class="profile-level__heading-login-data">Vladislavn</span></div>
                    <div class="profile-level__heading-level">Уровень <span class="profile-level__heading-level-data">3</span></div>
                  </div>

                  <div class="level-bar">
                    <div class="level-bar__ready"></div>
                    <div class="level-bar__t">$27000/$40000</div>
                  </div>

                  <div class="profile-level__alreadygot">
                      <div class="profile-level__alreadygot-heading">
                        <span class="profile-level__alreadygot-heading-data">7</span>% Выплата
                      </div>
                      <div class="profile-level__willget-heading">
                        <span class="profile-level__willget-heading-data">11</span>% Следующий уровень выплаты
                      </div>
                  </div>

                  <div class="profile-level__awards">
                    <div class="profile-level__awards-heading">Премии</div>
                    <div class="profile-level__awards-list">
                      <img class="profile-level__awards-list-item" src="imgsvg/medal.svg" alt="Medal">
                      <img class="profile-level__awards-list-item" src="imgsvg/medal.svg" alt="Medal">
                      <img class="profile-level__awards-list-item" src="imgsvg/medal.svg" alt="Medal">
                      <img class="profile-level__awards-list-item" src="imgsvg/medal2.svg" alt="Medal">

                      <img class="profile-level__awards-list-item" src="imgsvg/medal3.svg" alt="Medal">
                      <img class="profile-level__awards-list-item" src="imgsvg/medal3.svg" alt="Medal">
                      <img class="profile-level__awards-list-item" src="imgsvg/medal3.svg" alt="Medal">
                      <img class="profile-level__awards-list-item" src="imgsvg/medal3.svg" alt="Medal">
                      <img class="profile-level__awards-list-item" src="imgsvg/medal3.svg" alt="Medal">
                      <img class="profile-level__awards-list-item" src="imgsvg/medal3.svg" alt="Medal">
                    </div>
                  </div>

                  <div class="profile-level__chalenge-list">
                    <div class="profile-level__chalenge-list-item profile-level__chalenge-list-item_done">
                      <img class="profile-level__chalenge-list-item-i" src="imgsvg/checked.svg" alt="Checked">
                      <div class="profile-level__chalenge-list-item-t">Уровень 3 +$1000</div>
                    </div>
                    <div class="profile-level__chalenge-list-item">
                      <img class="profile-level__chalenge-list-item-i" src="imgsvg/checked2.svg" alt="Checked">
                      <div class="profile-level__chalenge-list-item-t">Уровень 4 +$2500 (вклад структуры $40000, личный вклад $5000)</div>
                    </div>
                  </div>

                  <div class="button">Посмотреть все премии</div>

                  <div class="profile-level__contribution">
                    <div class="profile-level__contribution-item">
                      <span  class="profile-level__contribution-item-amount">$
                        <span class="profile-level__contribution-item-amount-data">1400</span>
                      </span>
                      <div class="profile-level__contribution-item-lable">
                        Личный вклад
                      </div>
                    </div>
                    <div class="profile-level__contribution-item">
                      <span  class="profile-level__contribution-item-amount">$
                        <span class="profile-level__contribution-item-amount-data">27000</span>
                      </span>
                      <div class="profile-level__contribution-item-lable">
                        Вклад структуры
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="profile__right padding">
                <div class="heading">Моя структура</div>
                <div class="structure">
                  <div class="structure__heading">
                    <div class="structure__item">
                      <img class="structure__item-img" src="imgsvg/profile.svg" alt="Profile">
                      <div class="structure__item-name">vladislavn</div>
                      <div class="structure__item-contrubution">1400$</div>
                    </div>
                  </div>

                  <div class="structure__level-heading">Рефералы уровня 1</div>
                  <div class="row">
                    <div class="three columns">
                      <div class="structure__item">
                        <div class="structure__item-lead">vladislavn</div>
                        <img class="structure__item-img" src="imgsvg/profile.svg" alt="Profile">
                        <div class="structure__item-name">vladislavn</div>
                        <div class="structure__item-contrubution">1400$</div>
                      </div>
                    </div>
                    <div class="three columns">
                      <div class="structure__item">
                        <div class="structure__item-lead">vladislavn</div>
                        <img class="structure__item-img" src="imgsvg/profile.svg" alt="Profile">
                        <div class="structure__item-name">vladislavn</div>
                        <div class="structure__item-contrubution">1400$</div>
                      </div>
                    </div>
                    <div class="three columns">
                      <div class="structure__item">
                        <div class="structure__item-lead">vladislavn</div>
                        <img class="structure__item-img" src="imgsvg/profile.svg" alt="Profile">
                        <div class="structure__item-name">vladislavn</div>
                        <div class="structure__item-contrubution">1400$</div>
                      </div>
                    </div>
                    <div class="three columns">
                      <div class="structure__item">
                        <div class="structure__item-lead">vladislavn</div>
                        <img class="structure__item-img" src="imgsvg/profile.svg" alt="Profile">
                        <div class="structure__item-name">vladislavn</div>
                        <div class="structure__item-contrubution">1400$</div>
                      </div>
                    </div>

                  </div>

                  <div class="structure__level-heading">Рефералы уровня 2</div>
                  <div class="row">
                    <div class="three columns">
                      <div class="structure__item">
                        <div class="structure__item-lead">vladislavn</div>
                        <img class="structure__item-img" src="imgsvg/profile.svg" alt="Profile">
                        <div class="structure__item-name">vladislavn</div>
                        <div class="structure__item-contrubution">1400$</div>
                      </div>
                    </div>
                    <div class="three columns">
                      <div class="structure__item">
                        <div class="structure__item-lead">vladislavn</div>
                        <img class="structure__item-img" src="imgsvg/profile.svg" alt="Profile">
                        <div class="structure__item-name">vladislavn</div>
                        <div class="structure__item-contrubution">1400$</div>
                      </div>
                    </div>
                    <div class="three columns">
                      <div class="structure__item">
                        <div class="structure__item-lead">vladislavn</div>
                        <img class="structure__item-img" src="imgsvg/profile.svg" alt="Profile">
                        <div class="structure__item-name">vladislavn</div>
                        <div class="structure__item-contrubution">1400$</div>
                      </div>
                    </div>
                    <div class="three columns">
                      <div class="structure__item">
                        <div class="structure__item-lead">vladislavn</div>
                        <img class="structure__item-img" src="imgsvg/profile.svg" alt="Profile">
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


      </div>


    </div>

    <div class="rightsidebar login">
      <div class="profile-nav">
        <div class="profile-nav__heading">
          <img class="profile-nav__heading-img" src="imgsvg/profile.svg" alt="Photo">
          <div class="profile-nav__heading-name">Владислав Назаров</div>
          <div class="profile-nav__heading-login">@<span class="profile-nav__heading-login-data">vladislavn</span></div>
        </div>
        <div class="profile-nav__wallet">
          <img class="profile-nav__wallet-i" src="imgsvg/wallet.svg" alt="Photo">
          <div class="profile-nav__wallet-lable">Личный счет #<span class="profile-nav__wallet-lable-data">000001995</span></div>
          <div class="profile-nav__wallet-amount"><img class="profile-nav__wallet-amount-i" src="imgsvg/dollar.svg" alt="$"><span class="profile-nav__wallet-amount-data">1488.00</span></div>
        </div>
        <a href="#" class="profile-nav__big-b">
          Пополнить счет
        </a>
        <div class="profile-nav__select">
          <a href="#" class="profile-nav__select-item profile-nav__select-item_active">
            Партнерская программа
          </a>
          <a href="#" class="profile-nav__select-item">
            Инвестиции в майнинг
          </a>
        </div>
        <div class="profile-nav__list">
          <a href="#" class="profile-nav__list-item">
            <img src="imgsvg/structura.svg" class="profile-nav__list-item-i" alt="">
            <span class="profile-nav__list-item-t">Cтруктура</span>
          </a>
          <a href="#" class="profile-nav__list-item">
            <img src="imgsvg/history.svg" class="profile-nav__list-item-i" alt="">
            <span class="profile-nav__list-item-t">История операций</span>
          </a>
          <a href="#" class="profile-nav__list-item">
            <img src="imgsvg/getmoney.svg" class="profile-nav__list-item-i" alt="">
            <span class="profile-nav__list-item-t">Вывод средств</span>
          </a>
          <a href="#" class="profile-nav__list-item">
            <img src="imgsvg/cogs.svg" class="profile-nav__list-item-i" alt="">
            <span class="profile-nav__list-item-t">Настройки</span>
          </a>
        </div>

      </div>
    </div>

</body>
</html>
