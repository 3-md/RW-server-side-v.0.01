<?php
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
<html>
<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<div class="col-md-4 well">
<form method="post" action="index.php" name="loginform">

    <label for="login_input_username">Username</label><br>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required /><br>

    <label for="login_input_password">Password</label><br>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required /><br>

    <input type="submit"  name="login" value="Log in" class="btn btn-primary"/>
    <button type="button" onclick="location='register.php'" class="btn btn-primary">Register</button>

</form>
</div>
</div>
</div>
</div>
</body>
</html>