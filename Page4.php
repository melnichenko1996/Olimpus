<?php
	require "php/db.php";
?>

<?php if( isset($_SESSION['logged_user']) ): ?>
<!--начало старници-->
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Olimpus</title>
	<link rel="shortcut icon" href="/images/iconka.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style4.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/myScript.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Адаптивная навигация сайта -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 	<div class="container">
  		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand">OLIMPUS</a>
    	</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="Page1.php">Головна сторінка</a></li>
				<li><a href="Page2.php">Види тренувань</a></li>
				<li><a href="Page3.php">Види харчування</a></li>
				<li class="active"><a href="Page4.php">Контактна інформація</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">	
				<li><a class="navbar-brand" data-toggle="tooltip">
						<?php echo $_SESSION['logged_user']->name; ?>
					</a>
				</li>
				<li class="active">
					<a href="php/logout.php"><span class="glyphicon glyphicon-log-out"> Вийти</span></a>
				</li>
			</ul>
		</div>
  	</div>
</nav>


<div class="container">
	<div class="row classRowOne">
		<h1 class="text-center">Контактна інформація</h1>
		<div class="col-lg-6 col-md-6">
			<div class="thumbnail">
            	<div class="caption">
					<p class="text-center"><strong>Якщо у вас виникли питання ви можете з нами связатись</strong></p>
					<p><strong>За телефонами</strong> <span class="glyphicon glyphicon-earphone"></span> 0939842010, <span class="glyphicon glyphicon-earphone"></span> 0962647651;</p>
					<p><span class="glyphicon glyphicon-envelope"></span> <strong>Відправити нам повідомлення</strong></p>
					<!--Відправка повідомлення Адміністратору-->
					<form action="./email.html" method="POST">
					<p>
						<strong>Користувач</strong>:<br>
						<input type="text" class="form-control" style="width: 50%;" name="imya" value="<?php echo $_SESSION['logged_user']->name; ?>">
					</p>
					<p>
						<strong>Ваш Email</strong>:<br>
						<input type="text" class="form-control" style="width: 50%;" name="email" value="<?php echo $_SESSION['logged_user']->email; ?>">
					</p>
					<p>
						<strong>Ваш телефон 0XX-XXXX-XXX</strong>:
						<input type="tel" class="form-control" style="width: 50%;" autofocus value="0" name="phone" pattern="0[0-9]{2}-[0-9]{4}-[0-9]{3}">
					
					</p>

					<p>
						<strong>Ваше повідомлення</strong>:
					</p>
					<p>
						<textarea class="form-control" rows="4" name="message"></textarea>
					</p>
					<center>
					<input type="submit" class="btn btn-primary" value="Відправити повідомлення адміністратору">
					</center>
					</form>
				</div>				
			</div>
		</div>
		
		<div class="col-lg-6 col-md-6">
			<div class="thumbnail">
            	<div class="caption">
					<p class="text-center"><strong>Наша Адреас:м.Сміла вулиця 40-річчя Перемоги 18</strong></p>
               			<iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d2607.7098903811716!2d31.89422731568965!3d49.187091404786635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d49.186740799999995!2d31.895267999999998!5e0!3m2!1sru!2sua!4v1496621234999" width="100%" height="415" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
		</div>
		
 	</div>
</div>


<!--Php код для отправки писем-->
<?php
	$to ="djek678@gmail.com";
	$tema = "OLIMPUS";
	$message = "Им'я користувача: ".$_POST['imya']."<br>";
	$message .= "Email користувача: ".$_POST['email']."<br>";
	$message .= "Телефон: ".$_POST['phone']."<br>";
	$message .= "Повідомлення ".$_POST['message']."<br>";

	mail($to, $tema, $message);
?>
 
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
<!--конец старници-->
<?php else : echo '<script>location.replace("notlogit.html");</script>'; exit;?>
<!--Автоматически переходит на notlogit.html если нет авторизации -->
<?php endif; ?>