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
        <h2>Edit Article</h2>
    </header>
    <form class="" action="edit_process.php" method="post">
      <p>
        <?php
          echo '<label for="id">id:</label>
          <input id="id" type="number" name="id" value="'.$_GET['id'].'" readonly>';
         ?>
      </p>
      <p>
          <input id="submit" type="submit"  value="SUBMIT!!">
      </p>
      <p>
          <label for="title">Change 제목:</label>
          <?php
          $resultTitle = mysqli_query($conn, "SELECT * FROM topic WHERE id=".$_GET['id']);
          $rowTitle = mysqli_fetch_assoc($resultTitle);
          echo '<input id="title" type="text" name="title" value="'.$rowTitle['title'].'">';
          ?>
      </p>

      <p>
          <label for="description">Change 내용:</label>
          <?php
          $resultDescription = mysqli_query($conn, "SELECT * FROM topic WHERE id=".$_GET['id']);
          $rowDescription = mysqli_fetch_assoc($resultDescription);
          echo '<textarea id="description" rows="30" cols="100" type="text" name="description">'.$rowDescription['description'].'</textarea>';
          ?>
      </p>

  </form>
</body>
</html>
