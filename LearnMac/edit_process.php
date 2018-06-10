<?php
/* Access to MYSQL */
require("./config/sql-config.php");
require("./config/db.php");
$conn = db_init($config["dbhost"], $config["dbuser"], $config["dbpw"], $config["dbname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");

/* Update DB */

$sql = "SELECT * FROM topic WHERE id='".$_POST['id']."'";
$result  = mysqli_query($conn, $sql);

if($result->num_rows > 0){

  $sql = "UPDATE topic SET title='".$_POST['title']."', "."description='".$_POST['description']."' "."WHERE id='".$_POST['id']."'";
  mysqli_query($conn, $sql);

} else {
}

header('Location: ./index.php');
?>
