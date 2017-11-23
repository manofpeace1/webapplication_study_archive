<!DOCTYPE html>

<!-- access to mysql-->
<?php
  require("lib/db.php");
  $result = mysqli_query($conn, 'SELECT * FROM topic');
?>

<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost:8080/css/style.css">
</head>
<body id = body>
  <header>
    <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩">
    <h1><a href="http://localhost:8080/index.php">JavaScript</a></h1>
  </header>
  <nav>
    <ol>
    <?php
      while($row = mysqli_fetch_assoc($result)){
          echo '<li><a href="http://localhost:8080/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
      }
      ?>
    </ol>
    </nav>
  <div id = switch>
      <input type="button" value="white" id = "whiteButton" />
      <input type="button" value="black" id = "blackButton" />
      <a href="http://localhost:8080/write.php">쓰기</a>
  </div>
<article>
  <form action="process.php" method="POST">
    <p>Title: <input type="text" name="title" value=""></p>
    <p>Author: <input type="text" name="author" value=""></p>
    <p>Description: <textarea name="description"></textarea></p>
    <p><input type="submit" value="제출"></p>
  </form>

</article>
</body>
<script src="http://localhost:8080/javascript/twak.js"></script>
<script src="http://localhost:8080/javascript/switch.js"></script>
</html>
