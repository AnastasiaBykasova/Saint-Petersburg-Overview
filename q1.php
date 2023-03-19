<!DOCTYPE html>
<html>
<head>
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.1.2/chart.umd.js">
    </script>
</head>
<body>
    
            <canvas id="barChartID" width =30%></canvas>
        
    
     
    <script>
        // Bar chart
        new Chart($("#barChartID"), {
            type: 'bar',
            options: {responsive: true,
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
                            size: '20'
                        }
                    },
                ]
            }
        }
            },
            data: {
                labels: ['Восточный административный округ', 'Западный административный округ', 'Зеленоградский административный округ', 'Новомосковский административный округ', 'Северный административный округ', 'Северо-Восточный административный округ', 'Северо-Западный административный округ', 'Центральный административный округ', 'Юго-Восточный административный округ', 'Юго-Западный административный округ', 'Южный административный округ'],
                datasets: [
                    {
                        // label: "Technology Learned by Students",
                        backgroundColor: ["#FF6384",
                "#63FF84",
                "#84FF63",
                "#8463FF",
                "#6384FF",
                "#DCDCE0",
                '#BCC0CD', 
                '#9DA4B9', 
                '#7D87A6', 
                '#5D6B92',
                '#5996F7'],
                        data: [12, 11, 5, 1, 13, 25, 19, 17, 7, 18, 26]
                    }
                ]
            }            
        });
    </script>
</body>
</html>