<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>划水</title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="Space/style.css">
    <script src="Space/js.js"></script>
</head>
<body>

<div id="container">
  <div id="InputContainer">

     <form method="POST" action="PostComments.php">
         评论:<br>
         <input type="text" name="value" autocomplete="off">
         <br>
         <input type="submit" value="发表">
     </form>

    <button onclick="Refresh()">刷新</button>
  </div>

  <div id="CommentContainer">
  </div>
</div>

<script>
Refresh();
</script>

</body>

</html>
