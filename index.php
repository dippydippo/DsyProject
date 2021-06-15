<!DOCTYPE html>
<html>
<head>
<style>
.button {
  border: none;
  color: white;
  padding: 6px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

</style>
<title>Database project</title>
</head>
<body>
<?php
$servername    = "sql4.webzdarma.cz";
$username   = "databazeproj2266";
$password = "4#z3Poh1(*1&*I4F0II6";
$db_name    = "databazeproj2266";

$connection = mysqli_connect($servername, $username, $password, $db_name);


if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}
mysqli_close($connection);
?>
<form action="insert.php" method="post">
    <p>
        <label for="stockID">Stock ID:</label>
        <input type="text" name="stockID" id="stockID">
    </p>
    <p>
        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" id="isbn">
    </p>
    <p>
        <label for="authorName">Author name:</label>
        <input type="text" name="author" id="authorName">
    </p>
    <p>
        <label for="titleName">Title name:</label>
        <input type="text" name="title" id="titleName">
    </p>
    <p>
        <label for="publisherName">Publisher name:</label>
        <input type="text" name="publisher" id="publisherName">
    </p>
    <p>
        <label for="publishedYear">Published Year:</label>
        <input type="text" name="published" id="publishedYear">
    </p>
    <p>
        <label for="price">Price:</label>
        <input type="text" name="price" id="price">
    </p>
    <p>
        <label for="supplierID">Supplier ID:</label>
        <input type="text" name="supplierID" id="supplierID">
    </p>
    <input type="submit" class="button button2"value="Submit">
</form>
<button id="myButton" class="button button2">Show Database</button>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "http://www.databazeprojekt.xf.cz/display.php";
    };
</script>
</body>
</html>