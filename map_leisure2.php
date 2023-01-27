<!DOCTYPE html>
<html>
<head>
    <title>Создание меню для отображения групп объектов</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--
        Укажите свой API-ключ. Тестовый ключ НЕ БУДЕТ работать на других сайтах.
        Получить ключ можно в Кабинете разработчика: https://developer.tech.yandex.ru/keys/
    -->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU&amp;apikey=f8187bf9-d435-41c6-8c4c-cdaefed6b329" type="text/javascript"></script>
    <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
    <!-- <script src="ymapsml_menu.js" type="text/javascript"></script> -->
    <style type="text/css">
        html, body{
            width: 100%; height: 100%; padding: 0; margin: 0;
        }
        #map {
            height: 75%;
        }
        /* Оформление меню (начало)*/
        #menu {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        #menu a {
            text-decoration: none;
            border-bottom: dashed 1px;
        }
        a.active {
            color: #000;
        }
        /* Оформление меню (конец)*/
    </style>
</head>
<body>
 <div>
     <ul id="menu"></ul>
 </div>
 <div id="map"></div>

<script>

ymaps.ready(init);

function init () {

    // Создание экземпляра карты.
    var myMap = new ymaps.Map('map', {
        center: [50.443705, 30.530946],
        zoom: 12,
        controls: []
    });

    // Загрузка YMapsML-файла.
    ymaps.geoXml.load('musei_amount.xml')
        .then(function (res) {
            res.geoObjects.each(function (item) {
                addMenuItem(item, myMap);
            });
        },
        // Вызывается в случае неудачной загрузки YMapsML-файла.
        function (error) {
            alert("При загрузке YMapsML-файла произошла ошибка: " + error);
        });

    // Добавление элемента в список.
    function addMenuItem(group, map) {
        // Показать/скрыть группу геообъектов на карте.
        $("<a class=\"title\" href=\"#\">" + group.properties.get('name') + "</a>")
            .bind("click", function () {
                var link = $(this);
                // Если пункт меню "неактивный", то добавляем группу на карту,
                // иначе - удаляем с карты.
                if (link.hasClass("active")) {
                    map.geoObjects.remove(group);
                } else {
                    map.geoObjects.add(group);
                }
                // Меняем "активность" пункта меню.
                link.toggleClass("active");
                return false;
            })
            // Добавление нового пункта меню в список.
            .appendTo(
                $("<li></li>").appendTo($("#menu"))
            );
    }
}





</script>

</body>
</html>