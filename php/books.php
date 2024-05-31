<?php
$conn = mysqli_connect("localhost", "root", "", "ccsa");
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$id=$_REQUEST['bookid'];
$title =  $_REQUEST['title'];
$author = $_REQUEST['author'];
$shelf =  $_REQUEST['shelfno'];
 
$sql = "INSERT INTO books VALUES ('$id','$title', 
    '$author','$shelf')";
 
if(mysqli_query($conn, $sql)){
    echo '<div id="successMessage" class="alert alert-success" role="alert">
    Data submitted successfully!</div>';
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
 
$conn->close();
?>
