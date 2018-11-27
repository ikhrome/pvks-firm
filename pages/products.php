<?php $title = "Главная"; include "partials/header.php"; ?>
<h1>Наши товары</h1>
<p>Для покупки товара сделайтеглубокий вдох</p>
<table border="1" width="100%" style="border-collapse: collapse;">
	<thead>
		<tr>
			<th width="20%">Название товара</th>
			<th width="70%">Описание</th>
			<th width="10%">Цена</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$contents = file_get_contents('products.txt');
			$items = explode("\n", $contents);
			foreach ($items as $it):
				$str = explode(',', $it);
			?>
				<tr>
					<td><?php echo $str[0]; ?></td>
					<td><?php echo $str[1]; ?></td>
					<td><?php echo $str[2]; ?></td>
				</tr>
			<?php
			endforeach;
		?>
	</tbody>
</table>
<?php include "partials/footer.php"; ?>