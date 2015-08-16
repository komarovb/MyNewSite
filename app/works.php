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
    <link rel="stylesheet" href="bower/qtip2/jquery.qtip.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/works.css">
	<title>My projects</title>
</head>
<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div id="popup_name" class="popup_block">
		<div class="modal-header">
			<div class="header-text het">Добавление проекта</div>
			<div class="clo-butt het" id="close-but"></div>
			<div class="smal-line"></div>
		</div>
		<div class="modal-body">
			<form id="NewProj" class="single-form" action="php/filedownload.php" target="rFrame" method="POST"   
   				enctype="multipart/form-data">
				<p>Название проекта</p>
				<input type="text" placeholder="Введите название" class="add-input" name="name" id="name" qtip-position="left" qtip-content="Введите название!">
				<p>Картинка проекта</p>
				<div class="img-row">
				<input type="text" class="add-input im-down" placeholder="Загрузите изображение" disabled id="img-name" qtip-position="left" qtip-content="Введите название!">
				<div class="image-down down-but im-down">
				<input type="file" name="image" class="upload add-input" id="do-img" accept="image/*" id="img-inn" onchange="$('#NewProj').submit();" qtip-position="left" qtip-content="Выберите файл!">
				</div>
				</div>
				<p>URL проекта</p>
				<input type="text" placeholder="Добавте ссылку" class="add-input" name="url" id="url" qtip-position="left" qtip-content="Введите URL!">
				<p>Описание</p>
				<textarea placeholder="Пара слов о вашем проекте" class="add-input" name="desc" id="desc" qtip-position="left" qtip-content="Введите описание!"></textarea>
				<button type="button" class="sub-1" id="download">Добавить</button>
			</form>
		</div>
	</div>
    <div class="wrap">
    	<?php include 'php/header.php'; ?>
    	<div class="content">
    		<div class="menu">
    			<nav class="pnav">
	              <ul class="pnav-list">
	                <li class="navigationi"><a href="index.php" class="pnav-link">Обо мне</a></li>
	                <li class="navigationi current"><a href="works.php" class="pnav-link">Мои работы</a></li>
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
    				<h2 class="block-head">Мои проекты</h2>
	             	<div class="block-body clearfix">
	             		<div class="single-proj f-in-row">
	             			<div class="proj-img p1"></div>
	             			<a href="http://pbooklist.herokuapp.com/" target="_blank" class="site-url">www.pbooklist.herokuapp.com</a>
							<p class="site-desc">In progressIn progress  In progress 
							In progress In progress In progress In progress </p>
	             		</div>
	             		<div class="single-proj">
	             			<div class="proj-img new-proj"></div>
	             		</div>
	              	</div>
    			</div>
    		</div>
    	</div>
    </div>
    <?php include 'php/footer.php'; ?>
    <div id="mask"></div>
    <script type="text/javascript" src="bower/jquery/dist/jquery.js"></script>
    <script src="bower/qtip2/jquery.qtip.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>