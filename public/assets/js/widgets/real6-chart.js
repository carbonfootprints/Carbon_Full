'use strict';
document.addEventListener('DOMContentLoaded', function () {
  setTimeout(function () {
    var spark2 = {
      chart: {
        type: 'line',
        height: 30,
        sparkline: {
          enabled: true
        }
      },
      stroke: {
        curve: 'straight',
        width: 2
      },
      series: [
        {
          data: [2, 1, 2, 1, 1, 3, 0]
        }
      ],
      yaxis: {
        min: -3,
        max: 5
      },
      tooltip: {
        fixed: {
          enabled: false
        },
        x: {
          show: false
        },
        y: {
          title: {
            formatter: function (seriesName) {
              return '';
            }
          }
        },
        marker: {
          show: false
        }
      },
      colors: ['#673ab7']
    };
    var chart = new ApexCharts(document.querySelector('#real6-chart'), spark2);
    chart.render();
  }, 500);
});