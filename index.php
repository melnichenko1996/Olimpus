<?php
	require "php/db.php";
?>
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
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 	<div class="container">
 	<center>
 		<h2 style="color: #fff;" >Тренажерний зал "OLIMPUS"</h2>
 	</center>
	</div>
</nav>


<!--Окно авторизации и кнопка регистрации-->
<div id="slick-loginMy">
	<div class="formAnswerOne" id="answerId" >
	</div>
	<form action="index.php" method="POST">
		<input type="text"  placeholder="Введіть логін:" name="login" value="<?php echo @$data['login']; ?>">
		<input type="password" placeholder="Введіть пароль:" name="password" value="<?php echo @$data['password']; ?>">

		<button type="submit" class="butModal" name="do_login">Увійти</button>
	</form>
</div>

<div class="formAnswerTwo" id="answerIdTwo">

</div>

<!--Окно для регистрации-->
<div class="registClass navbar-fixed-bottom ">
	<center>
		<form action="index.php" method="POST">
		<table class="tablaOne">
			  <tr>
				<td>
					<input type="text" class="form-control" placeholder="Введіть ім’я" name="name" value="<?php echo @$data['name']; ?>">
				</td>
				<td>
					<input type="email" class="form-control" placeholder="Введіть електронну адресу" name="email" value="<?php echo @$data['email']; ?>">
				</td>
				<td>
					<input type="password" class="form-control" placeholder="Введіть пароль" name="password">
				</td>
			  </tr>
			  <tr>
				<td>
					<input type="text" class="form-control" placeholder="Введіть логін" name="login" value="<?php echo @$data['login']; ?>">
				</td>
				<td>
					<button type="submit" class="btn btn-primary" name="do_signup" style="width: 100%;">ЗАРЕЄСТРУВАТИСЯ</button>
				</td>
				<td>
					<input type="password" class="form-control" placeholder="Введіть пароль ще раз" name="password_2">
				</td>
			  </tr>
		</table>
		</form>
	</center>
</div>


<!--PHP код для автризации пользователя-->
<?php
	$data = $_POST;
	if( isset($data['do_login']) )
	{
		$errors = array();
		$user = R::findOne('users', 'login = ?', array($data['login'] ));
		if( $user )
		{
			// логин существует
			if( password_verify($data['password'], $user->password)
			  ) {
				//все хорошо, логиним пользователя
				$_SESSION['logged_user'] = $user;
				echo '<script>location.replace("Page1.php");</script>'; exit;
			} else
			{
				$errors[] = 'Невірно введений пароль!';	
			}
		}   else
		{
			$errors[] = 'Користувача з таким логіном не існує!';
		}

		if( ! empty($errors) )
		{
			$text = '<div style="color: red;">'.array_shift($errors).'</div>';
			echo("<script>$('#answerId').html('$text')</script>");			
		}
	}
?>   


<!--PHP код для регистрации пользователя-->
<?php
	$data = $_POST;
	if( isset($data['do_signup']) )
	{
			// здесь регистрируем, занесим пользователя в БД
			$errors = array();
			if( trim($data['name']) == '' )
			{
				$errors[] = 'Введіть ваше ім’я!';
			}
			
			if( trim($data['login']) == '' )
			{
				$errors[] = 'Введіть ваший логін!';
			}

			if( trim($data['email']) == '' )
			{
				$errors[] = 'Введіть ваший Email!';
			}

			if( $data['password'] == '' )
			{
				$errors[] = 'Введіть пароль!';
			}

			if( $data['password_2'] != $data['password'] )
			{
				$errors[] = 'Повторний пароль введений не вірно!';
			}

			if( R::count('users', "login = ?", array($data['login'])) > 0 )
			{
				$errors[] = 'Користувач з таким логіном вже існує';
			}

			if( R::count('users', "email = ?", array($data['email'])) > 0 )
			{
				$errors[] = 'Користувач з таким Email вже існує!';
			}

			if( empty($errors) )
			{
				//все хорошо, регистируем в БД				
				$user = R::dispense('users');
				$user ->name = $data['name'];
				$user ->login = $data['login'];
				$user ->email = $data['email'];
				$user ->password = password_hash($data['password'], PASSWORD_DEFAULT);
				R::store($user);
				$text = '<div style="color: green;">Ви успішно зареєстровані!</div>';
				echo("<script>$('#answerIdTwo').html('$text')</script>");	
			} else
			{
			    $text = '<div style="color: red;">'.array_shift($errors).'</div>';
				echo("<script>$('#answerIdTwo').html('$text')</script>");	
			}
		}
?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
</body>
</html>