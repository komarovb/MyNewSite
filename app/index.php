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
    <link rel="stylesheet" href="css/about.css">
	<title>About me</title>
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
	                <li class="navigationi current"><a href="index.php" class="pnav-link">Обо мне</a></li>
	                <li class="navigationi"><a href="works.php" class="pnav-link">Мои работы</a></li>
	                <li class="navigationi"><a href="contact.php" class="pnav-link">Связаться со мной</a></li>
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
    				<h2 class="block-head">Основная информация</h2>
	              <div class="block-body clearfix">
	                <div class="image-wrap">
	                  <div class="image-image"><img src="img/photo.jpg" alt="Borys Komarov" class="me"></div>
	                </div>
	                <div class="about-wrap">
	                  <ul class="about-list">
	                    <li class="about-item clearfix">
	                      <div class="about-title">Меня зовут:</div>
	                      <div class="about-info">Борис Комаров</div>
	                    </li>
	                    <li class="about-item clearfix">
	                      <div class="about-title">Мой возраст:</div>
	                      <div class="about-info">18 лет</div>
	                    </li>
	                    <li class="about-item clearfix">
	                      <div class="about-title">Мой город:</div>
	                      <div class="about-info">Киев, Украина</div>
	                    </li>
	                    <li class="about-item clearfix">
	                      <div class="about-title">Моя специализация:</div>
	                      <div class="about-info">FRONTEND разработчик</div>
	                    </li>
	                    <div class="about-item clearfix">
	                      <div class="about-title">Ключевые навыки:</div>
	                      <div class="about-info skills">
	                        <ul class="skills-list">
	                          <li class="skill-item">html</li>
	                          <li class="skill-item">css</li>
	                          <li class="skill-item">javascript</li>
	                          <li class="skill-item">gulp</li>
	                          <li class="skill-item">git</li>
	                          <li class="skill-item">php</li>
	                          <li class="skill-item">ruby</li>
	                        </ul>
	                      </div>
	                    </div>
	                  </ul>
	                </div>
	              </div>
    			</div>
    			<div class="block">
    				<h2 class="block-head">Опыт работы</h2>
              <div class="block-body">
                <ul class="block-list">
                  <li class="block-item icon-work">
                    <div class="where">-</div>
                    <div class="period">-</div>
                  </li>
                </ul>
              </div>
    			</div>
    			<div class="block">
    				<h2 class="block-head">Образование</h2>
              <div class="block-body">
                <ul class="block-list">
                  <li class="block-item icon-college">
                    <div class="where">Незаконченное высшее. Politechnika Warszawska</div>
                    <div class="period">Октябрь 2013 - по настоящее время</div>
                  </li>
                  <li class="block-item icon-course">
                    <div class="where">Курсы Loftschool</div>
                    <div class="period">Июль 2015 - по настоящее время</div>
                  </li>
                </ul>
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