'use strict';
document.addEventListener('DOMContentLoaded', function () {
  setTimeout(function () {
    var options = {
      chart: {
        height: 170,
        type: 'bar',
        sparkline: {
          enabled: true
        }
      },
      colors: ['#2196f3', '#0e9e4a', '#f44336'],
      plotOptions: {
        bar: {
          columnWidth: '55%',
          distributed: true
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        width: 0
      },
      series: [
        {
          name: 'Requests',
          data: [66.6, 29.7, 32.8]
        }
      ],
      xaxis: {
        categories: ['Desktop', 'Tablet', 'Mobile']
      }
    };
    var chart = new ApexCharts(document.querySelector('#chart-percent'), options);
    chart.render();
  }, 500);
});