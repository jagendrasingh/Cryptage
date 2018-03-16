<?php
session_start();
require('conn.php');

if(isset($_POST['username']))
{
	$name=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from user where name='$name' and password='".md5($password)."'"; 
	$result = mysql_query($query) or die(mysql_error());
	$rows = mysql_num_rows($result);
        if($rows==1)
		{
				$_SESSION['username'] =$username;
			     $_SESSION['password']=$password;
			header("Location:index.php"); // Redirect user to index.php
		}
		else
		{
			echo  "id is not resistered";
			}

}
?>
<html>
<style>
.a
{
	margin-top:5px;
	font-size:20px;
	}


</style>

<form method="post">
<div background="red">
<div style="margin-left:500px">
<h1>Log In</h1>
<div><input type="text" placeholder="username"  name="username" style="margin-top:5px;border-radius:3px;font-size:20px" /></div>
<div><input type="password" placeholder="password" name="password" style="margin-top:5px;border-radius:3px;font-size:20px"/></div>
<div class="a"><input type="submit" value="Login"  name="Login" style="font-size:20px"/></div>
<p>Not registered yet? <a href='resister.php'>Register Here</a></p>
</div>
</div>
</form>
</html>