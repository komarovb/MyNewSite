<?php 
?>
<!DOCTYPE html>
<html>
<head profile="http://www.w3.org/2005/10/profile">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Свяжитесь со мной!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="fira/fira.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/main.js"></script>

</head>
<body>
	<?php include 'php/header.php'; ?>
	<div class="full">
		<?php include 'php/menu.php'; ?>
		<div class="space"></div>
		<div class="content">
			<div class="block">
				<div class="block-header-page3">
					<div class="block-header-page3-text">
						У вас есть интересный проект? Напишите мне
					</div>
					<div class="smal-line sm-1"></div>
				</div>
				<div class="contact-form">
					<form id="cont-form">
						<div class="form-group-top">
						<p class="cont-top">Имя</p>
						<input type="text" class="cont-input-top add-input" name="name" placeholder="Как к Вам обращаться">
						</div>
						<div class="form-group-top top2">
						<p class="cont-top">Email</p>
						<input type="email" class="cont-input-top add-input" name="email" placeholder="Куда мне писать">
						</div>
						<p class="cont-top cont-mid">Сообщение</p>
						<textarea class="text-mid add-input" name="text" placeholder="Кратно в чем суть"></textarea>
						<p class="cont-top cont-mid">Введите код указанный на картинке</p>
						<table>
							<tr>
							<div class="form-group-top">
								<td><img src="php/cap.php" /></td>
							</div>
							<div class="form-group-top top2">
								<td><input class="cont-input-top add-input" type="text" name="capt" placeholder="Введите код"></td>
							</div>
							</tr>
						</table><br>
					</form>
					<button type="button" class="but-bot sub-1" id="sbut">Отправить</button>
					<button type="button" class="but-bot sub-1" id="clearbut">Очистить</button>
				</div>
			</div>
		</div>
	</div>
	<?php include 'php/footer.php'; ?>
</body>
</html>
