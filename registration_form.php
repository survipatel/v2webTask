<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="register.php" method="post">
        <?php
        // Check if there are any errors to display
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            echo "<p style='color:red;'>$error</p>";
        }
        ?>
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" required><br><br>
        <!-- <input type="text" name="fullname" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname']; ?>" required><br> -->
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" required><br><br>

        <label for="fathername">Father's Name:</label>
        <input type="text" name="fathername" required><br><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" required><br><br>

        <label for="houseno">House No:</label>
        <input type="text" name="houseno" required><br><br>

        <label for="city">City:</label>
        <select name="city" required>
            <option value="Kanpur">Kanpur</option>
            <option value="Delhi">Delhi</option>
            <option value="Noida">Noida</option>
            <option value="Allahabad">Allahabad</option>
            <option value="Agra">Agra</option>
            <option value="Gurgaon">Gurgaon</option>
            <option value="Bhopal">Bhopal</option>
            <option value="Ahmdabad">Ahmdabad</option>
            <!-- Add more options as needed -->
        </select><br><br>

        <label for="state">State:</label>
        <select name="state" required>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="New Delhi">New Delhi</option>
            <option value="Haryana">Haryana</option>
            <option value="Gujrat">Gujrat</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Bihar">Bihar</option>
            <!-- Add more options as needed -->
        </select><br><br>

        <label for="date">Date:</label>
        <input type="date" name="date" required><br><br>

        <label for="designation">Designation:</label>
        <input type="text" name="designation" required><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female<br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
