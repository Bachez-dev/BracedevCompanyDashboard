const ctx = document.getElementById('myChart');
Chart.defaults.backgroundColor = 'blue';

function formatsNumber(value) {
  if (value >= 1000) return (value / 1000) + 'k';
  return value;
}

new Chart(ctx, {
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

function formatNumber(num) {
  if (num >= 1_000_000) {
    const n = num / 1_000_000;
    return 'KES' + (Number.isInteger(n) ? n : n.toFixed(1)) + 'M';
  }

  if (num >= 1000) {
    const n = num / 1000;
    return 'KES' + (Number.isInteger(n) ? n : n.toFixed(1)) + 'K';
  }
}

const ctxz = document.getElementById('donut');

new Chart(ctxz, {
  type: 'bar',
  data: {
    labels: ['Jan', 'Feb', 'March', 'April', 'May'],
    datasets: [{
      label: 'Profit',
      data: [12, 19, 10, 15, 12],
      borderWidth: 1,
      borderRadius: {
        topLeft: 40,
        topRight: 40,
        bottomLeft: 40,
        bottomRight: 40
      },
      barPercentage: 0.8,
      categoryPercentage: 0.7,
      stack: 'total',
      borderSkipped: false,
      borderWidth: 3,
      borderColor: "#fff"
    },
    {
      label: 'loss',
      data: [12, 19, 14, 18, 12],
      borderWidth: 1,
      borderRadius: {
        topLeft: 40,
        topRight: 40,
        bottomLeft: 40,
        bottomRight: 40
      },
      barPercentage: 0.8,
      categoryPercentage: 0.7,
      borderSkipped: false,
      stack: 'total',
      borderWidth: 3,
      borderColor: "#fff",
      backgroundColor: 'red'
    }
    ]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      x: {
        stacked: true
      },
      y: {
        ticks: {
          callback: function (value) {
            return formatsNumber(value);
          }
        },
        stacked: true,
        beginAtZero: true
      }
    },

    plugins: {
      tooltip: {
        callbacks: {
          label: function (context) {
            return `${context.label}: ${formatNumber(context.parsed)}`;
          }
        }
      },
      datalabels: {
        formatter: (value) => formatNumber(value)
      },
    },
  }
});


// Click Chart
const ctxzsj = document.getElementById('click').getContext('2d');


const gradient = ctxzsj.createLinearGradient(0, 0, 0, 400);
gradient.addColorStop(0, 'rgba(33, 150, 243, 0.6)');
gradient.addColorStop(1, 'rgba(33, 150, 243, 0)');


function formatsNumber(value) {
  if (value >= 1000) return (value / 1000).toFixed(1) + 'k';
  return value;
}

new Chart(ctxzsj, {
  type: 'line',
  data: {
    labels: ['Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun', 'August', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [{
      label: '',
      data: [34, 19, 23, 25, 12, 33, 15, 40, 34, 57, 60, 30],
      fill: true,
      backgroundColor: gradient,
      borderColor: 'blue',
      borderWidth: 2,
      tension: 0.4,
      pointRadius: 4,
      pointBackgroundColor: 'blue'
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,

    pluggings: {
      legend: {
        display: false
      },
      tooltip: {
        callbacks: {
          label: function (context) {
            // Return just the value without a label name
            return `${context.parsed.y}`;
          }
        }
      }
    },
    scales: {
      x: {
        grid: {
          display: false
        }
      },
      y: {
        beginAtZero: true,
        ticks: {
          callback: function (value) {
            return formatsNumber(value);
          }
        }
      }
    }
  }
});

// VIEWS BAR CHART

const ctxzsjk = document.getElementById('Views');
Chart.defaults.backgroundColor = 'blue';

function formatsNumber(value) {
  if (value > 0) return (value / 1).toFixed(1) + 'k';
  return value;
}

new Chart(ctxzsjk, {
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

// Income Bar Chart

const ctxzs = document.getElementById('income');
Chart.defaults.backgroundColor = 'blue';

function formatsNumber(value) {
  if (value > 0) return (value / 1).toFixed(1) + 'k';
  return value;
}

new Chart(ctxzs, {
  type: 'bar',
  data: {
    labels: ['Jan', 'Feb', 'March', 'April', 'May', 'Jun', 'July', 'August', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [{
      label: '',
      data: [34, 19, 23, 25, 12, 33, 15, 40, 34, 57, 60, 30],
      borderWidth: 1,
      borderRadius: 6,
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


// customer visit

const ctxzsk = document.getElementById('Cutomer--visits');

// Optional global default
Chart.defaults.backgroundColor = 'blue';

function formatsNumber(value) {
  if (value >= 1000) return (value / 1000).toFixed(1) + 'k';
  return value;
}

new Chart(ctxzsk, {
  type: 'doughnut',
  data: {
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
    datasets: [{
      data: [34, 19, 23, 25, 12],
      backgroundColor: [
        '#4caf50', '#2196f3', '#ff9800', '#e91e63', '#9c27b0'
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      tooltip: {
        callbacks: {
          label: function (context) {
            return `${context.label}: ${formatsNumber(context.parsed)}`;
          }
        }
      },
      legend: {
        position: 'bottom'
      }
    }
  }
});

// SALES

const ctxdf = document.getElementById('category').getContext('2d');

// Sample data for each item
const salesData = {
  coffee: [70, 30],  // Sold, Remaining
  snacks: [40, 60],
  juice: [90, 10]
};

// Create initial chart (coffee by default)
const chart = new Chart(ctxdf, {
  type: 'doughnut',
  data: {
    labels: ['Sold', 'Remaining'],
    datasets: [{
      data: salesData.coffee,
      backgroundColor: ['blue', '#cccccc'],
      borderWidth: 1,
      borderColor: '#cccccc',
      hoverOffset: 4
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        position: 'bottom'
      }
    }
  }
});

// Update chart when radio input is selected
document.querySelectorAll('input[name="product"]').forEach(radio => {
  radio.addEventListener('change', function () {
    const selected = this.value;
    chart.data.datasets[0].data = salesData[selected];
    chart.update();
  });
});


// visits
const ctxzsjv = document.getElementById('Visits').getContext('2d');
const gradientv = ctxzsjv.createLinearGradient(0, 0, 0, 400);
gradientv.addColorStop(0, 'rgba(33, 150, 243, 0.6)');
gradientv.addColorStop(1, 'rgba(33, 150, 243, 0)');
new Chart(ctxzsjv, {
  type: 'line',
  data: {
    labels: ['Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun'],
    datasets: [{
      label: '',
      data: [34, 19, 23, 25, 12, 33, 15],
      fill: true,
      backgroundColor: gradientv,
      borderColor: 'blue',
      borderWidth: 2,
      tension: 0.4,
      pointRadius: 4,
      pointBackgroundColor: 'blue'
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,

    plugins: {
      legend: {
        display: false
      },
      tooltip: {
        callbacks: {
          label: function (context) {
            return `${context.parsed.y}`;
          }
        }
      }
    },
    scales: {
      x: {
        grid: {
          display: false
        }
      },
      y: {
        beginAtZero: true,
        ticks: {
          callback: function (value) {
            return formatsNumber(value);
          }
        }
      }
    }
  }
});

// REPORT

const canvas = document.getElementById('reports-Chart');
const ctxnm = canvas.getContext('2d');

const gradientzs = ctxnm.createLinearGradient(0, 0, 0, 400);
gradientzs.addColorStop(0, 'rgba(33, 150, 243, 0.6)');
gradientzs.addColorStop(1, 'rgba(33, 150, 243, 0)');

function formatsNumber(value) {
  if (value >= 1000) return (value / 1000) + 'k';
  return value;
}

new Chart(ctxnm, {
  type: 'bar',
  data: {
    labels: ['Jan', 'Feb', 'March', 'April', 'May', 'Jun', 'July', 'August', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [{
      label: '',
      data: [34, 19, 23, 25, 12, 33, 15, 40, 34, 57, 60, 30],
      backgroundColor: gradient,
      borderColor: 'blue',
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: false
      },
      tooltip: {
        callbacks: {
          label: function (context) {
            return `${context.parsed.y}`;
          }
        }
      }
    },
    scales: {
      x: {
        grid: {
          display: false
        }
      },
      y: {
        beginAtZero: true,
        ticks: {
          callback: function (value) {
            return formatsNumber(value);
          }
        }
      }
    }
  }
});