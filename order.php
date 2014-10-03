<? include 'inc/header.php'; ?>
<? include 'inc/bread.php'; ?>
	<div id="order">
		<h1>Оформить заказ</h1>
		<div class="status">
			<h4>ЮРИДИЧЕСКИЙ СТАТУС</h4>
			<form>
				<input type="radio" id="id1" name="st" class="stat">
				<label for="id1">Физические лицо</label>
				<input type="radio" id="id2" name="st" class="stat">
				<label for="id2">Юридические лицо</label>
			</form>
		</div>
		<div class="dostavka">
			<h4>СПОСОБ ДОСТАВКИ</h4>
			<form>
				<input type="radio" id="id3" name="tr">
				<label for="id3">Самовывоз</label>
				<p>Вы сможете забрать покупку на второй день после оформления заказа. Заказ будет храниться в пункте выдаче в течении 5 дней. </p>
				<p>Адрес: Москва, Огородный проезд, д.20, стр.38 (в 50 метрах от проходной в сторону центра по Огородному проезду, отдельно стоящее одноэтажное кирпичное здание). </p>
				<input type="radio" id="id4" name="tr">
				<label for="id4">Доставка курьером*</label>
				<input type="radio" id="id5" name="tr">
				<label for="id5">Доставка транспортной компанией*</label>
			</form>
		</div>
		<div class="in_col">
			<div class="in_cel">
				<span>Имя Фамилия *</span>
				<input type="text">
				<span>Электронная почта *</span>
				<input type="text">
				<span>Комментарий к заказу*</span>
				<input type="text">
			</div>
			<div class="in_cel">
				<span>Мобильный телефон *</span>
				<input type="text">
				<span>Адрес доставки *</span>
				<input type="text">
				<span>Прикрепить файл</span>
				<div class="inputfile">
					<div class="but">Выберите файл</div>
					<input type="file">
				</div>
				<span class="o1">Ваши данные никогда не будут переданы третьим лицам! *</span>
			</div>		
		</div>
		<div id="in_col_hidden">
			<div class="in_cel">
				<span>Название организации*</span>
				<input type="text">
				<span>ИНН/КПП</span>
				<input type="text">
				<span>р/с</span>
				<input type="text">
				<span>к/с</span>
				<input type="text">
			</div>
			<div class="in_cel">
				<span>Юридический адрес</span>
				<input type="text">
				<span>ОКПО</span>
				<input type="text">
				<span>БИК</span>
				<input type="text">
				<span class="o">* Поля обязательные для заполнения</span>
			</div>	
		</div>

	</div>
<? include 'inc/basket.php'; ?> 
<? include 'inc/footer.php'; ?> 