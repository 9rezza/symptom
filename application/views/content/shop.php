
<style>
  .parent-line{
    margin-bottom: 40px;
  }
  .line{
    height: 170px;
    width: 80%;
    border: 2px solid black;
    margin: 10%;
  }
  .line-name{
    height: 135px;
    border-radius: 10px;
    font-size: 48px;
    padding-top: 25px;
  }
  .line-scada{
    height: 135px;
    border: 2px solid black;
    border-radius: 10px;
  }
  .line-scada:hover, .line-scada:hover > .machine{
    background-color: #ccc;
    color: #FFF;
    cursor: pointer;
  }
  .machine{
    height: 110px;
    border: 2px solid black;
    margin: 2%;
    width: 21%;
    background-color: #a4cdf7;
    color: #000;
    font-size: 20px;
    padding-top: 35px;
  }
  @media(max-width:916px){
    .content{
      overflow-x: scroll
    }

  }
</style>
<div class="box-body">
  <div class="row parent-hmi">
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
        background-color: #dddddd;
        width: 898px;
        min-height: 684px;
        height: 684px;
        border: 1px solid grey;
      }
      .image-symbol{
        position: absolute;
        z-index: 1;
      }
      .focused{
        outline: 1px dashed #030afa;
        opacity: 0.5;
        /* z-index: 99999 !important; */
      }
      <?=join('',$position)?>
    </style>
    <div class="col-xs-12 col-md-12 parent-hmi">
      <div class="hmi">
        <?php foreach($images as $s){ ?>
          <img class="image-symbol" src="<?=$hmi.$s->grup.'/'.$s->color.'/'.$s->src."?".rand(1,1000)?>" id="<?=$s->element?>" data-id="<?=$s->id?>" data-color="<?=$s->color?>"/>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<!-- <div class="box-body">
  <div class="row parent-hmi">
    <div class="col-xs-12 col-md-12 parent-hmi">

      <div class="hmi">
        <div class="col-sm-12 parent-line">
          <div class="col-sm-2 line-name">5A</div>
          <a href="<?=$url?>line/a">
          <div class="col-sm-8 line-scada">
            <div class="col-sm-3 machine">
              Mesin 1
            </div>                      
            <div class="col-sm-3 machine">
              Mesin 2
            </div>                      
            <div class="col-sm-3 machine">
              Mesin 3
            </div>                      
            <div class="col-sm-3 machine">
              Mesin 4
            </div>                      
          </div>
          </a>
          <div class="col-sm-2 line-indikator">
              <img width="80px" src="<?=$url?>assets/images/indicatorgreen.png?1"/>
          </div>
        </div>
        
        <div class="col-sm-12 parent-line">
          <div class="col-sm-2 line-name">2A</div>
          <div class="col-sm-8 line-scada">
            <div class="col-sm-3 machine">
              Mesin 1
            </div>                      
            <div class="col-sm-3 machine">
              Mesin 2
            </div>                      
            <div class="col-sm-3 machine">
              Mesin 3
            </div>                      
            <div class="col-sm-3 machine">
              Mesin 4
            </div>                      
          </div>
          <div class="col-sm-2 line-indikator">
              <img class="line-indikator-2" width="80px" src="<?=$url?>assets/images/indicatorred.png?1"/>
              <img class="line-indikator-2" width="80px" src="<?=$url?>assets/images/indicatorgrey.png" style="display:none"/>
          </div>
        </div>
        
        <div class="col-sm-12 parent-line">
          <div class="col-sm-2 line-name">C</div>
          <div class="col-sm-8 line-scada">
            <div class="col-sm-3 machine">
              Mesin 1
            </div>                      
            <div class="col-sm-3 machine">
              Mesin 2
            </div>                      
            <div class="col-sm-3 machine">
              Mesin 3
            </div>                      
            <div class="col-sm-3 machine">
              Mesin 4
            </div>                      
          </div>
          <div class="col-sm-2 line-indikator">
              <img class="line-indikator-3" width="80px" src="<?=$url?>assets/images/indicatorred.png?1"/>
              <img class="line-indikator-3" width="80px" src="<?=$url?>assets/images/indicatorgrey.png" style="display:none"/>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>
/.box-body -->


<script>
  wsScada5a = new WebSocket("ws://localhost:1880/ws/alarm_5aa1")
  wsScada5a.onerror = function(error) {console.log('Error detected: ' + error)}
  wsScada5a.onopen = function(){console.log('websocket wsScada5a connect');/*ws.send("websocket connect");*/}
  wsScada5a.onclose = function(){console.log('websocket wsScada5a disconnect')}
  var indicator5a = false
  wsScada5a.onmessage = function(event){
    var payload = $.parseJSON(event.data);
    if(payload.length == 0){
      $("#line_5a").attr("src", "<?=$url?>assets/images/hmi/symptom//5a.png")
      indicator5a = false
    }
    else {
      indicator5a = true
    }
  }
  toggle5aScada()
  function toggle5aScada(){
    setTimeout(() => {
      if(indicator5a){
        $("#line_5a").attr("src", "<?=$url?>assets/images/hmi/symptom//5a_red.png")
        setTimeout(() => {
          $("#line_5a").attr("src", "<?=$url?>assets/images/hmi/symptom//5a.png")
        }, 500);
      }
      setTimeout(() => {
        toggle5aScada()
      }, 500);
    }, 500);
  }
  $('#line_5a').click(function (e) { 
    e.preventDefault()
    if(indicator5a){
        window.location.replace("<?=$url?>alarm")
    } else {
      return false
    }
  });
  ////////////////////////////////////////////////////////////////////////////////////////
  wsSymptom5am1 = new WebSocket("ws://localhost:1880/ws/5am1")
  wsSymptom5am1.onerror = function(error) {console.log('Error detected: ' + error)}
  wsSymptom5am1.onopen = function(){console.log('websocket wsSymptom5am1 connect')}
  wsSymptom5am1.onclose = function(){console.log('websocket wsSymptom5am1 disconnect')}
  var indikator5am1 = false
  wsSymptom5am1.onmessage = function(event){
    var payload = $.parseJSON(event.data);
    // console.log(diesNew)
    temperature_alarm = payload.dies.temperature_alarm
    vibration_alarm = payload.dies.vibration_alarm
    
    tLim = parseInt(temperature_alarm)
    vLim = parseInt(vibration_alarm)

    t5am11 = payload.motor_1.temperature
    v5am11 = payload.motor_1.vibration
    t5am12 = payload.motor_2.temperature
    v5am12 = payload.motor_2.vibration
    t5am13 = payload.motor_3.temperature
    v5am13 = payload.motor_3.vibration
    t5am14 = payload.motor_4.temperature
    v5am14 = payload.motor_4.vibration
    
    if(t5am11 > tLim || t5am12 > tLim || t5am13 > tLim || t5am14 > tLim){
      indikator5am1 = true
    } else {
      $("#symptom_5a").attr("src", "<?=$url?>assets/images/hmi/symptom//indicatorgreen.png")
      indikator5am1 = false
    }
  }
  toggle5aSymptom()
  function toggle5aSymptom(){
    setTimeout(() => {
      if(indikator5am1){
        // console.log('a')
        $("#symptom_5a").attr("src", "<?=$url?>assets/images/hmi/symptom//indicatorred.png")
        setTimeout(() => {
          $("#symptom_5a").attr("src", "<?=$url?>assets/images/hmi/symptom//indicatorgrey.png")
        }, 500);
      }
      setTimeout(() => {
        toggle5aSymptom()
      }, 500);
    }, 500);
  }
  $('#symptom_5a').click(function (e) { 
    e.preventDefault()
    if(indikator5am1){
        window.location.replace("<?=$url?>symptom")
    } else {
      return false
    }
  });

</script>
<script>
  var editMode = false;
  if(editMode){
    $('.image-symbol').draggable();
    $('.textbox').draggable();
    $('.circleEdit').toggle();
    $('.content-wrapper').css("margin-left", "200px");
    $('.content-wrapper').css("margin-right", "200px");
    $('.side-left').show();
    $('.side-right').show();
  }
  $(document).keydown(function(e) {
      if(e.ctrlKey && e.keyCode == 120){
        e.preventDefault();
        if(editMode){
          editMode = false;
          $('.circleEdit').toggle();
          $('.content-wrapper').css("margin-left", "0px");
          $('.content-wrapper').css("margin-right", "0px");
          $('.side-left').hide('fast');
          $('.side-right').hide('fast');
          $('.image-symbol').removeClass('focused');
          removeFocus();
          // alert(editMode);
        } else {
          editMode = true;
          $('.circleEdit').toggle();
          $('.content-wrapper').css("margin-left", "200px");
          $('.content-wrapper').css("margin-right", "200px");
          $('.side-left').show(400);
          $('.side-right').show(400);
        }
        $('.image-symbol').draggable({disabled:!editMode});
        $('.textbox').draggable({disabled:!editMode});
      } else if(e.keyCode == 27){
        e.preventDefault();
        if(editMode){
          $('.image-symbol').removeClass('focused');
          removeFocus();
        }
      } else if (e.keyCode == 37 || e.keyCode == 38 || e.keyCode == 39 || e.keyCode == 40){
        e.preventDefault();
        if(editMode){
          find = $('.hmi').find('.focused');
          if(find.length){
            var rect = find[0].getBoundingClientRect();
            var recta = $('.hmi')[0].getBoundingClientRect();
            var x = Math.floor(rect.left - (recta.left+1));
            var y = Math.floor(rect.top - (recta.top+1));
            switch (e.keyCode) {
              case 37:
                x = x-1;
                find.css({ left: x, top: y});
                break;
              case 38:
                y = y-1;
                find.css({ left: x, top: y});
                break;
              case 39:
                x = x+1;
                find.css({ left: x, top: y});
                break;
              case 40:
                y = y+1;
                find.css({ left: x, top: y});
                break;
            }
            $.ajax({
              type: "POST",
              url: "<?=$url?>hmi_update_postition",
              data: {id:find.data('id'), x:x, y:y},
              dataType: "JSON",
              success: function (response) {
                // console.log(response);
              }
            });
          }
        }
      } else if(e.keyCode == 46) {
        e.preventDefault();
        if(editMode){
          find = $('.hmi').find('.focused');
          if(find.length){
            $.ajax({
              type: "POST",
              url: "<?=$url?>hmi_delete",
              data: {id:find.data('id')},
              dataType: "JSON",
              success: function (response) {
                // console.log(response);
                find.remove();
                removeFocus();
              }
            });
          }
        }
      } else if(e.keyCode == 33 || e.keyCode == 34) {
        e.preventDefault();
        if(editMode){
          find = $('.hmi').find('.focused');
          if(find.length){
            e.preventDefault();
            var z = parseInt(find.css('z-index'));
            var element = find.attr('id');
            switch (e.keyCode) {
              case 33:
                z = z+1;
                break;
              case 34:
                z = z-1;
                break;
            }
            $.ajax({
              type: "POST",
              url: "<?=$url?>update_hmi_z_index",
              data: {element:element, z:z},
              dataType: "JSON",
              success: function (response) {
                // console.log(response);
                find.css('z-index', z);
                $('#item-z').val(z);
              }
            });
          }
        }
      }
      // console.log(e.keyCode);
  });
  // alert(editMode);
  $('.hmi').on('mousedown', '.image-symbol', function (e) {    
    if(editMode){
      $('.image-symbol').removeClass('focused');
      $(this).addClass('focused');
      setFocus($(this));
    }
  });
  $('.hmi').on('mouseup', '.image-symbol', function (e) { 
    if(editMode){
      e.preventDefault();
      var rect = e.target.getBoundingClientRect();
      var recta = $('.hmi')[0].getBoundingClientRect();
      var x = Math.floor(rect.left - (recta.left+1));
      var y = Math.floor(rect.top - (recta.top+1));
      // console.log(Math.floor(rect.left - (recta.left+1)), Math.floor(rect.top - (recta.top+1)));
      $.ajax({
        type: "POST",
        url: "<?=$url?>hmi_update_postition",
        data: {id:$(this).data('id'), x:x, y:y},
        dataType: "JSON",
        success: function (response) {
          console.log(response);
        }
      });
    }
  });
  $('.hmi').on('mouseup', '.textbox', function (e) { 
    if(editMode){
      e.preventDefault();
      var rect = e.target.getBoundingClientRect();
      var recta = $('.hmi')[0].getBoundingClientRect();
      var x = Math.floor(rect.left - (recta.left+1));
      var y = Math.floor(rect.top - (recta.top+1));
          console.log($(this).attr('id'));
      // console.log(Math.floor(rect.left - (recta.left+1)), Math.floor(rect.top - (recta.top+1)));
      $.ajax({
        type: "POST",
        url: "<?=$url?>textbox_update_postition",
        data: {element:$(this).attr('id'), x:x, y:y},
        dataType: "JSON",
        success: function (response) {
          console.log(response);
        }
      });
    }
  });

  function setFocus(elem){
    $('#item-name').val(elem.attr('id'));
    $('#item-z').val(elem.css('z-index'));
  }
  function removeFocus(){
    $('#item-name').val('');
    $('#item-z').val('');
  }

  $('#form-item').submit(function (e) { 
    e.preventDefault();
    var element = $('#item-name').val();
    var z = $('#item-z').val();
    $.ajax({
      type: "POST",
      url: $(this).attr('action'),
      data: {element:element, z:z},
      dataType: "JSON",
      success: function (response) {
        // console.log(response);
        $('#'+element).css('z-index', z);
      }
    });
  });

  $('.symbol').draggable({
    disabled:false,
    revert: true
  });
  $('.hmi').droppable({
    accept: '.symbol',
    drop: function(event, ui) {
      event.revert = true;
      src = ui.draggable.data("src");
      grup = ui.draggable.data("grup");
      color = ui.draggable.data("color");
      // console.log('success');
      console.log(src, grup, color);
      $.ajax({
        type: "POST",
        url: "<?=$url?>insert_image_symbol",
        data: {src:src, color:color, grup:grup},
        dataType: "JSON",
        success: function (response) {
          s = response;
          src = '<?=$hmi?>'+s.grup+'/'+s.color+'/'+s.src;
          id= s.element;
          // content = '<img class="image-symbol" src="'+src+'" id="'+s.element+'" data-id="'+s.id+'"/>';
          content = $('<img>',{id:s.element, src:src});
          content.css('z-index', 1);
          content.data('id', s.id);
          content.addClass('image-symbol');
          console.log(response);
          $('.hmi').prepend(content);
          $('.image-symbol').draggable();
          // $('.image-symbol').mousedown(function (e) {
          //   $('.image-symbol').removeClass('focused');
          //   $(this).addClass('focused');
          // });
        }
      });
    }
  });  
</script>










