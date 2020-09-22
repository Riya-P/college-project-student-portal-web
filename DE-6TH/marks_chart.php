<?php
    include('server.php');
     $db=mysqli_connect('localhost','root','','de_6') or die("DB could not fount");
        $stu_id=$_SESSION['stu_id'];
        $stu_name=Null;
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Subject Name', 'Mid 1 Marks'],
          <?php


            $query="SELECT * FROM marks_mid_6it WHERE stu_id='$stu_id'";
            $result=mysqli_query($db,$query);

            while($show=mysqli_fetch_assoc($result))
            {
              $stu_name=$show['stu_name'];
              $show['mid1_marks']=(int)$show['mid1_marks'];
              echo "['".$show['sub_name']."',".$show['mid1_marks']."],";
            }

          ?>
          ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <h2 style="text-align: center;margin-top: 50px;">Mid Sem Result of <?php echo $stu_name;?></h2>
    <div id="piechart_3d" style="width: 1000px; height: 600px;margin-left: 250px;"></div>

    <!-- <div id="curve_chart" style="width: 900px; height: 500px"></div> -->
    <!-- <a href="login.php"><button style="width: 100px;background: none;border: 2px solid #03A9F4; background-color: #03A9F4;color: white; padding: 5px; font-size: 18px; cursor: pointer; margin-left: 100px; border-radius: 5px;">Back</button></a> -->
  </body>
</html>

