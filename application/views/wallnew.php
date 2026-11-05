<?php
$animation1Duration = 5;
$animation2Duration = 10;
$animation3Duration = 13;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 //EN">
<html>
<head>
    <title>Deloitte Year End Party 2026</title>
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

      .videoBG {
        position: absolute;
        top: 0;
        left 0;
        width: 100%;
        height: 100%;
        background-color: #000;
      }


      .videoBG video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: fill; /* Forces the video to stretch, ignoring aspect ratio */
      }

      .overlay {
        position: absolute;
        top: 0;
        left 0;
        width: 100%;
        height: 100%;
        z-index: 90;
      }


 /* Outer Wrapper: Forces static 150x150 sizing, handles unique absolute placement parameters, and projects shadows */
    .paper-box {
      position: absolute;
      width: 150px;
      height: 150px;

      /* True randomized values declared explicitly per item in inline styles */
      top: var(--top);
      left: var(--left);

      /* Multi-layered yellow drop shadow that contours precisely to the morphing edge shape */
      filter:
        drop-shadow(0px 2px 5px rgba(212,226,31, 0.45))
        drop-shadow(0px 8px 18px rgba(212,226,31, 0.4))
        drop-shadow(0px 16px 32px rgba(212,226,31, 0.2));
    }

    /* Inner Sheet: Layer handling individual rotations and the edge clip-path updates */
    .sheet {
      width: 100%;
      height: 100%;
      background: #000000; /* Solid pure black base underneath the image */

      /* Locked individual random rotations */
      transform: var(--rotation);
      transform-origin: center;

      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      transition: clip-path 0.5s ease-in-out;
    }

    /* The Image Object: Stretches cleanly over the sheet and conforms to the parent's clip-path */
    .paper-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      pointer-events: none; /* Prevents default image dragging bugs */
      user-select: none;
    }

    /* ==========================================================================
       ANIMATIONS & SCHEDULING: Custom loops with desynchronized timings
       ========================================================================== */

    .paper-box:nth-child(3n+1) .sheet {
      animation: straightenVariantA 5.5s infinite ease-in-out alternate;
      animation-delay: var(--delay);
    }

    .paper-box:nth-child(3n+2) .sheet {
      animation: straightenVariantB 6.8s infinite ease-in-out alternate;
      animation-delay: var(--delay);
    }

    .paper-box:nth-child(3n+3) .sheet {
      animation: straightenVariantC 4.9s infinite ease-in-out alternate;
      animation-delay: var(--delay);
    }

    /* VARIANT A */
    @keyframes straightenVariantA {
      0%, 20% {
        clip-path: polygon(
          0% 5%, 50% 0%, 100% 4%,
          96% 35%, 100% 65%, 95% 100%,
          50% 96%, 0% 100%, 4% 65%,
          0% 35%, 5% 15%, 0% 5%
        );
      }
      80%, 100% {
        clip-path: polygon(
          0% 0%, 50% 0%, 100% 0%,
          100% 35%, 100% 65%, 100% 100%,
          50% 100%, 0% 100%, 0% 65%,
          0% 35%, 0% 15%, 0% 0%
        );
      }
    }

    /* VARIANT B */
    @keyframes straightenVariantB {
      0%, 15% {
        clip-path: polygon(
          0% 2%, 50% 3%, 100% 1%,
          98% 25%, 100% 75%, 97% 100%,
          55% 98%, 0% 97%, 2% 70%,
          0% 40%, 1% 20%, 0% 2%
        );
      }
      75%, 100% {
        clip-path: polygon(
          0% 0%, 50% 0%, 100% 0%,
          100% 25%, 100% 75%, 100% 100%,
          55% 100%, 0% 100%, 0% 70%,
          0% 40%, 0% 20%, 0% 0%
        );
      }
    }

    /* VARIANT C */
    @keyframes straightenVariantC {
      0%, 30% {
        clip-path: polygon(
          0% 0%, 50% 5%, 100% 0%,
          95% 30%, 100% 60%, 94% 100%,
          50% 95%, 0% 99%, 5% 55%,
          0% 25%, 3% 10%, 0% 0%
        );
      }
      85%, 100% {
        clip-path: polygon(
          0% 0%, 50% 0%, 100% 0%,
          100% 30%, 100% 60%, 100% 100%,
          50% 100%, 0% 100%, 0% 55%,
          0% 25%, 0% 10%, 0% 0%
        );
      }
    }



    </style>
