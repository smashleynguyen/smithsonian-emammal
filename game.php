<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!--Custom styles -->
	<link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/flipclock.css">

  <!--php includes-->
  <?php include 'spotname.php';?>

  <!-- php vars -->
  <?php $Record = 2; $user = 1; ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php $answer = 'A'; ?>
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

              <div id='refAButton' class='col-md-2'>
                <div class='btn-group-vertical' role='group' aria-label='refAButtons'>
                <button type="button" class="btn btn-bets" onClick="calcScore(100, 'A', time, '<?php echo $answer?>', <?php echo $user?>)">$100</button>
                <button type="button" class="btn btn-bets" onClick="calcScore(80, 'A', time, '<?php echo $answer?>')">$80</button>
                <button type="button" class="btn btn-bets" onClick="calcScore(60, 'A', time, '<?php echo $answer?>')">$60</button>
                <button type="button" class="btn btn-bets" onClick="calcScore(40, 'A', time, '<?php echo $answer?>')">$40</button>
                <button type="button" class="btn btn-bets" onClick="calcScore(20, 'A', time, '<?php echo $answer?>')">$20</button>
              </div>
              </div>
            </div>

            <div id='pass' class='row'>
              <div class='col-md-10'></div>
              <div id='passButton' class='col-md-2'>
              <div class='btn-group-vertical' role='group' aria-label='passButtons'>
                <button type="button" class="btn btn-pass" onClick="calcScore(0, 'Pass', time, '<?php echo $answer?>')">Pass</button>
              </div>
              </div>
            </div>

            <div id='refB' class='row'>
              <div id='refBImage' class='col-md-10'>
                <img src='<?php getname($Record, "R2_FileName"); ?>.jpg' class="img-responsive">
              </div>

              <div id='refBButton' class='col-md-2'>
                <div class='btn-group-vertical' role='group' aria-label='refBButtons'>
                  <button type="button" class="btn btn-bets" onClick="calcScore(100, 'B', time, '<?php echo $answer?>')">$100</button>
                  <button type="button" class="btn btn-bets" onClick="calcScore(80, 'B', time, '<?php echo $answer?>')">$80</button>
                  <button type="button" class="btn btn-bets" onClick="calcScore(60, 'B', time, '<?php echo $answer?>')">$60</button>
                  <button type="button" class="btn btn-bets" onClick="calcScore(40, 'B', time, '<?php echo $answer?>')">$40</button>
                  <button type="button" class="btn btn-bets" onClick="calcScore(20, 'B', time,'<?php echo $answer?>')">$20</button>
                </div>
              </div>
            </div>

          </div>
          
          <div class='col-md-1'></div>
      </div>


      <div id='avatar' class='row'>
        <div class='col-md-2'></div>
        <div class='panel panel-default col-md-8'>
          <div class="panel-body">
            <p>Name: <?php getUser($user, 'Name'); ?> </p>
              <p><?php getUser($user, 'Score'); ?></p>
              <p><?php getUser($user, 'Items'); ?></p>
              <p><?php getUser($user, 'Level'); ?></p>
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
    var ajaxRequest;

    try{
    // Opera 8.0+, Firefox, Safari
    ajaxRequest = new XMLHttpRequest();
  } catch (e){
    // Internet Explorer Browsers
    try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try{
        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e){
        // Something went wrong
        alert("Your browser broke!");
        return false;
      }
    }
  }
  // Create a function that will receive data sent from the server
  ajaxRequest.onreadystatechange = function(){
    if(ajaxRequest.readyState == 4){
      //document.myForm.time.value = ajaxRequest.responseText;
    }
  }

    if (response == answer) {
    var score = 1*points*time;
  } else if (response != answer) {
    var score = -1*points*time;
  } else if (response == 'Pass') {
    var score = 0;
  }
  
  ajaxRequest.open("GET", "dbUpdate.php" + "?score=" + score + "&user='" + user, true);
  ajaxRequest.send(null); 
}
</script>

  </body>
</html>