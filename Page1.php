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
				<li class="active"><a href="Page1.php">Головна сторінка</a></li>
				<li><a href="Page2.php">Види тренувань</a></li>
				<li><a href="Page3.php">Види харчування</a></li>
				<li><a href="Page4.php">Контактна інформація</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">	
				<li><a class="navbar-brand" data-toggle="tooltip">
						<?php echo $_SESSION['logged_user']->name; ?>
					</a>
				</li>
				<li class="active">
					<a href="php/logout.php"><span class="glyphicon glyphicon-log-out">Вийти</span></a>
				</li>
			</ul>
		</div>
  	</div>
</nav>

<!--Основна інформація сторінки-->
<div class="container">
	<div class="row classRowOne">
		<h1 class="text-center" style="color: #fff;">Тренажерний зал «OLIMPUS»</h1>
		<div class="col-lg-8">
			<div id="carousel" class="carousel slide">
				<!--Индикаторы слайдов-->
				<ol class="carousel-indicators">
					<li class="active" data-target="#carousel" data-slide-to="0"></li>
					<li data-target="#carousel" data-slide-to="1"></li>
					<li data-target="#carousel" data-slide-to="2"></li>
				</ol>

				<!--Слайды-->
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/1.jpg" alt="">
					</div>
					<div class="item">
						<img src="images/2.jpg" alt="">
					</div>
					<div class="item">
						<img src="images/3.jpg" alt="">
					</div>
				</div>
				<!--Стрелки переключения слайдов-->
				<a href="#carousel" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a href="#carousel" class="right carousel-control" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="thumbnail TextClassP">
				<p class="text-justify">Вітаємо вас на офіційному сайті тренажерного залу «OLIMPUS». У нас широка лінія сучасних тренажерів. Кардіо-силове обладнання. Вас чекає затишний зал із гарним настроєм і чудовою атмосферою.</p>
				<p class="text-justify">Ви маєте можливість тренуватися з інструктором персонально, відвідувати групові заняття з шейпінгу, також у вас є можливість отримати консультації з дієтології і питань застосування спортивного харчування.</p>
				<p class="text-justify">Професійні інструктори допоможуть вам досягти поставлених цілей в будівництві красивого і здорового тіла! Наша команда чекає на Вас!</p>
			</div>
		</div>
 	</div>
</div>

<!--Окна абонементів-->
<h2 class="text-center" style="color: #fff;" id="idAbonementH">Замовити абонемент</h2>
<div class="container classRowTwo">       
	<!--Размер Окон, под разные разрешения екрана-->
    <div class="row masonry" data-columns>
            <!--Абонемент 1-->
            <div>
                <div class="thumbnail">
                    <img src="images/abon1.JPG" alt="" class="img-responsive">
                    <!--Изображения/300x240-->
                    <div class="caption">
						<p class="text-center pText"><strong>РАНКОВИЙ</strong></p>
                        <p>Вхід в зал - з 7.00 до 11.00</p>
                        <p>Ціна в місяць 325 гривень</p>
                        <button type="button" id="idMorning"  class="btn btn-info" style="width: 100%;" data-toggle="modal" data-target="#myModal-1">Замовити "РАНКОВИЙ"</button>
                        <!--Кнопка-->
                    </div>
                </div>
            </div>
            <!--Абонемент 2-->
            <div>
                <div class="thumbnail">
                    <img src="images/abon2.JPG" alt="" class="img-responsive">
                    <div class="caption">
						<p class="text-center"><strong>ДЕННИЙ</strong></p>
                        <p>Вхід в зал - 11.00 до 15.00</p>
                        <P>Ціна в місяць 295 гривень</P>
                        <button type="button" id="idDay" class="btn btn-success" style="width: 100%;" data-toggle="modal" data-target="#myModal-1">Замовити "ДЕННИЙ"</button>
                    </div>
                </div>
            </div>
            <!--Абонемент 3-->
            <div>
                <div class="thumbnail">
                    <img src="images/abon3.JPG" alt="" class="img-responsive">
                    <div class="caption">
						<p class="text-center"><strong>ВЕЧІРНІЙ</strong></p>
                        <p>Вхід в зал - з 15.00 до 22.00</p>
                        <P>Ціна в місяць 400 гривень</P>
                        <button type="button" id="idNight" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#myModal-1">Замовити "ВЕЧІРНІЙ"</button>
                    </div>
                </div>
            </div>
            <!--Абонемент 4-->
            <div>
                <div class="thumbnail">
                    <img src="images/abon4.JPG" alt="" class="img-responsive">
                    <div class="caption">
						<p class="text-center"><strong>ВІЛЬНИЙ</strong></p>
                        <p>Вхід в зал - з 7.00 до 22.00</p>
                        <P>Ціна в місяць 440 гривень</P>
                        <button type="button" id="idFree" class="btn btn-warning" style="width: 100%;" data-toggle="modal" data-target="#myModal-1">Замовити "ВІЛЬНИЙ"</button>
                    </div>
                </div>
            </div>
	</div>
