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
    <link rel="stylesheet" href="css/works.css">
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