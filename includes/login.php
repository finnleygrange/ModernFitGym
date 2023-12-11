<?php 
    include ("config.php");
    session_start();

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        $pinNumber = $_POST["pinNumber"];

        $queryMembers = "SELECT * FROM Members WHERE Email = '$email'";
        $resultMembers = mysqli_query($con, $queryMembers);
        
        if ($resultMembers) {
            $rowMembers = mysqli_fetch_assoc($resultMembers);
            
            if ($rowMembers["PinNumber"] === $pinNumber) {
                $_SESSION["memberId"] = $rowMembers["MemberID"];
                $_SESSION["firstName"] = $rowMembers["FirstName"];
                $_SESSION["lastName"] = $rowMembers["LastName"];
                $_SESSION["email"] = $rowMembers["Email"];
                $_SESSION["pinNumber"] = $rowMembers["PinNumber"];
                $_SESSION["userRole"] = $rowMembers["UserRole"];
                
                header('Location: ../member-dashboard.php');
                die();
            }
        }
        
        $queryAdmins = "SELECT * FROM Admins WHERE Email = '$email'";
        $resultAdmins = mysqli_query($con, $queryAdmins);

        if ($resultAdmins) {
            $rowAdmins = mysqli_fetch_assoc($resultAdmins);

            if ($rowAdmins["PinNumber"] === $pinNumber) {
                $_SESSION["adminId"] = $rowAdmins["AdminID"];
                $_SESSION["adminFirstName"] = $rowAdmins["FirstName"];
                $_SESSION["adminLastName"] = $rowAdmins["LastName"];
                $_SESSION["adminEmail"] = $rowAdmins["Email"];
                $_SESSION["userRole"] = $rowAdmins["UserRole"];

                header('Location: ../admin-dashboard.php');
                die();
            }
        }

        $queryTrainers = "SELECT * FROM Trainers WHERE Email = '$email'";
        $resultTrainers = mysqli_query($con, $queryTrainers);

        if ($resultTrainers) {
            $rowTrainers = mysqli_fetch_assoc($resultTrainers);

            if ($rowTrainers["PinNumber"] === $pinNumber) {
                $_SESSION["trainerId"] = $rowTrainers["TrainerID"];
                $_SESSION["trainerFirstName"] = $rowTrainers["FirstName"];
                $_SESSION["trainerLastName"] = $rowTrainers["LastName"];
                $_SESSION["trainerEmail"] = $rowTrainers["Email"];
                $_SESSION["userRole"] = $rowTrainers["UserRole"];

                header('Location: ../trainer-dashboard.php');
                die();
            }
        }

        echo "Invalid email or credentials";
    } 
?>