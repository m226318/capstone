hello
<?php
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
         "(1,'$username','$age','$field','$gpa','$trust','$feeling',1,'$gender','$personal')";

    
printf($sql);
$newURL="game.html";
$mysqli->close();
?>

