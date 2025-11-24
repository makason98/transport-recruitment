<?php


$host = "";
$username = "";
$password = "";
$database = "";

// Create connection
$con = new mysqli($host, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Set character set
mysqli_set_charset($con, 'utf8');
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["submit1"])) {
    $enteredUsername = $_GET["username"];
    $enteredPassword = $_GET["password"];

    // Perform SQL query to get the hashed password from the database
    $sql = "SELECT password FROM admins WHERE username = '$enteredUsername'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        // Verify the entered password against the stored hash
        if (password_verify($enteredPassword, $hashedPassword)) {
            // Password is correct, set session and redirect to dashboard.php
            session_start();
            $_SESSION["username"] = $enteredUsername;
            header("Location: dashboard.php");
            exit();
        } else {
            // Incorrect password, display an error or redirect to login page with an error message
            header("Location: main.php?error=1");
            exit();
        }
    } else {
        // Username not found, display an error or redirect to login page with an error message
        header("Location: main.php?error=1");
        exit();
    }
}

// Close the database connection
$con->close();
?>
