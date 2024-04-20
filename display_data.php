<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vweb"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Users Data</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Full Name</th><th>Date of Birth</th><th>Father's Name</th><th>Phone</th><th>House No</th><th>City</th><th>State</th><th>Date</th><th>Designation</th><th>Gender</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["fullname"]."</td>";
        echo "<td>".$row["dob"]."</td>";
        echo "<td>".$row["fathername"]."</td>";
        echo "<td>".$row["phone"]."</td>";
        echo "<td>".$row["houseno"]."</td>";
        echo "<td>".$row["city"]."</td>";
        echo "<td>".$row["state"]."</td>";
        echo "<td>".$row["date"]."</td>";
        echo "<td>".$row["designation"]."</td>";
        echo "<td>".$row["gender"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No registration data available";
}
$conn->close();
?>
