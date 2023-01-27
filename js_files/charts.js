'use strict';
var DEFAULT_COLORS1 = ['#DCDCE0', '#BCC0CD', '#9DA4B9', '#7D87A6', '#5D6B92'];
var DEFAULT_COLORS2 = ['#5996F7', '#809FF9', '#A7A8FB', '#CEB0FD', '#F5B9FF'];
var getTotal = function (myChart) {
    var sum = myChart.config.data.datasets[0].data.reduce((a, b) => a + b, 0);
    return `Total: ${sum}`;
}
var ctx = document.getElementById('chart1').getContext('2d');

new Chart(ctx, {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [document.querySelector('.articles').getAttribute('publForeign'),
            document.querySelector('.articles').getAttribute('publRussian'),
            document.querySelector('.articles').getAttribute('publVAK'),
            document.querySelector('.articles').getAttribute('publTranslated'),
            document.querySelector('.articles').getAttribute('publIF'),
            ],
            backgroundColor: DEFAULT_COLORS2,
            label: 'Dataset 1'
        }],
        labels: ['Статьи в зарубежных журналах', 'Статьи в российских журналах', 'Статьи в российских журналах из перечня ВАК', 'Статьи в российских переводных журналах', 'Статьи в журналах с ненулевым импакт-фактором']
    },
    options: {
        responsive: true,
        legend: {
            display: true,
            position: 'right',
            align: 'start',
            labels: {
                color: 'black',
                boxWidth: 40,
                boxHeight: 40,
                padding: 20,
            },
        },
        title: {
            display: true,
            fontSize: 20,
            text: 'Данные о статьях'
        },
        animation: {
            animateScale: true,
            animateRotate: true
        },
        plugins: {
            doughnutlabel: {
                labels: [
                    {
                        text: 'The title',
                        font: {
                            size: '60'
                        }
                    },
                ]
            }
        }
    }
});

ctx = document.getElementById('chart2').getContext('2d');
new Chart(ctx, {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [
                document.querySelector('.citations').getAttribute('citForeign'),
                document.querySelector('.citations').getAttribute('citRussian'),
                document.querySelector('.citations').getAttribute('citVAK'),
                document.querySelector('.citations').getAttribute('citTranslated'),
                document.querySelector('.citations').getAttribute('citIF'),
            ],
            backgroundColor: DEFAULT_COLORS2,
            label: 'Dataset 2'
        }],
        labels: ['Цитирования из зарубежных журналов', 'Цитирования из российских журналов', 'Цитирования из российских журналов из перечня ВАК', 'Цитирования из российских переводных журналов', 'Цитирования из журналов с ненулевым импакт-фактором']
    },
    options: {
        responsive: true,
        legend:    /*false,
        legendCallback: function(chart) {
            let legendHtml = [];
            legendHtml.push('<ul>');
            let item = chart.data.datasets[0];
            for (let i=0; i < 5; i++) {
                legendHtml.push('<li>');
                legendHtml.push('<span class="chart-legend" style="background-color:' + item.Chart.DEFAULT_COLORS2[i] +'"></span>');
                legendHtml.push('<span class="chart-legend-label-text">' + chart.data.labels[i] + '</span>');
                legendHtml.push('</li>');
            }

            legendHtml.push('</ul>');
            return legendHtml.join("");
        },*/
        {
            display: true,
            position: 'right',
            labels: {
                color: 'black',
                boxWidth: 40,
                boxHeight: 40,
                padding: 20,
            },
        },

        title: {
            display: true,
            fontSize: 20,
            text: 'Данные о цитированиях'
        },
        animation: {
            animateScale: true,
            animateRotate: true
        },
        plugins: {
            doughnutlabel: {
                labels: [
                    {
                        text: 'This is one line of text',
                        font: {
                            size: '60',
                            family: 'Arial, Helvetica, sans-serif',
                            style: 'italic',
                            weight: 'bold'
                        },
                        color: '#bc2c1a'
                    }
                ]
            }
        }
    }
});


ctx = document.getElementById('chart3').getContext('2d');
new Chart(ctx, {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [
                document.querySelector('.citations').getAttribute('citForeign'),
                document.querySelector('.citations').getAttribute('citRussian'),
                document.querySelector('.citations').getAttribute('citVAK'),
                document.querySelector('.citations').getAttribute('citTranslated'),
                document.querySelector('.citations').getAttribute('citIF'),
            ],
            backgroundColor: DEFAULT_COLORS2,
            label: 'Dataset 2'
        }],
        labels: ['Цитирования из зарубежных журналов', 'Цитирования из российских журналов', 'Цитирования из российских журналов из перечня ВАК', 'Цитирования из российских переводных журналов', 'Цитирования из журналов с ненулевым импакт-фактором']
    },
    options: {
        responsive: true,
        legend:    /*false,
        legendCallback: function(chart) {
            let legendHtml = [];
            legendHtml.push('<ul>');
            let item = chart.data.datasets[0];
            for (let i=0; i < 5; i++) {
                legendHtml.push('<li>');
                legendHtml.push('<span class="chart-legend" style="background-color:' + item.Chart.DEFAULT_COLORS2[i] +'"></span>');
                legendHtml.push('<span class="chart-legend-label-text">' + chart.data.labels[i] + '</span>');
                legendHtml.push('</li>');
            }

            legendHtml.push('</ul>');
            return legendHtml.join("");
        },*/
        {
            display: true,
            position: 'right',
            labels: {
                color: 'black',
                boxWidth: 40,
                boxHeight: 40,
                padding: 20,
            },
        },

        title: {
            display: true,
            fontSize: 20,
            text: 'Данные о цитированиях'
        },
        animation: {
            animateScale: true,
            animateRotate: true
        },
        plugins: {
            doughnutlabel: {
                labels: [
                    {
                        text: 'This is one line of text',
                        font: {
                            size: '60',
                            family: 'Arial, Helvetica, sans-serif',
                            style: 'italic',
                            weight: 'bold'
                        },
                        color: '#bc2c1a'
                    }
                ]
            }
        }
    }
});