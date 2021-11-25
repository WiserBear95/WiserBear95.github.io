<!--Reference Code-projects.org/Sourcecodeandprojects-->
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: managerlogin.php"); // Redirecting To Home Page
}
?>