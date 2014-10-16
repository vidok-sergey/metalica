<? include 'inc/header.php'; ?>
<? include 'inc/buttons.php'; ?>
<? include 'inc/bread.php'; ?>

<div id="basket">
	<h2>История заказов</h2>
	<table class="responsive_table_history">
		<thead>
			<tr> 
				<th class="numb">№ П/П <br>ДАТА</th>
				<th class="photo">ФОТОГРАФИЯ</th>
				<th class="towar">НАИМЕНОВАНИЕ,<br>СВОЙСТВА ТОВАРА</th>
				<th class="color">СТАТУС</th>
				<th class="hcount">КОЛИЧЕСТВО</th>
				<th class="price">ЦЕНА</th>
				<th class="hsumm">СТОИМОСТЬ</th>
				<th class="numb">ПОВТОР<br>ЗАКАЗА</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1<span class="data">14.08.13</span></td>
				<td><img src="images/goods1.png"></td>
				<td>
					<p class="goods_title">AB41-03-300X</p>
					<p class="goods_size">1850х300х500</p>
					<p class="goods_weight">30 кг</p>
					<a href="">Дополнительное оборудование</a>
				</td>
				<td>
					Отправлен
				</td>
				<td>
					<div class="count">
						1		
						<a href=""><div class="plus"></div></a>
						<a href=""><div class="minus"></div></a>
					</div>
				</td>
				<td>12.200 Р</td>
				<td>12.200 Р</td>
				<td>
					<input class="check_white" type="checkbox" id="c1" name="имя">
					<label for="c1"></label>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><img src="images/goods1.png"></td>
				<td>
					<p class="goods_title">AB41-03-300X</p>
					<p class="goods_size">1850х300х500</p>
					<p class="goods_weight">30 кг</p>
					<a href="">Дополнительное оборудование</a>
				</td>
				<td>
					Отправлен
				</td>
				<td>
					<div class="count">
						1		
						<a href=""><div class="plus"></div></a>
						<a href=""><div class="minus"></div></a>
					</div>
				</td>
				<td>12.200 Р</td>
				<td>12.200 Р</td>
				<td></td>
			</tr>
			<tr>
				<td>2 <span class="data">22.07.14</span></td>
				<td><img src="images/goods2.png"></td>
				<td>
					<p class="goods_title">AB41-03-300X</p>
					<p class="goods_size">1850х300х500</p>
					<p class="goods_weight">30 кг</p>
					<a class="doplink" href="">Дополнительное оборудование</a>
				</td>
				<td>
					Отправлен	
				</td>
				<td>
					<div class="count">
						1		
						<a href=""><div class="plus"></div></a>
						<a href=""><div class="minus"></div></a>
					</div>
				</td>
				<td>12.200 Р</td>
				<td>12.200 Р</td>
				<td>
					<input class="check_white" type="checkbox" id="c2" name="">
					<label for="c2"></label>
				</td>
			</tr>
			<tr class="dop320"><td colspan="8"><a href="">Дополнительное оборудование</a></td></tr>
		</tbody>
	</table>
	<div class="summ">24.400 Р</div>
	<div class="clr"></div>
	<a class="order" href="#">Заказать</a>
</div>

<? include 'inc/footer.php'; ?> 

