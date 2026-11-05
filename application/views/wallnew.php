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
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        z-index: 1;
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
        pointer-events: none;
      }

      .fixed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 95;
        pointer-events: none;
      }

    /* Outer Wrapper: 60% size (90px x 90px) with hardware-accelerated floating motion */
    .paper-box {
      position: absolute;
      width: 90px;
      height: 90px;
      top: var(--top);
      left: var(--left);
      filter: drop-shadow(0px 6px 14px rgba(212,226,31, 0.35));
      will-change: transform;
      animation: randomFloat 18s infinite ease-in-out alternate;
      animation-delay: var(--delay);
    }

    /* Different float durations per variant for natural variety */
    .paper-box:nth-child(3n+1) { animation-duration: 20s; }
    .paper-box:nth-child(3n+2) { animation-duration: 16s; }
    .paper-box:nth-child(3n+3) { animation-duration: 22s; }

    /* Inner Sheet: Hardware-accelerated rotation, scaling, and straightening to 0deg at 50% */
    .sheet {
      width: 100%;
      height: 100%;
      background: #000000;
      transform-origin: center;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      border-radius: 6px;
      backface-visibility: hidden;
      -webkit-font-smoothing: antialiased;
      will-change: transform;
      transform: translateZ(0);
      animation: scaleAndRotate 7s infinite ease-in-out alternate;
    }

    /* Staggered internal animation speeds */
    .paper-box:nth-child(3n+1) .sheet { animation-duration: 6.5s; }
    .paper-box:nth-child(3n+2) .sheet { animation-duration: 5.5s; animation-delay: -1.5s; }
    .paper-box:nth-child(3n+3) .sheet { animation-duration: 7.5s; animation-delay: -3s; }

    /* Image Object */
    .paper-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      pointer-events: none;
      user-select: none;
    }

    /* 1. Organic Random Multi-Directional Float */
    @keyframes randomFloat {
      0% {
        transform: translate3d(0, 0, 0);
      }
      25% {
        transform: translate3d(25px, -15px, 0);
      }
      50% {
        transform: translate3d(-25px, 25px, 0);
      }
      75% {
        transform: translate3d(20px, 15px, 0);
      }
      100% {
        transform: translate3d(-20px, -20px, 0);
      }
    }

    /* 2. Rotation & Scaling: Starts at var(--rot), hits 0deg at 50%, restores back */
    @keyframes scaleAndRotate {
      0% {
        transform: rotate(var(--rot)) scale(1) translateZ(0);
      }
      50% {
        transform: rotate(0deg) scale(1.2) translateZ(0);
      }
      100% {
        transform: rotate(var(--rot)) scale(0.85) translateZ(0);
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

    <div class="overlay">
      <img src="<?php echo base_url("assets/images/overlay.png"); ?>" style="width:100%; height: 100%;">
    </div>

    <div class="fixed">
        <!-- 20 Papers positioned in a balanced middle-outer ring (shifted outward, top-left clear) -->

        <!-- Top Area -->
        <div class="paper-box" style="--top: 18%; --left: 35%; --rot: 14deg; --delay: 0s;">
          <div class="sheet"><img class="paper-image" src="" id="paper1"></div>
        </div>
        <div class="paper-box" style="--top: 15%; --left: 50%; --rot: -8deg; --delay: -1s;">
          <div class="sheet"><img class="paper-image" src="" id="paper2"></div>
        </div>
        <div class="paper-box" style="--top: 18%; --left: 65%; --rot: 22deg; --delay: -2s;">
          <div class="sheet"><img class="paper-image" src="" id="paper3"></div>
        </div>
        <div class="paper-box" style="--top: 20%; --left: 78%; --rot: -15deg; --delay: -3s;">
          <div class="sheet"><img class="paper-image" src="" id="paper4"></div>
        </div>

        <!-- Right Side -->
        <div class="paper-box" style="--top: 35%; --left: 84%; --rot: 8deg; --delay: -4s;">
          <div class="sheet"><img class="paper-image" src="" id="paper5"></div>
        </div>
        <div class="paper-box" style="--top: 52%; --left: 86%; --rot: 35deg; --delay: -5s;">
          <div class="sheet"><img class="paper-image" src="" id="paper6"></div>
        </div>
        <div class="paper-box" style="--top: 70%; --left: 82%; --rot: -11deg; --delay: -6s;">
          <div class="sheet"><img class="paper-image" src="" id="paper7"></div>
        </div>

        <!-- Bottom Area -->
        <div class="paper-box" style="--top: 80%; --left: 72%; --rot: 19deg; --delay: -7s;">
          <div class="sheet"><img class="paper-image" src="" id="paper8"></div>
        </div>
        <div class="paper-box" style="--top: 82%; --left: 56%; --rot: -5deg; --delay: -8s;">
          <div class="sheet"><img class="paper-image" src="" id="paper9"></div>
        </div>
        <div class="paper-box" style="--top: 80%; --left: 40%; --rot: 27deg; --delay: -9s;">
          <div class="sheet"><img class="paper-image" src="" id="paper10"></div>
        </div>
        <div class="paper-box" style="--top: 82%; --left: 26%; --rot: -18deg; --delay: -10s;">
          <div class="sheet"><img class="paper-image" src="" id="paper11"></div>
        </div>
        <div class="paper-box" style="--top: 78%; --left: 15%; --rot: 12deg; --delay: -11s;">
          <div class="sheet"><img class="paper-image" src="" id="paper12"></div>
        </div>

        <!-- Left Side (Lower down, keeping top-left clear) -->
        <div class="paper-box" style="--top: 65%; --left: 12%; --rot: -31deg; --delay: -12s;">
          <div class="sheet"><img class="paper-image" src="" id="paper13"></div>
        </div>
        <div class="paper-box" style="--top: 48%; --left: 12%; --rot: 42deg; --delay: -13s;">
          <div class="sheet"><img class="paper-image" src="" id="paper14"></div>
        </div>
        <div class="paper-box" style="--top: 30%; --left: 15%; --rot: -9deg; --delay: -14s;">
          <div class="sheet"><img class="paper-image" src="" id="paper15"></div>
        </div>

        <!-- Mid-Outer Ring Fillers -->
        <div class="paper-box" style="--top: 26%; --left: 26%; --rot: 16deg; --delay: -15s;">
          <div class="sheet"><img class="paper-image" src="" id="paper16"></div>
        </div>
        <div class="paper-box" style="--top: 26%; --left: 74%; --rot: -24deg; --delay: -16s;">
          <div class="sheet"><img class="paper-image" src="" id="paper17"></div>
        </div>
        <div class="paper-box" style="--top: 72%; --left: 76%; --rot: 5deg; --delay: -17s;">
          <div class="sheet"><img class="paper-image" src="" id="paper18"></div>
        </div>
        <div class="paper-box" style="--top: 72%; --left: 22%; --rot: -14deg; --delay: -18s;">
          <div class="sheet"><img class="paper-image" src="" id="paper19"></div>
        </div>
        <div class="paper-box" style="--top: 45%; --left: 80%; --rot: 30deg; --delay: -19s;">
          <div class="sheet"><img class="paper-image" src="" id="paper20"></div>
        </div>
    </div>
  </div>

  <script type="text/javascript">
    function checkStatus() {
      $.getJSON("<?php echo(base_url("ajax/getAllTiles")); ?>", function (data) {
        if(data){
          let intMessageCnt = 1;
          data.forEach(function(objItem){
            if(intMessageCnt <= 20) {
              let strURL = '<?php echo base_url("assets/images/uploads/"); ?>' + objItem.AtImage;
              $("#paper" + intMessageCnt).attr("src", strURL);
              intMessageCnt++;
            }
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