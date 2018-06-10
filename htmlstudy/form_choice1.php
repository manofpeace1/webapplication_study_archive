<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="">
      <h1>색상</h1>
      <select name="color">
        <?php include('./color_list.txt'); ?>
      </select>
      <input type="submit">
      <h1>색상2</h1>
      <select name="color2" multiple>
        <?php include('./color_list.txt'); ?>
      </select>
      <input type="submit">
    </form>
  </body>
</html>
