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
	                <li class="navigationi current"><a href="index.php" class="pnav-link">About me</a></li>
	                <li class="navigationi"><a href="works.php" class="pnav-link">Portfolio</a></li>
	                <li class="navigationi"><a href="contact.php" class="pnav-link">Contact me</a></li>
	              </ul>
	            </nav>
	           <?php include 'php/navigation.php'; ?>
    		</div>
    		<div class="main">
    			<div class="block">
    				<h2 class="block-head">General information</h2>
	              <div class="block-body clearfix">
	                <div class="image-wrap">
	                  <div class="image-image"><img src="img/photo.jpg" alt="Borys Komarov" class="me"></div>
	                </div>
	                <div class="about-wrap">
	                  <ul class="about-list">
	                    <li class="about-item clearfix">
	                      <div class="about-title">My name:</div>
	                      <div class="about-info">Borys Komarov</div>
	                    </li>
	                    <li class="about-item clearfix">
	                      <div class="about-title">My age:</div>
	                      <div class="about-info">19</div>
	                    </li>
	                    <li class="about-item clearfix">
	                      <div class="about-title">My city:</div>
	                      <div class="about-info">Warsaw, Poland</div>
	                    </li>
	                    <div class="about-item clearfix">
	                      <div class="about-title">Skills:</div>
	                      <div class="about-info skills">
	                        <ul class="skills-list">
	                          <li class="skill-item">html</li>
	                          <li class="skill-item">css</li>
	                          <li class="skill-item">ruby</li>
	                          <li class="skill-item">javascript</li>
	                          <li class="skill-item">Java</li>
	                          <li class="skill-item">git</li>
	                          <li class="skill-item">php</li>
	                        </ul>
	                      </div>
	                    </div>
	                  </ul>
	                </div>
	              </div>
    			</div>
    			<div class="block">
    				<h2 class="block-head">Work experience</h2>
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
    				<h2 class="block-head">Education</h2>
              <div class="block-body">
                <ul class="block-list">
                  <li class="block-item icon-college">
                    <div class="where">Politechnika Warszawska, Computer science</div>
                    <div class="period">October 2013 - <?php $today = date("F j, Y, g:i a"); echo $today;?></div>
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