</div>
   

<!-- Модальне окно 1-->
<div class="modal fade bs-example-modal-sm" id="myModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title text-center" id="myModalLabel"><a id="idModalHead"></a></h4>
			</div>
			<div class="modal-body">
				<p>Для замовлення абонементу заповність наступні форми: </p>
				<!--Заносим в БД інформацію про абонемент-->
				<form method="POST">
					<p>
						<strong>Ваш абонемент</strong>:<br>
						<input type="text" class="form-control" name="abonement" id="textAbonement" readonly <?php echo @$data['abonement']; ?> >
					</p>
					
					<p>
					<strong>Тривалість абонементу</strong>
					<select id="my_select" type="text" class="form-control" id="sel1" name="numberOfMonths" <?php echo @$data['numberOfMonths']; ?> >
						<option value=1>1 місяць</option>
						<option value=2>2 місяці</option>
						<option value=3>3 місяці</option>
						<option value=4>4 місяці</option>
						<option value=5>5 місяців</option>
						<option value=6>6 місяців</option>
					</select>
    				</p>
    				
    				<p>
    				<strong>Дійний</strong><br>
    					<strong>з </strong><input type="text" class="inputClass" name="startDate" id="startDate" readonly <?php echo @$data['startDate']; ?> >
    					<strong> до </strong><input type="text" class="inputClass" name="endDate" id="endDate"   readonly <?php echo @$data['endDate'];   ?> >
    				</p>
    				
   					<p>
						<strong>Ціна абонемент</strong>:<br>
						<input type="text" class="form-control" name="price" id="textPrice" readonly <?php echo @$data['price']; ?>>
					</p>
					
					<p>
					<strong>Ваш телефон 0XX-XXXX-XXX</strong>:
					<input type="tel" autofocus value="0" class="form-control" name="number" pattern="0[0-9]{2}-[0-9]{4}-[0-9]{3}" 
					value="<?php echo @$data['number']; ?>">
					</p>
									
					<p>
					<button type="submit" name="do_signup" id="idModalButton" style="width: 100%;">Подати заявку на абонемент</button>
					</p>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal" id="modalExit">Закрити</button>
			</div>
		</div>
	</div>
