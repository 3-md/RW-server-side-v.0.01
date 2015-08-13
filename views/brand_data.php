<!DOCTYPE html>
<html>
<body>
<?php
$q = $_GET["q"];
include('config/data_db.php');
$con = mysqli_connect("$DB_HOST1", "$DB_USER1", "$DB_PASS1", "$DB_NAME1");
//$con = mysqli_connect('localhost','root','root','rw_data');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM `select` WHERE `select` = '".$q."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
$asset= $row['asset'];
$drift= $row['drift'];
$volatility= $row['volatility'];
$timestep= $row['timestep'];

}
mysqli_close($con);
?>

<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<form id="myform" method="POST" action="views/result.php" name="myform">
 Asset: <input type='text' name='Asset' id='Asset' value="<?php echo $asset ?>"/><br/>
 Drift: <input type='text' name='Drift' id='Drift' value="<?php echo $drift ?>"/><br/>
 Volatility: <input type='text' name='Volatility' id='Volatility' value="<?php echo $volatility ?>"/><br/>
 Timestep: <input type='text' name='Timestep' id='Timestep' value="<?php echo $timestep ?>"/><br/>
 <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</form>
</script>
</body>
</html>
