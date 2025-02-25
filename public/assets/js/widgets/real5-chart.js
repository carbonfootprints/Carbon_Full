'use strict';
document.addEventListener('DOMContentLoaded', function () {
  setTimeout(function () {
    var spark4 = {
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
      colors: ['#7759de']
    };
    var chart = new ApexCharts(document.querySelector('#real5-chart'), spark4);
    chart.render();
  }, 500);
});