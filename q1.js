new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});














// 'use strict';
// var DEFAULT_COLORS1 = ["#FF6384",
//                 "#63FF84",
//                 "#84FF63",
//                 "#8463FF",
//                 "#6384FF",
//                 "#DCDCE0",
//                 '#BCC0CD', 
//                 '#9DA4B9', 
//                 '#7D87A6', 
//                 '#5D6B92',
//                 '#5996F7'];
// var getTotal = function (myChart) {
//     var sum = myChart.config.data.datasets[0].data.reduce((a, b) => a + b, 0);
//     // return Total: ${sum};
// }
// var ctx = document.getElementById('chart1').getContext('2d');

// new Chart(ctx, {
//     type: 'doughnut',
//     data: {
//         datasets: [{
//             data: [document.querySelector('.parks').getAttribute('k1'),
//             document.querySelector('.parks').getAttribute('k2'),
//             document.querySelector('.parks').getAttribute('k3'),
//             document.querySelector('.parks').getAttribute('k4'),
//             document.querySelector('.parks').getAttribute('k5'),
//             document.querySelector('.parks').getAttribute('k6'),
//             document.querySelector('.parks').getAttribute('k7'),
//             document.querySelector('.parks').getAttribute('k8'),
//             document.querySelector('.parks').getAttribute('k9'),
//             document.querySelector('.parks').getAttribute('k10'),
//             document.querySelector('.parks').getAttribute('k11'),
//             ],
//             backgroundColor: DEFAULT_COLORS1,
//             label: 'Dataset 1'
//         }],
//         labels: ['Восточный административный округ', 'Западный административный округ', 'Зеленоградский административный округ', 'Новомосковский административный округ', 'Северный административный округ', 'Северо-Восточный административный округ', 'Северо-Западный административный округ', 'Центральный административный округ', 'Юго-Восточный административный округ', 'Юго-Западный административный округ', 'Южный административный округ']
//     },
//     options: {
//         responsive: true,
//         legend: {
//             display: true,
//             position: 'right',
//             align: 'start',
//             labels: {
//                 color: 'black',
//                 boxWidth: 40,
//                 boxHeight: 40,
//                 padding: 20,
//             },
//         },
//         title: {
//             display: true,
//             fontSize: 20,
//             text: 'Данные о статьях'
//         },
//         animation: {
//             animateScale: true,
//             animateRotate: true
//         },
//         plugins: {
//             doughnutlabel: {
//                 labels: [
//                     {
//                         text: 'The title',
//                         font: {
//                             size: '60'
//                         }
//                     },
//                 ]
//             }
//         }
//     }
// });