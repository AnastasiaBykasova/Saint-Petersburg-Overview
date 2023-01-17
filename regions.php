<!DOCTYPE html>
<html>
<head>
    <title>Оптимальное добавление множества меток</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU&amp;apikey=f8187bf9-d435-41c6-8c4c-cdaefed6b329" type="text/javascript"></script>
    <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
    <!-- <script src="regions.js" type="text/javascript"></script> -->
	<style>
        html, body, #map {
            width: 100%; height: 100%; padding: 0; margin: 0;
        }
        a {
            color: #04b; /* Цвет ссылки */
            text-decoration: none; /* Убираем подчеркивание у ссылок */
        }
        a:visited {
            color: #04b; /* Цвет посещённой ссылки */
        }
        a:hover {
            color: #f50000; /* Цвет ссылки при наведении на нее курсора мыши */
        }
    </style>
</head>
<body>
<div id="map"></div>
<script>

<?php
    $arr1 = [];
    $arr2 = [];
    include "php_extra/db_connect.php";
    $sql1 = mysqli_query($conn, 'SELECT DISTINCT hotel_koord, Coo2, CageLocation FROM `zoo3`;');
    while ($result1 = mysqli_fetch_array($sql1)){
        $arr1[] = (float)$result1["Coo1"];
        $arr2[] = (float)$result1["Coo2"];
        $cagelocation[] = (string)$result1["CageLocation"];
    }
?>

ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map('map', {
            center: [59.94506272, 30.09158751],
            zoom: 10
        }, {
            searchControlProvider: 'yandex#search'
        }),
        objectManager = new ymaps.ObjectManager({
            // Чтобы метки начали кластеризоваться, выставляем опцию.
            clusterize: true,
            // ObjectManager принимает те же опции, что и кластеризатор.
            gridSize: 32,
            clusterDisableClickZoom: true
        });

    // Чтобы задать опции одиночным объектам и кластерам,
    // обратимся к дочерним коллекциям ObjectManager.
    objectManager.objects.options.set('preset', 'islands#greenDotIcon');
    objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');
    myMap.geoObjects.add(objectManager);

    // $.ajax({
    //     url: "regions_info.json"
    // }).done(function(data) {
    //     objectManager.add(data);
    // });

}

</script>
</body>
</html>
