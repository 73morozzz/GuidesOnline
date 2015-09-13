<!DOCTYPE html>
<html lang="ru">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Я - Гид</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- Simple-Line-Icons-Webfont -->
		<link href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" rel="stylesheet">
		<!-- FlexSlider -->
		<link href="scripts/FlexSlider/flexslider.css" rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.css" rel="stylesheet">
		<!-- Nivo Lightbox -->
		<link href="scripts/Nivo-Lightbox/nivo-lightbox.css" rel="stylesheet">
		<link href="scripts/Nivo-Lightbox/themes/default/default.css" rel="stylesheet">
		<!-- Style.css -->
		<link href="css/style.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<div class="responsive-menu">
			<a href="" class="responsive-menu-close"><i class="icon-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->
		<header class="header transparent">
			<div class="top">
				<div class="container">
					<div class="left">
						<span> </span>
					</div> <!-- end .left -->
					<div class="right">
						<span class="item"><?php include 'myscripts/head.php'; ?></span>
					</div> <!-- end .right -->
				</div> <!-- end .container -->
			</div> <!-- end .top -->
			<div class="navigation">
				<div class="container clearfix">
					<div class="logo"><a href="index.php"><img src="images/logo-white.png" alt="Cuisine" class="img-responsive"></a></div> <!-- end .logo -->
					<nav class="main-nav">
						<ul class="list-unstyled">
							<li><a href="index.php">Главная</a></li>
							<li><a href="about.php">О нас</a></li>
							<li><a href="city.php">Города</a></li>
						</ul>
					</nav> <!-- end .main-nav -->
					<a href="" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
				</div> <!-- end .container -->
			</div> <!-- end .navigation -->
		</header> <!-- end .header -->

		<div id="welcome-slider" class="welcome-slider flex-slider">
			<div class="slides clearfix">
				<div class="slide" style="background-image: url('images/background01.jpg');">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="col-sm-6">
									<h1>Путешествуй. Живи. Мечтай.</h1>
									<p class="button-list"><a href="login.php" class="button light">Войти</a><a href="registration.php" class="button brown solid">Зарегистрироваться</a></p>
								</div> <!-- end .col-sm-6 -->
							</div> <!-- end .row -->
						</div> <!-- end .container -->
					</div> <!-- end .inner -->
				</div> <!-- end .slide -->
				<div class="slide" style="background-image: url('images/background001.jpg');">
					<div class="inner">
						<div class="container">
							<div class="row aligned-cols">
								<div class="col-sm-6 aligned-middle">
									<h1>Открывай для себя новое. </h1>
									<p class="button-list"><a href="login.php" class="button light">Войти</a><a href="registration.php" class="button brown solid">Зарегистрироваться</a></p>
								</div> <!-- end .col-sm-6 -->
								<div class="col-sm-6 text-right">
									<!---<div class="hours-box">
										<div class="title">Open Hours<span class="open">Open</span></div>
										<div class="clearfix"><span class="day">Monday</span><span class="hours">09 - 21</span></div>
										<div class="clearfix"><span class="day">Tuesday</span><span class="hours">09 - 21</span></div>
										<div class="clearfix"><span class="day">Wednesday</span><span class="hours">07 - 21</span></div>
										<div class="clearfix"><span class="day">THursday</span><span class="hours">07 - 21</span></div>
										<div class="clearfix"><span class="day">Friday</span><span class="hours">07 - 21</span></div>
										<div class="clearfix"><span class="day">Saturday</span><span class="hours">07 - 21</span></div>
										<div class="clearfix"><span class="day">Sundays</span><span class="hours">Closed</span></div> -->
										<!--<div class="info">Info: 00 2345 6780</div> -->
									</div> <!-- end .hours-box -->
								</div> <!-- end .col-sm-6 -->
							</div> <!-- end .row -->
						</div> <!-- end .container -->
					</div> <!-- end .inner -->
				</div> <!-- end .slide -->
			</div> <!-- end .slides -->
		</div> <!-- end .welcome-slider -->

		<div class="section white">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h2><small>Забудь о страхе перед открытиями</small>Расширяй свои рамки</h2>
							<p>Все города мира ждут твоего визита, тебе остается лишь найти своего Гида, который проведет по всем улочкам города и расскажет о истории и легендах этого места</p>
							<p>Забудь о нудных эксукрсиям и толпах туристов, о патраченных денегах и часах. Каждый человек, который зарегистрировался, может примерить на себе роль экскурсовода по джунглям совего города или же напротив выступить в роли отркывателя новой локации</p>
						</div> <!-- end .col-sm-6 -->
						<div class="col-sm-6">
							<img src="images/mission.jpg" alt="alt text here" class="img-responsive">
						</div> <!-- end .col-sm-6 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white">
			<div class="partial-background" style="background-image: url('images/background04.jpg');"></div>
			<div class="inner">
				<div class="container">
					<h2 class="text-center white">Места<small>Нади своего гида</small></h2>
					<div class="specialties-slider">
						<div class="specialty">
							<div class="image">
								<img src="images/specialty01.jpg" alt="alt text here" class="img-responsive">
								<div class="overlay"><a href="" class="button white">See More</a></div>
							</div> <!-- end .image -->
							<h5>Волгоград</h5>
							<p>Всем известная скульптура «Родина-мать зовёт!», что возвышается на Мамаевом кургане, внесена в книгу рекордов Гиннеса в качестве самой большой статуи в мире.</p>
						</div> <!-- end .specialty -->
						<div class="specialty">
							<div class="image">
								<img src="images/specialty02.jpg" alt="alt text here" class="img-responsive">
								<div class="overlay"><a href="" class="button white">See More</a></div>
							</div> <!-- end .image -->
							<h5>Санкт-петербург</h5>
							<p>Архитектура Питера настолько разнообразна, что при строительстве Михайловского или инженерного замка пришлось делать все четыре фасада здания различными.</p>
						</div> <!-- end .specialty -->
						<div class="specialty">
							<div class="image">
								<img src="images/specialty03.jpg" alt="alt text here" class="img-responsive">
								<div class="overlay"><a href="" class="button white">See More</a></div>
							</div> <!-- end .image -->
							<h5>Москва</h5>
							<p>Не только сталица, но и важны туристический центр Росии. А международным деловым центром является район «Москва-Сити».</p>
						</div> <!-- end .specialty -->
						<div class="specialty">
							<div class="image">
								<img src="images/specialty04.jpg" alt="alt text here" class="img-responsive">
								<div class="overlay"><a href="" class="button white">See More</a></div>
							</div> <!-- end .image -->
							<h5>Ульяновск</h5>
							<p>Президенский мост является самым длинным мостов России и одним из самых длинных в Европе</p>
						</div> <!-- end .specialty -->
					</div> <!-- end .specialty-slider -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

	<!--	<div class="section white border-top">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<h2>From menu</h2>
							<p>Lorem ipsum dolor sit amet, consetetur sadi erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
							<p>No sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, conset.</p>
							<a href="" class="button">Full Menu</a>
						</div> <!-- end .col-sm-3 -->
					<!--	<div class="column-spacer"></div>
					<!--	<div class="col-sm-9">
							<div class="row">
								<div class="col-sm-4">
									<div class="menu clearfix">
										<span class="price">$54</span>
										<h5>Roasted Turbot</h5>
										<p>Speck Ham, Savoy Cabbage, Fall Vegetables Caramelized Salsify, Ommegang Beer Jus.</p>
									</div> <!-- end .menu -->
								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
									<div class="menu clearfix">
										<span class="price">$12</span>
										<h5>Ice Cream</h5>
										<p>Smashed honeycomb, Crushed nuts & seeds, Seasonal fruits, Butterscotch sauce.</p>
									</div> <!-- end .menu -->
								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
									<div class="menu clearfix">
										<span class="price">$31</span>
										<h5>Huckleberry Limenade</h5>
										<p>Satisfy your sweet and sour cravings with combination of grenadine, lime and Sierra.</p>
									</div> <!-- end .menu -->
								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
									<div class="menu clearfix">
										<span class="price">$38</span>
										<h5>Baked Ravioli</h5>
										<p>Jumbo cheese-stuffed ravioli tossed in a light tomato cream sauce w/ baby spinach.</p>
									</div> <!-- end .menu -->
								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
									<div class="menu clearfix">
										<span class="price">$56</span>
										<h5>Ruban Rouge<span class="label green">New</span></h5>
										<p>Clementine Mousseline, Gingerbread Sablé Quince-Vodka Sorbet.</p>
									</div> <!-- end .menu -->
								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
									<div class="menu clearfix">
										<span class="price">$73</span>
										<h5>Angry Ball</h5>
										<p>A devilish blend of Fireball Cinnamon Whisky and Angry Orchard Apple Cider.</p>
									</div> <!-- end .menu -->
								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
									<div class="menu clearfix">
										<span class="price">$19</span>
										<h5>Italian Lobster</h5>
										<p>Half a marinated & roasted lobster with silky Parmesan sauce & spaghetti modoro.</p>
									</div> <!-- end .menu -->
								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
									<div class="menu clearfix">
										<span class="price">$12</span>
										<h5>Ice Cream</h5>
										<p>Smashed honeycomb, Crushed nuts & seeds, Seasonal fruits, Butterscotch sauce.</p>
									</div> <!-- end .menu -->
								</div> <!-- end .col-sm-4 -->
								<div class="col-sm-4">
									<div class="menu clearfix">
										<span class="price">$62</span>
										<h5>Double Grape Martini</h5>
										<p>Hendrick's gin, grapes, cucumber, fresh and pressed apple & lemon juice.</p>
									</div> <!-- end .menu -->
								</div> <!-- end .col-sm-4 -->
							</div> <!-- end .row -->
						</div> <!-- end .col-sm-9 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section large dark transparent parallax" style="background-image: url('images/background03.jpg');">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h2>Все краски мира откроются перед тобой, тебе осталось только выбрать свой маршрут</h2>
							<a href="" class="link-button">Сделай это</a>
						</div> <!-- end .col-sm-6 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

	<!--	<div class="section white">
			<div class="inner">
				<div class="container">
					<h2 class="text-center">Our Cooks<small>Finest In Town</small></h2>
					<div class="row">
						<div class="col-sm-3">
							<div class="cook">
								<div class="image">
									<img src="images/cook1.jpg" alt="alt text here" class="img-responsive">
									<div class="overlay"><a href="" class="button white">Full Profile</a></div>
								</div> <!-- end .image -->
								<!--<h5>Helene O'Connor</h5>
								<p>Former main chef at a famous Michelin Star restaurant Le Cordon Bleu. Winner of various prestige contests in San Marino.</p>
							</div> <!-- end .cook -->
						<!--</div> <!-- end .col-sm-3 -->
					<!--	<div class="col-sm-3">
							<div class="cook">
								<div class="image">
									<img src="images/cook2.jpg" alt="alt text here" class="img-responsive">
									<div class="overlay"><a href="" class="button white">Full Profile</a></div>
								</div> <!-- end .image -->
								<!--<h5>Julian Posadowski</h5>
								<p>He has been working in the restaurant from the day one. Passionate about the preparation and a perfectionist.</p>
							</div> <!-- end .cook -->
						</div> <!-- end .col-sm-3 -->
					<!--	<div class="col-sm-3">
							<div class="cook">
								<div class="image">
									<img src="images/cook3.jpg" alt="alt text here" class="img-responsive">
									<div class="overlay"><a href="" class="button white">Full Profile</a></div>
								</div> <!-- end .image -->
								<!--<h5>Alexander Vytlan</h5>
								<p>Not a real chef. He is actually an Envato graphic designer, but loves his way around the kitchen so why don’t make him famous?</p>
							</div> <!-- end .cook -->
					<!--	</div> <!-- end .col-sm-3 -->
						<!--<div class="col-sm-3">
							<div class="cook">
								<div class="image">
									<img src="images/cook4.jpg" alt="alt text here" class="img-responsive">
									<div class="overlay"><a href="" class="button white">Full Profile</a></div>
								</div> <!-- end .image -->
							<!--	<h5>Catrin Nilsson</h5>
								<p>Arguably the best cook when we talk pizza. Yep, she is the boss. Knows how to make Spaghetti Bolognese as well.</p>
							</div> <!-- end .cook -->
						</div> <!-- end .col-sm-3 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white border-top">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h3><span class="highlight">01.</span> Путешествуй больше</h3>
							<p>Мы хотим вам помочь узнать мир, мир который лежит за вашим порогом. Просто выберите гида.</p>
						</div> <!-- end .col-sm-6 -->
						<div class="col-sm-6">
							<h3><span class="highlight">02.</span> Путешествие начинается сейчас</h3>
							<p>Выберите город и понравившего гида. Новый год - это прежде всего люди. Узнавайте людей, улочки и обычаи с человеком, который не по наслышке знает об истории и интересных фактах этого места </p>
						</div> <!-- end .col-sm-6 -->
					</div> <!-- end .row -->
					<div class="spacer"></div>
					<div class="row">
						<div class="col-sm-6">
							<h3><span class="highlight">03.</span> Я Ваш Гид</h3>
							<p>Будте гидом, расскажите, что знаете, чем живете и какое место на ваш взгляд является неотъемлимой частью этого города, взамен получите новые знакомства и интересные подарки, за которые вы можете провести экскурсию. </p>
						</div> <!-- end .col-sm-6 -->
						<div class="col-sm-6">
							<h3><span class="highlight">04.</span> Экскурсия = сувенир</h3>
							<p>Любой труд должен оплачиваться. Люди, которые посвещают вам время, вкладывают в вас частичку истории своей родины, своей души. Взамен на экскурсию, вы можете поблагодарить своего спутника приятным сувениром из своего места проживания</p>
						</div> <!-- end .col-sm-6 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section small text-center dark transparent parallax" style="background-image: url('images/background02.jpg');">
			<div class="inner">
				<div class="container">
					<div class="call-to-action">
						<h3>Готовы к путешествиям?</h3>
						<a href="city.php" class="button solid brown">ДА</a>
					</div> <!-- end .call-to-action -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<h6>Address</h6>
						<p>Taste Cuisine Restaurant</p>
						<p>100 Mars Street</p>
						<p>10300 Venus, Milky Way</p>
					</div> <!-- end .col-sm-3 -->
					<div class="col-sm-3">
						<h6>Social Media</h6>
						<p><a href="">Facebook.com/Cuisine</a></p>
						<p><a href="">Instagram.com/Cuisine</a></p>
						<p><a href="">FourSquare.com/Cuisine</a></p>
					</div> <!-- end .col-sm-3 -->
					<div class="col-sm-3">
						<h6>Open Hours</h6>
						<div class="row">
							<div class="col-xs-6">
								<p>Monday - Friday</p>
								<p>Saturdays</p>
								<p>Sundays</p>
							</div> <!-- end .col-xs-6 -->
							<div class="col-xs-6">
								<p><b>07 - 23</b></p>
								<p><b>07 - 24</b></p>
								<p><b>Closed</b></p>
							</div> <!-- end .col-xs-6 -->
						</div> <!-- end .row -->
					</div> <!-- end .col-sm-3 -->
					<div class="col-sm-3">
						<h6>Contact</h6>
						<p><a href="mailto:info@tastecuisine.com">info@tastecuisine.com</a></p>
						<div class="row">
							<div class="col-xs-6">
								<p>Booking</p>
								<p>Information</p>
							</div> <!-- end .col-xs-6 -->
							<div class="col-xs-6">
								<p><b>00 1234 5678</b></p>
								<p><b>00 2345 6780</b></p>
							</div> <!-- end .col-xs-6 -->
						</div> <!-- end .row -->
					</div> <!-- end .col-sm-3 -->
				</div> <!-- end .row -->
			</div> <!-- end .container -->
		</footer> <!-- end .footer -->

		<!-- jQuery -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- google maps -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<!-- FlexSlider -->
		<script src="scripts/FlexSlider/jquery.flexslider-min.js"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Nivo Lightbox -->
		<script src="scripts/Nivo-Lightbox/nivo-lightbox.min.js"></script>
		<!-- Isotope -->
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<!-- Scripts.js -->
		<script src="js/scripts.js"></script>

	</body>
</html>