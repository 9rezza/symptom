
<style>
  .no-padding{
    padding: 0;
  }
  .no-padding-right{
    padding-right: 0;
  }
  .no-padding-bottom{
    padding-bottom: 0;
  }
  .no-margin-bottom{
    margin-bottom: 0;
  }
  .height-50{
    height: 50px;
  }
  .navbar-nav li{
    border-left: 1px solid white;
    border-right: 1px solid white;
    width: 150px;
    text-align: center;
  }
  .navbar-nav a{
    color: white;
  }
  .navbar-nav .active{
    background-color: #174fa2;
  }
  .graph-title{
    font-size: 32px;
    margin-top: 10px;
  }
  .table thead tr th{
    text-align: center;
  }
  .table tbody tr{
    min-height: 36px;
  }
  .form-check-label{
    margin-bottom: 0;    
  }
  .form-check-input{
    margin-left: 5px !important;    
  }
  .form-group select{
    
  }
</style>
<div class="box-body">
  <div class="col-sm-12 no-padding">
      <form class="form">
        <div class="col-sm-4">
          <div class="col-sm-4 no-padding-right">
            <div class="form-group">
              <select class="form-control" id="">
                <option>--Pilih Line--</option>
                <option selected>Line 5A</option>
                <option>Line 2A</option>
                <option>C</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4 no-padding-right">
            <div class="form-group">
              <select class="form-control" id="">
                <option>--Pilih Mesin--</option>
                <option>Mesin 1</option>
                <option>Mesin 2</option>
                <option selected>Mesin 3</option>
                <option>Mesin 4</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4 no-padding-right">
            <div class="form-group">
              <input type="text" name="" id="chartDate" class="form-control">
            </div>
          </div>
        </div>
        <!-- <div class="col-sm-5"> -->
          <!-- <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value=""> Temperature Motor
              <input type="checkbox" class="form-check-input" value=""> Temperature Motor
              <input type="checkbox" class="form-check-input" value=""> Temperature Motor
              <input type="checkbox" class="form-check-input" value=""> Temperature Motor
            </label>
          </div>
          <div class="form-check">
            
              <input type="checkbox" class="form-check-input" value=""> Vibration Motor
              <input type="checkbox" class="form-check-input" value=""> Vibration Motor
              <input type="checkbox" class="form-check-input" value=""> Vibration Motor
              <input type="checkbox" class="form-check-input" value=""> Vibration Motor
            
          </div> -->
          <!-- <table>
            <tr>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Temp Motor 1</label></td>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Temp Motor 2</label></td>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Temp Motor 3</label></td>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Temp Motor 4</label></td>
            </tr>
            <tr>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Vibration Motor 1</label></td>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Vibration Motor 2</label></td>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Vibration Motor 3</label></td>
              <td><label class="form-check-label"><input type="checkbox" class="form-check-input" value=""> Vibration Motor 4</label></td>
            </tr>
          </table> -->
        <!-- </div> -->
        <div class="col-sm-2">
          <button type="button" class="btn btn-primary" id="updateChart">Show</button>          
          <button type="button" class="btn btn-primary"><i class="fa fa-gear"></i> Config</button>          
        </div>
      </form>
  </div>
  <div class="col-sm-12 graph-title hidden">
    ROBOT    
  </div>

  <div class="col-sm-12">
    <div id="tempChartContainer" style="height: 280px; width: 100%;"></div>
    <div id="vibeChartContainer" style="height: 280px; width: 100%;"></div>
    <!-- <div id="chart3" style="height: 140px; width: 45%;"></div>
    <div id="chart4" style="height: 140px; width: 45%;"></div> -->
  </div>
</div>
<!-- /.box-body -->


<script src="<?=$url?>vendor/moment-js/moment.js"></script>
<script src="<?=$url?>vendor/moment-js/locale/id.js"></script>
<script src="<?=$url?>vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="<?=$url?>vendor/canvas-js/canvasjs.min.js"></script>
<script src="<?=$url?>vendor/bootstrap-notify/bootstrap-notify.min.js"></script>

