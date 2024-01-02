<?php
include("includes/views/header.php");
include("includes/config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $memberType = $_POST['memberType'];
    $pinNumber = rand(100000, 900000);

    switch ($memberType) {
        case 'members':
            $insertQuery = "INSERT INTO members (FirstName, LastName, Email, PinNumber) VALUES ('$firstName', '$lastName', '$email', '$pinNumber')";
            break;
        case 'admins':
            $insertQuery = "INSERT INTO admins (FirstName, LastName, Email, PinNumber) VALUES ('$firstName', '$lastName', '$email', '$pinNumber')";
            break;
        case 'trainers':
            $insertQuery = "INSERT INTO trainers (FirstName, LastName, Email, PinNumber) VALUES ('$firstName', '$lastName', '$email', '$pinNumber')";
            break;
        default:
            break;
    }

    if (mysqli_query($con, $insertQuery)) {
        echo "<p>New member added successfully!</p>";
    } else {
        echo "<p>Error adding member: " . mysqli_error($con) . "</p>";
    }
}
?>

<div class="main-container column">
    <div class="form-container">
        <h2>Add New Member</h2>
        <form method="post" action="">
            <label for="firstName">First Name:</label>
            <input type="text" name="firstName" required>

            <label for="lastName">Last Name:</label>
            <input type="text" name="lastName" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="memberType">Member Type:</label>
            <select name="memberType">
                <option value="members">Member</option>
                <option value="admins">Admin</option>
                <option value="trainers">Trainer</option>
            </select>

            <button type="submit">Add Member</button>
        </form>
    </div>
</div>

<?php include("includes/views/footer.php"); ?>