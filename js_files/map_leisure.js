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

    




































    

    // var coo1 =JSON.parse('<?=json_encode($arr_x)?>');
    // var coo2 =JSON.parse('<?=json_encode($arr_y)?>');
    // var coords=[], i, j;
    // for (i=0; i<921; i++){
    //     coords.push(i);
    //     coords[i] = [];
    // for (j=0; j<1; j++){
    //     coords[i].push(coo1[i], coo2[i]);
    // }
    // }
    // var myGeoObjects = [];
    // for (var i = 0; i<coords.length; i++) {
    // myGeoObjects[i] = new ymaps.GeoObject({
    //     geometry: {
    //     type: "Point",
    //     coordinates: coords[i]
    //     }
    // });
    // }
    // var myClusterer = new ymaps.Clusterer();
    // myClusterer.add(myGeoObjects);
    // myMap.geoObjects.add(myClusterer);





    // var coo = JSON.parse('<?=json_encode($hotel_koords)?>');
    // var coords=[], i;
    // for (i=0; i<941; i++){
    //     coords.push(i);
    //     coords[i] = [];
    //     coords[i].push(coo);
    // }
    // var myGeoObjects = [];
    // for (var i = 0; i<coords.length; i++) {
    // myGeoObjects[i] = new ymaps.GeoObject({
    //     type: "FeatureCollection",
    //     features: [
    //         {
    //             type: "Feature",
    //             id: i,
    //             geometry: {
    //                 type: "Point",
    //                 coordinates: coords[i]   
    //             },
    //         properties: {
    //             "balloonContentHeader": "<font size=3><b><a target='_blank' href='https://yandex.ru'>Здесь может быть ваша ссылка</a></b></font>",
    //             "balloonContentBody": "<p>Ваше имя: <input name='login'></p><p><em>Телефон в формате 2xxx-xxx:</em>  <input></p><p><input type='submit' value='Отправить'></p>",
    //             "balloonContentFooter": "<font size=1>Информация предоставлена: </font> <strong>этим балуном</strong>",
    //             "clusterCaption": "<strong><s>Еще</s> одна</strong> метка",
    //             "hintContent": "<strong>Текст  <s>подсказки</s></strong>"
    //         }
    // }]
    // });
    // }
    // var myClusterer = new ymaps.Clusterer();
    // myClusterer.add(myGeoObjects);
    // myMap.geoObjects.add(myClusterer);


    // var koords = JSON.parse('<?=json_encode($koords)?>');
    // var koordinates = [], i, j;
    // for (i=0; i<941; i++){
    //     koordinates.push(i);
    //     koordinates[i] = [];
    //     for (j=0; j<1; j++){
    //         koordinates[i].push(koords[i]);
    //     }
    // }
    // var myGeoObjects = [];
    // for (var i = 0; i<koordinates.length; i++) {
    //     myGeoObjects[i] = new ymaps.GeoObject({
    //         geometry: {
    //         type: "Point",
    //         coordinates: koordinates[i]
    //         }
    // });
    // }
    // var myClusterer = new ymaps.Clusterer();
    // myClusterer.add(myGeoObjects);
    // myMap.geoObjects.add(myClusterer);

}






















// var hotel_koord_x =JSON.parse('<?=json_encode($arr_x)?>');

//       var hotel_koord_y =JSON.parse('<?=json_encode($arr_y)?>');

//       var koordinates=[], i, j;
//       for (i=0; i<42; i++){
//         koordinates.push(i);
//         koordinates[i] = [];
//       for (j=0; j<1; j++){
//         koordinates[i].push(hotel_koord_x[i], hotel_koord_y[i]);
//       }
//       }


//       var myGeoObjects = [];

//       for (var i = 0; i<koordinates.length; i++) {
//       myGeoObjects[i] = new ymaps.GeoObject({
//           geometry: {
//           type: "Point",
//           coordinates: coords[i]
//           }
//       });
//       }

//       var myClusterer = new ymaps.Clusterer();
//       myClusterer.add(myGeoObjects);
//       myMap.geoObjects.add(myClusterer);




































// var myMap;

// // Дождёмся загрузки API и готовности DOM.
// ymaps.ready(init);

// function init () {
//     // Создание экземпляра карты и его привязка к контейнеру с
//     // заданным id ("map").
//     myMap = new ymaps.Map('map', {
//         // При инициализации карты обязательно нужно указать
//         // её центр и коэффициент масштабирования.
//         center: [59.94506272, 30.09158751], // Питер
//         zoom: 10,
//         // controls: []
//     }, {
//         searchControlProvider: 'yandex#search'
//     });
//     var searchControl = new ymaps.control.SearchControl({
//         options: {
//             provider: 'yandex#search'
//         }
//     });
    
//     // myMap.controls.add(searchControl);
    
//     // Программно выполним поиск определённых кафе в текущей
//     // прямоугольной области карты.
//     searchControl.search('Гостиница');


// }































// // Как только будет загружен API и готов DOM, выполняем инициализацию
// ymaps.ready(init);

// // Инициализация и уничтожение карты при нажатии на кнопку.
// function init () {
//     var myMap;

//     $('#toggle').bind({
//         click: function () {
//             if (!myMap) {
//                 myMap = new ymaps.Map('map', {
//                     center: [55.010251, 82.958437], // Новосибирск
//                     zoom: 9
//                 }, {
//                     searchControlProvider: 'yandex#search'
//                 });
//                 $("#toggle").attr('value', 'Скрыть карту');
//             }
//             else {
//                 myMap.destroy();// Деструктор карты
//                 myMap = null;
//                 $("#toggle").attr('value', 'Показать карту снова');
//             }
//         }
//     });
// }



















// var myMap;

// // Дождёмся загрузки API и готовности DOM.
// ymaps.ready(init);

// function init () {
//     // Создание экземпляра карты и его привязка к контейнеру с
//     // заданным id ("map").
//     myMap = new ymaps.Map('map', {
//         // При инициализации карты обязательно нужно указать
//         // её центр и коэффициент масштабирования.
//         center: [55.76, 37.64], // Москва
//         zoom: 10
//     }, {
//         searchControlProvider: 'yandex#search'
//     });

//     document.getElementById('destroyButton').onclick = function () {
//         // Для уничтожения используется метод destroy.
//         myMap.destroy();
//     };

// }












// // Функция ymaps.ready() будет вызвана, когда
// // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
// ymaps.ready(init);
// function init(){
//     // Создание карты.
//     var myMap = new ymaps.Map("map", {
//         // Координаты центра карты.
//         // Порядок по умолчанию: «широта, долгота».
//         // Чтобы не определять координаты центра карты вручную,
//         // воспользуйтесь инструментом Определение координат.
//         center: [59.938,30.3],
//         // Уровень масштабирования. Допустимые значения:
//         // от 0 (весь мир) до 19.
//         zoom: 9,

//         controls: ['smallMapDefaultSet']
//     }, {
//         searchControlProvider: 'yandex#search'
//     }, {
//             // Зададим ограниченную область прямоугольником, 
//             // примерно описывающим Санкт-Петербург.
//             restrictMapArea: [
//                 [59.838,29.511],
//                 [60.056,30.829]
//             ]
//     });
// }