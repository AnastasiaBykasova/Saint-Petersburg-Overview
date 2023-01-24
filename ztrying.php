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
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Меню
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Главная</a></li>
            <li class="nav-item active"><a href="ztrying.php.php" class="nav-link">Личный кабинет</a></li>
            <li class="nav-item"><a href="auth_page.php" class="nav-link">Авторизация</a></li>
            <li class="nav-item"><a href="begin.php" class="nav-link">Начать поиск</a></li>
            <li class="nav-item"><a href="help.php" class="nav-link">Помощь</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Связаться с нами</a></li>
          </ul>
	      </div>
	    </div>
      <!-- <a href="https://mospolytech.ru/"><img src="images/logo_poly_white.png" height="50"></a> -->
	  </nav>
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
    </div>

		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
          	<h2 class="text-center">Выбранная гостиница</h2>
                <?php
                // require "php_extra/auth.php";
                //     if (!empty($_SESSION['auth'])) {
                //         echo 'текст только для авторизованного пользователя';
                //     }
                ?>
          	<h2 class="text-center">Избранные культурные объекты</h2>

            <?php
            //   require "php_extra/auth.php";
              // if (!empty($_SESSION['auth'])) {
              //   echo "Авторизация прошла успешно";
              // }
              // if (empty($_SESSION['auth'])) {
              //   echo '<p class="auth_error">'."Данные введены неверно".'</p>';
              // }
            ?>
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














































<!-- <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите ФИО'">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите email'">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите тему'">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Напишите сообщение'"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button">Отправить</button>
                            </div>
                        </form>
                        <?php
                        // $day_today = date("Y-m-d H:i:s"); //текущее время
                        // include "php_extra/db_connect.php";
                        // if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
                        //     $query = "INSERT INTO messages (message_name, message_email, message_subject, message_text, message_day, message_time) VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['subject']}', '{$_POST['message']}', '{$day_today}', '{$day_today}')"; 
                    
                        //     $result = mysqli_query($link, $query);
                        // }
                        ?> -->




<?php
        // include "php_extra/db_connect.php";
        // $query_theatre = "SELECT theatre_name, theatre_name_eng, theatre_type, theatre_site, theatre_email, theatre_koord_x, theatre_koord_y  FROM teatry";
        // $theatre_name = [];
        // $theatre_name_eng = [];
        // $theatre_type = [];
        // $theatre_site = [];
        // $theatre_email = [];
        // $theatre_koord_x = [];
        // $theatre_koord_y = [];
        // $sql_theatre = mysqli_query($link, $query_theatre);
        // while ($res_theatre = mysqli_fetch_array($sql_theatre)){
        //     // $theatre_name[] = (string)$res_theatre["theatre_name"];
        //     // $theatre_name_eng[] = (string)$res_theatre["theatre_name_eng"];
        //     $theatre_type[] = (string)$res_theatre["theatre_type"];
        //     $theatre_site[] = (string)$res_theatre["theatre_site"];
        //     $theatre_email[] = (string)$res_theatre["theatre_site"];
        //     $theatre_koord_x[] = (float)$res_theatre["theatre_koord_x"];
        //     $theatre_koord_y[] = (float)$res_theatre["theatre_koord_y"];
        // }  
    ?>
    <!-- // var theatre_name = JSON.parse('<?=json_encode($theatre_name)?>');
    // var theatre_name_eng = JSON.parse('<?=json_encode($theatre_name_eng)?>');
    // var theatre_type = JSON.parse('<?=json_encode($theatre_type)?>');
    // var theatre_site = JSON.parse('<?=json_encode($theatre_site)?>');
    // var theatre_email = JSON.parse('<?=json_encode($theatre_email)?>');
    var theatre_koord_x = JSON.parse('<?=json_encode($theatre_koord_x)?>');
    var theatre_koord_y = JSON.parse('<?=json_encode($theatre_koord_y)?>');

    var koordinates_theatre = [], i, j;
    for (i=0; i<214; i++) {
        koordinates_theatre.push(i);
        koordinates_theatre[i] = [];
        for (j=0; j<1; j++) {
            koordinates_theatre[i].push(theatre_koord_x[i], theatre_koord_y[i]);
        }
    } -->