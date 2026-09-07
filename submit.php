<?php

$servername = "localhost";
$username = "studentuser";
$password = "YOUR_PASSWORD";
$dbname = "student_registration";

$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname
);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
$address = $_POST['address'];


$sql = "INSERT INTO students
        (name, email, phone, course, address)
        VALUES (?, ?, ?, ?, ?)";


$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "sssss",
    $name,
    $email,
    $phone,
    $course,
    $address
);


if ($stmt->execute()) {

    echo "<h1>Registration Successful!</h1>";

    echo "<p>Student information has been saved successfully.</p>";

    echo "<a href='index.html'>Register Another Student</a>";

} else {

    echo "Error: " . $stmt->error;

}


$stmt->close();

$conn->close();

?>