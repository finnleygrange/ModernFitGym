<?php
    session_start();
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

            $query2 = "SELECT * FROM Members WHERE Email = '$email' AND PinNumber = '$pinNumber'";
            $result2 = mysqli_query($con, $query2);
    
            if ($result2 && mysqli_num_rows($result2) > 0) {
                $row = mysqli_fetch_assoc($result2);      
                $_SESSION["id"] = $row["MemberID"];
                $_SESSION["firstName"] = $row["FirstName"];
                $_SESSION["lastName"] = $row["LastName"];
                $_SESSION["email"] = $row["Email"];
                $_SESSION["pinNumber"] = $row["PinNumber"];
                $_SESSION["userRole"] = $row["UserRole"];
            }

            if ($result) {
                header('Location: ../dashboard.php');
            } else {
                echo "Error: " . mysqli_error($con);
            }
            
        }
    }
?>