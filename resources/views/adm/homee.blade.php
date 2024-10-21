<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">

</head>
<style>
  .chart{
    background: white;
  }
</style>
<body>
  @include('template.nav')

      <div class="chart mt-5 ms-5"  style="width: 500px">
        <canvas id="myChart"></canvas>
      </div>

      <div style="width: 800px">
        <canvas id="myChart1"></canvas>
      </div>


      <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['Lays', 'Teh Kotak', 'Chitato', 'Pocari Sweat', 'Kris Bee', 'Ultra Milk'],
            datasets: [{
              label: 'PENJUALAN',
              data: [8, 2, 9, 4, 7, 10],
              
              backgroundColor: [
      'green',
      'yellow',
      'brown',
      'blue',
      'red',
      'chocolate',
    ],
    borderColor: [
      'teal',
      'yellow',
      'brown',
      'blue',
      'red',
      'chocolate',
    ],
    borderWidth: 5
  }]  
          },
          options: {
            plugins: {
              legend: {
                display: false
              },
              title: {
                display: true,
                text: 'PENJUALAN'
              }
            }
            
          }
        });

        
      </script>
</body>
</html>