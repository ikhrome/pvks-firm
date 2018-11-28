<?php $title = "Контакты"; proceed_header(); ?>
<h1>Обратная связь</h1>
<form method="post">
	<table border="0">
		<tr>
			<td><label for="form_name">Ваше имя</td>
			<td>
				<input type="text" size="45" name="name" value="<?php echo (isset($_POST['name'])) ? $_POST['name'] : '' ?>" placeholder="Введите имя" id="form_name">
			</td>
		</tr>
		<tr>
			<td><label for="form_email">Ваш e-mail</td>
			<td>
				<input type="text" size="45" name="email" id="form_email" placeholder="Введите e-mail"  value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : '' ?>">
			</td>
		</tr>
		<tr>
			<td><label for="form_message">Сообщение для нас</td>
			<td>
				<textarea name="message" cols="45" rows="8" id="form_message" placeholder="Введите сообщение"><?php echo (isset($_POST['message'])) ? $_POST['message'] : '' ?></textarea>
			</td>
		</tr>
	</table>
	<button type="submit" name="proceed">Отправить</button>
</form>
<?php
	if(isset($_POST['proceed'])) {
		$data = [trim($_POST['name']), trim($_POST['email']), trim(nl2br($_POST['message']))];
		$contents = implode(',', $data);
		$contents .= "\n";
		if(file_put_contents('contact.txt', $contents, FILE_APPEND)) {
			echo "Спасибо! Ваши данные отправлены!";
		} else {
			echo "Простите, но что-то пошло не так!";
		}
	}
?>
<?php proceed_footer(); ?>