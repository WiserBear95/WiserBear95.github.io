<!--Reference Code-projects.org/Sourcecodeandprojects-->
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: customerlogin.php"); // Redirecting To Home Page
}
?>