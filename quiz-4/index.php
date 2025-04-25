<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz-4</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="index.js"></script>
</head>
<body>
    <table style="width: 100%;">
        <tbody>
        <tr>
        <td style="width: 50%;">
    <div">
        <canvas id="barChart"></canvas>
    </div>
    </td>
    <td style="width: 30%;">
    <div>
        <canvas id="pieChart"></canvas>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
       const ctx1 = document.getElementById('barChart');
       const ctx2 = document.getElementById('pieChart');
$(document).ready(function (){
  labelChart = 'Range by Country';
    $.ajax({
        url: "https://www.trcloud.co/test/api.php",
        method: "get",
        success: function (res){
            // console.log(res); //raw data
            let data = (JSON.parse(res));
        let cityData = $.map( data, function( index ) {
            return  [index.City];
            });
        let populationData = $.map( data, function( index ) {
                return  [index.Population];
                });
        const countryData = $.map( data, function( index ) {
                    return  [index.Country];
                    });
               console.log(populationData); 

               new Chart(ctx1, {
    type: 'bar',
    data: {
      labels: cityData,
      datasets: [{
        label: labelChart,
        data: populationData,
        borderWidth: 1
        ,backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],    borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
  
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: cityData,
      datasets: [{
        label: labelChart,
        data: populationData,
        borderWidth: 1
        ,backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],    borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
  
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
        },
        error: function (err){
            console.log(err);
        }
    });
  })
</script>
 </body>
</html>