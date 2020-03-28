<?php
	require_once('common.php');

	if (isset($_POST['submitBtn'])){
		// Get user input
		$username  = isset($_POST['username']) ? $_POST['username'] : '';
		$password1 = isset($_POST['password1']) ? $_POST['password1'] : '';
		$password2 = isset($_POST['password2']) ? $_POST['password2'] : '';
        
		// Try to register the user
		$error = registerUser($username,$password1,$password2);
	}	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Micro Login System</title>
   <link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="main">
<?php if ((!isset($_POST['submitBtn'])) || ($error != '')) {?>
      <div class="caption">Register user</div>
      <div id="icon">&nbsp;</div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="registerform">
        <table width="100%">
          <tr><td>Username:</td><td> <input class="text" name="username" type="text"  /></td></tr>
          <tr><td>Password:</td><td> <input class="text" name="password1" type="password" /></td></tr>
          <tr><td>Confirm password:</td><td> <input class="text" name="password2" type="password" /></td></tr>
          <tr><td colspan="2" align="center"><input class="text" type="submit" name="submitBtn" value="Register" /></td></tr>
        </table>  
      </form>
     
<?php 
}   
    if (isset($_POST['submitBtn'])){

?>
      <div class="caption">Registration result:</div>
      <div id="icon2">&nbsp;</div>
      <div id="result">
        <table width="100%"><tr><td><br/>
<?php
	if ($error == '') {
		echo " User: $username was registered successfully!<br/><br/>";
		echo ' <a href="login.php">You can login here</a>';
		
	}
	else echo $error;

?>
		<br/><br/><br/></td></tr></table>
	</div>
<?php            
    }
?>
	<script src="js/auth.js"></script>
    </div>
</body>   
