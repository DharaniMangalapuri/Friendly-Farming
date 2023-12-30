<?php
include "conne.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$address = $_POST['address'];
$username = $_POST['username'];

// Perform data validation and sanitization
$name = mysqli_real_escape_string($connection, $name);
$email = mysqli_real_escape_string($connection, $email);
$phone = preg_replace('/[^0-9]/', '', $phone); // Remove any non-numeric characters
if (strlen($phone) > 15) {
    echo "Error: Phone number is too long.";
    exit();
}

$address = mysqli_real_escape_string($connection, $address);
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);



// Check if the user is already signed up
$query = "SELECT name, phone FROM signform WHERE name = '$name' AND phone = '$phone';";
$check = mysqli_query($connection, $query);

if (mysqli_num_rows($check) > 0) {
    echo "<script> alert('User already signed up');
          window.location.href='start.html';
          </script>";
    exit();
} else {
    // Insert the user data into the database
    $query = "INSERT INTO signform (name, email, phone, address, username, password) 
              VALUES ('$name', '$email', '$phone', '$address', '$username', '$password');";

    if (mysqli_query($connection, $query)) {
        header("Location: home.html");
        exit();
    } else {
        echo "Error: " . mysqli_error($connection);
        // Or provide a user-friendly error message like "Registration failed. Please try again later."
    }
}

mysqli_close($connection);
?>

