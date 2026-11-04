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

      /* Base styling for the scattered paper shards */
      .paper {
        position: absolute;
        top: var(--top);
        left: var(--left);

        /* Rigid locked square sizing geometry */
        width: 150px;
        height: 150px;

        /* Base background color handles fallback */
        background-color: #000000;

        /*
          Inject image parameters.
          background-size: cover crops the image neatly to the 200x200 canvas.
        */
        background-image: var(--bg-img);
        background-size: cover;
        background-position: center;

        box-sizing: border-box;
        user-select: none;

        /* Deeper shadow overlay to emphasize dark paper layers over a dark desk */
        box-shadow:
          0 2px 6px rgba(0,0,0,0.5),
          2px 10px 24px rgba(0,0,0,0.6);

        /* Bind the custom autonomous animation loop */
        animation: straightenLoop var(--duration) ease-in-out var(--delay) infinite alternate;

        /* Keep the hover lift layer mechanic separate from the base animation layout */
        transition: z-index 0.25s step-start, box-shadow 0.25s ease;
      }

      /* 3 distinct edge distortion profiles mapped systematically across elements */
      .paper:nth-child(3n+1) {
        --crumple-path: polygon(
          0% 1%, 22% 0%, 45% 2%, 68% 0%, 90% 1%, 100% 0%,
          98% 28%, 100% 55%, 97% 78%, 100% 100%, 80% 98%,
          55% 99%, 30% 97%, 0% 99%, 2% 66%, 0% 33%
        );
      }

      .paper:nth-child(3n+2) {
        --crumple-path: polygon(
          2% 0%, 30% 2%, 58% 0%, 85% 3%, 100% 1%, 97% 38%,
          100% 70%, 98% 100%, 82% 97%, 62% 99%, 35% 98%,
          0% 100%, 1% 75%, 0% 48%, 3% 20%
        );
      }

      .paper:nth-child(3n+3) {
        --crumple-path: polygon(
          1% 1%, 25% 3%, 50% 0%, 75% 2%, 100% 0%, 99% 30%,
          98% 60%, 100% 98%, 85% 100%, 60% 97%, 30% 99%,
          2% 97%, 0% 70%, 2% 40%, 0% 15%
        );
      }

      /*
        Autonomous Animation Timeline:
        Transitions the structural shape from crumpled to flat while removing rotation.
        The underlying background image warps perfectly along with the clip-path borders.
      */
      @keyframes straightenLoop {
        0%, 20% {
          transform: rotate(var(--rot));
          clip-path: var(--crumple-path);
        }
        80%, 100% {
          transform: rotate(0deg);
          clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
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


        <div id="paper1" class="paper" style="--top: 30%;   --left: 6%;   --rot: -12deg; --duration: 6s; --delay: 0.3s; z-index: 3;"></div>
        <div id="paper2" class="paper" style="--top: 4%;   --left: 26%;  --rot: 8deg;   --duration: 8s; --delay: 2.5s; z-index: 1;"></div>
        <div id="paper3" class="paper" style="--top: 10%;  --left: 66%;  --rot: -6deg;  --duration: 7s; --delay: 1.1s; z-index: 5;"></div>
        <div id="paper4" class="paper" style="--top: 80%;  --left: 4%;   --rot: 14deg;  --duration: 5s; --delay: 3.9s; z-index: 2;"></div>
        <div id="paper5" class="paper" style="--top: 65%;  --left: 22%;  --rot: -9deg;  --duration: 9s; --delay: 0.1s; z-index: 7;"></div>
        <div id="paper6" class="paper" style="--top: 80%;  --left: 36%;  --rot: 9deg;   --duration: 6s; --delay: 4.4s; z-index: 4;"></div>
        <div id="paper7" class="paper" style="--top: 76%;  --left: 52%;  --rot: -7deg;  --duration: 8s; --delay: 1.7s; z-index: 6;"></div>
        <div id="paper8" class="paper" style="--top: 8%;  --left: 82%;  --rot: 11deg;  --duration: 7s; --delay: 5.6s; z-index: 9;"></div>
        <div id="paper9" class="paper" style="--top: 32%;  --left: 82%;  --rot: -5deg;  --duration: 5s; --delay: 2.2s; z-index: 8;"></div>
        <div id="paper10" class="paper" style="--top: 78%;  --left: 84%;  --rot: 13deg;  --duration: 9s; --delay: 0.7s; z-index: 10;"></div>



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

          $("#paper" + intMessageCnt).css('background-image', 'url(" ' + strURL +  ' ")');


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
