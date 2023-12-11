<?php
    include ("config.php");
    
    if (isset($_POST['email'], $_POST['firstName'], $_POST['lastName'])) {
        $email = $_POST['email'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $pinNumber = rand(100000, 900000);


        $query = "SELECT Email FROM Members WHERE Email='$email'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<div class='message'>
                    <p>This email has already been used.</p>
                </div> <br>";
        } else {
            $query = "INSERT INTO Members (Email, FirstName, LastName, PinNumber) VALUES ('$email', '$firstName', '$lastName', '$pinNumber')";
            $result = mysqli_query($con, $query);

            if ($result) {
                echo "<script>window.location.href = '../login-page.php';</script>";
            } else {
                echo "Error: " . mysqli_error($con);
            }
            
        }
    }
?>