</head>
<body>
  <div class="main-container">
    <div class="videoBG" id="fixed">
      <video autoplay muted loop playsinline poster="fallback-image.jpg">
        <source src="<?php echo base_url("assets/images/base.mp4"); ?>" type="video/mp4">
      </video>
    </div>
    <div class="fixed" id="fixed">



        <div class="paper-box" style="--top: 30%;   --left: 6%; --rotation: rotate(14deg); --delay: -0.4s;">
          <div class="sheet"><img class="paper-image" src="" id="paper1"></div>
        </div>

        <div class="paper-box" style="--top: 51%;   --left: 22%; --rotation: rotate(-8deg); --delay: -3.1s;">
          <div class="sheet"><img class="paper-image" src="" id="paper2"></div>
        </div>



        <div class="paper-box" style="--top: 8%; --left: 28%; --rotation: rotate(8deg); --delay: -3.1s;">
          <div class="sheet"><img class="paper-image" src="" id="paper3"></div>
        </div>

        <div class="paper-box" style="--top: 78%; --left: 3%; --rotation: rotate(35deg); --delay: -0.9s;">
          <div class="sheet"><img class="paper-image" src="" id="paper4"></div>
        </div>


        <div class="paper-box" style="--top: 8%; --left: 68%; --rotation: rotate(-11deg); --delay: -2.3s;">
          <div class="sheet"><img class="paper-image" src="" id="paper5"></div>
        </div>

        <div class="paper-box" style="--top: 53%; --left: 72%; --rotation: rotate(19deg); --delay: -1.2s;">
          <div class="sheet"><img class="paper-image" src="" id="paper6"></div>
        </div>


        <div class="paper-box" style="--top: 76%; --left: 55%; --rotation: rotate(-5deg); --delay: -4.5s;">
          <div class="sheet"><img class="paper-image" src="" id="paper7"></div>
        </div>

        <div class="paper-box" style="--top: 73%; --left: 32%; --rotation: rotate(27deg); --delay: -2.7s;">
          <div class="sheet"><img class="paper-image" src="" id="paper8"></div>
        </div>


        <div class="paper-box" style="--top: 79%; --left: 82%; --rotation: rotate(-31deg); --delay: -0.2s;">
          <div class="sheet"><img class="paper-image" src="" id="paper9"></div>
        </div>

        <div class="paper-box" style="--top: 12%; --left: 88%; --rotation: rotate(42deg); --delay: -3.8s;">
          <div class="sheet"><img class="paper-image" src="" id="paper10"></div>
        </div>



        <!--


        -->

    </div>
    <div class="overlay" id="overlay">
      <img src="<?php echo base_url("assets/images/overlay.png"); ?>" style="width:100%; height: 100%;">
    </div>
  </div>

  <script type="text/javascript">


      setTimeout(function() {
          //$(".paper").css('backgroundColor', 'blue');
      }, 1000);


    function checkStatus() {

      //idleAnimation();


      $.getJSON("<?php echo(base_url("ajax/getAllTiles")); ?>", function (data) {
        if(data){

          intCnt = 1;
          intMessageCnt = 1;
          intPhoto = 1;

          //$(".paper").css('backgroundColor', 'blue');

          intDelay = 1000;

          data.forEach(function(objItem){


          strURL = '<?php echo base_url("assets/images/uploads/"); ?>' + objItem.AtImage;

          console.log("#paper" + intMessageCnt);
          console.log(strURL);

          $("#paper" + intMessageCnt).attr("src", strURL);


            //$("#paper" . intMessageCnt).css('background-image', 'url("' + strURL + '");');

            ////$("#paper" . intMessageCnt).css('backgroundColor', 'blue');


            intMessageCnt++;

          });

        }
      });

      setTimeout(function() {
        checkStatus();
      }, 10000);

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
