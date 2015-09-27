<!DOCTYPE html>
<html lang="en">
  <head>
    <!--php includes-->
  <?php include 'spotname.php';?>
  
  <!-- php vars -->
  <?php $Record = $_GET["page"]; //$answer = getname($Record, "Right"); ?>

  <style type="text/css">
    .large_main {
  width: 175px; height: 175px;
  position: absolute;
  border-radius: 100%;
  
  /*Multiple box shadows to achieve the glass effect*/
  box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
  0 0 7px 7px rgba(0, 0, 0, 0.25), 
  inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
  
  /*Lets load up the large image first*/
  background: url('<?php getname($Record, "C_FileName"); ?>.jpg') no-repeat;
  
  /*hide the glass by default*/
  display: none;
}

    .large_ref1 {
  width: 50px; height: 50px;
  position: absolute;
  border-radius: 100%;
  
  /*Multiple box shadows to achieve the glass effect*/
  box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
  0 0 7px 7px rgba(0, 0, 0, 0.25), 
  inset 0 0 10px 2px rgba(0, 0, 0, 0.25);
  
  /*Lets load up the large image first*/
  background: url('<?php getname($Record, "R1_FileName"); ?>.jpg') no-repeat;
  
  /*hide the glass by default*/
  display: none;
}

    .large_ref2 {
  width: 50px; height: 50px;
  position: absolute;
  border-radius: 100%;
  
  /*Multiple box shadows to achieve the glass effect*/
  box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
  0 0 7px 7px rgba(0, 0, 0, 0.25), 
  inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
  
  /*Lets load up the large image first*/
  background: url('<?php getname($Record, "R2_FileName"); ?>.jpg') no-repeat;
  
  /*hide the glass by default*/
  display: none;
}

/*To solve overlap bug at the edges during magnification*/
.small { display: block; }
    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>eMammal Spot or Not</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script src="http:////cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script>

    <!--Custom styles -->
	<!--<link href="css/style.css" rel="stylesheet">-->
  <link rel="stylesheet" href="css/flipclock.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/reset.css" type="text/css" />
  <link rel="stylesheet" href="css/styles.css" type="text/css" />
  <link href='https://fonts.googleapis.com/css?family=Chivo:400,400italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div id="container">
        <header class="clearfix">
          <div class="game-logo">
            <a href="index.html"><img src="images/spotornot.png" alt="spotornot logo" height="120px" width="160px"></a>
          </div>


          <div id="timer">
            <div class='countdown'></div>
          </div>

        </header>

      <div id='photos' class='row'>
          <div class='col-md-1'></div>

          <div id='mainPhoto' class='col-md-6 magnify_main'>
            <div class="large_main"></div>
          <div class="container_main">
            <img src='<?php getname($Record, "C_FileName"); ?>.jpg' class="img-responsive small">
            <button id="popover" type="button" class="btn btn-primary info" data-toggle="popover" data-placement="top" title="About" data-content="<?php getname($Record, "C_Info"); ?>" ><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>

          </div>
          </div>

          <div id='choices' class='col-md-4'>
            <div id='refA' class='row'>
              <div id='refAImage' class='col-md-10 magnify_ref1'>
                <div class="large_ref1"></div>
                <div class="container">
                <img src='<?php getname($Record, "R1_FileName"); ?>.jpg' class="img-responsive small">
                <button id="popover" type="button" class="btn btn-primary info" data-toggle="popover" data-placement="top" title="About this animal ... " data-content="<?php getname($Record, "R1_Info"); ?>" ><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>
              </div>
              </div>


<form action="game.php" method="post">
              <div id='refAButton' class='col-md-2 btn-group-vertical' role='group' aria-label='refAButtons'>
                <div class="button-decoration">
                <button type="submit" name='choice' value=1 formmethod="post" formaction="game.php" class="btn btn-default">$100</button>
                </div>
                <div class="button-decoration">
                <button type="submit" name='choice' value=2 formmethod="post" formaction="game.php" class="btn btn-default">$50</button>
                </div>
                <div class="button-decoration">
                <button type="submit" name='choice' value=3 formmethod="post" formaction="game.php" class="btn btn-default">$10</button>
              </div>
