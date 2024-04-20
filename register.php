<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data validation
$errors = [];
$fullname = $_POST['fullname'];
$dob = $_POST['dob'];
$fathername = $_POST['fathername'];
$phone = $_POST['phone'];
$houseno = $_POST['houseno'];
$city = $_POST['city'];
$state = $_POST['state'];
$date = $_POST['date'];
$designation = $_POST['designation'];
$gender = $_POST['gender'];

if (empty($fullname)) {
    $errors[] = "Full name is required";
}

if (empty($dob)) {
    $errors[] = "Date of Birth is required";
}

if (empty($fathername)) {
    $errors[] = "Father's name is required";
}

if (empty($phone)) {
    $errors[] = "Phone number is required";
} elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
    $errors[] = "Invalid phone number format";
}

if (empty($houseno)) {
    $errors[] = "House number is required";
}

if (empty($city)) {
    $errors[] = "City is required";
}

if (empty($state)) {
    $errors[] = "State is required";
}

if (empty($date)) {
    $errors[] = "Date is required";
}

if (empty($designation)) {
    $errors[] = "Designation is required";
}

if (empty($gender)) {
    $errors[] = "Gender is required";
}

// If there are errors, display them and stop processing
/*if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    exit;
}
*/
if (!empty($errors)) {
    $error_message = implode(", ", $errors);
    header("Location: registration_form.php?error=$error_message");
    exit;
}

// SQL injection prevention
$fullname = mysqli_real_escape_string($conn, $fullname);
$fathername = mysqli_real_escape_string($conn, $fathername);
$phone = mysqli_real_escape_string($conn, $phone);
$houseno = mysqli_real_escape_string($conn, $houseno);
$city = mysqli_real_escape_string($conn, $city);
$state = mysqli_real_escape_string($conn, $state);
$designation = mysqli_real_escape_string($conn, $designation);
$gender = mysqli_real_escape_string($conn, $gender);

$sql = "INSERT INTO users (fullname, dob, fathername, phone, houseno, city, state, date, designation, gender)
VALUES ('$fullname', '$dob', '$fathername', '$phone', '$houseno', '$city', '$state', '$date', '$designation', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
     // Redirect to display_data.php upon successful registration
    header("Location: display_data.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
