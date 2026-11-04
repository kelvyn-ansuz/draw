<?php
$animation1Duration = 5;
$animation2Duration = 10;
$animation3Duration = 13;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 //EN">
<html>
<head>
    <title>IAQ Utility Solutions (SG) Pte Ltd Official Opening 2026</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.textfill.min.js')?>"></script>
    <script src="<?php echo base_url("assets/js/jquery-ui.js"); ?>"></script>
    <style>
      html, body {
          margin: 0;
          height: 100%;
          overflow: hidden;
          background-color: #333;
      }

      body {
          padding: 0;
          margin: 0;
          background: #ddd top left no-repeat;
          background-size: cover;
          font-family: Arial;
      }

      .main-container{
        width: 100%;
        height: 100%;
        display: grid;
        place-items: center;
      }

      .fixed {
        width: 1920px;
        height: 1080px;
        opacity: 1;
        background-image: url('<?=base_url('assets/images/main.png')?>');
        background-size: cover;
        position: relative;
        background-color:#fff;
      }

      .imgContain {
        width: 100%;
        height: 100%;
        object-fit: contain;
      }

      .cloud {
        width: 400px;
        height: 400px;
        position: absolute;
        transition: all 2.5s;
        /* text-shadow: 0px 0px 20px #83d4ef, 0px 0px 5px #83d4ef, 0px 0px 10px #83d4ef; */
      }

      .photoGrid {
        width: 250px;
        height: 250px;
        position: absolute;
      }

      .messageGrid {
        width: 250px;
        height: 250px;
        border: 1px solid #000;
        border-radius: 50px;
        position: absolute;
        background-color: #fff;
      }

      .emptyGrid {
        opacity: 0.8;
      }

      <?php
        for($i=1;$i<=30;$i++) {

          $intSize = rand(250, 550) / 1000;
          $intAngle = rand(-5,5);
      ?>

      .cloud<?=$i?>{
        transform: scale(<?=$intSize?>) rotate(<?=$intAngle?>deg) ;
      }

      <?php
        }
      ?>

      .cloudleft {
        background-image: url('<?=base_url('assets/images/cloud_l.png')?>');
        background-size: 100% 100%;
      }

      .cloudright {
        background-image: url('<?=base_url('assets/images/cloud_r.png')?>');
        background-size: 100% 100%;
      }

      .cloudtext{
        position: absolute;
        left: 30px;
        top: 30px;
        font-family: Arial;
        width: 190px;
        height: 120px;
        padding: 5px;
        font-size: 16px;
        /* background-color: rgba(255,255,255,0.9); */
      }

      .cloudauthor{
        position: absolute;
        left: 30px;
        bottom: 30px;
        font-family: Arial;
        width: 190px;
        height: 50px;
        text-align: left;
        padding: 5px;
        font-size: 16px;
        /* background-color: rgba(255,255,255,0.9); */
        font-weight: bold;

      }

      .moveCloud {
        position: absolute;
        animation: linear infinite;
        animation-name: run;
        animation-duration: 30s;
      }

      @keyframes run {
        0% {
          left: 0;
        }
        50% {
          left: 1470px;
        }
        100% {
          left: 0;
        }
      }

      .growCloud {
        position: absolute;
        animation: linear;
        animation-name: grow;
        animation-duration: 10s;
        z-index: 15;
      }

      .agrowCloud {
        transform: scale(1);
        z-index: 15;
      }


      @keyframes grow {
          0% {
              transform: scale(0.4);
          }
          10% {
              transform: scale(1.2);
          }
          90% {
              transform: scale(1.2);
          }
          100% {
              transform: scale(0.4);
          }
      }




    </style>
