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

      $sql = "SELECT id FROM consent where name='$author'and date = '$date' ";

      $result = $mysqli->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
  printf("lnnnn");
      $sql = "SELECT id FROM consent where name=\'$author\'and date = \'$date\' ";
      $result = $mysqli->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
      printf($result);
      printf("end");
   $mysqli->close();
$newURL="information.htm";
header('Location: '.$newURL);
?>
