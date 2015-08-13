<?php
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
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
<form method="post" action="register.php" name="registerform">
    <label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)<br></label>
    <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required /><br>

    <label for="login_input_email">User's email</label><br>
    <input id="login_input_email" class="login_input" type="email" name="user_email" required /><br>

    <label for="login_input_password_new">Password (min. 6 characters)</label><br>
    <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" /><br>

    <label for="login_input_password_repeat">Repeat password</label><br>
    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" /><br>
    <input type="submit"  name="register" value="Register" class="btn btn-primary"/>
	<button type="button" onclick="location='index.php'" class="btn btn-primary">Back to Login Page</button>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
