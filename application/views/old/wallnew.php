<?php
$animation1Duration = 5;
$animation2Duration = 10;
$animation3Duration = 13;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 //EN">
<html>
<head>
    <title>NMS 2026</title>
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
        /*
        display: grid;
        place-items: center;
        */
        transform: scale(0.6818, 0.7031);        
        transform-origin: top left;
        
      }

      .fixed {
        width: 2816px;
        height: 1536px;
        opacity: 1;
        background-image: url('<?=base_url('assets/images/blank.png')?>');
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
        width: 350px;
        height: 275px;
        position: absolute;
        border: 5px solid rgba(145, 47, 43);
      }

      .messageGrid {
        width: 410px;
        height: 280px;
        border: 1px solid #000;
        border-radius: 50px;
        position: absolute;
        background-color: #f4ae51;
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
        width: 330px;
        height: 120px;
        padding: 5px;
        font-size: 26px;
        /* background-color: rgba(255,255,255,0.9); */
      }

      .cloudauthor{
        position: absolute;
        left: 30px;
        bottom: 20px;
        font-family: Arial;
        width: 190px;
        height: 50px;
        text-align: left;
        padding: 5px;
        font-size: 24px;
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

      <div id="photo1" class="photoGrid emptyGrid" style="left: 210px; top: 270px;"></div>
      <div id="photo2" class="photoGrid emptyGrid" style="left: 575px; top: 270px;"></div>
      <div id="photo3" class="photoGrid emptyGrid" style="left: 940px; top: 270px;"></div>

      <div id="photo4" class="photoGrid emptyGrid" style="left: 210px; top: 590px;"></div>
      <div id="photo5" class="photoGrid emptyGrid" style="left: 575px; top: 590px;"></div>
      <div id="photo6" class="photoGrid emptyGrid" style="left: 940px; top: 590px;"></div>

      <div id="photo7" class="photoGrid emptyGrid" style="left: 210px; top: 910px;"></div>
      <div id="photo8" class="photoGrid emptyGrid" style="left: 575px; top: 910px;"></div>
      <div id="photo9" class="photoGrid emptyGrid" style="left: 940px; top: 910px;"></div>

      <div class="messageGrid emptyGrid" style="left: 1320px; top: 270px;" id="message1"></div>
      <div class="messageGrid emptyGrid" style="left: 1770px; top: 270px;" id="message2"></div>
      <div class="messageGrid emptyGrid" style="left: 2220px; top: 270px;" id="message3"></div>

      <div class="messageGrid emptyGrid" style="left: 1320px; top: 560px;" id="message4"></div>
      <div class="messageGrid emptyGrid" style="left: 1770px; top: 560px;" id="message5"></div>
      <div class="messageGrid emptyGrid" style="left: 2220px; top: 560px;" id="message6"></div>

      <div class="messageGrid emptyGrid" style="left: 1320px; top: 850px;" id="message7"></div>
      <div class="messageGrid emptyGrid" style="left: 1770px; top: 850px;" id="message8"></div>
      <div class="messageGrid emptyGrid" style="left: 2220px; top: 850px;" id="message9"></div>



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

          intDelay = 1000;

          data.forEach(function(objItem){


            strHTML = '<div class="cloudtext">' + objItem.AtText + '</div>';
             strHTML += '<div class="cloudauthor">' + objItem.AtFirstName +  '</div>';

            $("#message" + intMessageCnt).html(strHTML);
            $("#message" + intMessageCnt).removeClass("emptyGrid");


            if(objItem.AtImage) {

              oldHTML = $("#photo" + intPhoto).html();  
            
              strHtml = '<img src="<?php echo(base_url("assets/images/uploads/")); ?>' + objItem.AtImage + '" class="imgContain">';

              //console.log(oldHTML);
              //console.log(strHtml);

              intDelay = intDelay + 500;

              if(oldHTML != strHtml) {
                $("#photo" + intPhoto).html(strHtml);
                //$("#photo" + intPhoto).fadeOut(500).delay(intDelay).fadeIn(500);
              } else {
                console.log("same");
              }


              intPhoto++;
              //console.log("?");
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
