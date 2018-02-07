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
    <link href="css/style2.css" rel="stylesheet">
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
				<li class="active"><a href="Page3.php">Види харчування</a></li>
				<li><a href="Page4.php">Контактна інформація</a></li>
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
		<h1 class="text-center" style="color: #fff;">Види харчування</h1>
		<div class="panel panel-default">
			<!--Меню-->
			<div class="center-block">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#info" data-toggle="tab">Інформація</a></li>
				<li><a href="#infa1" data-toggle="tab">Меню на кожен день для непрофесійного спортсмена</a></li>
				<li><a href="#infa2" data-toggle="tab">Меню харчування для схуднення</a></li>
				<li><a href="#infa3" data-toggle="tab">Харчування для нарощування м'язової маси</a></li>				
			</ul>
 			<div class="panel-footer">
			<!--Вікна-->
				<div class="tab-content">
					<!--Вікно-->
					<div class="tab-pane active" id="info">
						<div class="row">
							<div class="col-md-12 text-justify classP">
								<h3 class="text-center">Правильне харчування при заняттях спортом</h3>
								<img src="images/10.jpg" alt="Фотографія" class="img-thumbnail" align="right" width="45%">
								<p>Для багатьох людей спорт, фізичні навантаження, гімнастика, фітнес – це не порожні слова, а спосіб життя. Справжні прихильники активного способу життя знають все не тільки про спорт, а й правильне харчування при спортивних навантаженнях. Однак існує й інша категорія – починаючі спортсмени, тобто ті, хто нарешті вирішив покінчити з сидячим способом життя і записався в тренажерний зал. Якщо ви ставитеся саме до цієї категорії, тоді дана стаття про правильне харчування при заняттях спортом допоможе вам збалансувати свій раціон відповідно до новим способом життя. Корисна вона буде і професіоналам, які, прочитавши статтю, напевно зможуть дізнатися для себе щось нове.</p>

								<p>Заняття спортом припускають посилене навантаження на весь організм, в тому числі і на м’язи. Щоб м’язи працювали правильно, а також для досягнення певних спортивних результатів (наприклад, нарощування м’язової маси і т. п.), потрібно включити в раціон більше білка, адже саме білок бере участь у формуванні та відновлення клітин тіла і тканин.</p>

								<p>Про вуглеводи, втім, забувати теж не варто. Деякі люди виключають вуглеводи, думаючи, що вони принесуть чималий збиток здоров’ю й фігурі. У надмірному кількості вуглеводи, звичайно, шкідливі, але повністю їх виключати з раціону не треба. Справа в тому, що вуглеводи – відмінне джерело енергії, а енергія при заняттях спортом нам особливо необхідна. До речі, жири також є джерелом енергії.</p>

								<p>Звідси можна зробити наступний висновок: якщо ви займаєтеся спортом, вашому організму потрібні всі поживні речовини без винятку, і цих поживних речовин при фізичних навантаженнях має бути більше.</p>
							
							</div>
						</div>

					</div><!--Кінець"-->
					
					<!--Вікно "Меню на кожен день для непрофесійного спортсмена"-->
					<div class="tab-pane" id="infa1">
						<div class="row">
						<h3 class="text-center">Приклад меню на кожен день для непрофесійного спортсмена</h3>
							<div class="col-md-6 text-justify classP">
								<p><strong>Поживний білковій сніданок</strong></p>
									<p>Омлет з двох яєць зі сметаною и чашка зеленого чаю або склянку свіжого соку.</p>
								<p><strong>Другий сніданок</strong></p>
									<p>Один банан и Одне яблуко, склянка Чистої, простої води.</p>
								<p><strong>Ситний обід</strong></p>
									<p>Злакових каша з рибою або м'ясом, салат зі свіжіх овочів, сік або зелений чай.</p>
								<p><strong>Полудень</strong></p>
									<p>Горіхи або ягоди и склянку води.</p>
								<p><strong>легка вечеря</strong></p>
									<p>Овочеве рагу и рис, сік або чай без цукри.</p>
							</div>
							<div class="col-md-6 text-justify">
								<img src="images/11.jpg" alt="Фотографія" class="img-thumbnail" width="100%">
							</div>
							
						</div>
					</div><!--Кінець вікна "Меню на кожен день для непрофесійного спортсмена"-->
					
					<!--Вікно "Меню харчування для схуднення"-->
					<div class="tab-pane" id="infa2">
						<div class="row">
							<div class="col-md-12 text-justify classP">
							<img src="images/12.jpg" alt="Фотографія" class="img-thumbnail" align="right" width="45%">
							<h3 class="text-center">Меню харчування для схуднення</h3>
							<p>Система харчування для схуднення живота відрізняється низьким вмістом калорій, при цьому вона досить жорстка. Якщо дотримуватись цієї дієти строго впродовж тижня, то можна з легкістю розстатися з 3-4 кілограмамами надмірної ваги</p>
							<p><strong>Даного харчування слід дотримуватись не быльше 2-х тіжнів.</strong></p>
							<p><strong>Сніданок</strong></p>
								<p>Апельсин, дієтічнийй йогурт - 200 грам. Яблуко, знежирений сир - 100 грам, йогурт - 1 ст. ложка. Пластівці вівсяні - 3 ст. ложки, заварені гарячою водою, зі шматочками яблук, сушеної груші, курага. Нежирний сир, болгарський перець - 0,5 шт. Дієтичні хлібці, варені круто яйця - 1 шт.</p>
							<p><strong>Ланч</strong></p>
								<p>Зелені яблука - 2 шт. Заморожена або свіжа малина - 3 ст. ложки. Болгарський солодкий перець. Банан - 1 шт. Апельсин - 2 шт.</p>
							<p><strong>Обід</strong></p>
								<p>Куряче Філе - 200 грам, запеченене на грилі, салат зі свіжими овочами (капуста, листовий салат, редиска, огірок, перець), заправлений рослинною олією - 1 ст. ложка. Тушкована нежирна риба - 200 грам, тушковані овочі (кабачки, помідор, перець, капуста). Варені круто яйця - 1 шт. овочевий суп-пюре (перець, помідор, капуста). нежирний сир - 40 грам або кефірна продукція, овочевий суп з Додаванням скибочок Філе курки. Печена нежирна риба - 200 грам, салат зі свіжимі овочами та маслом рослини.</p>
							<p><strong>Полудень - аналогічний ланчу</strong></p>
							<p><strong>Вечеря</strong></p>
								<p>Шматочок пісного м'яса, свіжі овочі, 100 г відвареної квасолі. Салат зі свіжими овочами, картопля, запечена в мундирі - 2 шт. Один свіжий огірок, квасоля варена - 200 грам, варена яйці - 1 шт. М'ясо курки без шкури відварне, помідор - 2 шт. однин свіжий огірок. Тушковані Кальмари з часником і Цибулею, мідії, креветки, салат зі свіжими овочами.</p>
							</div>
						</div>
					</div><!--Кінець вікна "Меню харчування для схуднення"-->
					
					<!--Вікно ""Харчування для нарощування м'язової маси-->
					
					<div class="tab-pane" id="infa3">
						<div class="row">
							<div class="col-md-12 text-justify classP">
								<img src="images/13.jpg" alt="Фотографія" class="img-thumbnail" align="right" width="45%"><br>
								<h3 class="text-center">Харчування для нарощування м'язової маси</h3>
								<p>Однією з головних умов успішного нарощування м’язової маси вважаються регулярні анаеробні тренування з використанням обтяжень. Проте варто пам’ятати, що м’язи ростуть не під час інтенсивних тренувань у залі, а після їх завершення. Правильне харчування для росту м’язів є другою важливою складовою успіху.</p>
								<p><strong>Основні положення харчування для нарощування м’язової маси</strong></p>
								<p>Щоб наростити м’язи потрібно дотримуватися певних правил харчування. Нижче наведені основні моменти, на які варто звернути увагу.</p>
								<p>Раціон харчування має бути дробовим – бажаючи наростити м’язову масу потрібно їсти не рідше, ніж 5-6 разів на день. Порції їжі повинні бути порівняно невеликими — переїдати не варто (калорійність раціону повинна перевищувати кількість витрат енергії лише на 200-300 ккал). Фахівці з харчування рекомендують розраховувати добову норму калорій з розрахунку 33 ккал на кожен кілограм ваги.</p>
								<p>Оптимальним вибором для бодібілдера є продукти, що підвищують обмін речовин – вони забезпечують постійний приплив енергії, але при цьому не дають з’являтися жиру. У пріоритеті знаходяться білки (кожний прийом їжі повинен включати 30 г протеїнів) і складні вуглеводи.</p>
								<p><strong>Зразкове меню для нарощування м’язів</strong></p>
								
								<p><strong>Сніданок</strong>: вівсяні пластівці з ягодами і фруктами. порція м’яса з овочами, кілька скибочок хліба з висівками, плавлений сирок, склянку молока і будь-який фрукт.</p>

								<p><strong>Другий сніданок</strong>: молоко, хліб з цілісного зерна, порція сиру і банан.</p>

								<p><strong>Обід</strong>: суп з м’ясом, блюдо з яєць, свіжі або варені овочі, зерновий хлібець, мед і фруктовий сік.</p>

								<p><strong>Полудень</strong>: порція рибного супу, кусень холодного м’яса, твердий сир, висівковий хліб і овочевий сік.</p>

								<p><strong>Вечеря</strong>: м’ясо (тушковане, відварне, приготоване на грилі), овочі, сир з ягодами і фруктами, а також мінеральна вода.</p>

								<p>Яким має бути правильне харчування для росту м’язів? Грамотний відповідь може дати спеціаліст зі спортивного харчування чи тренер. Якщо ж скласти індивідуальний раціон не представляється можливим, то доведеться виводити «ідеальну формулу» шляхом проб і помилок, керуючись наведеними вище правилами.</p>

							</div>
						</div>
					</div><!--Кінець вікна "Харчування для нарощування м'язової маси"-->
				</div>
 			</div>
			</div>		
 		</div>
 	</div>
 </div>
 
   
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