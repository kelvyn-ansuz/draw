<?php
$animation1Duration = 10;
$animation2Duration = 11.2;
$animation3Duration = 12;
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
        left: 0;
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
        object-fit: fill;
      }

      .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 90;
      }

    .paper-box {
      position: absolute;
      width: 150px;
      height: 150px;
      top: var(--top);
      left: var(--left);
      filter:
        drop-shadow(0px 2px 5px rgba(212,226,31, 0.45))
        drop-shadow(0px 8px 18px rgba(212,226,31, 0.4))
        drop-shadow(0px 16px 32px rgba(212,226,31, 0.2));
    }

    .sheet {
      width: 100%;
      height: 100%;
      background: #000000;
      transform: rotate(var(--rot));
      transform-origin: center;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      border-radius: 8px;
      backface-visibility: hidden;
      -webkit-font-smoothing: antialiased;
    }

    .paper-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      pointer-events: none;
      user-select: none;
    }

    .paper-box:nth-child(3n+1) .sheet {
      animation: morphVariantA 12s infinite ease-in-out alternate;
      animation-delay: var(--delay);
    }

    .paper-box:nth-child(3n+2) .sheet {
      animation: morphVariantB 11.2s infinite ease-in-out alternate;
      animation-delay: var(--delay);
    }

    .paper-box:nth-child(3n+3) .sheet {
      animation: morphVariantC 10.4s infinite ease-in-out alternate;
      animation-delay: var(--delay);
    }

    /* VARIANT A: Scaling reduced by 20% */
    @keyframes morphVariantA {
      0% {
        transform: rotate(var(--rot)) translate(0px, 0px) scale(1);
      }
      30% {
        transform: rotate(calc(var(--rot) + 5deg)) translate(20px, -25px) scale(1.4);
      }
      60% {
        transform: rotate(calc(var(--rot) - 7deg)) translate(-15px, 18px) scale(0.84);
      }
      85%, 100% {
        transform: rotate(0deg) translate(0px, 0px) scale(1);
      }
    }

    /* VARIANT B: Scaling reduced by 20% */
    @keyframes morphVariantB {
      0% {
        transform: rotate(var(--rot)) translate(0px, 0px) scale(1);
      }
      35% {
        transform: rotate(calc(var(--rot) - 6deg)) translate(-25px, -15px) scale(0.80);
      }
      70% {
        transform: rotate(calc(var(--rot) + 8deg)) translate(15px, 25px) scale(1.44);
      }
      85%, 100% {
        transform: rotate(0deg) translate(0px, 0px) scale(1);
      }
    }

    /* VARIANT C: Scaling reduced by 20% */
    @keyframes morphVariantC {
      0% {
        transform: rotate(var(--rot)) translate(0px, 0px) scale(1);
      }
      25% {
        transform: rotate(calc(var(--rot) + 10deg)) translate(18px, 20px) scale(1.36);
      }
      55% {
        transform: rotate(calc(var(--rot) - 5deg)) translate(-20px, -18px) scale(0.84);
      }
      85%, 100% {
        transform: rotate(0deg) translate(0px, 0px) scale(1);
      }
    }
    </style>
</head>
<body>
  <div class="main-container">
    <div class="videoBG">
      <video autoplay muted loop playsinline poster="fallback-image.jpg">
        <source src="<?php echo base_url("assets/images/base.mp4"); ?>" type="video/mp4">
      </video>
    </div>
    <div class="fixed">

        <div class="paper-box" style="--top: 30%; --left: 6%; --rot: 14deg; --delay: -0.4s;">
          <div class="sheet"><img class="paper-image" src="" id="paper1"></div>
        </div>

        <div class="paper-box" style="--top: 51%; --left: 22%; --rot: -8deg; --delay: -3.1s;">
          <div class="sheet"><img class="paper-image" src="" id="paper2"></div>
        </div>

        <div class="paper-box" style="--top: 8%; --left: 28%; --rot: 8deg; --delay: -3.1s;">
          <div class="sheet"><img class="paper-image" src="" id="paper3"></div>
        </div>

        <div class="paper-box" style="--top: 78%; --left: 3%; --rot: 35deg; --delay: -0.9s;">
          <div class="sheet"><img class="paper-image" src="" id="paper4"></div>
        </div>

        <div class="paper-box" style="--top: 8%; --left: 68%; --rot: -11deg; --delay: -2.3s;">
          <div class="sheet"><img class="paper-image" src="" id="paper5"></div>
        </div>

        <div class="paper-box" style="--top: 53%; --left: 72%; --rot: 19deg; --delay: -1.2s;">
          <div class="sheet"><img class="paper-image" src="" id="paper6"></div>
        </div>

        <div class="paper-box" style="--top: 76%; --left: 55%; --rot: -5deg; --delay: -4.5s;">
          <div class="sheet"><img class="paper-image" src="" id="paper7"></div>
        </div>

        <div class="paper-box" style="--top: 73%; --left: 32%; --rot: 27deg; --delay: -2.7s;">
          <div class="sheet"><img class="paper-image" src="" id="paper8"></div>
        </div>

        <div class="paper-box" style="--top: 79%; --left: 82%; --rot: -31deg; --delay: -0.2s;">
          <div class="sheet"><img class="paper-image" src="" id="paper9"></div>
        </div>

        <div class="paper-box" style="--top: 12%; --left: 88%; --rot: 42deg; --delay: -3.8s;">
          <div class="sheet"><img class="paper-image" src="" id="paper10"></div>
        </div>

    </div>
    <div class="overlay">
      <img src="<?php echo base_url("assets/images/overlay.png"); ?>" style="width:100%; height: 100%;">
    </div>
  </div>

  <script type="text/javascript">



    for(i=1;i>=1-;i++) {

          strURL = '<?php echo base_url("assets/images/sample.png"); ?>';

        $("#paper" + i).css('background-image', 'url(" ' + strURL +  ' ")');


    }

    function checkStatus() {
      $.getJSON("<?php echo(base_url("ajax/getAllTiles")); ?>", function (data) {
        if(data){
          let intMessageCnt = 1;
          data.forEach(function(objItem){
            let strURL = '<?php echo base_url("assets/images/uploads/"); ?>' + objItem.AtImage;
            $("#paper" + intMessageCnt).attr("src", strURL);
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
    });
  </script>
</body>
</html>