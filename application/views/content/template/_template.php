<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=$url?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$url?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=$url?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$url?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=$url?>assets/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?=$url?>vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css"/>
  <!-- jquery-ui -->
  <link rel="stylesheet" href="<?=$url?>assets/bower_components/jquery/external/jquery-ui/jquery-ui.min.css">

  
  <!-- jQuery 3 -->
  <script src="<?=$url?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jquery-ui -->
  <script src="<?=$url?>assets/bower_components/jquery/external/jquery-ui/jquery-ui.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?=$url?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <link href="<?=$url?>vendor/bootstrap-toggle/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="<?=$url?>vendor/bootstrap-toggle/bootstrap-toggle.min.js"></script>
  <script src="<?=$url?>vendor/bootstrap-notify/bootstrap-notify.min.js"></script>

  <style type="text/css">
    .no-padd-side {
      padding-left: 0;
      padding-right: 0;
    }
    .mg-bottom-20 {
      margin-bottom: 20px;
    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?=$url?>vendor/fontawesome/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-black sidebar-collapse">
<div class="wrapper">
  

  <!-- Content Wrapper. Contains page content -->
<style>
  .parent-hmi{
    margin: 0;
    padding: 0;
    text-align: center;    
  }
  .hmi{
    position: relative;
    display: inline-block;
    /* background-image: url("../assets/images/hmi/waterpump.png?123"); */
    background-repeat: no-repeat;
    background-color: #eee;
    width: 976px;
    height: 544px;
    border: 1px solid grey;
    padding: 25px;
  }
  /* .box-header{
    height: 100px;
  } */
  .box-icon{
    color: #488DDD;
  }
  .box-title{
    font-size: 32px !important;
  }
  .box{
    min-width: 916px;
  }
  
  @media(max-width:916px){
    .content{
      overflow-x: scroll
    }

  }
</style>
<div class="content-wrapper bg-white">
  <!-- Content Header (Page header) -->
  <section class="content-header hidden">
    <h1>
      Judul
      <small>Deskripsi singkat</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Parent</a></li>
      <li class="active">Childern</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box box-solid box-grey">
          <div class="box-header">
            <div class="col-xs-4 title">
              <i class="box-icon fa <?=$title_icon?> fa-3x"></i>
              <h3 class="box-title"><?=$title?></h3>
            </div>
            <div class="col-sm-3 pull-right" style="padding-left: 120px; text-align:left">
              <div class="box-tools pull-right">
                <div class="col-sm-4" style="padding-right: 8px">
                  <a href="<?=$url?>shop" type="button" class="btn btn-primary btn-sm">
                    <i class="fa fa-home" style="font-size: 5em"></i>
                  </a>
                </div>
                <div class="col-sm-5" style="padding-bottom: 8px; text-align:left">
                  <a href="<?=$url?>symptom" type="button" class="btn btn-primary btn-sm" style="width:130px;">
                    <i class="fa fa-bar-chart" style="font-size: 1.5em"><span style="font-family: arial"> SYMPTOM</span></i>
                  </a>
                </div>
                <div class="col-sm-5">
                  <a href="<?=$url?>alarm" type="button" class="btn btn-danger btn-sm" style="width:130px; text-align:left">
                    <i class="fa fa-warning" style="font-size: 1.5em"><span style="font-family: arial">  ALARM</span></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          
          <style>
            .alarmBadge{
              position: fixed;
              z-index: 9999;
              border: 2px solid #db3c40;
              border-radius: 50%;
              background-color: #db3c40;
              width: 35px;
              height: 35px;
              text-align: center;
              vertical-align: center;
              color: white;
              top: 20px;
              right: 20px;
              display:none;
              font-size: 22px;
            }
            .alarmBadge :hover{
              cursor: pointer;
            }
            .alarmBadgeContent{
              vertical-align: center;
            }
            #alarmBadgeCount{
            }
            .alert-danger{
              background-color: #db3c40 !important;
              /* background-color: #dd4b39 !important; */
            }
          </style>
          <div class="alarmBadge">
            <div class="alarmBadgeContent">
              <i class="fa fa-warning"></i>
              <span id="alarmBadgeCount"><span>
            </div>
          </div>
          <?=$_content?>

        </div>
        <!-- /.box -->
      </div>      
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
  

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Theme by <a href="https://adminlte.io">Almsaeed Studio</a>.</strong>
    </div>
    <img src="<?=$url?>assets/images/logo_nama.png" height="30" hidden/>
    <strong>&copy; 2019.</strong>
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- SlimScroll -->
<script src="<?=$url?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=$url?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=$url?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=$url?>assets/dist/js/demo.js"></script>
<!-- BlockUI -->
<script src="<?=$url?>vendor/blockui/jquery.blockUI.js"></script>
<!-- jQuery Highchart
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>

<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script> -->


<script src="<?=$url?>vendor/canvas-js/canvasjs.min.js"></script>
<script src="<?=$url?>vendor/moment-js/moment.js"></script>
<script src="<?=$url?>vendor/moment-js/locale/id.js"></script>
<script src="<?=$url?>vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>

