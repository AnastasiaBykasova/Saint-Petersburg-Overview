
var myMap;

// Дождёмся загрузки API и готовности DOM.
ymaps.ready(init);

function init () {
    // Создание экземпляра карты и его привязка к контейнеру с
    // заданным id ("map").
    myMap = new ymaps.Map('map', {
        // При инициализации карты обязательно нужно указать
        // её центр и коэффициент масштабирования.
        center: [59.94311298, 30.26383021], // Москва
        zoom: 10
    }, {
        searchControlProvider: 'yandex#search'
    });

}

































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