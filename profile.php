<? include 'inc/header.php'; ?>

<div id="profbg">
	<? include 'inc/bread.php'; ?>
	<div id="content">
		<? include 'inc/leftside_profile.php'; ?>
		<div class="profile">
			<h1>Мой профиль</h1>
			<div class="loginform">
				<div clas="ava"><img class="ava" src="images/ava.jpg"></div>
				<form>
					<input type="text" class="lg" placeholder="Электронная почта">
					<input type="password" class="ps" placeholder="Пароль">
					<a href="" class="go">ВОЙТИ</a>
					<input class="go_save" type="checkbox" id="i1" name="">
					<label for="i1">Запомнить</label>
					<a href="#" class="lost">Забыли пароль?</a>
					<p class="social">Или войти через</p>
					<div class="social"><img src="images/social.png"></div>
				</form>
			</div>
		</div>
	</div>

</div>

<? include 'inc/footer.php'; ?> 

