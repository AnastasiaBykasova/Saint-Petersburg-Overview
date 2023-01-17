<?php
//include "php_extra/db_connect.php";


// $query = "SELECT hotel_koordinates FROM gostinicy LIMIT 10";
// $result = mysqli_query($link, $query);
// //$data_koor = [];
// $kol_rows = mysqli_num_rows($result);


// for ($i = 0; $i < $kol_rows; $i++) {
//   $data_koor[$i] = 
// }
// while ($koor  = mysqli_fetch_array($result)) {
//   $data_koor[] = $koor;
// }

// $stmt = mysqli_prepare($link, $query);
// mysqli_stmt_execute($stmt);
// mysqli_stmt_bind_result($stmt, $hotel_koordinates);
// $koors = array();
// while (mysqli_stmt_fetch($stmt)) {
//     // $koors[] = array('hotel_koordinates' => $hotel_koordinates);
//     $koors[] = $hotel_koordinates;
// }
// print_r($koors);

// $pizza  = "кусок1 кусок22";
// $pieces = explode(" ", $pizza);
// echo $pieces[0]." ";
// echo $pieces[1];

// $str = "56.7";
// $st_int = (float) $str;



?>




<!-- <script type='text/javascript'>
      <?php
      // $php_array = $koors;
      // $js_array = json_encode($php_array);
      // echo "var javascript_array = ". $js_array . ";\n";
      ?>
    </script> -->


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Связаться с нами</title>
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

  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=f8187bf9-d435-41c6-8c4c-cdaefed6b329" type="text/javascript"></script>
  <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
  <!-- <script src="js_files/map_leisure.js" type="text/javascript"></script> -->
  <style>
    body,
    html {
      padding: 0;
      margin: 0;
      width: 100%;
      height: 100%;
    }

    #map {
      margin-top: 110px;
      width: 80%;
      height: 80%;
      margin-bottom: 60px;
      display: block;
      margin-left: auto;
      margin-right: auto
    }

    #language {
      cursor: pointer;
      margin-left: 5px;
      font-size: 100%;
    }

    a {
      color: #04b;
      /* Цвет ссылки */
      text-decoration: none;
      /* Убираем подчеркивание у ссылок */
    }

    a:visited {
      color: #04b;
      /* Цвет посещённой ссылки */
    }

    a:hover {
      color: #f50000;
      /* Цвет ссылки при наведении на нее курсора мыши */
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <img src="images/logo_black.png" height="50">
      <a class="navbar-brand" href="index.php">Главная</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="begin.php" class="nav-link">Начать поиск</a></li>
          <li class="nav-item"><a href="help.php" class="nav-link">Помощь</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Связаться с нами</a></li>
        </ul>
      </div>
    </div>
    <a href="https://mospolytech.ru/"><img src="images/logo_poly_white.png" height="50"></a>
  </nav>






<!--//! это код для карты -->
  <div id="map"></div>

  <script type="text/javascript">

    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.

    <?php
        include "php_extra/db_connect.php";
        $query = "SELECT hotel_name, hotel_region, hotel_koord_x, hotel_koord_y FROM gostinicy";
        $hotel_koord_x = [];
        $hotel_koord_y = [];
        $hotel_name = [];
        $hotel_region = [];
        $sql1 = mysqli_query($link, $query);
        while ($result1 = mysqli_fetch_array($sql1)){
            $hotel_koord_x[] = (float)$result1["hotel_koord_x"];
            $hotel_koord_y[] = (float)$result1["hotel_koord_y"];
            //$hotel_name[] = (string)$result1["hotel_name"];
            $hotel_region[] = (string)$result1["hotel_region"];
        }
        //print_r($hotel_region);
    ?>

    // console.log($hotel_region);
    var hotel_koord_x = JSON.parse('<?=json_encode($hotel_koord_x)?>');
    var hotel_koord_y = JSON.parse('<?=json_encode($hotel_koord_y)?>');
    var hotel_name = JSON.parse('<?=json_encode($hotel_name)?>');
    var hotel_region = JSON.parse('<?=json_encode($hotel_region)?>');

    var koordinates = [], i, j;
    for (i=0; i<918; i++) {
        koordinates.push(i);
        koordinates[i] = [];
        for (j=0; j<1; j++) {
            koordinates[i].push(hotel_koord_x[i], hotel_koord_y[i]);
        }
    }

    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            center: [59.94506272, 30.09158751],
            zoom: 9
        });
        var myClusterer = new ymaps.Clusterer();
        for (var i = 0; i<koordinates.length; i++) {
            console.log(koordinates[i][0]);
            var coo = koordinates[i];
            console.log(coo);
            myPlacemark = new ymaps.Placemark([koordinates[i][0], koordinates[i][1]], {
                
                // Чтобы балун и хинт открывались на метке, необходимо задать ей определенные свойства.
                balloonContentHeader: hotel_region[i],
                balloonContentBody: "текст",
                balloonContentFooter: "<a href='blog.php'>Посмотреть животных</a>",
                hintContent: hotel_region[i]
            });
            console.log(myPlacemark);
            myMap.geoObjects.add(myPlacemark);
            myClusterer.add(myPlacemark);
        };
        
        myMap.geoObjects.add(myClusterer);
        
    }
    
    
  </script>










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
            <a href="#about_course_project">
              <h2 class="ftco-heading-2">О проекте</h2>
            </a>
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
                <li><span class="icon icon-phone"></span><span class="text">
                    <p id="phone_copy">+79261045260</p>
                  </span></li>
                <li><span class="icon icon-envelope pr-4"></span><span class="text"><a href="mailto:nastybykasova@gmail.com" id="email_copy">nastybykasova@gmail.com</a></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <hr class="hr-line">
      <div class="row">
        <div class="col-md-12 text-center">
          <p>Copyright &copy; А.С.Быкасова, <script>
              document.write(new Date().getFullYear());
            </script>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>
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
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>