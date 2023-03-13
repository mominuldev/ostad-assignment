<?php
session_start();

// Check if all fields are filled out
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_FILES['profile_picture']['name'])) {
    ?>
        <h3>Please fill out all fields</h3>
        <a href="/">Go Back</a>
    <?php
    exit;
}

// Validate email format
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
    exit;
}

// Save profile picture to server with unique filename
$uploads_dir = 'uploads/';
$filename = date("Y-m-d__h-i") . '-' . $_FILES['profile_picture']['name'];
move_uploaded_file($_FILES['profile_picture']['tmp_name'], $uploads_dir . $filename);

// Save user's name, email, and profile picture filename to CSV file
$data = array(
    $_POST['name'],
    $_POST['email'],
    $filename
);
$fp = fopen('users.csv', 'a');
fputcsv($fp, $data);
fclose($fp);

// Set cookie with user's name
setcookie('name', $_POST['name'], time() + 3600);

// Redirect to success page
header('Location: user-list.php');
exit;

