<?php 
session_start(); // place it on the top of the script 
$statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
    unset($_SESSION['msg']);
	?>
<!DOCTYPE html>

<html>
<head>
<title> add subscriber to list using mailchimp api and php      </title>


</head>
<body>
<h3>subscribe our newsletter</h3>
<?php
    
    echo $statusMsg;
?>

<form method="post" action="action.php">
    <p><label>First Name: </label><input type="text" name="fname" /></p>
    <p><label>Last Name: </label><input type="text" name="lname" /></p>
    <p><label>Email: </label><input type="text" name="email" /></p>
    <p><input type="submit" name="submit" value="SUBSCRIBE" /></p>
	 
</form>
<body>
</html>