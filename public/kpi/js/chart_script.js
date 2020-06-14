      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        
        var data = google.visualization.arrayToDataTable([
              ['Language', 'Rating'],
              <?php
                if(is_array($rw_data_array)){
                  foreach ($rw_data_array as $key => $value) {
                    echo "['".$key."', ".$value."],";
                  }
                }
              ?>
            ]);


        var options = {
          title: 'My Daily Activities',
          height: 200,
          width: 200,
          pieHole: 0.5,
          showLables: 'true',
          pieSliceText: 'value',
          pieSliceTextStyle: {
              color: 'white',
              fontSize:14
          },
          legend: {
              position: 'bottom',
              alignment: 'center'
          },
          chartArea: { 
              left: 0, 
              top: 10, 
              width: '130%', 
              height: '80%'
          },
          tooltip: {
              trigger: true
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }