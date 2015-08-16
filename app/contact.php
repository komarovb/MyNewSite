<?php ?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon.ico -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- FONTS -->
    <link rel="stylesheet" href="fonts/fira.css">
    <link rel="stylesheet" href="fonts/proximanovacond-semibold.css">
    <!-- Normalize -->
    <link rel="stylesheet" href="bower/normalize.css/normalize.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contact.css">
	<title>Contact me</title>
</head>
<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="wrap">
    	<?php include 'php/header.php'; ?>
    	<div class="content">
    		<div class="menu">
    			<nav class="pnav">
	              <ul class="pnav-list">
	                <li class="navigationi"><a href="index.php" class="pnav-link">Обо мне</a></li>
	                <li class="navigationi"><a href="works.php" class="pnav-link">Мои работы</a></li>
	                <li class="navigationi current"><a href="contact.php" class="pnav-link">Связаться со мной</a></li>
	              </ul>
	            </nav>
	            <div class="contacts">
				<div class="maincont contact">
					Контакты

				</div>
				<div class="contact contact1">
					<span class="contact-icon ic1"></span>
                  	<a href="mailto:fisika80@gmail.com" class="con-link">fisika80@gmail.com</a>
					
				</div>
				<div class="contact contact2 ">
					<span class="contact-icon ic2"></span>
                    <a href="tel:+48500504958" class="con-link">+48500504958</a>
					
				</div>
				<div class="contact contact3 ">
					<span class="contact-icon ic3" ></span>
                  	<a href="tel:noterr4" class="con-link">noterr4</a>
					
				</div>
			</div>
    		</div>
    		<div class="main">
    			<div class="block">
    				<div class="block-header-page3">
						У вас есть интересный проект? Напишите мне
					</div>
				<div class="contact-form">
					<form id="cont-form">
						<div class="form-group-top">
						<p class="cont-top">Имя</p>
						<input type="text" class="cont-input-top add-input" name="name" placeholder="Как к Вам обращаться" qtip-position="left">
						</div>
						<div class="form-group-top top2">
						<p class="cont-top">Email</p>
						<input type="email" class="cont-input-top add-input" name="email" placeholder="Куда мне писать" qtip-position="right">
						</div>
						<p class="cont-top cont-mid">Сообщение</p>
						<textarea class="text-mid add-input" name="text" placeholder="Кратно в чем суть" qtip-position="left"></textarea>
						<p class="cont-top cont-mid">Введите код указанный на картинке</p>
						<table>
							<tr>
							<div class="form-group-top">
								<td><img src="php/cap.php" /></td>
							</div>
							<div class="form-group-top top2">
								<td><input class="cont-input-top add-input" type="text" name="capt" placeholder="Введите код" qtip-position="right"></td>
							</div>
							</tr>
						</table><br>
						<button type="button" class="but-bot sub-1" id="sbut">Отправить</button>
						<button type="reset" class="but-bot sub-1" id="clearbut">Очистить</button>
					</form>
				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <?php include 'php/footer.php'; ?>
    <script type="text/javascript" src="bower/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>