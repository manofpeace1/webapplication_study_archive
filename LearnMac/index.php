<!-- Access to MYSQL -->
<?php
require("./config/sql-config.php");
require("./config/db.php");
$conn = db_init($config["dbhost"], $config["dbuser"], $config["dbpw"], $config["dbname"]);
$result = mysqli_query($conn, "SELECT * FROM topic ORDER BY title ASC");
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
        <img src="./img/LearnMac_Logo.png" alt="맥북으로 생산성 높이기">
        <!-- Buttons on the page to switch white/black/write -->
        <div id="switch">
          <input type="button" value="white" onclick="document.getElementById('body').className='whiteButton'"/>
          <input type="button" value="black" onclick="document.getElementById('body').className='blackButton'" />
        </div>
        <div id="articleChange">
          <a href="./write.php">SUBMIT NEW ARTICLE</a><br />
        </div>
        <h1><a href="./index.php">맥북으로 생산성 높이기</a></h1>
    </header>
    <nav>
      <div id="navigationList">
        <ol>
    <?php
    while( $row = mysqli_fetch_assoc($result)){
      echo '<li><a href="./index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
    }
    ?>
        </ol>
      </div>
    </nav>
  <article>
  <?php
  if(empty($_GET['id']) === false ) {
      echo '<a href="./edit.php?id='.$_GET['id'].'" target="_blank">EDIT</a><br />';
      echo '<a href="./delete_process.php?id='.$_GET['id'].'">DELETE</a><br />';
      $sql = "SELECT topic.id,title,name,name,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id=".$_GET['id'];
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      echo "<p>"."id: ".$row['id']."</p>";
      echo "<p>"."작성자: ".$row['name']."</p>";
      echo "<p>"."제목: ".$row['title']."</p>";
      echo "<p>"."내용: ".$row['description']."</p>";
    }

  ?>
  <br /><br /><br /><br /><br /><br /><br /><br />
  </article>
  <!--Twak chat container-->
  <script src="./JS/twak.js"></script>
</body>
</html>