<script>
  var alarmMsg
  wsAlarm = new WebSocket("ws://localhost:1880/ws/alarm_5aa1")
  wsAlarm.onerror = function(error) {console.log('Error detected: ' + error)}
  wsAlarm.onopen = function(){console.log('websocket connect');/*ws.send("websocket connect");*/}
  wsAlarm.onclose = function(){console.log('websocket disconnect')}
  var dies
  var diesNew
  var payloadOld
  var countAlarm = 0
  wsAlarm.onmessage = function(event){
    var payload = $.parseJSON(event.data);
    // console.log(payload);
    if(payload.length <= 0){
      if(countAlarm != payload.length){
        $(document).find('.minimize').parent().hide()
        $(".alarmBadge").hide()
      }
    } else {
      i = 1
      alarmMsg = ""
      ///////////////////////////////////////////////////////////////
      var checkPayload = false
      if(countAlarm == payload.length){ //cek jumlah array
        $.each(payload, function (key, value) {
          if(payloadOld[key].code == value.code){
            checkPayload = true //jumlah sama tapi isi array berubah
            return false
          }
        })
      }
      // console.log(checkPayload)
      // console.log(payload)
      ////////////////////////////////////////////////////////////////
      if(checkPayload){
        $.each(payload, function (key, value) {
          substract = new Date(new Date().getTime() - new Date(value.timestamp) - (1000*60*60*7))
                date = new Date(substract)
                duration = ('00' + date.getHours()).slice(-2) + ':' +
                    ('00' + date.getMinutes()).slice(-2) + ':' +
                    ('00' + date.getSeconds()).slice(-2)
          $('.duration-'+value.code).html('('+duration+')')
        })
      } else {
        $.each(payload, function (key, value) {
          // console.log(key)
          substract = new Date(new Date().getTime() - new Date(value.timestamp) - (1000*60*60*7))
                date = new Date(substract)
                duration = ('00' + date.getHours()).slice(-2) + ':' + 
                    ('00' + date.getMinutes()).slice(-2) + ':' + 
                    ('00' + date.getSeconds()).slice(-2)
          let note = value.note ? value.note : ""
          alarmMsg += "<div class='col-sm-1 float-left text-right no-padding'>"+
                        "<span class='code-i'>"+i+". </span> "+
                      "</div>"
          alarmMsg += "<div class='col-sm-7 float-left text-left no-padding'>"+
                        "<span class='code'> "+value.code+" "+note+"</span> "+
                      "</div>"
          alarmMsg += "<div class='col-sm-4 float-right'>"+
                        "<span class='duration duration-"+value.code+"'>("+duration+")</span> "+
                        "<span class='fa fa-caret-up  caret-"+value.code+"' style='font-size: 1.2em' onClick='toggleAction("+'"'+value.code+'"'+")'></span>"+
                      "</div>"
          alarmMsg += "<div class='col-sm-10 col-sm-offset-2 float-left text-left no-padding text-grey action-"+value.code+"' style='display: none; color: #ffff00'>"+
                        "<span class='code'> "+(value.action ? value.action : "")+"</span> "+
                      "</div>"
          // console.log(substract)
          i++
        });
        // $.notifyClose()
        $(document).find('.minimize').parent().show()
        $(".alarmBadge").hide()
        notifyAlarm.update('message', alarmMsg)
      }
    }
    countAlarm = payload.length
    payloadOld = payload
  }
  ////////////////////////////////////////////////////////////////////////////////////////////////////// 
  function toggleAction(id){
    $('.action-'+id).toggle()
    if($('.action-'+id).css('display') == 'block'){
      $('.caret-'+id).removeClass("fa-caret-up")
      $('.caret-'+id).addClass("fa-caret-down")
    } else {
      $('.caret-'+id).removeClass("fa-caret-down")
      $('.caret-'+id).addClass("fa-caret-up")
    }
  }
  var notifyAlarm
  notifyKeep()
  $('.notifyKeep').hide()
  function notifyKeep(){
    notifyAlarm = $.notify(
      {
        icon: 'fa fa-warning',
        title: '<span class="float-left"><b>ALARM!</b></span></br>',
        message: "",
        // url: '',
        // target: '_self',
      },{
        type: 'danger',
        newest_on_top: true,
        placement: {
          from: "top",
          align: "right"
        },
        delay: 0,
        template: '<div data-notify="container" class="notifyKeep col-xs-11 col-sm-4 alert alert-{0}" role="alert">' +
                    '<button type="button" aria-hidden="true" class="close minimize" style="width: 20px; border: 1px solid black; color: white">-</button>' +
                    '<span data-notify="icon"></span> ' +
                    '<span data-notify="title">{1}</span> ' +
                    '<span data-notify="message">{2}</span>' +
                    '<div class="progress" data-notify="progressbar">' +
                      '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    '</div>' +
                    '<div class="text-center">' +
                      // '<a class="btn btn-warning" href="<?=$url.'alarm'?>" target="_self" data-notify="url" style="text-decoration:none">Lihat</a>' +
                    '</div>' +
                  '</div>' 
      }
    )
  }

  $(document).on('click','.minimize',function(e){
    e.preventDefault()
    $(this).parent().hide()
    $(".alarmBadge").show()
  });  
  $(".alarmBadge").click(function (e) { 
    e.preventDefault()
    // notifyKeep()
    $(document).find('.minimize').parent().show()
    $(".alarmBadge").hide()
  });
</script>

</body>
</html>
