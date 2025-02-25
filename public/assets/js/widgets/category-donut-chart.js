'use strict';
document.addEventListener('DOMContentLoaded', function () {
  setTimeout(function () {
    var options = {
      chart: {
        height: 300,
        type: 'donut'
      },
      dataLabels: {
        enabled: false
      },
      legend: {
        show: true,
        position: 'bottom'
      },
      plotOptions: {
        pie: {
          donut: {
            size: '65%'
          }
        }
      },
      labels: ['Saving', 'Spend', 'Income'],
      series: [25, 50, 25],
      colors: ['#1c232f', '#2196f3', '#d1cdf6']
    };
    var chart = new ApexCharts(document.querySelector('#category-donut-chart'), options);
    chart.render();
  }, 500);
});