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
    <title>Insert</title>
</head>
  
<body>
        <?php
        $servername    = "sql4.webzdarma.cz";
        $username   = "databazeproj2266";
        $password = "4#z3Poh1(*1&*I4F0II6";
        $db_name    = "databazeproj2266";

        $connection = mysqli_connect($servername, $username, $password, $db_name);
          
        $stockID = $_REQUEST['stockID'];
        $isbn = $_REQUEST['isbn'];
        $author = $_REQUEST['author'];
        $title = $_REQUEST['title'];
        $publisher = $_REQUEST['publisher'];
        $published = $_REQUEST['published'];
        $price = $_REQUEST['price'];
        $supplierID = $_REQUEST['supplierID'];
        $sql = "INSERT INTO stock VALUES ('$stockID','$isbn','$author','$title','$publisher','$published','$supplierID','$price')";
        if(mysqli_query($connection, $sql)){
            echo "<h3>data stored in a database successfully."; 
  
            echo nl2br("\n$stockID\n $isbn\n "
                . "$author\n $title\n $publisher\n $published\n $price\n $supplierID \n");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($connection);
        }
        mysqli_close($connection);
        ?>
        <button id="myButton" class="button button2">Show Database</button>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "http://www.databazeprojekt.xf.cz/display.php";
    };
</script>
</body>
</html>