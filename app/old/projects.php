<?php 
	session_start();
 	$login="Guest";
  	if(isset($_SESSION['login'])) {
    	$login=$_SESSION['login'];
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Мои проекты!</title>
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
				<input type="text" placeholder="Введите название" class="add-input" name="name" id="name">
				<p>Картинка проекта</p>
				<div class="img-row">
				<input type="text" class="add-input im-down" placeholder="Загрузите изображение" disabled id="img-name">
				<div class="image-down down-but im-down">
				<input type="file" name="image" class="upload add-input" id="do-img" accept="image/*" id="img-inn" onchange="$('#NewProj').submit();">
				</div>
				</div>
				<p>URL проекта</p>
				<input type="text" placeholder="Добавте ссылку" class="add-input" name="url" id="url">
				<p>Описание</p>
				<textarea placeholder="Пара слов о вашем проекте" class="add-input" name="desc" id="desc"></textarea>
				<button type="button" class="sub-1" id="download">Добавить</button>
			</form>
		</div>
	</div>

	<?php include 'php/header.php'; ?>
	<div class="full">
		<?php include 'php/menu.php'; ?>
		<div class="space"></div>
		<div class="content">
			<div class="block bl">
				<div class="block-header">
					Мои работы
				</div>
				<div class="menuseparator separator"></div>

				<div class="collection" id="col-1">
					<div class="single-site" id="s1">
						<div class="site-img" id="simg1">
							<div class="hover-bg">
								<div class="sitename-cont"><div class="sitename" id="name1">Название</div></div>
							</div>
						</div>
						<a href="www.test.com"><span class="site-url" id="url1">www.еще в разработке</span></a>
						<br>
						<span class="site-desc" id="desc1">Проект по распространению и шерингу фотографий</span>
					</div>
					<div class="single-site" id="s2">
						<div class="site-img" id="newSite">
						</div>
					</div>
				</div>

				<script type="text/javascript">  
 					function onResponse(d) {  
 					eval('var obj = ' + d + ';');  
 					var n=obj.filename;
 					$("#img-name").val(n);
 					}					  
 						</script>   
  
			<iframe id="rFrame" name="rFrame">  
				</iframe> 
			</div>
		</div>
	</div>
	<?php include 'php/footer.php'; ?>
</body>
</html>
