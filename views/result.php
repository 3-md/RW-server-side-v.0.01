<html>
<head>
<link rel="stylesheet" type="text/css" href="stilius.css">
<script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
    obj.style.width = obj.contentWindow.document.body.scrollWidth + 'px'; 
 }
</script>
</head>
<body>
<div class="refresh">
<input type=button value="Refresh" class="btn btn-primary" onClick="window.location.reload()">
</div>
<div class="data">
<?php
session_start();
$asset = $_POST[Asset];
$drift = $_POST[Drift];
$volatility = $_POST[Volatility];
$timestep = $_POST[Timestep];
$timestep_start = 0;

function float_rand($Min, $Max, $round=0){
    if ($min>$Max) { $min=$Max; $max=$Min; }
        else { $min=$Min; $max=$Max; }
    $randomfloat = $min + mt_rand() / mt_getrandmax() * ($max - $min);
    if($round>0)
        $randomfloat = round($randomfloat,$round);

    return $randomfloat;
}
//******************************************************************************
while ($timestep_start < 4){
$final = "{\"c\":[{\"v\":\"$timestep_start\"},{\"v\":\"$asset\"}]},";
echo ("<br> $timestep_start => $asset");
$array[]= $final;
$asset = ($asset*(1+$drift*$timestep+$volatility*sqrt($timestep)*(float_rand(0,1)+float_rand(0,1)+float_rand(0,1)+float_rand(0,1)+float_rand(0,1)+float_rand(0,1)+float_rand(0,1)+float_rand(0,1)+float_rand(0,1)+float_rand(0,1)+float_rand(0,1)+float_rand(0,1)-6)));
$timestep_start = ($timestep_start + $timestep);
}
array_unshift($array , '{\"cols\": [{\"id\":\"\",\"label\":\"Time\",\"type\":\"number\"},{\"id\":\"\",\"label\":\"Asset price\",\"type\":\"number\"}],\"rows\": [');
array_push($array, ']}');
//******************************************************************************
$test= implode(" ",$array);
include('config/data_db.php');
$mysqli = new Mysqli("$DB_HOST1", "$DB_USER1", "$DB_PASS1", "$DB_NAME1");
//$mysqli = new Mysqli("localhost", "root", "root", "rw_data");
$result = $mysqli->query("DELETE FROM `temp_data` WHERE user_id = '" .$_SESSION['user_id']. "' ORDER BY `date` ASC");
$result = $mysqli->query("INSERT INTO `temp_data` (`user_id`, `id`, `data`, `date`) VALUES ('" .$_SESSION['user_id']. "', NULL, '$test' , CURRENT_TIMESTAMP);");
mysqli_close($con);
?>
</div>
<div class="chart">
<iframe name="Stack" src="views/chart.php" frameborder="0" scrolling="no" id="iframe" onload='javascript:resizeIframe(this);' />
 <p>Your browser does not support iframes.</p>
</iframe>
</div>
</body>
</html>

