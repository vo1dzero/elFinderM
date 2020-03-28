<?php
require_once('common.php');
include('php/elf-xconfig.php');
$error = '0';

if (isset($_POST['submitBtn'])){
	// Get user input
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
        
	// Try to login the user
	$error = loginUser($username,$password);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title><?php echo $eox['xloc']['titleFM']; ?></title>
   <link href="style/style.css" rel="stylesheet" type="text/css" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div id="main">
<?php if ($error != '') {?>
      <div class="caption"><?php echo $eox['xloc']['loginTitle']; ?></div>
      <div id="icon">&nbsp;</div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
        <table width="100%">
          <tr><td><?php echo $eox['xloc']['username']; ?>:</td><td> <input id="usr" class="text" name="username" type="text"  /></td></tr>
          <tr><td><?php echo $eox['xloc']['password']; ?>:</td><td> <input id="psw" class="text" name="pass" type="password" /></td></tr>
          <tr><td colspan="2" align="center"><input class="text" type="submit" name="submitBtn" value="<?php echo $eox['xloc']['submitBtn']; ?>" /></td></tr>
        </table>  
      </form>
      
      &nbsp;
      
<?php 
}   
    if (isset($_POST['submitBtn'])){

?>
      <div class="caption"><?php echo $eox['xloc']['loginReq']; ?>:</div>
      <div id="icon2">&nbsp;</div>
      <div id="result">
        <table width="100%"><tr><td><br/>
<?php
	if ($error == '') {
		echo '<meta http-equiv="refresh" content="0.18; URL=./">';
	}
	else echo $error;

?>
		<br/><br/><br/></td></tr></table>
	</div>
<?php            
    }
?>

    </div>
	<script src="js/auth.js"></script>
</body>