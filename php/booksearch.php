<?php

$search = $_REQUEST['search'];

$conn = mysqli_connect("localhost", "root", "", "ccsa");
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$sql = "SELECT *  FROM books WHERE title = '$search'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc() )
    echo $row["bookid"]."  ".$row["title"].";
}
else{
echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
$conn->close();

?>