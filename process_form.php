<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (first_name, last_name, email, phone, message) VALUES ('$firstName', '$lastName', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    // Redirect to contact_form.php after successful submission
    header("Location: contact_form.php?success=true");
    exit(); // Make sure to exit to prevent further script execution
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
