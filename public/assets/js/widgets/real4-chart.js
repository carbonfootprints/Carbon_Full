'use strict';
document.addEventListener('DOMContentLoaded', function () {
  setTimeout(function () {
    var spark1 = {
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
        min: -2,
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
      colors: ['#FF9800']
    };
    var chart = new ApexCharts(document.querySelector('#real4-chart'), spark1);
    chart.render();
  }, 500);
});