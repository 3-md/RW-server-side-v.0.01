
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","views/brand_data.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-md-offset-8 col-md-4">
			<h6>Logged in as:<?php echo $_SESSION['user_name']; ?> 
			<button type="button" onclick="location='index.php?logout'" class="btn btn-primary btn-xs">Logout</button></h6>
		</div>
	</div>
	<div class="row">
	<div class="col-md-4">

<form id="myform" method="POST"  name="myform" role="form">
Choose your data: <select name="users" onchange="showUser(this.value)">
<option value="Editable"></option>
	<?php
	include('config/data_db.php');
        $mysqli = new Mysqli("$DB_HOST1", "$DB_USER1", "$DB_PASS1", "$DB_NAME1");
	//$mysqli = new Mysqli("localhost", "root", "root", "rw_data");
	$result = $mysqli->query("SELECT `select` FROM `select` WHERE user_id = '" .$_SESSION['user_id']. "'");

	for ($x = 0; $x <= ($mysqli->affected_rows -1); $x++) {
	$rows[] = $result->fetch_assoc();
	$ID=($rows[$x]['select']);
	echo "<option value=\"$ID\">$ID</option>";
	}
	mysqli_close($con);
	?>
  </select>
<div id="txtHint">

<script src="//code.jquery.com/jquery-1.9.1.js"></script>

 Asset: <input type='text' name='Asset' id='Asset' value="" required/><br/>
 Drift: <input type='text' name='Drift' id='Drift' value="" required/><br/>
 Volatility: <input type='text' name='Volatility' id='Volatility' value="" required/><br/>
 Timestep: <input type='text' name='Timestep' id='Timestep' value="" required/><br/>
 <input type="submit" name="submit" value="Submit" class="btn btn-primary"/>
</div>
 </form>
<?php
if (isset($_POST['submit']))
{
   include('views/result.php');
}
?>
</div>
<div class="col-md-4">
<form id="myform1" method="POST"  name="myform1" role="form1">
<input type="submit" name="btn1" value="Create new data" class="btn btn-primary"/></form>
<?php
if (isset($_POST['btn1']))
{
   printf ("You can create your new data templates by entering:");
   printf ('<iframe src="views/saveB.php" frameborder="0" scrolling="no" id="iframe"></iframe>') ;
}
?>

</div>
</div>
</div>
</body>
</html>