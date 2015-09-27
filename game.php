<!DOCTYPE html>
<html lang="en">
  <head>
    <!--php includes-->
  <?php include 'spotname.php';?>
  
  <!-- php vars -->
  <?php $Record = $_GET["page"]; $answer = getname($Record, "Right"); ?>

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
    <title>Spot or Not?</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script>

    <!--Custom styles -->
	<!--<link href="css/style.css" rel="stylesheet">-->
  <link rel="stylesheet" href="css/flipclock.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      <div id='timer' class='row'>
        <div class='col-md-5'></div>
        <div class='col-md-2'><span class='countdown'></span></div>
        <div class='col-md-5'></div>
      </div>

      <div id='photos' class='row'>
          <div class='col-md-1'></div>
          
          <div id='mainPhoto' class='col-md-6 magnify_main'>
            <div class="large_main"></div>
            <img src='<?php getname($Record, "C_FileName"); ?>.jpg' class="img-responsive small"> 
          </div>
          
          <div id='choices' class='col-md-4'>
            <div id='refA' class='row'>
              <div id='refAImage' class='col-md-10 magnify_ref1'>
                <div class="large_ref1"></div>
                <img src='<?php getname($Record, "R1_FileName"); ?>.jpg' class="img-responsive small">
              </div>


<form action="game.php" method="post">
<input type="hidden" name="page" value="1">
              <div id='refAButton' class='col-md-2 btn-group-vertical' role='group' aria-label='refAButtons'>
                <button type="submit" name='choice' value=1 formmethod="post" formaction="game.php" class="btn btn-default">$100</button>
                <button type="submit" name='choice' value=2 formmethod="post" formaction="game.php" class="btn btn-default">$50</button>
                <button type="submit" name='choice' value=3 formmethod="post" formaction="game.php" class="btn btn-default">$10</button>
              </div>

</form>
            </div>

            <div id='pass' class='row'>
              <form action="game.php" method="post">
              <div class='col-md-10'></div>
              <div id='passButton' class='col-md-2 btn-group-vertical' role='group' aria-label='passButtons'>
                <button type="submit" name='choice' value=4 formmethod="post" formaction="game.php" class="btn btn-default">PASS</button>
              </div>
            </form>
            </div>

            <div id='refB' class='row'>
              <div id='refBImage' class='col-md-10 magnify_ref2'>
                <div class="large_ref2"></div>
                <img src='<?php getname($Record, "R2_FileName"); ?>.jpg' class="img-responsive small">
              </div>
    <form action="game.php" method="post">
              <div id='refBButton' class='col-md-2'>
                <div class='btn-group-vertical' role='group' aria-label='refBButtons'>
                  <button type="submit" name='choice' value=5 formmethod="post" formaction="game.php" class="btn btn-default">$10</button>
                  <button type="submit" name='choice' value=6 formmethod="post" formaction="game.php" class="btn btn-default">$50</button>
                  <button type="submit" name='choice' value=7 formmethod="post" formaction="game.php" class="btn btn-default">$100</button>
                </div>
              </div>
    </form>
            </div>
          </div>

      <div id='avatar' class='row'>
        <div class='col-md-2'></div>
        <div class='panel panel-default col-md-8'>
          <div class="panel-body">
              <p>user info here</p>
          </div>
        </div>
        <div class='col-md-2'></div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/flipclock.min.js"></script>
    <script type="text/javascript">
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

  </body>
</html>