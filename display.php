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
    <TABLE>
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

$result = mysqli_query($connection,"SELECT * FROM stock");
$all_property = array(); 


echo '<table class="data-table">
        <tr class="data-heading">'; 
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  
    array_push($all_property, $property->name);  
}
echo '</tr>'; 


while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; 
    }
    echo '</tr>';
}
echo "</table>";
mysqli_close($connection);
?> 
    </TABLE>
    <button id="myButton" class="button button2">Insert into database</button>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "http://www.databazeprojekt.xf.cz";
    };
</script>
</body>
</html>