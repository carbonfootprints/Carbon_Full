'use strict';
document.addEventListener('DOMContentLoaded', function () {
  setTimeout(function () {
    var spark3 = {
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
          data: [3, 0, 1, 2, 1, 1, 2]
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
      colors: ['#f44336']
    };
    var chart = new ApexCharts(document.querySelector('#real1-chart'), spark3);
    chart.render();
  }, 500);
});