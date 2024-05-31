<?php
$conn = mysqli_connect("localhost", "root", "", "ccsa");
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$title =  $_REQUEST['title'];
$message = $_REQUEST['message'];
$attachment = null;
if ($_FILES['attachment']['size'] > 0 && $_FILES['attachment']['type'] == 'application/pdf') {
    $uploadDir = "uploads/"; // Create a folder named "uploads" to store attachments
    $uploadFile = $uploadDir . basename($_FILES['attachment']['name']);

    if (move_uploaded_file($_FILES['attachment']['tmp_name'], $uploadFile)) {
        $attachment = $uploadFile;
    } else {
        echo "Error uploading file.";
        exit;
    }
} else {
    echo "Invalid file format. Please upload a PDF file.";
    exit;
}
 
$sql = "INSERT INTO notice VALUES ('$title','$messages','$attachment')";
 
if ($conn->query($sql) === TRUE) {
    echo "notice added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>

