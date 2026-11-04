<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Deloitte Year End Party 2026: Masterpiece in Living Colour</title>

  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome 6 Free CSS CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #000;
      color: #ffffff;
      height: 100vh;
    }

    .fixedWidth {
      max-width: 1080px;
      margin: auto;
      background-repeat: no-repeat;
      background-position: bottom center; /* Aligns it to the bottom and centers it */
      background-size: 100% auto;; /* Scales the image to fit nicely, or use 'cover' */
    }

    .canvas-container {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
    }
    canvas {
      border: 3px solid #c4d600;
      border-radius: 15px;
      cursor: crosshair;
      box-shadow: 0 8px 30px rgba(0,0,0,0.6);
      max-width: 100%;
      max-height: 65vh;
      height: auto;
      touch-action: none;
      background-color: #000;
    }
    .toolbar-panel {
      box-shadow: 0 -4px 20px rgba(0,0,0,0.4);
    }
    .color-swatch {
      width: 26px;
      height: 26px;
      border-radius: 50%;
      border: 2px solid transparent;
      cursor: pointer;
      transition: transform 0.15s ease, border-color 0.15s ease;
    }
    .color-swatch:hover {
      transform: scale(1.15);
    }
    .color-swatch.selected {
      border-color: #ffffff;
      transform: scale(1.25);
    }
    .vr-divider {
      width: 1px;
      height: 30px;
      background-color: #44444a;
    }

    .toolbarCon {
      padding-top: 20px;
      padding-bottom: 20px;
      background-color: #000;
      border: 3px solid #c4d600;
      border-radius: 15px;
    }

    /* Style for the real-time brush circle badge indicator */
    #sizeIndicatorCircle {
      width: 50px;
      height: 50px;
      border: 1px solid #44444a;
      background-color: #000000;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }
    #sizeIndicatorPreview {
      background-color: #ffffff;
      border-radius: 50%;
      transition: background-color 0.1s ease;
    }

    .form-range::-webkit-slider-thumb {
      background-color: #c4d600;
    }
    .form-range::-moz-range-thumb {
      background-color: #c4d600;
    }
    .form-range::-ms-thumb {
      background-color: #c4d600;
    }

    .btn-active{
      background-color: #3f9920;
      border: 2px solid #c4d600;
      border-radius: 5px;
      color: #fff;
    }

    .btn-notactive{
      background-color: #000;
      border: 2px solid #c4d600;
      border-radius: 5px;
      color: #fff;
    }

    a {
      color: #c4d600;
    }



  </style>
