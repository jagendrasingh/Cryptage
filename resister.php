<?php
  include('conn.php');
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $name=stripslashes($name);
  $name=mysql_real_escape_string($name);
  $email=stripslashes($email);
  $email=mysql_real_escape_string($email);
  $password=stripslashes($password);
  $password=mysql_real_escape_string($password);
  $query=mysql_query("insert into user(name,email,password) values('$name','$email','".md5($password)."')");
  header("location:login2.php");
   $result = mysql_query($query);
        if($result)
		{
          echo '<script language="javascript">' ;
		  echo 'alert("ragistration successfull ..")';
		  echo '</script>';
		  
			
		}
		else
		{
			 echo '<script language="javascript">' ;
		  echo 'alert("ragistration not successfull ..")';
		  echo '</script>';
			}
}

?>
<html>
<body bgcolor="#3399FF">
<style>
.a
{
  margin-left:500px;
  margin-top:250px;
  background:red;
  border-radius:5px;
  height:200px;
  width:400px;
}
.b
{
 
 margin-top:8px;
 font-size:20px;	
	}

</style>
<div class="form">
<form  method="post">
<h1 style="margin-left:600px">Registration</h1>  
<div class="a" >
<div class="b" ><input type="text" placeholder="username" name="name"style="background:aqua;margin-left:79px;font-size:20px;border-radius:5px"/></div>
<div class="b"><input type="email" placeholder="email" name="email" style="margin-left:80px;font-size:20px;border-radius:5px"/></div>
<div class="b"><input type="password" placeholder="password"  name="password" style="margin-left:80px;font-size:20px;border-radius:5px"/></div>
<div style="margin-left:100px;margin-top:30px;font-size:20px">SUBMIT<input type="submit" value="submit" name="submit" style="font-size:25px;margin-left:10px"/></div>
</div>
</form>

</div>
</body>
</html>