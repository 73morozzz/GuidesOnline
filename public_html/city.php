<!DOCTYPE html>
<html lang="ru">
	<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<style>
.delivery_block{
width: 270px;
padding: 24px 0 0;
color: #8c8c8c;
font-size: 11px;
margin-left: 30px;
}
.delivery_block .delivery_list {
padding: 3px 6px 0 6px;
height: 22px;
cursor: pointer;
border-radius: 4px;
margin: 0 20px 0 0;
color: #262626;
border: 1px solid #efefef;

width: 237px;
z-index: 11;
background: #fcfcfc;
}
.delivery_list #btn {
background: url(dropdown.png);
width: 17px;
height: 18px;
float: right;
}
.delivery_list span {
padding: 2px 0 0 2px;
display: block;
font-weight: bold;
}
.delivery_block ul.cities_list {
margin: 0px;
z-index: 10;
background: #fcfcfc;
position: absolute;
border-radius: 3px;
width: 249px;
padding: 0;
border: 1px solid #eee;
display: none;
}
ul.cities_list li {
padding: 6px 9px;
list-style-type: none;
border-top: 1px solid #efefef;
}
ul.cities_list li:hover {
cursor: pointer;
background: #fff;
}
.delivery_block .delivery_text {
padding: 3px 5px;
margin: 5px 0 0 3px;
}
</style>
		<script>
			$(function(){
			/* выбор города */
			$('.delivery_list').click(function(){
			$(".cities_list").slideToggle('fast');
			});
			$('ul.cities_list li').click(function(){
			var tx = $(this).html();
			var tv = $(this).attr('alt');
			$(".cities_list").slideUp('fast');
			$(".delivery_list span").html(tx);
			$(".delivery_text").html(tv);
			});
			})
		</script>
	</head>
	<body>

		<div class="responsive-menu">
			<a href="" class="responsive-menu-close"><i class="icon-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->
		<header class="header">
			<div class="top">
				<div class="container">
					<div class="left">
						<span></span>
					</div> <!-- end .left -->
					<div class="right">
						<span class="item"><?php include 'myscripts/head.php'; ?></span>
					</div> <!-- end .right -->
				</div> <!-- end .container -->
			</div> <!-- end .top -->
			<div class="navigation">
				<div class="container clearfix">
					<div class="logo"><a href="index.php"><img src="images/logo-black.png" alt="Cuisine" class="img-responsive"></a></div> <!-- end .logo -->
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
<div>
<img src="images/hz_hz1900_300.jpg" alt="View" class="img-responsive">
</div>


		<div class="delivery_block">
			<div class="delivery_list"><div id="btn"> </div><span>Москва</span></div>

				<ul class="cities_list">
					<li alt="Самовывоз из офиса или курьером, Дмитровское шоссе, 9-а, стр. 5, 12:00—20:00">Москва</li>
					<li alt="Лаврский проезд, 5, 11:00—18:00">Санкт-Петербург</li>
					<li alt="пр. Ленина 12-а, 9:00—18:00">Нижний Новгород</li>
					<li alt="ул. Карима Тинчурина, 9, 9:00—18:00">Казань</li>
					<li alt="ул. Варфоломеева, 87/89, оф. 41, 9:00—18:00">Ростов-на-Дону</li>
					<li alt="ул. Радомская, 27, 9:00—18:00">Волгоград</li>
					<li alt="ул. 9-ая Тихая, 11, 9:00—18:00">Краснодар</li>
					<li alt="ул. Ульяновская, 37/41, оф. 3, 9:00—18:00">Саратов</li>
					<li alt="ул. Мориса Тореза, 67, оф. 225, домофон 225, 9:00—20:00, сб 10:00—14:00">Самара</li>
					<li alt="ул. Завокзальная, 36, оф. 105, 9:00—18:00">Екатеринбург</li>
					<li alt="ул. Доватора 17-а, 9:00—18:00">Челябинск</li>
					<li alt="ул. Лермонтова, 81, оф. 228, 9:00—18:00">Омск</li>
					<li alt="ул. Октябрьская, 2, оф. 4, 9:00—18:00, сб 10:00—15:00">Новосибирск</li>
					<li alt="ул. Академика Киренского, 56-а, 9:00—18:00">Красноярск</li>
					<li alt="ул. Луначарского, 75, 9:00—18:00">Пермь</li>
					<li alt="ул. Кавказская, 8, 9:00—18:00, сб 10:00—14:00">Уфа</li>
				</ul>
				<div class="delivery_text">Самовывоз из офиса или курьером, Дмитровское шоссе, 9-а, стр. 5, 12:00—20:00</div>
		</div>

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
