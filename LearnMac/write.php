<!-- Access to MYSQL -->
<?php
require("./config/sql-config.php");
require("./config/db.php");
$conn = db_init($config["dbhost"], $config["dbuser"], $config["dbpw"], $config["dbname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");
?>

<!-- Start of content -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body id="body">
    <header>
        <h2>SUBMIT NEW ARTICLE</h2>
    </header>
  <form class="" action="write_process.php" method="post">
    <p>
        <label for="title">제목:</label>
        <input id="title" type="text" name="title">
    </p>
    <p>
        <label for="author">작성자:</label>
        <input id="author" type="text" name="author" value="">
    </p>
    <p>
        <label for="description">내용:</label>
        <textarea id="description" name="description" rows="40" cols="150"></textarea>
    </p>
    <p>
        <input type="submit"  value="SUBMIT!!">
    </p>
</form>
</body>
</html>
