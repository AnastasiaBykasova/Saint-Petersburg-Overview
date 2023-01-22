<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Авторизация</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <img src="images/logo_black.png" height="50">
	      <a class="navbar-brand" href="index.php">Главная</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Меню
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="personal_page.php" class="nav-link">Личный кабинет</a></li>
            <li class="nav-item active"><a href="auth_page.php" class="nav-link">Авторизация</a></li>
            <li class="nav-item"><a href="begin.php" class="nav-link">Начать поиск</a></li>
	          <li class="nav-item"><a href="help.php" class="nav-link">Помощь</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Связаться с нами</a></li>
	        </ul>
	      </div>
	    </div>
      <a href="https://mospolytech.ru/"><img src="images/logo_poly_white.png" height="50"></a>
	  </nav>
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
    </div>

		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
          	<h2 class="text-center">Авторизация</h2>
            <form formmethod=POST action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" name="user_email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" name="user_name" class="form-control" placeholder="Пароль">
              </div>
              <div class="form-group">
                <input type="submit" formmethod=POST value="Отправить" class="btn btn-primary py-3 px-5">
              </div>
              <p class="if_no_acc">Нет аккаунта? <a href="regist_page.php">Зарегистрироваться</a></p>
            </form>
           
          
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">ПитерOverview</h2>
              <p>Помощь в организации досуга для гостей Санкт-Петербурга.</p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="@"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="@"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="@"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="https://t.me/Stace046"><span class="icon-telegram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <a href="#about_course_project"><h2 class="ftco-heading-2">О проекте</h2></a>
              <ul class="list-unstyled">
                <li><a href="index.php"><span class="icon-long-arrow-right mr-2"></span>Главная</a></li>
                <li><a href="begin.php"><span class="icon-long-arrow-right mr-2"></span>Начать поиск</a></li>
                <li><a href="help.php"><span class="icon-long-arrow-right mr-2"></span>Помощь</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Остались вопросы?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Москва, Россия</span></li>
	                <li><span class="icon icon-phone"></span><span class="text"><p id="phone_copy">+79261045260</p></span></li>
	                <li><span class="icon icon-envelope pr-4"></span><span class="text"><a href="mailto:nastybykasova@gmail.com" id="email_copy">nastybykasova@gmail.com</a></span></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <hr class="hr-line">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="sourse-list">
              <a href="https://classif.gov.spb.ru/irsi/?category=17">Источник открытых данных: </a>
              <a href="https://classif.gov.spb.ru/irsi/7842489089-gostinicy/structure_version/153/">Гостиницы, </a>
              <a href="https://classif.gov.spb.ru/irsi/7842489089-dostoprimechatelnosti/structure_version/157/">Достопримечательности, </a>
              <a href="https://classif.gov.spb.ru/irsi/7842489089-muzei/structure_version/569/">Музеи</a>
            </div>
            <p>Copyright &copy; А.С.Быкасова, <script>document.write(new Date().getFullYear());</script></p>
          </div>
        </div>
      </div>
    </footer>
  
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/copying.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>