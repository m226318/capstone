<?php
   if(isset($_POST['add'])) {
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = 'root@123';
      $dbname = 'AI';
      $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

      if($mysqli->connect_errno ) {
         printf("Connect failed: %s<br />", $mysqli->connect_error);
         exit();
      }
      printf('Connected successfully.<br />');
      $author = $_POST['author'];

      $sql = "INSERT INTO consent ".
         "(name, date) "."VALUES ".
         "('$author')";

      if ($mysqli->query($sql)) {
         printf("Record inserted successfully.<br />");
      }
      if ($mysqli->errno) {
         printf("Could not insert record into table: %s<br />", $mysqli->error);
      }
      $mysqli->close();
   }
?>
