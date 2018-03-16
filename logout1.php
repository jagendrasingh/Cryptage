
<?php
/*
Author: Javed Ur Rehman
Website: https://htmlcssphptutorial.wordpress.com
*/
?>

<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login2.php"); // Redirecting To Home Page
}
?>