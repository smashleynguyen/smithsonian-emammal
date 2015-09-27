
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--Custom styles -->
	<link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      <div id='timer' class='row'>
        
      </div>

      <div id='photos' class='row'>
          <div class='col-md-1'></div>
          
          <div id='mainPhoto' class='col-md-5'>
            <img src='<?php $Record = $_POST["page"]; //need the post info here
$var = "C_FileName";

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * from animals.t_main2 where ID = " . $Record;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        echo $row[$var];
    }
} else {

}



 

// Close connection

mysqli_close($conn);?>.jpg' class="img-responsive"> 
          </div>
          
          <div id='choices' class='col-md-5'>
            <div id='refA' class='row'>
              <div id='refAImage' class='col-md-10'>
                <img src='images/<?php echo 'Eastern Fox Squirrel_21060279614_l'; ?>.jpg' class="img-responsive">
              </div>

<?php echo $_POST["choice"]; ?>

<form action="index2.php" method="post">
<input type="hidden" name="page" value="1">


              <div id='refAButton' class='col-md-2 btn-group-vertical' role='group' aria-label='refAButtons'>
                <button type="submit" name='choice' value=1 formmethod="post" formaction="index2.php" class="btn btn-default">$100</button>
                <button type="submit" name='choice' value=2 formmethod="post" formaction="index2.php" class="btn btn-default">$80</button>
                <button type="submit" name='choice' value=3 formmethod="post" formaction="index2.php" class="btn btn-default">$60</button>
                <button type="submit" name='choice' value=4 formmethod="post" formaction="index2.php" class="btn btn-default">$20</button>
                <button type="submit" name='choice' value=5 formmethod="post" formaction="index2.php" class="btn btn-default">$10</button>
              </div>

</form>

            </div>

            <div id='pass' class='row'>
              <div class='col-md-10'></div>
              <div id='passButton' class='col-md-2 btn-group-vertical' role='group' aria-label='passButtons'>
                <button type="submit" name='choice' value=6 formmethod="post" formaction="index2.php" class="btn btn-default">PASS</button>
              </div>
            </div>

            <div id='refB' class='row'>
              <div id='refBImage' class='col-md-10'>
                <img src='images/<?php echo 'Eastern Fox Squirrel_21060279614_l'; ?>.jpg' class="img-responsive">
              </div>
<form action="index2.php" method="post">
              <div id='refBButton' class='col-md-2'>
                <div class='btn-group-vertical' role='group' aria-label='refBButtons'>
                  <button type="submit" name='choice' value=7 formmethod="post" formaction="index2.php" class="btn btn-default">$100</button>
                  <button type="submit" name='choice' value=8 formmethod="post" formaction="index2.php" class="btn btn-default">$100</button>
                  <button type="submit" name='choice' value=9 formmethod="post" formaction="index2.php" class="btn btn-default">$100</button>
                  <button type="submit" name='choice' value=10 formmethod="post" formaction="index2.php" class="btn btn-default">$100</button>
                  <button type="submit" name='choice' value=11 formmethod="post" formaction="index2.php" class="btn btn-default">$100</button>
                </div>
              </div>
            </div>
</form>
          </div>
          
          <!-- <div id='buttons' class='col-md-1'>
            <div class="btn-group-vertical" role="group" aria-label="...">
              <button type="button" class="btn btn-default">$100</button>
              <button type="button" class="btn btn-default">$80</button>
              <button type="button" class="btn btn-default">$60</button>
              <button type="button" class="btn btn-default">$40</button>
              <button type="button" class="btn btn-default">$20</button>
            </div>
            <div class="btn-group-vertical" role="group" aria-label="...">
              <button type="button" class="btn btn-default">Pass</button>
            </div>
            <div class="btn-group-vertical" role="group" aria-label="...">
              <button type="button" class="btn btn-default">$20</button>
              <button type="button" class="btn btn-default">$40</button>
              <button type="button" class="btn btn-default">$60</button>
              <button type="button" class="btn btn-default">$80</button>
              <button type="button" class="btn btn-default">$100</button>
            </div> -->


            </div>
          </div>
          
          <div class='col-md-1'></div>
      </div>

      <div id='avatar' class='row'>
        
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
