<html>
  <head>
    <script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
    <!-- Load highcharts ->
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <!-- Untuk 3d charts -->
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script type="text/javascript">

$(function () {
  $('#graph_ketua').highcharts({
      chart: {
          type: 'column',
          margin: 75,
          options3d: {
      enabled: true,
              alpha: 15,
              beta: 15,
              depth: 50
          }
      },
      plotOptions: {
          column: {
              depth: 25
          }
      },
      series: [{
          data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
      }]
  });

  $('#graph_wakil').highcharts({
      chart: {
          type: 'column',
          margin: 75,
          options3d: {
      enabled: true,
              alpha: 15,
              beta: 15,
              depth: 50
          }
      },
      plotOptions: {
          column: {
              depth: 25
          }
      },

      xAxis: {
        categories: ['Green', 'Pink','Sss']
    },

      series: [{
          data: [{
            name : 'pon4',
            color : '#00FF00',
            y:7
          }, {
            name : 'ponasd',
            color : '#00FF00',
            y:6
          }, {
            name : 'asdsadsa',
            color : '#00FF00',
            y : 12
          }]
      }]
  });
});

    </script>
    <style>
    .s{
      margin-top: 10%;
      float: right;
      width: 50%;
    }
    </style>

  </head>
  <body>
    <div id="graph_ketua" class="s"></div>
    <div id="graph_wakil" class="s"></div>

  </body>
</html>
