<!-- access to mysql-->
<?php
function db_init($dbhost, $dbuser, $dbpw, $dbname){
  $conn = mysqli_connect($dbhost, $dbuser, $dbpw);
  mysqli_select_db($conn, $dbname);
  return $conn;
}
?>