</head>
<body class="">
  <div class="fixedWidth d-flex flex-column justify-content-between">

    <div class="canvas-container">
      <img src="<?=base_url('assets/images/header.png')?>" class="img-fluid">
    </div>

    <!-- Drawing Board Workspace Wrapper -->
    <div class=" mt-2 pt-3 px-4 text-center" style="font-size: 32px;">
      <div>Thank you for your submission.</div>
      <div class="py-3">Click <a class="text-decoration-none" href="<?=base_url('/')?>">here</a> if you wish to submit another drawing</div>
    </div>


  </div>

  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- Bootstrap 5 JavaScript Bundle Bundle with Popper CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    $(document).ready(function() {
      const $canvas = $('#paintCanvas');
      const canvasDOM = $canvas[0];
      const ctx = canvasDOM.getContext('2d');

      const $brushSize = $('#brushSize');
      const $sizeTextVal = $('#sizeTextVal');
      const $sizeIndicatorPreview = $('#sizeIndicatorPreview');

      const $drawBtn = $('#drawBtn');
      const $eraseBtn = $('#eraseBtn');
      const $undoBtn = $('#undoBtn');
      const $redoBtn = $('#redoBtn');
      const $clearBtn = $('#clearBtn');
      const $downloadBtn = $('#downloadBtn');

      let isDrawing = false;
      let currentTool = 'brush';
      let selectedColor = '#ffffff';

      let historyStack = [];
      let redoStack = [];
      const MAX_HISTORY = 20;
      let isSampleActive = true;

      const SAMPLE_IMAGE_URL = '<?=base_url('assets/images/sample.png')?>';

      function loadSampleImage() {
        ctx.clearRect(0, 0, canvasDOM.width, canvasDOM.height);

        ctx.fillStyle = '#8e8e93';
        ctx.font = '18px -apple-system, sans-serif';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText('⏳ Loading folder canvas template...', canvasDOM.width / 2, canvasDOM.height / 2);

        const img = new Image();
        img.src = SAMPLE_IMAGE_URL;

        img.onload = function() {
          if (!isSampleActive) return;
          ctx.clearRect(0, 0, canvasDOM.width, canvasDOM.height);

          const hRatio = canvasDOM.width / img.width;
          const vRatio = canvasDOM.height / img.height;
          const ratio  = Math.min(hRatio, vRatio);

          const centerShiftX = (canvasDOM.width - img.width * ratio) / 2;
          const centerShiftY = (canvasDOM.height - img.height * ratio) / 2;

          ctx.drawImage(img, 0, 0, img.width, img.height,
                             centerShiftX, centerShiftY, img.width * ratio, img.height * ratio);
        };

        img.onerror = function() {
          if (!isSampleActive) return;
          ctx.clearRect(0, 0, canvasDOM.width, canvasDOM.height);
          ctx.fillStyle = '#ff453a';
          ctx.fillText(`⚠️ Click here to paint! (Optional folder asset '${SAMPLE_IMAGE_URL}' not found)`, canvasDOM.width / 2, canvasDOM.height / 2);
        };

        isSampleActive = true;
      }

      loadSampleImage();

      function updateVisualSizeIndicator() {
        const currentSize = parseInt($brushSize.val());

        $sizeTextVal.text(currentSize + 'px');

        $sizeIndicatorPreview.css({
          'width': currentSize + 'px',
          'height': currentSize + 'px'
        });

        if (currentTool === 'eraser') {
          $sizeIndicatorPreview.css('background-color', 'rgba(142, 142, 147, 0.5)');
        } else {
          $sizeIndicatorPreview.css('background-color', selectedColor);
        }
      }

      updateVisualSizeIndicator();
      $brushSize.on('input change', updateVisualSizeIndicator);

      function saveState() {
        if (historyStack.length >= MAX_HISTORY) historyStack.shift();
        historyStack.push(ctx.getImageData(0, 0, canvasDOM.width, canvasDOM.height));
        updateNavigationControls();
      }

      function undo() {
        if (historyStack.length > 1) {
          redoStack.push(historyStack.pop());
          ctx.putImageData(historyStack[historyStack.length - 1], 0, 0);
          updateNavigationControls();
        } else if (historyStack.length === 1) {
          historyStack.pop();
          loadSampleImage();
          updateNavigationControls();
        }
      }

      function redo() {
        if (isSampleActive && redoStack.length > 0) isSampleActive = false;
        if (redoStack.length > 0) {
          const nextState = redoStack.pop();
          historyStack.push(nextState);
          ctx.putImageData(nextState, 0, 0);
          updateNavigationControls();
        }
      }

      function updateNavigationControls() {
        $undoBtn.prop('disabled', historyStack.length === 0);
        $redoBtn.prop('disabled', redoStack.length === 0);
      }

      ctx.lineCap = 'round';
      ctx.lineJoin = 'round';

      function updateBrushSettings() {
        ctx.lineWidth = $brushSize.val();
        if (currentTool === 'eraser') {
          ctx.globalCompositeOperation = 'destination-out';
        } else {
          ctx.globalCompositeOperation = 'source-over';
          ctx.strokeStyle = selectedColor;
        }
      }

      function getCanvasCoordinates(e) {
        const rect = canvasDOM.getBoundingClientRect();
        const origEvent = e.originalEvent || e;
        const clientX = origEvent.touches ? origEvent.touches[0].clientX : e.clientX;
        const clientY = origEvent.touches ? origEvent.touches[0].clientY : e.clientY;

        const displayX = clientX - rect.left;
        const displayY = clientY - rect.top;

        return {
          x: displayX * (canvasDOM.width / rect.width),
          y: displayY * (canvasDOM.height / rect.height)
        };
      }

      function startAction(e) {
        const origEvent = e.originalEvent || e;
        if (origEvent.touches && origEvent.touches.length > 1) return;

        if (isSampleActive) {
          ctx.clearRect(0, 0, canvasDOM.width, canvasDOM.height);
          isSampleActive = false;
        }

        isDrawing = true;
        updateBrushSettings();
        ctx.beginPath();

        const coords = getCanvasCoordinates(e);
        ctx.moveTo(coords.x, coords.y);
      }

      function moveAction(e) {
        if (!isDrawing) return;
        if (e.cancelable) e.preventDefault();

        const coords = getCanvasCoordinates(e);
        ctx.lineTo(coords.x, coords.y);
        ctx.stroke();
      }

      function stopAction() {
        if (isDrawing) {
          isDrawing = false;
          ctx.closePath();
          redoStack = [];
          saveState();
        }
      }

      $canvas.on('mousedown touchstart', startAction);
      $canvas.on('mousemove touchmove', moveAction);
      $canvas.on('mouseup mouseleave touchend touchcancel', stopAction);

      function setToolMode(tool) {
        currentTool = tool;
        if (tool === 'brush') {
          $drawBtn.removeClass('btn-notactive').addClass('btn-active');
          $eraseBtn.removeClass('btn-active').addClass('btn-notactive');
        } else {
          $eraseBtn.removeClass('btn-notactive').addClass('btn-active');
          $drawBtn.removeClass('btn-active').addClass('btn-notactive');
        }
        updateVisualSizeIndicator();
      }

      $drawBtn.on('click', () => setToolMode('brush'));
      $eraseBtn.on('click', () => setToolMode('eraser'));

      $('#colorPalette').on('click', '.color-swatch', function() {
        $('.color-swatch.selected').removeClass('selected');
        $(this).addClass('selected');
        selectedColor = $(this).attr('data-color');
        setToolMode('brush');
      });

      $undoBtn.on('click', undo);
      $redoBtn.on('click', redo);

      $(window).on('keydown', function(e) {
        if (e.ctrlKey || e.metaKey) {
          if (e.key.toLowerCase() === 'z') {
            e.preventDefault();
            undo();
          } else if (e.key.toLowerCase() === 'y') {
            e.preventDefault();
            redo();
          }
        }
      });

      $clearBtn.on('click', function() {


        const userConfirmed = confirm("Are you sure you want to delete your artwork?");

        // Evaluate the boolean response
        if (userConfirmed) {

          redoStack = [];
          historyStack = [];
          loadSampleImage();
          updateNavigationControls();

        }

      });

      $downloadBtn.on('click', function() {
        const exportCanvas = document.createElement('canvas');
        exportCanvas.width = canvasDOM.width;
        exportCanvas.height = canvasDOM.height;
        const exportCtx = exportCanvas.getContext('2d');

        exportCtx.fillStyle = '#000000';
        exportCtx.fillRect(0, 0, exportCanvas.width, exportCanvas.height);
        exportCtx.drawImage(canvasDOM, 0, 0);

        const downloadLink = document.createElement('a');
        downloadLink.href = exportCanvas.toDataURL('image/png');
        downloadLink.download = `canvas-drawing-${Date.now()}.png`;
        downloadLink.click();
      });
    });
  </script>
</body>
</html>
