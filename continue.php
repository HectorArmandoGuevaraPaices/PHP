<?php //continue.php session_start();

if(isset($_SESSION['forename']))
{
  $forename = htmlspecialchars($_SESSION['forename']);
  $surename = htmlspecialchars($_SESSION['surename']);

  echo "Welcome back $forename.<br>
        Your full name is $forename $surename.<br>";
}
else echo "Please <a href=auth2.php> click here</a> to log in.";
?>