</head>
<body>
  <div class="main-container">
    <div class="fixed" id="fixed">

      <div id="photo1" class="photoGrid emptyGrid" style="left: 55px; top: 230px;"></div>
      <div id="photo2" class="photoGrid emptyGrid" style="left: 355px; top: 230px;"></div>
      <div id="photo3" class="photoGrid emptyGrid" style="left: 655px; top: 230px;"></div>

      <div id="photo4" class="photoGrid emptyGrid" style="left: 55px; top: 500px;"></div>
      <div id="photo5" class="photoGrid emptyGrid" style="left: 355px; top: 500px;"></div>
      <div id="photo6" class="photoGrid emptyGrid" style="left: 655px; top: 500px;"></div>

      <div id="photo7" class="photoGrid emptyGrid" style="left: 55px; top: 770px;"></div>
      <div id="photo8" class="photoGrid emptyGrid" style="left: 355px; top: 770px;"></div>
      <div id="photo9" class="photoGrid emptyGrid" style="left: 655px; top: 770px;"></div>

      <div class="messageGrid emptyGrid" style="left: 1015px; top: 230px;" id="message1">


      </div>
      <div class="messageGrid emptyGrid" style="left: 1315px; top: 230px;" id="message2">
      </div>
      <div class="messageGrid emptyGrid" style="left: 1615px; top: 230px;" id="message3"></div>

      <div class="messageGrid emptyGrid" style="left: 1015px; top: 500px;" id="message4"></div>
      <div class="messageGrid emptyGrid" style="left: 1315px; top: 500px;" id="message5"></div>
      <div class="messageGrid emptyGrid" style="left: 1615px; top: 500px;" id="message6"></div>

      <div class="messageGrid emptyGrid" style="left: 1015px; top: 770px;" id="message7"></div>
      <div class="messageGrid emptyGrid" style="left: 1315px; top: 770px;" id="message8"></div>
      <div class="messageGrid emptyGrid" style="left: 1615px; top: 770px;" id="message9"></div>



      <!--
      <div style="top: 50px; left: 50px; position: absolute; text-align: center; width: 300px; height: 340px; padding: 10px; box-shadow: 0px 0px 20px #83d4ef;">
        <div style="width: 100%; height: auto;"><img src="<?=base_url('assets/images/qr.png')?>" style="width: 100%;"></div>
        <div>Scan the QR code to leave a message</div>
      </div>
      <div style="top: 50px; right: 50px; position: absolute; text-align: center; width: 300px; height: 340px; padding: 10px; box-shadow: 0px 0px 20px #83d4ef;">
        <div style="width: 100%;"><img src="<?=base_url('assets/images/qr.png')?>" style="width: 100%;"></div>
        <div>Scan the QR code to leave a message</div>
      </div>
      -->


    <!--

    <?php

      foreach ($PublishedTiles as $tiles) {

        $height = rand(320,540);
        $width = rand(-50,1470);
    ?>

    <div id="cloud_<?=$tiles->AtCollectionID?>" class="cloud move" style="top: <?=$height?>px; left: <?=$width?>px; transform:scale(0.4);">
      <div class="cloudtext"><?=$tiles->AtText?></div>
      <div class="cloudauthor"><?=$tiles->AtFirstName?> <?=$tiles->AtLastName?></div>
    </div>

    <?php
      }
    ?>

    -->

    </div>
  </div>

  <script type="text/javascript">

    var isPlaying = false;
    var arrIDs = [];
    var arrNewIDs = [];
    var initDisplay = true;

    function randomIntFromInterval(x, y, z) { // min and max included

        const numberOfSteps = Math.floor((y - x) / z) + 1; // +1 to include the 'y' value if it's a multiple of z
        const randomStepIndex = Math.floor(Math.random() * numberOfSteps);
        const randomNumber = x + (randomStepIndex * z);

        return randomNumber;

    }

    function escapeNull(str) {
        return str === null ? '' : str;
    }

    $.fn.random = function() {
        return this.eq(Math.floor(Math.random() * this.length));
    };

    var arrCnt = -1;

    function getRandomTag() {
      return $('.cloud.move').random();
    }

    function animateClouds(){
      console.log("Move clouds");
      $('.cloud.move').each(function() {

        intMove = randomIntFromInterval(25,1485,5);
        intDelay = randomIntFromInterval(6000,9000, 100);

        $( this ).animate({left: intMove + 'px'}, intDelay);
      });

      setTimeout(function() {
        animateClouds();
      }, 10000);
    }

    function checkStatus() {

      //idleAnimation();


      $.getJSON("<?php echo(base_url("ajax/getAllTiles")); ?>", function (data) {
        if(data){

          intCnt = 1;
          intMessageCnt = 1;
          intPhoto = 1;

          console.log(data);

          data.forEach(function(objItem){


            strHTML = '<div class="cloudtext">' + objItem.AtText + '</div>';


            if(objItem.AtDesignation) {
              strHTML += '<div class="cloudauthor">' + objItem.AtFirstName + ' <br> ' + objItem.AtDesignation + "<br>" + objItem.AtCompany + '</div>';
            } else {
              strHTML += '<div class="cloudauthor">' + objItem.AtFirstName + ' <br> ' + objItem.AtCompany + '</div>';
            }

            $("#message" + intMessageCnt).html(strHTML);
            $("#message" + intMessageCnt).removeClass("emptyGrid");


            if(objItem.AtImage) {

              strHtml = "<img src='<?php echo(base_url("assets/images/uploads/")); ?>" + objItem.AtImage + "' class='imgContain'>";

              $("#photo" + intPhoto).html(strHtml);
              intPhoto++;
              console.log("?");
            }
                        
            intMessageCnt++;
          });

        }
      });

      setTimeout(function() {
        checkStatus();
      }, 10000);

    }

    function idleAnimation() {

      if(!isPlaying) {

        isPlaying = true;
        if(initDisplay){
          arrNewIDs = [];
          initDisplay = false;
        }


        if (arrNewIDs.length) {
          var tag = $("#cloud_" + arrNewIDs[0]);
          console.log("New: #cloud_" + arrNewIDs[0]);
          arrNewIDs.shift();
        } else {
          var tag = getRandomTag();
        }

        tag.stop();
        tag.removeClass("move");
        tag.addClass("agrowCloud");

        console.log("grow");


        setTimeout(function() {
          tag.removeClass("agrowCloud");
          console.log("shrink");
          tag.addClass("move");
        }, 8000);

        setTimeout(function() {
          isPlaying = false;
        }, 12000);
      }


      setTimeout(function() {
        idleAnimation();
      }, 2000);

    }

    $(document).ready(function() {

      checkStatus();
      //idleAnimation();
      /*
      setTimeout(function() {
        animateClouds();
      }, 2000);
      */

    });


  </script>

</body>
</html>