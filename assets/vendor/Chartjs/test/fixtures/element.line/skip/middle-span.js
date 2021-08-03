module.exports = {
  config: {
    type: 'line',
    parsing: false,
    data: {
      datasets: [
        {
          data: [{x: 0, y: 10}, {x: 5, y: 0}, {x: null, y: -10}, {x: 19, y: -5}],
          borderColor: 'red',
          fill: true,
          spanGaps: true,
          tension: 0
        }
      ]
    },
    options: {
      scales: {
        x: {type: 'linear', display: false, min: 0, max: 20},
        y: {display: false, min: -15, max: 15}
      }
    }
  },
  options: {
    canvas: {
      height: 256,
      width: 512
    }
  }
};
