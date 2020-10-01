<style>
  .parent-line {
    margin-bottom: 40px;
  }

  .line {
    height: 170px;
    width: 80%;
    border: 2px solid black;
    margin: 10%;
  }

  .line-name {
    height: 135px;
    border-radius: 10px;
    font-size: 48px;
    padding-top: 25px;
  }

  .line-scada {
    height: 135px;
    border: 2px solid black;
    border-radius: 10px;
  }

  .line-scada:hover,
  .line-scada:hover>.machine {
    background-color: #ccc;
    color: #FFF;
    cursor: pointer;
  }

  .machine {
    height: 110px;
    border: 2px solid black;
    margin: 2%;
    width: 21%;
    background-color: #a4cdf7;
    color: #000;
    font-size: 20px;
    padding-top: 35px;
  }

  #symptom_5am1 {
    width: 110px;
    height: auto;
  }

  @media(max-width:916px) {
    .content {
      overflow-x: scroll;
      padding: 0px;
    }

  }
</style>
<div class="box-body">
  <!-- <div class="row parent-hmi"> -->
  <div class="row">
    <style>
      .box {
        min-width: 480px;
      }

      .box-body {
        min-width: 480px;
      }

      .parent-hmi {
        margin: 0;
        padding: 0;
        text-align: center;
        /* height: auto; */
      }

      .hmi {
        position: relative;
        display: inline-block;
        /* background-image: url("../assets/images/hmi/waterpump.png?123"); */
        background-repeat: no-repeat;
        background-color: #dddddd;
        width: 898px;
        /* min-height: 684px; */
        height: 684px;
        border: 1px solid grey;
        /* transform: scale(0.5,0.5);
        transform-origin: 50% 0%; */
      }

      .image-symbol {
        position: absolute;
        z-index: 1;
      }

      .focused {
        outline: 1px dashed #030afa;
        opacity: 0.5;
        /* z-index: 99999 !important; */
      }

      <?= join('', $position) ?>
    </style>
    <div class="col-xs-12 col-md-12 parent-hmi">
      <div class="hmi">
        <?php foreach ($images as $s) { ?>
          <img class="image-symbol" src="<?= $hmi . $s->grup . '/' . $s->color . '/' . $s->src . "?" . rand(1, 1000) ?>" id="<?= $s->element ?>" data-id="<?= $s->id ?>" data-color="<?= $s->color ?>" />
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<script>
  // var oldWidth = $(window).width()
  // $(document).ready(function () {    
  // if($(window).width() < 916){
  //     scale = ($(window).width() - 20)/916
  //     $('.hmi').css('transform', 'scale('+scale+')')
  //     $('.hmi').css('transform-origin', 52-(scale*100)+'% 0%')
  //       // $('.hmi').css('transform-origin', '50% 0%')
  //     $('.hmi').parent().width(961*scale)
  //     $('.hmi').parent().height(684*scale)
  //   }
  //   $(window).resize(function() {
  //     newWidth = $(window).width()
  //     if(newWidth < 916){
  //       scale = (newWidth - 20)/916
  //       $('.hmi').css('transform', 'scale('+scale+')')
  //       $('.hmi').css('transform-origin', 52-(scale*100)+'% 0%')
  //       // $('.hmi').css('transform-origin', '50% 0%')
  //     $('.hmi').parent().width(961*scale)
  //     $('.hmi').parent().height(684*scale)
  //     } else {
  //       $('.hmi').css('transform', 'scale(1)')
  //       // $('.hmi').css('transform-origin', '1 1')
  //       $('.hmi').parent().width(961)
  //       $('.hmi').parent().height(684)
  //     }
  //   })
  // })
</script>
<script>
  scada5a()
  toggle5aScada()
  var indicatorScada5am1 = false
  var indicatorScada5am2 = false
  var tagUrlScada5a

  symptom5am1()
  var indikatorSymptom5am1 = false
  var tagUrlSymptom5am1 = "5am1"
  symptom5am2()
  var indikatorSymptom5am2 = false
  var tagUrlSymptom5am2 = "5am2"
  toggle5aSymptom()

  function scada5a() {
    wsScada5a = new WebSocket("ws://localhost:1880/ws/alarm_5aa1")
    wsScada5a.onerror = function(error) {
      console.log('Error detected: ' + error)
    }
    wsScada5a.onopen = function() {
      console.log('wsScada5a connect')
    }
    wsScada5a.onclose = function() {
      console.log('wsScada5a disconnect')
      scada5a()
    }
    wsScada5a.onmessage = function(event) {
      var payload = $.parseJSON(event.data)
      if (payload.length == 0) {
        // $("#line_5a").attr("src", "<?= $url ?>assets/images/hmi/symptom//5a.png?<?= rand(1, 1000) ?>")
        indicatorScada5am1 = false
      } else {
        indicatorScada5am1 = true
      }
    }
  }

  function toggle5aScada() {
    setTimeout(() => {
      if (indicatorScada5am1) {
        $("#line_5a").attr("src", "<?= $url ?>assets/images/hmi/symptom/5a_red.png?<?= rand(1, 1000) ?>")
        setTimeout(() => {
          $("#line_5a").attr("src", "<?= $url ?>assets/images/hmi/symptom/5a.png?<?= rand(1, 1000) ?>")
        }, 500);
      }
      setTimeout(() => {
        toggle5aScada()
      }, 500);
    }, 500);
  }
  $('#line_5a').click(function(e) {
    e.preventDefault()
    window.location.href = ("<?= $url ?>press_shop/line_5a")
  })

  // SYMPTOM

  function symptom5am1() {
    wsSymptom5am1 = new WebSocket("ws://localhost:1880/ws/5am1")
    wsSymptom5am1.onerror = function(error) {
      console.log('Error detected: ' + error)
    }
    wsSymptom5am1.onopen = function() {
      console.log('wsSymptom5am1 connect')
    }
    wsSymptom5am1.onclose = function() {
      console.log('wsSymptom5am1 disconnect')
      symptom5am1()
    }
    wsSymptom5am1.onmessage = function(event) {
      var payload = $.parseJSON(event.data);
      temperature_alarm = payload.dies.temperature_alarm
      vibration_alarm = payload.dies.vibration_alarm

      tLim = parseInt(temperature_alarm)
      vLim = parseInt(vibration_alarm)

      t5am1LL = payload.motor_LL.temperature
      v5am1LL = payload.motor_LL.vibration
      t5am1LR = payload.motor_LR.temperature
      v5am1LR = payload.motor_LR.vibration
      t5am1UR = payload.motor_UR.temperature
      v5am1UR = payload.motor_UR.vibration
      t5am1UL = payload.motor_UL.temperature
      v5am1UL = payload.motor_UL.vibration

      if (t5am1LL > tLim || t5am1LR > tLim || t5am1UR > tLim || t5am1UL > tLim ||
        v5am1LL > vLim || v5am1LR > vLim || v5am1UR > vLim || v5am1UL > vLim) {
        indikatorSymptom5am1 = true
      } else {
        $("#symptom_5am1").attr("src", "<?= $url ?>assets/images/hmi/symptom/indicatorgreen.png?<?= rand(1, 1000) ?>")
        indikatorSymptom5am1 = false
      }
    }
  }

  function symptom5am2() {
    wsSymptom5am2 = new WebSocket("ws://localhost:1880/ws/5am2")
    wsSymptom5am2.onerror = function(error) {
      console.log('Error detected: ' + error)
    }
    wsSymptom5am2.onopen = function() {
      console.log('wsSymptom5am2 connect')
    }
    wsSymptom5am2.onclose = function() {
      console.log('wsSymptom5am2 disconnect')
      symptom5am2()
    }
    wsSymptom5am2.onmessage = function(event) {
      var payload = $.parseJSON(event.data)
      temperature_alarm = payload.dies.temperature_alarm
      vibration_alarm = payload.dies.vibration_alarm

      tLim = parseInt(temperature_alarm)
      vLim = parseInt(vibration_alarm)

      t5am2LL = payload.motor_LL.temperature
      v5am2LL = payload.motor_LL.vibration
      t5am2LR = payload.motor_LR.temperature
      v5am2LR = payload.motor_LR.vibration
      t5am2UR = payload.motor_UR.temperature
      v5am2UR = payload.motor_UR.vibration
      t5am2UL = payload.motor_UL.temperature
      v5am2UL = payload.motor_UL.vibration

      if (t5am2LL > tLim || t5am2LR > tLim || t5am2UR > tLim || t5am2UL > tLim ||
        v5am2LL > vLim || v5am2LR > vLim || v5am2UR > vLim || v5am2UL > vLim) {
        indikatorSymptom5am2 = true
      } else {
        indikatorSymptom5am2 = false
      }
    }
  }

  function toggle5aSymptom() {
    if (indikatorSymptom5am1 || indikatorSymptom5am2) {
      $("#symptom_5am1").attr("src", "<?= $url ?>assets/images/hmi/symptom/indicatoralarm.gif?<?= rand(1, 1000) ?>")
    } else {
      $("#symptom_5am1").attr("src", "<?= $url ?>assets/images/hmi/symptom/indicatorgreen.png?<?= rand(1, 1000) ?>")
    }
    setTimeout(() => {
      toggle5aSymptom()
    }, 500)
  }
  $('#symptom_5am1').click(function(e) {
    e.preventDefault()
    if (indikatorSymptom5am1) {
      window.location.href = ("<?= $url ?>symptom/5am1")
    } else if (indikatorSymptom5am2) {
      window.location.href = ("<?= $url ?>symptom/5am2")
    } else {
      window.location.href = ("<?= $url ?>symptom/")
    }
  })
</script>
<script>
  var editMode = false;
  if (editMode) {
    $('.image-symbol').draggable();
    $('.textbox').draggable();
    $('.circleEdit').toggle();
    $('.content-wrapper').css("margin-left", "200px");
    $('.content-wrapper').css("margin-right", "200px");
    $('.side-left').show();
    $('.side-right').show();
  }
  $(document).keydown(function(e) {
    if (e.ctrlKey && e.keyCode == 120) {
      e.preventDefault();
      if (editMode) {
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
      $('.image-symbol').draggable({
        disabled: !editMode
      });
      $('.textbox').draggable({
        disabled: !editMode
      });
    } else if (e.keyCode == 27) {
      e.preventDefault();
      if (editMode) {
        $('.image-symbol').removeClass('focused');
        removeFocus();
      }
    } else if (e.keyCode == 37 || e.keyCode == 38 || e.keyCode == 39 || e.keyCode == 40) {
      e.preventDefault();
      if (editMode) {
        find = $('.hmi').find('.focused');
        if (find.length) {
          var rect = find[0].getBoundingClientRect();
          var recta = $('.hmi')[0].getBoundingClientRect();
          var x = Math.floor(rect.left - (recta.left + 1));
          var y = Math.floor(rect.top - (recta.top + 1));
          switch (e.keyCode) {
            case 37:
              x = x - 1;
              find.css({
                left: x,
                top: y
              });
              break;
            case 38:
              y = y - 1;
              find.css({
                left: x,
                top: y
              });
              break;
            case 39:
              x = x + 1;
              find.css({
                left: x,
                top: y
              });
              break;
            case 40:
              y = y + 1;
              find.css({
                left: x,
                top: y
              });
              break;
          }
          $.ajax({
            type: "POST",
            url: "<?= $url ?>hmi_update_postition",
            data: {
              id: find.data('id'),
              x: x,
              y: y
            },
            dataType: "JSON",
            success: function(response) {
              // console.log(response);
            }
          });
        }
      }
    } else if (e.keyCode == 46) {
      e.preventDefault();
      if (editMode) {
        find = $('.hmi').find('.focused');
        if (find.length) {
          $.ajax({
            type: "POST",
            url: "<?= $url ?>hmi_delete",
            data: {
              id: find.data('id')
            },
            dataType: "JSON",
            success: function(response) {
              // console.log(response);
              find.remove();
              removeFocus();
            }
          });
        }
      }
    } else if (e.keyCode == 33 || e.keyCode == 34) {
      e.preventDefault();
      if (editMode) {
        find = $('.hmi').find('.focused');
        if (find.length) {
          e.preventDefault();
          var z = parseInt(find.css('z-index'));
          var element = find.attr('id');
          switch (e.keyCode) {
            case 33:
              z = z + 1;
              break;
            case 34:
              z = z - 1;
              break;
          }
          $.ajax({
            type: "POST",
            url: "<?= $url ?>update_hmi_z_index",
            data: {
              element: element,
              z: z
            },
            dataType: "JSON",
            success: function(response) {
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
  $('.hmi').on('mousedown', '.image-symbol', function(e) {
    if (editMode) {
      $('.image-symbol').removeClass('focused');
      $(this).addClass('focused');
      setFocus($(this));
    }
  });
  $('.hmi').on('mouseup', '.image-symbol', function(e) {
    if (editMode) {
      e.preventDefault();
      var rect = e.target.getBoundingClientRect();
      var recta = $('.hmi')[0].getBoundingClientRect();
      var x = Math.floor(rect.left - (recta.left + 1));
      var y = Math.floor(rect.top - (recta.top + 1));
      // console.log(Math.floor(rect.left - (recta.left+1)), Math.floor(rect.top - (recta.top+1)));
      $.ajax({
        type: "POST",
        url: "<?= $url ?>hmi_update_postition",
        data: {
          id: $(this).data('id'),
          x: x,
          y: y
        },
        dataType: "JSON",
        success: function(response) {
          console.log(response);
        }
      });
    }
  });
  $('.hmi').on('mouseup', '.textbox', function(e) {
    if (editMode) {
      e.preventDefault();
      var rect = e.target.getBoundingClientRect();
      var recta = $('.hmi')[0].getBoundingClientRect();
      var x = Math.floor(rect.left - (recta.left + 1));
      var y = Math.floor(rect.top - (recta.top + 1));
      console.log($(this).attr('id'));
      // console.log(Math.floor(rect.left - (recta.left+1)), Math.floor(rect.top - (recta.top+1)));
      $.ajax({
        type: "POST",
        url: "<?= $url ?>textbox_update_postition",
        data: {
          element: $(this).attr('id'),
          x: x,
          y: y
        },
        dataType: "JSON",
        success: function(response) {
          console.log(response);
        }
      });
    }
  });

  function setFocus(elem) {
    $('#item-name').val(elem.attr('id'));
    $('#item-z').val(elem.css('z-index'));
  }

  function removeFocus() {
    $('#item-name').val('');
    $('#item-z').val('');
  }

  $('#form-item').submit(function(e) {
    e.preventDefault();
    var element = $('#item-name').val();
    var z = $('#item-z').val();
    $.ajax({
      type: "POST",
      url: $(this).attr('action'),
      data: {
        element: element,
        z: z
      },
      dataType: "JSON",
      success: function(response) {
        // console.log(response);
        $('#' + element).css('z-index', z);
      }
    });
  });

  $('.symbol').draggable({
    disabled: false,
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
        url: "<?= $url ?>insert_image_symbol",
        data: {
          src: src,
          color: color,
          grup: grup
        },
        dataType: "JSON",
        success: function(response) {
          s = response;
          src = '<?= $hmi ?>' + s.grup + '/' + s.color + '/' + s.src;
          id = s.element;
          // content = '<img class="image-symbol" src="'+src+'" id="'+s.element+'" data-id="'+s.id+'"/>';
          content = $('<img>', {
            id: s.element,
            src: src
          });
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