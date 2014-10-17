
<? include 'inc/header.php'; ?>

<div id="profbg">
	<? include 'inc/bread.php'; ?>
	<div id="content">
		<? include 'inc/leftside_profile.php'; ?>
		<div class="profile">
			<h1>Мой профиль</h1>
			<div class="editform">
				<form>
					<p class="yur">Юридический статус</p>
					<input class="go_save" type="radio" id='r1' name="">
					<label for="r1">Физическое лицо</label>
					<input class="go_save" type="radio" id='r2' name="">
					<label for="r2">Юридическое лицо</label>
					<span>Фамилия Имя Отчество</span><input type="text" class="fio" placeholder="ФИО" value="Пушкин Александр Сергеевич">
					<span>Название организации</span><input type="text" class="org" placeholder="Название организации" value="ООО Болдино">
					<span>ИНН</span><input type="text" class="inn" placeholder="ИНН" value="3453412834832422134234">
					<span>Юридический адресс</span><input type="text" class="yur" placeholder="Юридический адрес" value="г. Москва, пл. Революции, 9">
					<span>Электронная почта</span><input type="text" class="mail" placeholder="Электронная почта" value="pushkin@mail.ru">
					<span>Пароль</span><input type="password" placeholder="Пароль" value="111111111">
					<span>Подтвердите пароль</span><input type="password" placeholder="Подтвердите пароль" value="111111111">
					<div class="f_right"><a href="" class="go">СОХРАНИТЬ</a></div>
				</form>
			</div>
		</div>
	</div>

</div>

<? include 'inc/footer.php'; ?> 

