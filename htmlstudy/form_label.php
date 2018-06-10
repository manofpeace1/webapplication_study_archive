

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./colorpage.css">
    <title></title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
      <div id="userInfo">
        <p><label>아이디: <input id="id" type="text" name="id" value="default value" size="70"></label></p>
        <p><label>비번: <input id="password" type="password" name="pwd" value="default value" size="70"></label></p>
        <p><label>설명: <textarea id="textarea" name="description" rows="10" cols="80"></textarea></label></p>
      </div>
      <div id="userColor">
        <p><label> <input type="checkbox" name="checkbox" value="red"> 붉은색 </label></p>
        <p><label> <input type="checkbox" name="checkbox" value="blue"> 파란색 </label></p>
      </div>
      <div id="fileUpload">
        <p><input type="file" name="profilePicture"></p>
        <p><input type="submit" value="개뺑!"></p>
    </form>
  </body>
</html>
