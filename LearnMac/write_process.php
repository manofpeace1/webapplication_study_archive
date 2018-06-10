<?php
/* Access to MYSQL */
require("./config/sql-config.php");
require("./config/db.php");
$conn = db_init($config["dbhost"], $config["dbuser"], $config["dbpw"], $config["dbname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");

/* Update DB */
$sql = "SELECT * FROM user WHERE name='".$_POST['author']."'";
$result  = mysqli_query($conn, $sql);

if($result->num_rows == 0){
  $sql = "INSERT INTO user (name, password) VALUES('".$_POST['author']."', '111111')";
  mysqli_query($conn, $sql);
  $user_id = mysqli_insert_id($conn);
} else {
  $row = mysqli_fetch_assoc($result);
  $user_id = $row['id'];
}
$sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$user_id."', now())";
$result = mysqli_query($conn, $sql);
header('Location: ./index.php');
?>
