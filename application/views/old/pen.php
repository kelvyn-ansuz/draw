<html dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# " class=" js" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="SMU Theme">
    <meta charset="utf-8">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <title>Deloitte Year End Party 2026</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/all.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-colorpicker.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-formhelpers.min.css"); ?>">
    <link rel="stylesheet" media="all" href="<?=base_url('assets/css/style.css')?>">
    <link rel="stylesheet" media="all" href="<?=base_url('assets/css/all.min.css')?>">
    <script src="<?php echo base_url("assets/js/jquery-3.4.1.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/popper.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/fabric.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-colorpicker.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-formhelpers.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap-maxlength.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery-ui.js"); ?>"></script>
    <style>

        @font-face {
          font-family: Mont;
          src: url('./assets/fonts/Gluten.ttf')  format('opentype');
        }

        .oswald{
          font-family: Mont;
        }



    </style>
</head>
<body>

<div style="width:100%">
  <img src="<?php echo base_url("assets/images/top.png"); ?>" style="width:100%;">
</div>

<div class="main-container middle" style="padding-left:30px; padding-right:30px; ">
    <div class="stageOnline" id="stage1">
        <form class="container-fluid" novalidate="" method="POST" id="submitTag" style="margin-bottom: 0px; padding-bottom: 20px;">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 pr-md-5 pt-lg-5 pt-sm-2 pt-2">
                    <div class="d-none d-lg-block mb-lg-3" style="font-size: 28px; text-align: center;">Share Your Thoughts for Singapore!</div>
                    <div class="d-lg-none my-3 mb-2 px-3" style="font-size: 24px; text-align: center;">Share Your Thoughts for Singapore!</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10" style="padding-top:8px">
                    Pick a question below and share your thoughts with us!
                    <ol >
                        <li style="font-family: Mont">Stories are often passed down through generations — what is one story you hope the next generation will never forget and why?</li>
                        <li style="font-family: Mont">Which character from a local myth or legend do you feel best represents the Singaporean spirit, and why?</li>
                        <li style="font-family: Mont">If you were to write a new Singaporean legend set in today's world, what would it be about?</li>
                    </ol>
                </div>
                <div class="col-md-1"></div>
            </div>




            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10" style="padding-top:20px">

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="firstName" class="col-form-label" style="padding-left: 15px; padding-right: 15px; font-size: 20px; font-weight: 600;">Name*</label>
                        </div>
                        <div class="col" style="padding-top: 2px;">
                            <input style="font-size: 14px;" type="text" class="form-control" name="firstName" id="firstName" maxlength="30" required>
                            <div class="invalid-feedback">This field is required.</div>
                        </div>
                    </div>


                </div>


            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10" style="padding-top:8px">

                    <div class="form-group row">
                        <div class="col-12">
                            <label for="firstName" class="col-form-label" style="padding-left: 15px; padding-right: 15px; font-size: 20px; font-weight: 600;">Your Thoughts*</label>
                        </div>
                        <div class="col"  class="form-group" id="divMessage">
                            <textarea class="form-control" name="inputMessage" required id="inputMessage" maxlength="100"></textarea>
                            <div class="invalid-feedback">This field is required.</div>
                        </div>
                    </div>


                </div>
            </div>


            <div class="row">
                <div id="step1" class="col-md-12 text-center mb-5">

                    <div class="text-center mt-2 mb-2">
                     <label for="firstName" class="col-form-label" style="font-size: 20px; font-weight: 600;">Upload a Photo</label>
                    </div>

                    <input type="file" accept="image/*" class="form-control image-upload" id="imageFile" style="display:none;">
                    <button href="#" id="btnImage" class="image-upload-trigger btn btn-primary"><i class="fas fa-camera" style="font-size:140px;padding:30px;"></i></button>

                    <div class="imageWarning pt-2" style="display:none;">
                    <div class='text-danger upload-receipt-warning'>Please upload a valid image file (.jpg/.png)</div>
                    </div>

                </div>


                <div id="step2" class="col-md-12 text-center mb-5" style="display:none">

                    <div class="container">
                    <div style="padding: 20px 20px 10px 20px;">
                        <canvas id="snap" style="width:100%"></canvas>
                    </div>

                    <div class="row pt-4 pb-4">
                        <div class="col"><button href="#" id="rotateRight" class="btn-block btn-fa btn btn-primary"><i class="fas fa-redo"></i></button></div>
                        <div class="col"><button href="#" id="rotateLeft" class="btn-block image-capture-rotate btn-fa btn btn-primary"><i class="fas fa-undo"></i></button></div>
                    </div>

                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="feedbackBox d-none d-lg-block col-md-10 mb-3 mb-lg-1 text-center" style="font-size:14px;">
                </div>

                <div class="feedbackBox d-lg-none col-md-10 mb-3 mb-lg-1 text-center" style="font-size:14px;">
                </div>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 mb-2 alignPen">
                    <a href="<?=base_url("pen")?>" class="penButton" style="margin-right: 20px;">Reset</a>
                    <a href="#" id="btn-submit" class="penButton">Submit</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 m-2 alignPen">
                    <a href="<?=base_url()?>" class="penButton" style="width: 230px;">Back to Main</a>
                </div>
            </div>

        </form>
    </div>

    <div class="stageOnline" id="stage2" style="display:none;">
        <div class="row">
            <div class="confirmBox" style="">
                <div class="col-sm-12 my-auto" style="text-align: left;">
                    Thank you for your message, you will not be able to edit your message after clicking 'Submit'. If you want to make further edits to your message, select 'CANCEL' to return to editing your message. Otherwise, click 'Submit' to continue.
                    <br><br>
                    <span class="tag-text"></span>
                    <br>
                    <br><span class="tag-author"></span>
                    <!--
                    <br>
                    <br>Confirm submission of your message?
                    -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10 mb-2 ">
                <div class="buttonDiv d-flex justify-content-center">
                    <a href="javascript:;" id="btn-back" class="penButtonReverse maRight" >Cancel</a>
                    <a href="javascript:;" id="btn-confirm-submit" class="penButton">Submit</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 m-2 alignPen">
                <a href="<?=base_url()?>" class="penButton" style="width: 230px;">Back to Main</a>
            </div>
        </div>

    </div>

    <div class="stageOnline" id="stage3" style="display:none;">
        <div class="row">
            <div class="confirmBox" style="">
                <div class="col-sm-12 my-auto" style="text-align: center;">
                    Thank you, we have received your message. It will appear on the wall soon.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 m-2 alignPen">
                <a href="<?=base_url()?>" class="penButton" style="width: 230px;">Back to Main</a>
            </div>
        </div>

    </div>



