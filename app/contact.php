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
    <link rel="stylesheet" href="css/contact.css">
	<title>Contact me</title>
</head>
<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="wrap">
    	<?php include 'php/header.php'; session_start();?>
    	<div class="content">
    		<div class="menu">
    			<nav class="pnav">
	              <ul class="pnav-list">
	                <li class="navigationi"><a href="index.php" class="pnav-link">About me</a></li>
	                <li class="navigationi"><a href="works.php" class="pnav-link">Portfolio</a></li>
	                <li class="navigationi current"><a href="contact.php" class="pnav-link">Contact me</a></li>
	              </ul>
	            </nav>
	            <?php include 'php/navigation.php'; ?>
    		</div>
    		<div class="main">
    			<div class="block">
    				<div class="block-header-page3">
						Do you have an interesting idea? Write to me!
					</div>
				<div class="contact-form">
					<form id="cont-form">
						<div class="form-group-top">
						<p class="cont-top">Name</p>
						<input type="text" class="cont-input-top add-input" name="name" placeholder="Write your name" qtip-position="left" qtip-content="Write your name!">
						</div>
						<div class="form-group-top top2">
						<p class="cont-top">Email</p>
						<input type="email" class="cont-input-top add-input" name="email" placeholder="Where should I reply" qtip-position="right" qtip-content="Write email!">
						</div>
						<p class="cont-top cont-mid">Message</p>
						<textarea class="text-mid add-input" name="text" placeholder="Your message" qtip-position="left" qtip-content="Write your message!"></textarea>
						<p class="cont-top cont-mid">Write letters from a picture</p>
						<table>
							<tr>
							<div class="form-group-top">
								<td><img src="php/cap.php" /></td>
							</div>
							<div class="form-group-top top2">
								<td><input class="cont-input-top add-input" type="text" name="capt" placeholder="Write code from the picture" qtip-position="right" qtip-content="Write letters from the picture!"></td>
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
    <script src="bower/qtip2/jquery.qtip.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>