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
      margin-top: -330px;
      width: 70%;
      height: 80%;
      margin-bottom: 60px;
      display: block;
      margin-left: auto;
      margin-right: 2%;
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

    .my-button {
            /* display: inline-block; */
            display: block;
            padding: 3px 5px;
            background: #eee;
            border: 1px solid #bbb;
            border-radius: 3px;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        .my-button__text {
            font-family: 'Arial', sans-serif;
            font-size: 14px;
            color: #333;
            margin-left: 10px;
        }

        .my-button__img {
            padding: 0;
            margin-bottom: -3px;
        }

        .my-button_small .my-button__text {
            display: none;
        }

        .my-button_medium .my-button__img {
            display: none;
        }

        .my-button_large .my-button__text {
            margin-left: 10px;
        }
        .my-button-selected {
            color: #333333;
            background-color: #ffffff;
            border: 2px dashed #333;
        }
        #suggest2 {
            width: 300px;
            margin: 5px;
            margin-bottom: 0px;
        }

  </style>
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
            <li class="nav-item"><a href="auth_page.php" class="nav-link">Авторизация</a></li>
            <li class="nav-item"><a href="begin.php" class="nav-link">Начать поиск</a></li>
            <li class="nav-item"><a href="help.php" class="nav-link">Помощь</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Связаться с нами</a></li>
        </ul>
      </div>
    </div>
    <a href="https://mospolytech.ru/"><img src="images/logo_poly_white.png" height="50"></a>
  </nav>

 

  
  <section class="ftco-section contact-section">
    <div class="row block-9 justify-content-left mb-2">
      <div class="col-md-8 mb-md-2">
        <form class="searching_objects">
          <div class="searching_objects">
            <p class="search_objects">Выбрать район расположения гостиницы</p>
            <!-- <input type="text" id="suggest2"> -->
            <!-- <input type="text" id="suggest2" placeholder="some text" class="search" onkeydown="search(this)"/> -->
            <input type="text" name="suggest2" id="suggest2">
          </div>
          <div class="show_regions">
            <button id="show_regions" class="custom-btn button1"><span>Поиск</span></button>
          </div>
        </form>
    </div>
  </section>



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
        $query_museum = "SELECT museum_name, museum_type, museum_region, museum_site, museum_email, museum_koord_x, museum_koord_y FROM muzei";
        $museum_name = [];
        $museum_type = [];
        $museum_region = [];
        $museum_site = [];
        $museum_email = [];
        $museum_koord_x = [];
        $museum_koord_y = [];
        $sql_museum = mysqli_query($link, $query_museum);
        while ($res_museum = mysqli_fetch_array($sql_museum)){
            $museum_name[] = (string)$res_museum["museum_name"];
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
    for (i=0; i<214; i++) {
        koordinates_museum.push(i);
        koordinates_museum[i] = [];
        for (j=0; j<1; j++) {
            koordinates_museum[i].push(museum_koord_x[i], museum_koord_y[i]);
        }
    }
    
    <?php
        include "php_extra/db_connect.php";
        $query_object = "SELECT object_name, object_type, object_site, object_email, object_koord_x, object_koord_y FROM dostoprimechatelnosti";
        $object_name = [];
        $object_name_short = [];
        $object_type = [];
        $object_site = [];
        $object_email = [];
        $object_koord_x = [];
        $object_koord_y = [];
        $sql_object = mysqli_query($link, $query_object);
        while ($res_object = mysqli_fetch_array($sql_object)){
            $object_name[] = (string)$res_object["object_name"];
            $object_name_short[] = (string)$res_object["object_name_short"];
            $object_type[] = (string)$res_object["object_type"];
            $object_site[] = (string)$res_object["object_site"];
            $object_email[] = (string)$res_object["object_email"];
            $object_koord_x[] = (float)$res_object["object_koord_x"];
            $object_koord_y[] = (float)$res_object["object_koord_y"];
        }  
    ?>
    var object_name = JSON.parse('<?=json_encode($object_name)?>');
    var object_name_short = JSON.parse('<?=json_encode($object_name_short)?>');
    var object_type = JSON.parse('<?=json_encode($object_type)?>');
    var object_site = JSON.parse('<?=json_encode($object_site)?>');
    var object_email = JSON.parse('<?=json_encode($object_email)?>');
    var object_koord_x = JSON.parse('<?=json_encode($object_koord_x)?>');
    var object_koord_y = JSON.parse('<?=json_encode($object_koord_y)?>');
    
    // document.querySelector("#show_regions").onclick = function(){
      //alert("Вы нажали на кнопку");


      var koordinates_object = [], i, j;
      for (i=0; i<136; i++) {
          koordinates_object.push(i);
          koordinates_object[i] = [];
          for (j=0; j<1; j++) {
              koordinates_object[i].push(object_koord_x[i], object_koord_y[i]);
          }
      }

  
    ymaps.ready(init);
    function init(){
      // e.preventDefault();
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            center: [59.94506272, 30.09158751],
            zoom: 9,
            // controls: ['zoomControl', 'searchControl', 'typeSelector',  'fullscreenControl', 'routeButtonControl']
            controls: ['zoomControl', 'typeSelector',  'fullscreenControl']
          
        }, //  {
        //     searchControlProvider: 'yandex#search'
        // }
        ),
        clusterer = new ymaps.Clusterer({
            preset: 'islands#invertedVioletClusterIcons',
            clusterHideIconOnBalloonOpen: false,
            geoObjectHideIconOnBalloonOpen: false
        });

        var tileUrlTemplate = 'hotspot_data/%z/tile_x=%x&y=%y',

        // Шаблон callback-функции, в которую сервер будет оборачивать данные тайла.
        // Пример callback-функции после подстановки - 'testCallback_tile_x_1_y_2_z_9'.
        keyTemplate = 'testCallback_tile_%c',

        // URL тайлов картиночного слоя.
        // Пример URL после подстановки -
        // '.../hotspot_layer/images/9/tile_x=1&y=2.png'.
        imgUrlTemplate = 'images/%z/tile_x=%x&y=%y.png',

        // Создадим источник данных слоя активных областей.
        objSource = new ymaps.hotspot.ObjectSource(tileUrlTemplate, keyTemplate),

        // Создаем картиночный слой и слой активных областей.
        imgLayer = new ymaps.Layer(imgUrlTemplate, {tileTransparent: true}),
        hotspotLayer = new ymaps.hotspot.Layer(objSource, {cursor: 'help'});

        // Добавляем слои на карту.
        myMap.layers.add(hotspotLayer);
        myMap.layers.add(imgLayer);

        // Задаем собственный провайдер поисковых подсказок и максимальное количество результатов.
        var suggestView2 = new ymaps.SuggestView('suggest2', {provider: provider, results: 3});
       

        var myClusterer = new ymaps.Clusterer();
        // cafe = ymaps.geoQuery({
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

          // let click_1 = document.getElementById('show_regions');
          // click_1.onclick = function() {
          //     var suggest2 = document.getElementById('suggest2').value;
          //     map(myClusterer);
          // }
        };
        myMap.geoObjects.add(myClusterer);
        // let click_1 = document.getElementById('show_regions');
        // click_1.onclick = function() {
        //     var suggest2 = document.getElementById('suggest2').value;
        //     map(myClusterer);
        // }



        var myClusterer2 = new ymaps.Clusterer();
        for (var i = 0; i<koordinates_museum.length; i++) {
          console.log(koordinates_museum[i][0]);
          var coo = koordinates_museum[i];
          console.log(coo);
          myPlacemark2 = new ymaps.Placemark([koordinates_museum[i][0], koordinates_museum[i][1]], {
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
          console.log(myPlacemark2);
          myMap.geoObjects.add(myPlacemark2);
          myClusterer2.add(myPlacemark2);


          // let click_2 = document.getElementById('show_regions');
          // click_2.onclick = function() {
          //     var suggest2 = document.getElementById('suggest2').value;
          //     map(myClusterer2);
          // }
        };
        myMap.geoObjects.add(myClusterer2);
        // let click_2 = document.getElementById('show_regions');
        // click_2.onclick = function() {
        //     var suggest2 = document.getElementById('suggest2').value;
        //     map(myClusterer2);
        // }



        var myClusterer3 = new ymaps.Clusterer();
        for (var i = 0; i<koordinates_object.length; i++) {
          console.log(koordinates_object[i][0]);
          var coo = koordinates_object[i];
          console.log(coo);
          myPlacemark3 = new ymaps.Placemark([koordinates_object[i][0], koordinates_object[i][1]], {
              // Чтобы балун и хинт открывались на метке, необходимо задать ей определенные свойства.
              balloonContentHeader: object_name[i],
              balloonContentBody: [object_type[i], '<br/>', object_email[i], '<br/>' ].join(''),
              balloonContentFooter: object_site[i],
              //clusterCaption: "<strong><s>Еще</s> одна</strong>",
              hintContent: object_name_short[i] },
            // }, {
            //   preset: 'islands#redIcon'
            // }, 
            {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'images/leisure_loc.png',
            // Размеры метки.
            iconImageSize: [30, 30],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-5, -38]
        }),
          console.log(myPlacemark3);
          myMap.geoObjects.add(myPlacemark3);
          myClusterer3.add(myPlacemark3);

          // let click_3 = document.getElementById('show_regions');
          // click_3.onclick = function() {
          //     var suggest2 = document.getElementById('suggest2').value;
          //     map(myClusterer3);
          // }
        };
        myMap.geoObjects.add(myClusterer3);
        // let click_3 = document.getElementById('show_regions');
        // click_3.onclick = function() {
        //     var suggest2 = document.getElementById('suggest2').value;
        //     map(myClusterer3);
        // }


        //!
        // let click_1 = document.getElementById('show_regions');
        // click_1.onclick = function() {
        //     var suggest2 = document.getElementById('suggest2').value;
        //     map(myClusterer, myClusterer2, myClusterer3);
        //     e.preventDefault();
        // }

        var map = function(cl1, cl2, cl3) {
          var result = myMap.geoObjects.add(cl1);
          var result = myMap.geoObjects.add(cl2);
          var result = myMap.geoObjects.add(cl3);
          return result;
        }

        // var map = function(cl1) {
        //   var result = myMap.geoObjects.add(cl1);
        //   return result;
        // }
        




        //myMap.geoObjects.add(arrr);






        ButtonLayout = ymaps.templateLayoutFactory.createClass([
            '<div title="{{ data.title }}" class="my-button ',
            '{% if state.size == "small" %}my-button_small{% endif %}',
            '{% if state.size == "medium" %}my-button_medium{% endif %}',
            '{% if state.size == "large" %}my-button_large{% endif %}',
            '{% if state.selected %} my-button-selected{% endif %}">',
            '<img class="my-button__img" src="{{ data.image }}" alt="{{ data.title }}">',
            '<span class="my-button__text">{{ data.content }}</span>',
            '</div>'
        ].join('')),

        hotel_button = new ymaps.control.Button({
            data: {
                content: "Показать гостиницы",
                image: 'images/hotel_loc_min.png',
                title: "Гостиницы"
            },
            options: {
                layout: ButtonLayout,
                maxWidth: [170, 190, 220]
            }
        });

    myMap.controls.add(hotel_button, {
        position: {
            right: 145,
            top: 9
        }
    });

    museum_button = new ymaps.control.Button({
            data: {
                content: "Показать музеи",
                image: 'images/museum_loc_min.png',
                title: "Музеи"
            },
            options: {
                layout: ButtonLayout,
                maxWidth: [170, 190, 220]
            }
        });

    myMap.controls.add(museum_button, {
        position: {
            right: 335,
            top: 9
        }
    });

    object_button = new ymaps.control.Button({
            data: {
                content: "Показать достопримечательности",
                image: 'images/leisure_loc_min.png',
                title: "Музеи"
            },
            options: {
                layout: ButtonLayout,
                maxWidth: [170, 190, 220]
            }
        });

    myMap.controls.add(object_button, {
        position: {
            right: 495,
            top: 9
        }
    });

    }
    find = function (hotel_region, find) {
        return hotel_region.filter(function (value) {
            return (value + "").toLowerCase().indexOf(find.toLowerCase()) != -1;
        });
    };
    var provider = {
        suggest: function (request, options) {
            var res = find(hotel_region, request),
                arrayResult = [],
                results = Math.min(options.results, res.length);
            for (var i = 0; i < results; i++) {
                arrayResult.push({displayName: res[i], value: res[i]})
            }
            return ymaps.vow.resolve(arrayResult);
        }
    };

    // if (event.target.className === 'show_regions') { 
    //     let screen = document.getElementById("suggest2");
    //     screen.textContent = screen.textContent + event.target.textContent;
    //     alert(screen.textContent);
    // }

    // let click_1 = document.getElementById('show_regions');
    //     click_1.onclick = function() {
    //         var string_enter = "";
    //         document.getElementById('suggest2').value = string_enter;
    //         alert(string_enter);
    //     }

    // function search(ele) {
    //   if(event.key === 'Enter') {
    //       alert(ele.value);        
    //   }
    // }

    // var jobValue = document.getElementById('txtJob').value;
    // alert(jobValue);

    
    
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