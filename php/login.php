<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate and sanitize input (you should perform more validation in a real application)
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);

    // Database connection parameters
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "ccsa";

    // Create a connection
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to authenticate user (replace 'your_table_name' with your actual table name)
    $sql = "SELECT * FROM admins WHERE username='$username' AND passwords='$password'";
    $result = $conn->query($sql); 

    // Check if authentication is successful
    if ($result->num_rows > 0) {

        // Redirect to another page (replace 'admin.html' with your desired page)
        header("Location: ./admin.html");
        exit();
    } else {
        $loginError = true;
    }

    // Close the connection
    $conn->close();
}
?>

