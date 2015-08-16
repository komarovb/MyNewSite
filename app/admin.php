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
    <link rel="stylesheet" href="css/admin.css">
	<title>Admin page</title>
</head>
<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="wrap">
    	<div class="content">
    	   <div class="admin-form">
                    <div class="form-head">
                        Авторизируйтесь
                    </div>
                    <form action="" class="adform" id="adf">
                        <p class="flabel">Логин</p>
                        <input type="text" class="admin-input add-input" placeholder="Введите логин" qtip-position="left" qtip-content="Введите логин!">
                        <p class="flabel">Пароль</p>
                        <input type="password" class="admin-input add-input" placeholder="Введите пароль" qtip-position="left" qtip-content="Введите пароль!">
                        <button type="submit" class="admin-btn" id="enter">Войти</button>
                    </form>         
            </div>
    	</div>
    </div>
    <footer class="pfooter">
      <div class="footer-wrap">
    	<div class="foot-inside">
    		<div class="foot-text">
    			© 2015, Это мой сайт, пожалуйста, не копируйте и не воруйте его!
    		</div>
    	</div>
      </div>
    </footer>
    <script type="text/javascript" src="bower/jquery/dist/jquery.js"></script>
    <script src="bower/qtip2/jquery.qtip.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>