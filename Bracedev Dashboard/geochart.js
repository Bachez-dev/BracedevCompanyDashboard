google.charts.load('current', {
    packages: ['geochart']
  });

  google.charts.setOnLoadCallback(drawRegionsMap);

  function drawRegionsMap() {
    const data = google.visualization.arrayToDataTable([
      ['Country', 'Group'],
      // Blue background countries
      ['United States', 0],
      ['Canada', 0],
      ['Brazil', 0],
      ['Argentina', 0],
      ['Germany', 0],
      ['France', 0],
      ['Russia', 0],
      ['China', 0],
      ['India', 0],
      ['Australia', 0],
      ['South Africa', 0],
      ['Egypt', 0],
      ['Ethiopia', 0],
      ['DR Congo', 0],
      ['Japan', 0],

      // Red customer countries
      ['Kenya', 1],
      ['Uganda', 1],
      ['Nigeria', 1],
      ['Tanzania', 1]
    ]);

    const options = {
      backgroundColor: '',
      defaultColor: '#e3f2fd',
      legend: 'none',
      colorAxis: {
        values: [0, 1],
        colors: ['#64b5f6', '#d32f2f']
      }
    };

    const chart = new google.visualization.GeoChart(document.getElementById('geo_chart'));
    chart.draw(data, options);
  }