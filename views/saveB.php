
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<form method="post">
 Name: <input type="text" name="Name1" id="Name1" value="" required/><br/>
 Asset: <input type='text' name='Asset1' id='Asset1' value="" required/><br/>
 Drift: <input type='text' name='Drift1' id='Drift1' value="" required/><br/>
 Volatility: <input type='text' name='Volatility1' id='Volatility1' value="" required/><br/>
 Timestep: <input type='text' name='Timestep1' id='Timestep1' value="" required/><br/>
 <input type="submit" name="btn" value="Save" class="btn btn-primary"/>
</form>
<?php
if(isset($_POST['btn']))
{
session_start();
$id=$_SESSION['user_id'];
$name= $_POST['Name1'];
$Asset= $_POST['Asset1'];
$Drift= $_POST['Drift1'];
$Volatility= $_POST['Volatility1'];
$Timestep= $_POST['Timestep1'];
	include('config/data_db.php');
        $mysqli = new Mysqli("$DB_HOST1", "$DB_USER1", "$DB_PASS1", "$DB_NAME1");
	//$mysqli = new Mysqli("localhost", "root", "root", "rw_data");
	$result = $mysqli->query("INSERT INTO `select` (`select_id`, `user_id`, `select`, `asset`, `drift`, `volatility`, `timestep`) VALUES (NULL, '$id', '$name', '$Asset', '$Drift', '$Volatility', '$Timestep');");
mysqli_close($con);
?>
  <script type="text/javascript">
    alert("New data named: <?php echo $_POST['Name1']; ?> was created. Please refresh your browser.");
    history.back();
  </script>
<?php

}
?>
</body>
</html>