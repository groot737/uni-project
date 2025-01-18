<?php
include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO contact_messages (subject, email, phone, message) 
            VALUES ('$subject', '$email', '$phone', '$message')";

    if (mysqli_query($conn, $sql)) {
        header("Location: http://localhost:8888/dailyinfo.ge/contact.php?sent=1");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
