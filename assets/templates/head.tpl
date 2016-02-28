  <div class="row">
    <div class="col-md-4 col-lg-4 col-sm-4 " style="padding-bottom: 15px;">
      <h1>Stock Balance</h1><b style="font-size: 12px; padding-left:120px;">Покупка и продажа неликвидов</b>
    </div>
    <div class="col-md-4 col-lg-3 col-sm-5 pull-right" style="padding-top: 25px;padding-bottom: 15px;">
      <button class="btn btn-primary btn-md " data-toggle="modal" data-target="#ModalLog">Панель входа</button>
      <button class="btn btn-default btn-md " data-toggle="modal" data-target="#ModalReg">Регистрация</button>
    </div>
  </div>
<div class="row" style="padding-right: 15px; padding-left: 15px;">
  <nav class="navbar navbar-default" style="background: #006DAE;border: #006DAE; color: #ffffff;">
  <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse"
          data-target="#nbar">
            <span class="sr-only">Открыть навигацию</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div> 
  <div class="navbar-collapse collapse" id="nbar" style="padding-top: 5px; border-radius: 3px;">
      <ul class="nav nav-justified">
        <li><a href="<? echo Site::url(); ?>"><span class="glyphicon-news"><i class="material-icons">assignment</i></span>Новости</a></li>
        <li><a href="<? echo Site::url(); ?>?view=namen"><span class="glyphicon-news"><i class="material-icons">description</i></span>Наменклатура</a></li>
        <li><a href="<? echo Site::url(); ?>?view=product"><span class="glyphicon-news"><i class="material-icons">shopping_cart</i></span>Продукция</a></li>
        <li><a href="<? echo Site::url(); ?>?view=factory"><span class="glyphicon-news"><i class="material-icons">home</i></span>Предприятия</a></li>
        <li><a href="<? echo Site::url(); ?>?view=req"><span class="glyphicon-news"><i class="material-icons">create</i></span>Отзывы</a></li>
        <li><a href="<? echo Site::url(); ?>?view=contact"><span class="glyphicon-news"><i class="material-icons">phone</i></span>Контакты</a></li>
      </ul>
  </div>
</nav>   
</div>
<div class="row" style="padding-bottom: 20px;">
  <div class="col-lg-6">
      <div class="input-group">
          <input type="text" class="form-control" id="search-inp" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" id="search-btn" type="button">Go!</button>
          </span>
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
</div>
<!-- Login -->
<div class="modal fade" id="ModalLog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Вход в личный кабинет</h4>
      </div>
      <div class="modal-body" id="Modal-Body">
      	<div class="form-group">
    		<label for="exampleInputEmail1">Логин</label>
    		<input type="email" class="form-control" id="loginIn" name="loginIn" placeholder="Введите Логин">
  		</div>
  		<div class="form-group">
    		<label for="exampleInputPassword1">Пароль</label>
    		<input type="password" class="form-control" id="passIn" name="passIn" placeholder="Пароль">
  		</div>
      	<button type="button" id="loading-login-btn" data-loading-text="Loading..." class="btn btn-primary ">Войти</button>
      	<p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<!-- end login -->
<!-- reg -->
<div class="modal fade" id="ModalReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Регистрация</h4>
      </div>
      <div class="modal-body" id="Modal-Body">
  		<div class="form-group">
    		<label for="exampleInputEmail1">Email</label>
    		<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите email">
  		</div>
  		<div class="form-group">
    		<label for="exampleInputPassword1">Пароль</label>
    		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
  		</div>
  		<div class="checkbox">
    		<label>
          		<input type="checkbox"> Я согласено на <a href="\">Условия сайта</a>
        	</label>
  		</div>
      	<button type="button" id="loading-login-btn" data-loading-text="Loading..." class="btn btn-primary">Войти</button>
      	<p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<!-- end reg -->
