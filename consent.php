<?php
  
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = 'CAPst0ne12!@';
      $dbname = 'aitrust';
      $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
      date_default_timezone_set('America/New_York');
      $date = date('m/d/y h:i:s a',time());
      if($mysqli->connect_errno ) {
         printf("Connect failed: %s<br />", $mysqli->connect_error);
         exit();
      }
      printf('Connected successfully.<br />');
      $author = $_POST['author'];

      $sql = "INSERT INTO consent ".
         "(name, date) "."VALUES ".
         "('$author','$date')";

      if ($mysqli->query($sql)) {
         printf("Record inserted successfully.<br />");
      }
      if ($mysqli->errno) {
         printf("Could not insert record into table: %s<br />", $mysqli->error);
      }
 $username = $_POST['username'];
$age = $_POST['age'];
      $field = $_POST['field'];
      $gpa = $_POST['gpa'];
      $trust = $_POST['trust'];
      $feeling = $_POST['feeling'];
      $help = $_POST['help'];
      $gender=$_POST['gender'];
      $personal=$_POST['personal'];
      $sql = "INSERT INTO info ".
         "(id,username,age,field,gpa,trust,feeling,help,gender,personalreccs) "."VALUES ".
         "(1,'$username','$age','$field','$gpa','$trust','$feeling',$help,'$gender','$personal')";
printf($sql);
         printf("\n o);
      if ($mysqli->query($sql)) {
         printf("Record inserted successfully.<br />");
      }printf("l");
      if ($mysqli->errno) {
         printf("Could not insert record into table: %s<br />", $mysqli->error);
      }
      $mysqli->close();
   
$newURL="information.html";
header('Location: '.$newURL);
?>
