<?php 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Добро пожаловать!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="fira/fira.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')</script>
    <script type="text/javascript" src="js/main.js"></script>

</head>
<body>
	<?php include 'php/header.php'; ?>
	<div class="full">
		<?php include 'php/menu.php'; ?>
		<div class="space"></div>
		<div class="content">
			<div class="block">
				<div class="block-header">
					Основная информация
				</div>
				<div class="menuseparator separator"></div>
				<div class="left con">
					<div class="leftside"></div>
				</div>
				<div class="rightside con">
					<p>Меня зовут: <span class="info">Комаров Борис Александрович</span>
					<p>Мой возраст: <span class="info">18 лет</span>
					<p>Мой город: <span class="info">Киев, Украина</span>
					<p>Моя специализация: <span class="info">FRONTEND разработчик</span>
					<div class="ski sk"><p class="skp">Ключевые навыки:</p></div></td>
					<div class="ski">
					<div class="skill">html</div>
					<div class="skill">css</div>
					<div class="skill">javascript</div>
					</div>
				</div>
			</div>
			<div class="block">
				<div class="block-header">
					Опыт работы
				</div>
				<div class="menuseparator separator"></div>
				<div class="wande">
					<div class="wande-entry work">
						<span class="rab icon"></span>
   	 					<div class="wande-div">
   	 						<p class="top-line">Здесь появиться первое место работы, как только оно появиться</p>
   	 						<span class="bottom-line">--------------</span>
   	 					</div>
					</div>
				</div>
			</div>
			<div class="block">
				<div class="block-header">
					Образование
				</div>
				<div class="menuseparator separator"></div>
				<div class="wande">
					<div class="wande-entry edu">
						<span class="edu1 icon"></span>
   	 					<div class="wande-div">
   	 						<p class="top-line">Варшавский политехнический институт</p>
   	 						<span class="bottom-line">2013-по настоящее время</span>
						</div>
					</div>
					<div class="wande-entry edu">
						<span class="edu2 icon"></span>
   	 					<div class="wande-div">
   	 						<p class="top-line">Loftschool</p>
   	 						<span class="bottom-line">Декабрь 2014 - по настоящее время</span>
						</div>
					</div>
			</div>
		</div>
	</div>
	</div>
	<?php include 'php/footer.php'; ?>
</body>
</html>