<!-- =======


              <div id='refAButton' class='col-md-2'>
                <div class='btn-group-vertical' role='group' aria-label='refAButtons'>
                  <div class="button-decoration">
                    <button type="button" class="btn btn-bets" onClick="calcScore(100, 'A', time, '<?php echo $answer?>', <?php echo $user?>)">$100</button>
                  </div>
                  <div class="button-decoration">
                    <button type="button" class="btn btn-bets" onClick="calcScore(80, 'A', time, '<?php echo $answer?>')">$80</button>
                  </div>
                  <div class="button-decoration">
                    <button type="button" class="btn btn-bets" onClick="calcScore(60, 'A', time, '<?php echo $answer?>')">$60</button>
                  </div>
                  <div class="button-decoration">
                    <button type="button" class="btn btn-bets" onClick="calcScore(40, 'A', time, '<?php echo $answer?>')">$40</button>
                  </div>
                  <div class="button-decoration">
                    <button type="button" class="btn btn-bets" onClick="calcScore(20, 'A', time, '<?php echo $answer?>')">$20</button>
                  </div>
              </div>
>>>>>>> 2f8443fd92df3295237c4d7be3140a8c652fb820 -->
              </div>

</form>
            </div>

            <div id='pass' class='row'>
              <form action="game.php" method="post">
              <div class='col-md-10'></div>
              <div id='passButton' class='col-md-2 btn-group-vertical' role='group' aria-label='passButtons'>
                <div class="button-decoration">
                <button type="submit" name='choice' value=4 formmethod="post" formaction="game.php" class="btn btn-default">PASS</button>
              </div>
<!-- =======
              <div id='passButton' class='col-md-2'>
              <div class='btn-group-vertical' role='group' aria-label='passButtons'>
                <div class="button-decoration">
                  <button type="button" class="btn btn-pass" onClick="calcScore(0, 'Pass', time, '<?php echo $answer?>')">Pass</button>
                </div>
              </div>
>>>>>>> 2f8443fd92df3295237c4d7be3140a8c652fb820 -->
              </div>
            </form>
            </div>

            <div id='refB' class='row'>
              <div id='refBImage' class='col-md-10 magnify_ref2'>
                <div class="large_ref2"></div>
                <div class="container">
                <img src='<?php getname($Record, "R2_FileName"); ?>.jpg' class="img-responsive small">
                <button id="popover" type="button" class="btn btn-primary info" data-toggle="popover" data-placement="top" title="About this animal ... " data-content="<?php getname($Record, "R2_Info"); ?>" ><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></button>
              </div>
<!-- =======
              <div id='refBImage' class='col-md-10'>
                <div class="container">
                  <img src='<?php getname($Record, "R2_FileName"); ?>.jpg' class="img-responsive">
                </div>
>>>>>>> 2f8443fd92df3295237c4d7be3140a8c652fb820 -->
              </div>
    <form action="game.php" method="post">
              <div id='refBButton' class='col-md-2'>
                <div class='btn-group-vertical' role='group' aria-label='refBButtons'>
                  <div class="button-decoration">
                  <button type="submit" name='choice' value=5 formmethod="post" formaction="game.php" class="btn btn-default">$10</button>
                  </div>
                  <div class="button-decoration">
                  <button type="submit" name='choice' value=6 formmethod="post" formaction="game.php" class="btn btn-default">$50</button>
                  </div>
                  <div class="button-decoration">
                  <button type="submit" name='choice' value=7 formmethod="post" formaction="game.php" class="btn btn-default">$100</button>
                </div>
<!-- =======
                  <div class="button-decoration">
                    <button type="button" class="btn btn-bets" onClick="calcScore(100, 'B', time, '<?php echo $answer?>')">$100</button>
                  </div>
                  <div class="button-decoration">
                    <button type="button" class="btn btn-bets" onClick="calcScore(80, 'B', time, '<?php echo $answer?>')">$80</button>
                  </div>
                  <div class="button-decoration">
                    <button type="button" class="btn btn-bets" onClick="calcScore(60, 'B', time, '<?php echo $answer?>')">$60</button>
                  </div>
                  <div class="button-decoration">
                    <button type="button" class="btn btn-bets" onClick="calcScore(40, 'B', time, '<?php echo $answer?>')">$40</button>
                  </div>
                  <div class="button-decoration">
                    <button type="button" class="btn btn-bets" onClick="calcScore(20, 'B', time,'<?php echo $answer?>')">$20</button>
                  </div>
>>>>>>> 2f8443fd92df3295237c4d7be3140a8c652fb820 -->
                </div>
              </div>
    </form>
            </div>
          </div>
