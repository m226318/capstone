<?php
   if(isset($_POST['add'])) {
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = 'CAPst0ne12!@';
      $dbname = 'aitrust';
      $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

      if($mysqli->connect_errno ) {
         printf("Connect failed: %s<br />", $mysqli->connect_error);
         exit();
      }
      printf('Connected successfully.<br />');
      $author = $_POST['author'];

      $sql = "INSERT INTO info ".
         "(username,age,field,gpa,trust,feeling,help) "."VALUES ".
         "('$username','$age','$field','$gpa','$trust','$feeling','$help')";

      if ($mysqli->query($sql)) {
         printf("Record inserted successfully.<br />");
      }
      if ($mysqli->errno) {
         printf("Could not insert record into table: %s<br />", $mysqli->error);
      }
      $mysqli->close();
   }
?>
© 2021 GitHub, Inc.
Terms
Privac
