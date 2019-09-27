
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
  <!-- /.row -->
</div>
<!-- /.box-body -->


<script>
  aaa();
  bbb();
  function aaa(){
    rand = Math.random()*200 + 400;
    $(".line-indikator-2").toggle();
    setTimeout(() => {
      aaa();
    }, rand);
  }
  function bbb(){
    rand = Math.random()*200 + 400;
    $(".line-indikator-3").toggle();
    setTimeout(() => {
      bbb();
    }, rand);
  }
</script>











