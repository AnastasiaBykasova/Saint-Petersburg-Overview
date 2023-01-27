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
  <script src="https://yastatic.net/jquery/2.2.3/jquery.min.js"></script>
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
      margin-top: 100px;
      width: 80%;
      height: 80%;
      margin-bottom: 60px;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    .regions_map {
      margin-bottom: 60px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 100%;
      text-align: center;
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



<div id="map"></div>
<script>
function init() {
    // Задаём точки мультимаршрута.
    var hotel = [[59.888284, 30.463021], [59.932518, 30.35172], [59.90958, 30.339943], [59.940763, 30.321339], [59.936034, 30.318267], [59.89853, 30.322101], [59.723988, 30.400121], [59.930047, 30.269039], [59.939897, 30.31753], [59.971064, 30.320036]];
    var pointA = hotel[0],
        pointB = hotel[7],
        pointC = hotel[4],
        
        multiRoute = new ymaps.multiRouter.MultiRoute({
            referencePoints: [
                // pointA,
                // pointB, 
                // pointC,
                
                
                
                
            ],
            params: {
                //Тип маршрутизации - пешеходная маршрутизация.
                routingMode: 'pedestrian'
            }
        }, {
            // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
            boundsAutoApply: true
        });

    // Создаем кнопку.
    var changePointsButton = new ymaps.control.Button({
        data: {content: "Поменять местами точки А и В"},
        options: {selectOnClick: true}
    });

    // Объявляем обработчики для кнопки.
    changePointsButton.events.add('select', function () {
        multiRoute.model.setReferencePoints([pointB, pointA]);
    });

    changePointsButton.events.add('deselect', function () {
        multiRoute.model.setReferencePoints([pointA, pointB]);
    });



    // Создаем карту с добавленной на нее кнопкой.
    var myMap = new ymaps.Map('map', {
        center: [55.739625, 37.54120],
        zoom: 12,
        controls: [changePointsButton]
    }, {
        buttonMaxWidth: 300
    });


    // Добавляем мультимаршрут на карту.
    myMap.geoObjects.add(multiRoute);
// }
}

ymaps.ready(init);
</script>


</body>
</html>