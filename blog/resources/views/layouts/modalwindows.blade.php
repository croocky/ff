<div class="login rightsidebar">
  <div class="login__heading-nav">
    <div class="login__heading-nav-item login__heading-nav-item_active">
      Войти
    </div>
    <div class="login__heading-nav-item ">
      Регистрация
    </div>
  </div>
  <div class="login__content">
    <form action ='{{Route("login")}}' method = 'post'>
    <input name ='login' type="text">
    <input name ='password' type="password">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <input type="submit" value="Войти">
    </form>
    <div class="login__lable">
      <div class="login__lable-item">
        <img class="login__lable-item-img" src="imgsvg/cap.svg" alt="Cap">
        <span class="login__lable-item-text">Ваши инвестиции застрахованны</span>
      </div>
      <div class="login__lable-item">
        <img class="login__lable-item-img" src="imgsvg/visa.svg" alt="Visa">
        <span class="login__lable-item-text">Выплаты на международные платежные  системы</span>
      </div>
      <div class="login__lable-item">
        <img class="login__lable-item-img" src="imgsvg/key.svg" alt="Key">
        <span class="login__lable-item-text">Ваши персональные данные под надежной защитой</span>
      </div>
    </div>


  </div>
</div>