</div>
<!--PHP, Заносим в БД информацию пользователя-->
	<?php
		$data = $_POST;
		if( isset($data['do_signup']) )
		{	
			
				//все хорошо, регистируем в БД "abonement"
				$abonement = R::dispense('abonement');
				$abonement ->name = $_SESSION['logged_user']->name;;
				$abonement ->number = $data['number'];
				$abonement ->abonement = $data['abonement'];
				$abonement ->numberOfMonths = $data['numberOfMonths'];
				$abonement ->price = $data['price'];
				$abonement ->startDate = $data['startDate'];
				$abonement ->endDate = $data['endDate'];
				R::store($abonement);	
			
			
				$admin = R::dispense('admin');
				$admin ->name = $_SESSION['logged_user']->name;
				$admin ->email = $_SESSION['logged_user']->email;
				$admin ->number = $data['number'];
				$admin ->abonement = $data['abonement'];
				$admin ->numberOfMonths = $data['numberOfMonths'];
				$admin ->price = $data['price'];
				$admin ->startDate = $data['startDate'];
				$admin ->endDate = $data['endDate'];
				R::store($admin);
				
				
				$text = '<div>Ви успішно замовили абонемент.</div>';
				echo("<script>
						$('#idMorning').attr('disabled',true);
						$('#idDay').attr('disabled',true);
						$('#idNight').attr('disabled',true);
						$('#idFree').attr('disabled',true);
							
						$('#idAbonementH').html('$text'+'Адміністратор з вами зв\'яжеться.');
	
					</script>");	

		}
	?>
<!--Конец PHP--> 
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/salvattore.min.js"></script>
<script>
	$(function() {
		$('[data-toggle="tooltip"]').tooltip();
		$('[data-toggle="popover"]').popover();
	});	

//Вид модального вікна для кожного абонемента
function buttonAboniment(button, textHead, classColor,price){

	var idButton = '#' + button;
	var priceMoney = price;

	$(idButton).click(function() {
		$('#idModalHead').text(textHead);

		$('#idModalButton').removeClass().addClass(classColor);
		$('#textAbonement').attr('value', textHead);

		/*ця частина визначає і виводить сьогоднішню дату*/
			var forTime = new Date();

			var day = forTime.getDate();//число
				if(day<10){ day = "0" + day; }
			var numberMonth = forTime.getMonth()+1;//сьогоднішній місяць!
				if(numberMonth<10){ numberMonth = "0" + numberMonth; }
			var year = forTime.getFullYear();//рік
			$('#startDate').attr('value', day+"."+numberMonth+"."+year);
		
		/*ця частина визначає і виводить дату через місяць*/
			var numberMonth = forTime.getMonth()+2;//наступний місяць!
				if(numberMonth<10){ numberMonth = "0" + numberMonth; }
			$('#endDate').attr('value', day+"."+numberMonth+"."+year);
		/*Кінець*/		

		/*виводим ціну за 1 місяц в textPrice*/
			$('#textPrice').attr('value', priceMoney+" гривень");

		/*рахуєм ціну і дату закінчення абонемента по місяцям*/
			$("select").change(function(){	
				$('#textPrice').attr('value', $(this).val()*price+" гривень");

					var day = forTime.getDate();//число
						if(day<10){ day = "0" + day; }
					var numberMonth =+$(this).val()+1+forTime.getMonth();//місяць закінчення!
						if(numberMonth<10){ numberMonth = "0" + numberMonth; }
						else if(numberMonth > 12 ) {numberMonth = numberMonth -12; numberMonth = "0" + numberMonth;}
					var year = forTime.getFullYear();//рік

				$('#endDate').attr('value', day+"."+numberMonth+"."+year);
			});	

		/*при нажатии на кнопку #modalExit, вибираем #my_select [value='1']"*/
			$('#modalExit').click(function() {
				$("#my_select [value='1']").attr("selected", "selected");	
			});		
	});	
}
		
		buttonAboniment('idMorning','РАНКОВИЙ','btn btn-info',325);
		buttonAboniment('idDay','ДЕННИЙ','btn btn-success',295);
		buttonAboniment('idNight','ВЕЧІРНІЙ','btn btn-primary',400);
		buttonAboniment('idFree','ВІЛЬНИЙ','btn btn-warning',440);
</script>

</body>
</html>
<!--конец старници-->
<?php else : echo '<script>location.replace("notlogit.html");</script>'; exit;?>
<!--Автоматически переходит на notlogit.html если нет авторизации -->
<?php endif; ?>