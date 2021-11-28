<?php
   
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = 'CAPst0ne12!@';
      $dbname = 'aitrust';
      $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

      if($mysqli->connect_errno ) {
         printf("Connect failed: %s<br />", $mysqli->connect_error);
         printf("l\n");
         exit();
     
      printf('Connected successfully.<br />');
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
      if ($mysqli->query($sql)) {
         printf("Record inserted successfully.<br />");
      }printf("l");
      if ($mysqli->errno) {
         printf("Could not insert record into table: %s<br />", $mysqli->error);
      }
      $mysqli->close();
   }
printf("l");
$newURL="game.html";

?>
© 2021 GitHub, Inc.
Terms
Privac
