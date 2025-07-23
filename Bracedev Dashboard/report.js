const ctxzsn = document.getElementById('reportChart');
Chart.defaults.backgroundColor = 'blue';

function formatsNumber(value) {
  if (value > 0) return (value / 1).toFixed(1) + 'k';
  return value;
}

new Chart(ctxzsn, {
  type: 'bar',
  data: {
    labels: ['Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun'],
    datasets: [{
      label: '',
      data: [34, 19, 23, 25, 12, 33, 15],
      borderWidth: 1,
      borderRadius: {
        topLeft: 40,
        topRight: 40,
        bottomLeft: 40,
        bottomRight: 40
      },
      borderSkipped: false,
      barPercentage: 0.8,
      categoryPercentage: 0.7,

    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      x: {
        grid: {
          display: false
        }
      },
      y: {
        ticks: {
          callback: function (value) {
            return formatsNumber(value);
          }
        },
        beginAtZero: true
      }
    }
  }
});