<script>

  var today = new Date(new Date().getTime() - (1000*60*60*6));  
  $('#chartDate').datetimepicker({
    locale: 'id',    
    format: 'YYYY-MM-DD',
    maxDate : today,
    defaultDate:today
  });
  ////////////////////////////////////////////////////////////////////////////////////////////////////
  var temperature1 = []; var vibration1 = [];
  var temperature2 = []; var vibration2 = [];
  var temperature3 = []; var vibration3 = [];
  var temperature4 = []; var vibration4 = [];
  var length1 = [];//new Array(10000);
  var length2 = [];//new Array(10000);
  var init = 1;//new Array(10000);
  var end = 1;//new Array(10000);

    var last_timestamp;
    var realtime;
    var tempChart;
    var vibeChart;

    setTimeout(() => {
      // console.log(tempChart);
    }, 1000);
      // console.log(tempChart);
    
  window.onload = function () {
    tempChart = new CanvasJS.Chart("tempChartContainer", {
      zoomEnabled: true,
      title: {
        text: "Temperature (\u2103)",
        fontFamily: "arial",
      },
      axisX: {
        labelFontSize: 14,
        labelFontFamily: "arial",
      },
      axisY:{
        includeZero: true,
        title: null,
        labelFontSize: 14,
        labelFontFamily: "arial",
        gridThickness: 0.5,
      }, 
      toolTip: {
        shared: true,
        fontFamily: "arial",
      },
      legend: {
        cursor:"pointer",
        verticalAlign: "top",
        fontFamily: "Consolas",
        fontSize: 18,
        fontColor: "dimGrey",
        itemclick : tempToggleDataSeries
      },
      data: 
      [{				
        type: "line",
        color: "red",
        yValueFormatString: "#####.##",
        toolTipContent: "{z}<br><span style='\"'color: red;'\"'>{name}</span>: {y}", 
        showInLegend: true,
        name: "Motor1",
        fillOpacity: .4,
        dataPoints: temperature1
      },{				
        type: "line",
        color: "blue",
        yValueFormatString: "#####.##",
        showInLegend: true,
        name: "Motor2",
        fillOpacity: .4,
        dataPoints: temperature2
      },{				
        type: "line",
        color: "green",
        yValueFormatString: "#####.##",
        showInLegend: true,
        name: "Motor3",
        fillOpacity: .4,
        dataPoints: temperature3
      },{				
        type: "line",
        color: "cyan",
        yValueFormatString: "#####.##",
        showInLegend: true,
        name: "Motor4",
        fillOpacity: .4,
        dataPoints: temperature4
      },{ 
        type: "line",
        showInLegend: false,
        toolTipContent: null,
        markerType: null,
        fillOpacity: .2,
        dataPoints: length1
      }]
    });

    function tempToggleDataSeries(e) {
      if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
      }
      else {
        e.dataSeries.visible = true;
      }
      tempChart.render();
    }
      ///////////////////////////////////////////////////////////////////////////////////////
    vibeChart = new CanvasJS.Chart("vibeChartContainer", {
      zoomEnabled: true,
      title: {
        text: "Vibration (mm/s)",
        fontFamily: "arial",
      },
      axisX: {
        labelFontSize: 14,
        labelFontFamily: "arial",
      },
      axisY:{
        // includeZero: true,
        title: null,
        labelFontSize: 14,
        labelFontFamily: "arial",
        gridThickness: 0.5,
      }, 
      toolTip: {
        shared: true,
        fontFamily: "arial",
      },
      legend: {
        cursor:"pointer",
        verticalAlign: "top",
        fontFamily: "arial",
        fontSize: 18,
        fontColor: "dimGrey",
        itemclick : vibeToggleDataSeries
      },
      data: 
      [{				
        type: "line",
        color: "red",
        yValueFormatString: "#####.##",
        toolTipContent: "{z}<br><span style='\"'color: red;'\"'>{name}</span>: {y}", 
        showInLegend: true,
        name: "Motor1",
        fillOpacity: .4,
        dataPoints: vibration1
      },{				
        type: "line",
        color: "blue",
        yValueFormatString: "#####.##",
        showInLegend: true,
        name: "Motor2",
        fillOpacity: .4,
        dataPoints: vibration2
      },{				
        type: "line",
        color: "green",
        yValueFormatString: "#####.##",
        showInLegend: true,
        name: "Motor3",
        fillOpacity: .4,
        dataPoints: vibration3
      },{				
        type: "line",
        color: "cyan",
        yValueFormatString: "#####.##",
        showInLegend: true,
        name: "Motor4",
        fillOpacity: .4,
        dataPoints: vibration4
      },{ 
        type: "line",
        showInLegend: false,
        toolTipContent: null,
        markerType: null,
        fillOpacity: .2,
        dataPoints: length2
      }]
    });

    function vibeToggleDataSeries(e) {
      if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
      }
      else {
        e.dataSeries.visible = true;
      }
      vibeChart.render();
    }

    tempChart.render();
    vibeChart.render();
      get_data();
      

    
    function get_data(){
      // console.log(vibeChart);
      // chartDaya.options.data[1].dataPoints = [];
      // var from = $('#datefrom').data().date;
      // var to = $('#dateto').data().date;
      
      // var graphFrom = new Date(from+" 06:00:00");
      // var graphTo = new Date(to+" 05:59:00");
      // graphTo.setDate(graphTo.getDate() + 1);
      // chartDaya.options.data[0].dataPoints.push({
      //   x: Date.parse(graphFrom),
      //   y: null
      // });
      // chartDaya.options.data[0].dataPoints.push({
      //   x: Date.parse(graphTo),
      //   y: null
      // });
      tempChart.options.data[0].dataPoints = [];
      tempChart.options.data[1].dataPoints = [];
      tempChart.options.data[2].dataPoints = [];
      tempChart.options.data[3].dataPoints = [];
      tempChart.options.data[4].dataPoints = [];
      vibeChart.options.data[0].dataPoints = [];
      vibeChart.options.data[1].dataPoints = [];
      vibeChart.options.data[2].dataPoints = [];
      vibeChart.options.data[3].dataPoints = [];
      vibeChart.options.data[4].dataPoints = [];
      $.ajax({
        type: "POST",
        url: "<?=$url?>get_data_today/",
        // data: {from:from, to:to},
        dataType: "JSON",
        beforeSend: function (response) {
          $.blockUI();
        },
        success: function (response) {
          // console.log(response);
          $.each(response.motor_1, function (key, value) {
            tempChart.options.data[0].dataPoints.push({
              y: parseFloat(value.temperature),
              z: value.timestamp
            });
            vibeChart.options.data[0].dataPoints.push({
              y: parseFloat(value.vibration),
              z: value.timestamp
            });
          });
          $.each(response.motor_2, function (key, value) {
            tempChart.options.data[1].dataPoints.push({
              y: parseFloat(value.temperature),
              z: value.timestamp
            });
            vibeChart.options.data[1].dataPoints.push({
              y: parseFloat(value.vibration),
              z: value.timestamp
            });
          });
          $.each(response.motor_3, function (key, value) {
            tempChart.options.data[2].dataPoints.push({
              y: parseFloat(value.temperature),
              z: value.timestamp
            });
            vibeChart.options.data[2].dataPoints.push({
              y: parseFloat(value.vibration),
              z: value.timestamp
            });
          });
          $.each(response.motor_4, function (key, value) {
            tempChart.options.data[3].dataPoints.push({
              y: parseFloat(value.temperature),
              z: value.timestamp
            });
            vibeChart.options.data[3].dataPoints.push({
              y: parseFloat(value.vibration),
              z: value.timestamp
            });
          });

          var foo = new Array(3000);
          $.each(foo, function (key, value) {
            tempChart.options.data[4].dataPoints.push({
              y: parseFloat(value)
            });
            vibeChart.options.data[4].dataPoints.push({
              y: parseFloat(value)
            });
          });
          $.unblockUI();
          tempChart.render();
          vibeChart.render();
          // console.log(tempChart);
        },
        error: function (response) {
          console.log(response);
          $.unblockUI();
        },
        complete: function (response) {
          $.unblockUI();          
        }
      });      
    }
    var ws = new WebSocket("ws://localhost:1880/ws/mesin_1");

    ws.onerror = function(error) {
      console.log('Error detected: ' + error);
    };
    ws.onopen = function(){
      console.log('websocket connect');
      ws.send("websocket connect");
    }
    ws.onclose = function(){
      console.log('websocket disconnect');
      ws.send("websocket disconnect");
    }
    ws.onmessage = function(event){
      var payload = $.parseJSON(event.data);
      // console.log(payload.timestamp);

      tempChart.options.data[0].dataPoints.push({
        y: parseFloat(payload.motor_1.temperature),
        z: payload.timestamp
      });
      vibeChart.options.data[0].dataPoints.push({
        y: parseFloat(payload.motor_1.vibration),
        z: payload.timestamp
      });
      tempChart.options.data[1].dataPoints.push({
        y: parseFloat(payload.motor_2.temperature),
        z: payload.timestamp
      });
      vibeChart.options.data[1].dataPoints.push({
        y: parseFloat(payload.motor_2.vibration),
        z: payload.timestamp
      });
      tempChart.options.data[2].dataPoints.push({
        y: parseFloat(payload.motor_3.temperature),
        z: payload.timestamp
      });
      vibeChart.options.data[2].dataPoints.push({
        y: parseFloat(payload.motor_3.vibration),
        z: payload.timestamp
      });
      tempChart.options.data[3].dataPoints.push({
        y: parseFloat(payload.motor_4.temperature),
        z: payload.timestamp
      });
      vibeChart.options.data[3].dataPoints.push({
        y: parseFloat(payload.motor_4.vibration),
        z: payload.timestamp
      });
      tempChart.render();
      vibeChart.render();
    }
  }
    ///////////////////////////////////////////////////////////////////////////////////////////////////





</script>











