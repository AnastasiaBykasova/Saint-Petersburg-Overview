<!DOCTYPE html>
<html lang="en">

<head>
  <title>Гостиницы</title>
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
            <li class="nav-item"><a href="auth_page.php" class="nav-link">Авторизация</a></li>
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
        $query_hotel = "SELECT hotel_name, hotel_type, hotel_region, hotel_site, hotel_email, hotel_koord_x, hotel_koord_y FROM gostinicy";
        $hotel_name = [];
        $hotel_type = [];
        $hotel_region = [];
        $hotel_site = [];
        $hotel_email = [];
        $hotel_koord_x = [];
        $hotel_koord_y = [];
        $sql_hotel = mysqli_query($link, $query_hotel);
        while ($res_hotel = mysqli_fetch_array($sql_hotel)){
            $hotel_name[] = (string)$res_hotel["hotel_name"];
            $hotel_type[] = (string)$res_hotel["hotel_type"];
            $hotel_region[] = (string)$res_hotel["hotel_region"];
            $hotel_site[] = (string)$res_hotel["hotel_site"];
            $hotel_email[] = (string)$res_hotel["hotel_email"];
            $hotel_koord_x[] = (float)$res_hotel["hotel_koord_x"];
            $hotel_koord_y[] = (float)$res_hotel["hotel_koord_y"];
        }  
    ?>
    var hotel_name = JSON.parse('<?=json_encode($hotel_name)?>');
    var hotel_type = JSON.parse('<?=json_encode($hotel_type)?>');
    var hotel_region = JSON.parse('<?=json_encode($hotel_region)?>');
    var hotel_site = JSON.parse('<?=json_encode($hotel_site)?>');
    var hotel_email = JSON.parse('<?=json_encode($hotel_email)?>');
    var hotel_koord_x = JSON.parse('<?=json_encode($hotel_koord_x)?>');
    var hotel_koord_y = JSON.parse('<?=json_encode($hotel_koord_y)?>');
    //document.write(hotel_koord_x);


    var koordinates_hotel = [], i, j;
    for (i=0; i<740; i++) {
        koordinates_hotel.push(i);
        koordinates_hotel[i] = [];
        for (j=0; j<1; j++) {
            koordinates_hotel[i].push(hotel_koord_x[i], hotel_koord_y[i]);
        }
    }
    function onlyUnique(value, index, self) {
      return self.indexOf(value) === index;
    }
    // var region_unique = hotel_region.filter(onlyUnique);
    // document.write(region_unique.sort());

    <?php
        include "php_extra/db_connect.php";
        $query_museum = "SELECT museum_name, museum_type, museum_region, museum_site, museum_email, museum_koord_x, museum_koord_y FROM muzzz";
        $museum_name = [];
        $museum_type = [];
        $museum_region = [];
        $museum_site = [];
        $museum_email = [];
        $museum_koord_x = [];
        $museum_koord_y = [];
        $sql_museum = mysqli_query($link, $query_museum);
        while ($res_museum = mysqli_fetch_array($sql_museum)){
            // $museum_name[] = (string)$res_museum["museum_name"];
            $museum_type[] = (string)$res_museum["museum_type"];
            $museum_region[] = (string)$res_museum["museum_region"];
            $museum_site[] = (string)$res_museum["museum_site"];
            $museum_email[] = (string)$res_museum["museum_email"];
            $museum_koord_x[] = (float)$res_museum["museum_koord_x"];
            $museum_koord_y[] = (float)$res_museum["museum_koord_y"];
        }  
    ?>
    var museum_name = JSON.parse('<?=json_encode($museum_name)?>');
    var museum_type = JSON.parse('<?=json_encode($museum_type)?>');
    var museum_region = JSON.parse('<?=json_encode($museum_region)?>');
    var museum_site = JSON.parse('<?=json_encode($museum_site)?>');
    var museum_email = JSON.parse('<?=json_encode($museum_email)?>');
    var museum_koord_x = JSON.parse('<?=json_encode($museum_koord_x)?>');
    var museum_koord_y = JSON.parse('<?=json_encode($museum_koord_y)?>');


    var koordinates_museum = [], i, j;
    for (i=0; i<2; i++) {
        koordinates_museum.push(i);
        koordinates_museum[i] = [];
        for (j=0; j<1; j++) {
            koordinates_museum[i].push(museum_koord_x[i], museum_koord_y[i]);
        }
    }
    



    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            center: [59.94506272, 30.09158751],
            zoom: 9,
            //controls: []
          // }, {
          //   searchControlProvider: 'yandex#search'
        });
        // for (var i = 0; i<koordinates_hotel.length; i++) {
        //   var coo = koordinates_hotel[i];
        //   myPlacemark = new ymaps.Placemark([koordinates_hotel[i][0], koordinates_hotel[i][1]]);
        //   //myPlacemark = new ymaps.Placemark(myMap());
        //   myMap.geoObjects.add(myPlacemark);
        //   myPlacemark.events
        //   .add('mouseenter', function (e) {
        //       // Ссылку на объект, вызвавший событие,
        //       // можно получить из поля 'target'.
        //       e.get('target').options.set('preset', 'islands#greenIcon');
        //   })
        //   .add('mouseleave', function (e) {
        //       e.get('target').options.unset('preset');
        //   });

        // }
        

        var myClusterer = new ymaps.Clusterer();
        for (var i = 0; i<koordinates_hotel.length; i++) {
          console.log(koordinates_hotel[i][0]);
          var coo = koordinates_hotel[i];
          console.log(coo);
          myPlacemark = new ymaps.Placemark([koordinates_hotel[i][0], koordinates_hotel[i][1]], {
              // Чтобы балун и хинт открывались на метке, необходимо задать ей определенные свойства.
              balloonContentHeader: hotel_name[i],
              balloonContentBody: [hotel_type[i], '<br/>', hotel_email[i], '<br/>' ].join(''),
              balloonContentFooter: hotel_site[i],
              //clusterCaption: "<strong><s>Еще</s> одна</strong>",
              hintContent: hotel_region[i] },
            // }, {
            //   preset: 'islands#blueIcon'
            // }, 
            {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'images/hotel_loc.png',
            // Размеры метки.
            iconImageSize: [30, 30],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-5, -38]
        }),


  
          console.log(myPlacemark);
          myMap.geoObjects.add(myPlacemark);
          myClusterer.add(myPlacemark);
        };
        
        myMap.geoObjects.add(myClusterer);






        var myClusterer2 = new ymaps.Clusterer();
        for (var i = 0; i<koordinates_museum.length; i++) {
          console.log(koordinates_museum[i][0]);
          var coo = koordinates_museum[i];
          console.log(coo);
          myPlacemark = new ymaps.Placemark([koordinates_museum[i][0], koordinates_museum[i][1]], {
              // Чтобы балун и хинт открывались на метке, необходимо задать ей определенные свойства.
              balloonContentHeader: museum_name[i],
              balloonContentBody: [museum_type[i], '<br/>', museum_email[i], '<br/>' ].join(''),
              balloonContentFooter: museum_site[i],
              //clusterCaption: "<strong><s>Еще</s> одна</strong>",
              hintContent: museum_region[i] },
            // }, {
            //   preset: 'islands#redIcon'
            // }, 
            {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'images/museum_loc.png',
            // Размеры метки.
            iconImageSize: [30, 30],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-5, -38]
        }),





          console.log(myPlacemark);
          myMap.geoObjects.add(myPlacemark);
          myClusterer2.add(myPlacemark);
        };
        
        myMap.geoObjects.add(myClusterer2);












    //     objectManager = new ymaps.ObjectManager({
    //         // Чтобы метки начали кластеризоваться, выставляем опцию.
    //         clusterize: true,
    //         // ObjectManager принимает те же опции, что и кластеризатор.
    //         gridSize: 64,
    //         // Макет метки кластера pieChart.
    //         clusterIconLayout: "default#pieChart"
    //     });
    //     myMap.geoObjects.add(objectManager);


    //     // Создадим пункты выпадающего списка.
    //     //var listBoxItems = ['Адмиралтейский','Василеостровский','Выборгский','Калининский','Кировский','Колпинский','Красногвардейский','Красносельский','Кронштадтский','Курортный','Курортрный','Московский','Невский','Петроградский','Петродворцовый','Приморский','Пушкинский','Фрунзенский','Центральный']
    //     var listBoxItems = ['Гостиницы', 'Достопримечательности', '']
          
    //     .map(function (title) {
    //             return new ymaps.control.ListBoxItem({
    //                 data: {
    //                     content: title
    //                 },
    //                 state: {
    //                     selected: true
    //                 }
    //             })
    //         }),
    //     reducer = function (filters, filter) {
    //         filters[filter.data.get('content')] = filter.isSelected();
    //         return filters;
    //     },
    //     // Теперь создадим список, содержащий пункты.
    //     listBoxControl = new ymaps.control.ListBox({
    //         data: {
    //             content: 'Фильтр',
    //             title: 'Фильтр'
    //         },
    //         items: listBoxItems,
    //         state: {
    //             // Признак, развернут ли список.
    //             expanded: false,
    //             filters: listBoxItems.reduce(reducer, {})
    //         }
    //     });
    // myMap.controls.add(listBoxControl);

    // // Добавим отслеживание изменения признака, выбран ли пункт списка.
    // listBoxControl.events.add(['select', 'deselect'], function (e) {
    //     var listBoxItem = e.get('target');
    //     var filters = ymaps.util.extend({}, listBoxControl.state.get('filters'));
    //     filters[listBoxItem.data.get('content')] = listBoxItem.isSelected();
    //     listBoxControl.state.set('filters', filters);
    // });

    // var filterMonitor = new ymaps.Monitor(listBoxControl.state);
    // filterMonitor.add('filters', function (filters) {
    //     // Применим фильтр.
    //     objectManager.setFilter(getFilterFunction(filters));
    // });

    // function getFilterFunction(categories) {
    //     return function (obj) {
    //         var content = obj.properties.balloonContent;
    //         return categories[content]
    //     }
    // }


    
        
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