<!-- <<<<<<< HEAD
=======

          <div class='col-md-1'></div>
      </div>

>>>>>>> 2f8443fd92df3295237c4d7be3140a8c652fb820 -->

      <div id='avatar' class='row'>
        <div class="col-md-2"></div>
        <div class='panel panel-default col-md-8'>
          <div class="panel-body">
            <h3>Randi</h3>
            <img class="game-avatar" src="images/avatar/avatar-girl-2.png">
            <div class="row">
                <div class="col-xs-4"><h4>Score:</h4><br><h3>$50</h3></div>
                <div class="col-xs-4"><h4>Items:</h4><br><h3>1 free pass</h3></div>
                <div class="col-xs-4"><h4>Level:</h4><br><h3>Level 3</h3></div>
            </div>
          </div>
        </div>
        <div class='col-md-2'></div>
      </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/flipclock.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#popover').popover();   
});

    var clock = $('.countdown').FlipClock(20,{
      clockFace: 'Counter'
});
    clock.setCountdown(true);
    setTimeout(function() {
    setInterval(function() {
      clock.decrement();
    }, 1000);
  });
    var time  = clock.getTime();

  function calcScore(points, response, time, answer, user) {
    if (response == answer) {
    var score = 1*points*time;
  } else if (response != answer) {
    var score = -1*points*time;
  } else if (response == 'Pass') {
    var score = 0;
  }
}

  $(document).ready(function(){

  var native_width = 0;
  var native_height = 0;

  //Now the mousemove function
  $(".magnify_main").mousemove(function(e){
    //When the user hovers on the image, the script will first calculate
    //the native dimensions if they don't exist. Only after the native dimensions
    //are available, the script will show the zoomed version.
    if(!native_width && !native_height)
    {
      //This will create a new image object with the same image as that in .small
      //We cannot directly get the dimensions from .small because of the 
      //width specified to 200px in the html. To get the actual dimensions we have
      //created this image object.
      var image_object = new Image();
      image_object.src = $(".small").attr("src");
      
      //This code is wrapped in the .load function which is important.
      //width and height of the object would return 0 if accessed before 
      //the image gets loaded.
      native_width = image_object.width;
      native_height = image_object.height;
    }
    else
    {
      //x/y coordinates of the mouse
      //This is the position of .magnify with respect to the document.
      var magnify_offset = $(this).offset();
      //We will deduct the positions of .magnify from the mouse positions with
      //respect to the document to get the mouse positions with respect to the 
      //container(.magnify)
      var mx = e.pageX - magnify_offset.left;
      var my = e.pageY - magnify_offset.top;
      
      //Finally the code to fade out the glass if the mouse is outside the container
      if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
      {
        $(".large_main").fadeIn(100);
      }
      else
      {
        $(".large_main").fadeOut(100);

      }
      if($(".large_main").is(":visible"))
      {
        //The background position of .large will be changed according to the position
        //of the mouse over the .small image. So we will get the ratio of the pixel
        //under the mouse pointer with respect to the image and use that to position the 
        //large image inside the magnifying glass
        var rx = Math.round(mx/$(".small").width()*native_width - $(".large_main").width()/2)*-1;
        var ry = Math.round(my/$(".small").height()*native_height - $(".large_main").height()/2)*-1;
        var bgp = rx + "px " + ry + "px";
        
        //Time to move the magnifying glass with the mouse
        var px = mx - $(".large_main").width()/2;
        var py = my - $(".large_main").height()/2;
        //Now the glass moves with the mouse
        //The logic is to deduct half of the glass's width and height from the 
        //mouse coordinates to place it with its center at the mouse coordinates
        
        //If you hover on the image now, you should see the magnifying glass in action
        $(".large_main").css({left: px, top: py, backgroundPosition: bgp});
      }
    }
  })

  //Now the mousemove function
  $(".magnify_ref1").mousemove(function(e){
    //When the user hovers on the image, the script will first calculate
    //the native dimensions if they don't exist. Only after the native dimensions
    //are available, the script will show the zoomed version.
    if(!native_width && !native_height)
    {
      //This will create a new image object with the same image as that in .small
      //We cannot directly get the dimensions from .small because of the 
      //width specified to 200px in the html. To get the actual dimensions we have
      //created this image object.
      var image_object = new Image();
      image_object.src = $(".small").attr("src");
      
      //This code is wrapped in the .load function which is important.
      //width and height of the object would return 0 if accessed before 
      //the image gets loaded.
      native_width = image_object.width;
      native_height = image_object.height;
    }
    else
    {
      //x/y coordinates of the mouse
      //This is the position of .magnify with respect to the document.
      var magnify_offset = $(this).offset();
      //We will deduct the positions of .magnify from the mouse positions with
      //respect to the document to get the mouse positions with respect to the 
      //container(.magnify)
      var mx = e.pageX - magnify_offset.left;
      var my = e.pageY - magnify_offset.top;
      
      //Finally the code to fade out the glass if the mouse is outside the container
      if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
      {
        $(".large_ref1").fadeIn(100);
      }
      else
      {
        $(".large_ref1").fadeOut(100);
        
      }
      if($(".large_ref1").is(":visible"))
      {
        //The background position of .large will be changed according to the position
        //of the mouse over the .small image. So we will get the ratio of the pixel
        //under the mouse pointer with respect to the image and use that to position the 
        //large image inside the magnifying glass
        var rx = Math.round(mx/$(".small").width()*native_width - $(".large_ref1").width())*-1;
        var ry = Math.round(my/$(".small").height()*native_height - $(".large_ref1").height())*-1;
        var bgp = rx + "px " + ry + "px";
        
        //Time to move the magnifying glass with the mouse
        var px = mx - $(".large_ref1").width()/2;
        var py = my - $(".large_ref1").height()/2;
        //Now the glass moves with the mouse
        //The logic is to deduct half of the glass's width and height from the 
        //mouse coordinates to place it with its center at the mouse coordinates
        
        //If you hover on the image now, you should see the magnifying glass in action
        $(".large_ref1").css({left: px, top: py, backgroundPosition: bgp});
      }
    }
  })


  //Now the mousemove function
  $(".magnify_ref2").mousemove(function(e){
    //When the user hovers on the image, the script will first calculate
    //the native dimensions if they don't exist. Only after the native dimensions
    //are available, the script will show the zoomed version.
    if(!native_width && !native_height)
    {
      //This will create a new image object with the same image as that in .small
      //We cannot directly get the dimensions from .small because of the 
      //width specified to 200px in the html. To get the actual dimensions we have
      //created this image object.
      var image_object = new Image();
      image_object.src = $(".small").attr("src");
      
      //This code is wrapped in the .load function which is important.
      //width and height of the object would return 0 if accessed before 
      //the image gets loaded.
      native_width = image_object.width;
      native_height = image_object.height;
    }
    else
    {
      //x/y coordinates of the mouse
      //This is the position of .magnify with respect to the document.
      var magnify_offset = $(this).offset();
      //We will deduct the positions of .magnify from the mouse positions with
      //respect to the document to get the mouse positions with respect to the 
      //container(.magnify)
      var mx = e.pageX - magnify_offset.left;
      var my = e.pageY - magnify_offset.top;
      
      //Finally the code to fade out the glass if the mouse is outside the container
      if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
      {
        $(".large_ref2").fadeIn(100);
      }
      else
      {
        $(".large_ref2").fadeOut(100);
        
      }
      if($(".large_ref2").is(":visible"))
      {
        //The background position of .large will be changed according to the position
        //of the mouse over the .small image. So we will get the ratio of the pixel
        //under the mouse pointer with respect to the image and use that to position the 
        //large image inside the magnifying glass
        var rx = Math.round(mx/$(".small").width()*native_width - $(".large_ref2").width())*-1;
        var ry = Math.round(my/$(".small").height()*native_height - $(".large_ref2").height())*-1;
        var bgp = rx + "px " + ry + "px";
        
        //Time to move the magnifying glass with the mouse
        var px = mx - $(".large_ref2").width()/2;
        var py = my - $(".large_ref2").height()/2;
        //Now the glass moves with the mouse
        //The logic is to deduct half of the glass's width and height from the 
        //mouse coordinates to place it with its center at the mouse coordinates
        
        //If you hover on the image now, you should see the magnifying glass in action
        $(".large_ref2").css({left: px, top: py, backgroundPosition: bgp});
      }
    }
  })


})
</script>
  </div>
  </body>
  <footer>
    <div class="logo2">
      <img src="images/emammal_LOGO_original.png" alt="emammal" height="100" width="170">
    </div>
      <p class="footer-text"><a href="http://emammal.si.edu/">eMammal | See wildlife. Do science.</a></p>
  </footer>
</html>