</div>


<div style="width:100%">
  <img src="<?php echo base_url("assets/images/bottom.png"); ?>" style="width:100%;">
</div>


<script type='text/javascript'>
    var stage1 = $('#stage1');
    var stage2 = $('#stage2');
    var stage3 = $('#stage3');
    var uploadButton = $('.image-upload-trigger');
    var canvas = document.getElementById("snap");
    var context = canvas.getContext("2d");

    var form = $('#submitTag');

    $('#inputMessage').maxlength({
        threshold: 0
    });

    $('#firstName').maxlength({
        threshold: 0
    });

    $(document).ready(function() {
    });

    $(document).on('click', '#btnImage', function(e) {
      e.preventDefault();
      $(".imageWarning").fadeOut(500);
      $('.image-upload').click();
    });


    $(document).on('change', '#imageFile', function() {
        uploadButton.attr('disabled', true);
        uploadButton.find('i').removeClass('fa-camera').addClass('fa-spinner fa-spin');

        if(!validateFileType()) {
            uploadButton.attr('disabled', false);
            uploadButton.find('i').removeClass('fa-spinner fa-spin').addClass('fa-camera');
        } else {

            var imgFile = $("#imageFile")[0].files[0];
            if(imgFile.type.match(/image.*/)) {
            console.log('An image has been loaded');

            var reader = new FileReader();

            reader.onload = function (readerEvent) {
                var image = new Image();
                image.onerror = function() {
                    alert("Upload Error. Please select a different image.");
                };
                image.onload = function (imageEvent) {
                    if ('naturalHeight' in this) {
                        if (this.naturalHeight + this.naturalWidth === 0) {
                            this.onerror();
                            return;
                        }
                    } else if (this.width + this.height == 0) {
                        this.onerror();
                        return;
                    }

                    canvas = $('#snap')[0];
                    canvas.width = image.width;
                    canvas.height = image.height;

                    var ctx = canvas.getContext("2d");
                    ctx.drawImage(image, 0, 0, canvas.width, canvas.height);

                    $("#step1").hide();
                    $("#step2").show();
                }
                image.src = readerEvent.target.result;
            }



            reader.readAsDataURL(imgFile);

            }

        }

        /*
        var file = this.files[0];
        setTimeout(function() {
            resizeOnCanvas(file, 1280, $('#snap')[0]);
        }, 300);
        */
    });

    $(document).on('click', '#btn-submit', function(e) {
        e.preventDefault();

        strText = $("#inputMessage").val().trim();
        strFirstName = $("#firstName").val().trim();

        if (strText.length > 100 || strFirstName.length > 20){
            $(".feedbackBox").addClass("text-danger");
            $(".feedbackBox").html("Sorry, but certain fields have exceed the word limit");
            $( ".feedbackBox" ).animate({
                backgroundColor: "rgb( 220, 100, 100 )"
            }).animate({
                backgroundColor: "rgba(255, 255, 255, 0)"
            });
        } else if (strText && strFirstName) {

            $.post("ajax/checkText/", { strText: strText, strFirstName: strFirstName} , function(data){
                if (data.status == false) {
                    $(".feedbackBox").addClass("text-danger");
                    $(".feedbackBox").html("It looks like you are unable to submit your message. Please check and remove inappropriate language that may have been accidentally included before submitting your message. Thank you.");

                    $("#divMessage").css("outline", "0px solid #ff0000").animate({
                        'outlineWidth': 'px',
                        'outlineColor': '#ff0000',
                        'outlineOffset': '5'
                    },500);

                    $( ".feedbackBox" ).animate({
                        backgroundColor: "rgb(255, 0, 0)"
                    }).animate({
                        backgroundColor: "rgba(255, 255, 255, 0)"
                    });
                } else {

                console.log("fade out");

                    stage1.fadeOut(500, function() {
                        $('#submitTag').submit();
                        stage3.fadeIn(1000);
                    });
                    /*
                    stage2.find('.tag-text').html(form.find('[name=inputMessage]').val());

                    stage2.find('.tag-author').html(strFirstName);

                    stage1.fadeOut(500, function() {
                        stage2.fadeIn(500);
                    });
                    */
                }
            });

        } else {
            $(".feedbackBox").addClass("text-danger");
            $(".feedbackBox").html("Please fill the required fields before proceeding. Thank you.");
            $( ".feedbackBox" ).animate({
                backgroundColor: "rgb(255, 0, 0)"
            }).animate({
                backgroundColor: "rgba(255, 255, 255, 0)"
                //backgroundColor: "rgba(255, 255, 255, 0)"
            })
        }
    });

    $(document).on('click', '#btn-back', function(e) {
        e.preventDefault();
        stage2.fadeOut(500, function() {
            stage1.fadeIn(500);
        });
    });

    $(document).on('click', '#btn-confirm-submit', function(e) {
        e.preventDefault();

        stage2.fadeOut(500, function() {
            $('#submitTag').submit();
            stage3.fadeIn(1000);
        });
    });

    $(document).on('submit', 'form', function(e) {
        e.preventDefault();
        var form = $("#submitTag");

        if (form[0].checkValidity() === false) {
            e.stopPropagation()
        } else {
            strText = $("#inputMessage").val().trim();
            strFirstName = $("#firstName").val().trim();

            if($("#imageFile").val().length > 0) {
                base64 = canvas.toDataURL('image/jpeg');
            } else {
                base64 = null;
            }

            $.post("ajax/saveText/", {image: base64, strText: strText, strFirstName: strFirstName} , function(data){
                if (data.status == false) {
                    $(".feedbackBox").addClass("text-danger");
                    $(".feedbackBox").html("It looks like you are unable to submit your message. Please check and remove inappropriate language that may have been accidentally included before submitting your message. Thank you.");
                    $( ".feedbackBox" ).animate({
                        backgroundColor: "rgb( 220, 100, 100 )"
                    }).animate({
                        backgroundColor: "rgba(255, 255, 255, 0)"
                    });
                } else {
                    //$('#stage2').fadeOut(500, function() {
                    //});
                    //window.location.href = '<?=base_url("/animatebird/")?>' + data.ID;
                }
            });
        }
        form.addClass('was-validated');
    });

    $('.anniv-cta').click(function () {
      $(this).css('display', 'none');
      $('.anniv-block').css('display', 'block');
      $('.anniv-cta').data("opened", true);
    });

    $('.close-btn').click(function () {
        $('.anniv-block').css('display', 'none');
        $('.anniv-cta').css('display', 'block');
        $('.anniv-cta').data("opened", false);
    });

    $(document).on('click', '.pencontainer', function(e) {
        //e.preventDefault();
        objThis = $(this);

        if(objThis.data('stop')==1) return;
        objThis.data('stop',1);

        setTimeout(function(lclObjThis){
          lclObjThis.data('stop',0);
        },1000, objThis);

        if($('.anniv-cta').data("opened")) {
          $('.anniv-block').css('display', 'none');
          $('.anniv-cta').css('display', 'block');
        }

    });

    function validateFileType() {
        var isValid = true;
        if($("#imageFile").val()=="") {
            $(".imageWarning").fadeIn(500);
            isValid = false;
        } else {
            strFileName = $("#imageFile").val();

            const lastDot = strFileName.lastIndexOf('.');
            const ext = strFileName.substring(lastDot + 1).toLowerCase();

            if(ext=="png" || ext=="jpeg" || ext=="jpg") {
            $(".imageWarning").fadeOut(500);
            } else {
            $(".imageWarning").fadeIn(500);
            isValid = false;
            }
        }

        return isValid;
    }

 $(document).on('click', '#rotateLeft', function(e) {
    e.preventDefault();
    console.log("called");

    var cw = canvas.width;
    var ch = canvas.height;

    myImageData = new Image();
    myImageData.src = canvas.toDataURL();

    myImageData.onload = function () {
      canvas.width = ch;
      canvas.height = cw;
      //context.setTransform(0, 1, -1, 0, canvas.width, 0); // overwrite existing transform

      context.setTransform(0, -1, 1, 0, 0, canvas.height); // overwrite existing transform
      context.drawImage(myImageData, 0, 0);
    }
  });


  $(document).on('click', '#rotateRight', function(e) {
    e.preventDefault();
    console.log("called");

    var cw = canvas.width;
    var ch = canvas.height;

    myImageData = new Image();
    myImageData.src = canvas.toDataURL();

    myImageData.onload = function () {
      canvas.width = ch;
      canvas.height = cw;
      context.setTransform(0, 1, -1, 0, canvas.width, 0); // overwrite existing transform
      context.drawImage(myImageData, 0, 0);
    }

  });


</script>
</body>
</html>
