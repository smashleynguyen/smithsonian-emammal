<!DOCTYPE html>
<html lang="en">
  <head>
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

    <!--Custom styles -->
	<!--<link href="css/style.css" rel="stylesheet">-->
  <link rel="stylesheet" href="css/flipclock.css">

  <!--php includes-->
  <?php include 'spotname.php';?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- php vars -->
  <?php $Record = $_GET["page"]; $answer = getname($Record, "Right"); ?>

      <div id='timer' class='row'>
        <div class='col-md-5'></div>
        <div class='col-md-2'><span class='countdown'></span></div>
        <div class='col-md-5'></div>
      </div>

      <div id='photos' class='row'>
          <div class='col-md-1'></div>
          
          <div id='mainPhoto' class='col-md-6'>
            <img src='<?php getname($Record, "C_FileName"); ?>.jpg' class="img-responsive"> 
          </div>
          
          <div id='choices' class='col-md-4'>
            <div id='refA' class='row'>
              <div id='refAImage' class='col-md-10'>
                <img src='<?php getname($Record, "R1_FileName"); ?>.jpg' class="img-responsive">
              </div>


<form action="game.php" method="post">
<input type="hidden" name="page" value="1">
              <div id='refAButton' class='col-md-2 btn-group-vertical' role='group' aria-label='refAButtons'>
                <button type="submit" name='choice' value=1 formmethod="post" formaction="game.php" class="btn btn-default">$100</button>
                <button type="submit" name='choice' value=2 formmethod="post" formaction="game.php" class="btn btn-default">$80</button>
                <button type="submit" name='choice' value=3 formmethod="post" formaction="game.php" class="btn btn-default">$60</button>
                <button type="submit" name='choice' value=4 formmethod="post" formaction="game.php" class="btn btn-default">$20</button>
                <button type="submit" name='choice' value=5 formmethod="post" formaction="game.php" class="btn btn-default">$10</button>
              </div>

</form>
            </div>

            <div id='pass' class='row'>
              <form action="game.php" method="post">
              <div class='col-md-10'></div>
              <div id='passButton' class='col-md-2 btn-group-vertical' role='group' aria-label='passButtons'>
                <button type="submit" name='choice' value=6 formmethod="post" formaction="game.php" class="btn btn-default">PASS</button>
              </div>
            </form>
            </div>

            <div id='refB' class='row'>
              <div id='refBImage' class='col-md-10'>
                <img src='<?php getname($Record, "R2_FileName"); ?>.jpg' class="img-responsive">
              </div>
    <form action="game.php" method="post">
              <div id='refBButton' class='col-md-2'>
                <div class='btn-group-vertical' role='group' aria-label='refBButtons'>
                  <button type="submit" name='choice' value=7 formmethod="post" formaction="game.php" class="btn btn-default">$100</button>
                  <button type="submit" name='choice' value=8 formmethod="post" formaction="game.php" class="btn btn-default">$100</button>
                  <button type="submit" name='choice' value=9 formmethod="post" formaction="game.php" class="btn btn-default">$100</button>
                  <button type="submit" name='choice' value=10 formmethod="post" formaction="game.php" class="btn btn-default">$100</button>
                  <button type="submit" name='choice' value=11 formmethod="post" formaction="game.php" class="btn btn-default">$100</button>
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
</script>

  </body>
</html>