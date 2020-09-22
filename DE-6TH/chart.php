
<?php
     $db=mysqli_connect('localhost','root','','de_6') or die("DB could not fount");

?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Students','DCDR'],
          <?php


            $query="SELECT * FROM achart ";
            $result=mysqli_query($db,$query);

            while($show=mysqli_fetch_assoc($result))
            {
              // $show['SE_6IT']=(int)$show['SE_6IT'];
              // $show['AJ_6IT']=(int)$show['AJ_6IT'];
              $show['DCDR_6IT']=(int)$show['DCDR_6IT'];
              // $show['.NET_6IT']=(int)$show['.NET_6IT'];
              // $show['WT6IT']=(int)$show['WT6IT'];
              // echo "['".$show['stu_id']."',".$show['SE_6IT'].",".$show['AJ_6IT'].",".$show['DCDR_6IT'].",".$show['.NET_6IT'].",".$show['WT6IT']."],";
              echo "['".$show['stu_id']."',".$show['DCDR_6IT']."],";
            }

            ?>
          ]);

        var options = {
          title: 'Overall Attendance',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 1000px; height: 600px;margin-left: 250px;"></div>

    <!-- <div id="curve_chart" style="width: 900px; height: 500px"></div> -->
    <!-- <a href="login.php"><button style="width: 100px;background: none;border: 2px solid #03A9F4; background-color: #03A9F4;color: white; padding: 5px; font-size: 18px; cursor: pointer; margin-left: 100px; border-radius: 5px;">Back</button></a> -->
  </body>
</html>
