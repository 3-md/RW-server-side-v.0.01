<?php
	session_start();
	include('config/data_db.php');
        $mysqli = new Mysqli("$DB_HOST1", "$DB_USER1", "$DB_PASS1", "$DB_NAME1");
        //$mysqli = new Mysqli("localhost", "root", "root", "rw_data");
	$result = $mysqli->query("SELECT `data` FROM `temp_data` WHERE user_id = '" .$_SESSION['user_id']. "' ORDER BY `date` DESC");

        for ($x = 0; $x <= $mysqli->affected_rows; $x++) {
        $rows[] = $result->fetch_assoc();
        $string =($rows[0]['data']);
        }
        mysqli_close($con);
echo $string;
?>
