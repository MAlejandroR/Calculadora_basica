<?php


if (isset($_POST['submit'])){

}
var_dump($_GET);
var_dump($_POST);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="get_post.php" method="post"  >
    <input type="text" name ="dato1"><br>
    <input type="text" name ="dato2"><br>
    <input type="text" name ="dato3"><br>
    <input type="submit" value="Enviar" name="submit">
</form>

</body>
</html>
