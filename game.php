<?php
 $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = 'CAPst0ne12!@';
      $dbname = 'aitrust';
      $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$body = print_r($_POST, true);
      if($mysqli->connect_errno ) {
         printf("Connect failed: %s<br />", $mysqli->connect_error);
         exit();
      }
print("start");
      printf('Connected successfully.<br />');
     
      $roundnum = $_POST['roundnum'];
      $roundtime = $_POST['roundtime'];
      $timeleft = $_POST['timeleft'];
      $aiused = $_POST['aiused'];
      $aiboxnum = $_POST['aiboxnum'];
      $correct = $_POST['correct'];
      $basescore = $_POST['basescore'];
      $bonusscore=$_POST['bonusscore'];
      $clickedaibox=$_POST['clickedaibox'];
$confidence=$_POST['confidence'];
$id=$_COOKIE['user'];
   $sql = "INSERT INTO info ". //need to add cookies to store user id and replace 1 here
         "(id,roundnum,roundtime,timeleft,aiused,aiboxnum,correct,basescore,bonusscore,clickedaibox,confidence) "."VALUES ".
         "($id,'$roundnum','$roundtime','$timeleft','$aiused','$aiboxnum','$correct',$basescore,'$bonusscore','$clickedaibox','$confidence')";

    
printf($sql);
if ($mysqli->query($sql)) {
         printf("Record inserted successfully.<br />");
      }
      if ($mysqli->errno) {
         printf("Could not insert record into table: %s<br />", $mysqli->error);
      }
$newURL="game.html";
$mysqli->close();

?>
