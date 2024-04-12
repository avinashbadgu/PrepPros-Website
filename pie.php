<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .chart-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 20px;
    }

    .chart {
      position: relative;
      width: 200px;
      height: 200px;
      border-radius: 50%;
      background-color: #f2f2f2;
    }

    .slice {
      position: absolute;
      width: 100%;
      height: 100%;
      clip: rect(0, 200px, 200px, 100px);
      border-radius: 50%;
    }

    .legend {
      display: flex;
      margin-top: 10px;
    }

    .legend-item {
      display: flex;
      align-items: center;
      margin-right: 10px;
    }

    .legend-color {
      width: 20px;
      height: 20px;
      margin-right: 5px;
      border-radius: 50%;
    }

    button {
      margin-top: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="chart-container">
    <div class="chart" id="pieChart">
      <!-- Slices will be dynamically added here using JavaScript -->
    </div>

    <div class="legend">
      <div class="legend-item">
        <div class="legend-color" style="background-color: #ffff00;"></div>
        Attempted
      </div>
      <div class="legend-item">
        <div class="legend-color" style="background-color: #ff0000;"></div>
        Solved
      </div>
      <div class="legend-item">
        <div class="legend-color" style="background-color: #800080;"></div>
        Accurate
      </div>
    </div>
  </div>

  <button onclick="updateChart()">Update Chart</button>

  <script>
    // Initial values
    let attempted = 40;
    let solved = 20;
    let accurate = 10;
    const totalQuestions = 100;

    function generatePieChart() {
      const chart = document.getElementById('pieChart');
      chart.innerHTML = ''; // Clear existing slices

      // Calculate total value
      const total = attempted + solved + accurate;

      // Add slices to the chart
      let startAngle = 0;
      const values = [attempted, solved, accurate];
      for (let i = 0; i < values.length; i++) {
        const slice = document.createElement('div');
        slice.className = 'slice';
        slice.style.backgroundColor = getSliceColor(i);
        slice.style.transform = `rotate(${startAngle}deg)`;

        const sliceValue = (values[i] / total) * 360;
        slice.style.clip = `rect(0, 200px, 200px, ${startAngle + sliceValue > 180 ? '100px' : '200px'})`;
        startAngle += sliceValue;

        chart.appendChild(slice);
      }
    }

    function getSliceColor(index) {
      // Colors: yellow, red, purple
      const colors = ['#ffff00', '#ff0000', '#800080'];
      return colors[index] || '#000000';
    }

    function updateChart() {
      // Increase values
      attempted += 2;
      solved += 1;
      accurate += 1;

      // Ensure none of the values exceeds the totalQuestions limit
      attempted = Math.min(attempted, totalQuestions);
      solved = Math.min(solved, totalQuestions - attempted);
      accurate = Math.min(accurate, totalQuestions - attempted - solved);

      generatePieChart();
    }

    // Initial chart display
    generatePieChart();
  </script>
</body>
</html>
