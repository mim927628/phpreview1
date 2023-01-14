<html>
<body>

<form action="from.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    var_dump($_POST);
}
?>

</body>
</html>