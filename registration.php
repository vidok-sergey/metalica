
<? include 'inc/header.php'; ?>

<div id="profbg">
	<? include 'inc/bread.php'; ?>
	<div id="content">
		<? include 'inc/leftside_profile.php'; ?>
		<div class="profile">
			<h1>Регистрация</h1>
			<div class="loginform">
				<div clas="ava"><img class="ava" src="images/ava.jpg"></div>
				<form>
					<span>ЮРИДИЧЕСКИЙ СТАТУС</span>
					<input class="go_save" type="radio" id='r1' name="">
					<label for="r1">Физическое лицо</label>
					<input class="go_save" type="radio" id='r2' name="">
					<label for="r2">Юридическое лицо</label>
					<input type="text" class="fio" placeholder="ФИО">
					<input type="text" class="org" placeholder="Название организации">
					<input type="text" class="inn" placeholder="ИНН">
					<input type="text" class="yur" placeholder="Юридический адрес">
					<input type="text" class="mail" placeholder="Электронная почта">
					<input type="password" class="ps" placeholder="Пароль">
					<input type="password" class="ps" placeholder="Подтвердите пароль">
					<a href="" class="go">РЕГИСТРАЦИЯ</a>
					<input class="go_save" type="checkbox" id="i1" name="">
					<label for="i1">Запомнить</label>
					<p class="social">Или войти через</p>
					<div class="social"><img src="images/social.png"></div>
				</form>
			</div>
		</div>
	</div>

</div>

<? include 'inc/footer.php'; ?> 

