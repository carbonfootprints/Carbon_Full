'use strict';
document.addEventListener('DOMContentLoaded', function () {
  setTimeout(function () {
    var options = {
      chart: {
        height: 200,
        type: 'donut'
      },
      dataLabels: {
        enabled: false
      },
      labels: ['Youtube', 'Facebook', 'Twitter'],
      series: [1258, 975, 500],
      legend: {
        show: true,
        position: 'bottom'
      },
      colors: ['#673ab7', '#2196f3', '#f44336'],
      responsive: [
        {
          breakpoint: 768,
          options: {
            legend: {
              show: false
            }
          }
        }
      ]
    };
    var chart = new ApexCharts(document.querySelector('#revenue-chart'), options);
    chart.render();
  }, 500);
});