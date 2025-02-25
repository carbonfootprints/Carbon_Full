'use strict';
document.addEventListener('DOMContentLoaded', function () {
  setTimeout(function () {
    var options = {
      chart: {
        height: 260,
        type: 'pie'
      },
      series: [66, 50, 40, 30],
      labels: ['Very Poor', 'Satisfied', 'Very Satisfied', 'Poor'],
      legend: {
        show: true,
        position: 'bottom'
      },
      dataLabels: {
        enabled: true,
        dropShadow: {
          enabled: false
        }
      },
      theme: {
        monochrome: {
          enabled: true,
          color: '#f44336'
        }
      }
    };
    var chart = new ApexCharts(document.querySelector('#satisfaction-chart'), options);
    chart.render();
  }, 500);
});