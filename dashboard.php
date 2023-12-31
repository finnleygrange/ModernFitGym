<?php include("includes/views/header.php"); ?>
<div class="main-container">
    <div class="dashboard">

        <?php  
            if (isset($_SESSION['userRole'])){
                $userRole = $_SESSION['userRole'];
            }

            echo "<h1>Welcome to the";

            if ($userRole === "member") {
                echo " Member Dashboard";
            }
            if ($userRole === "trainer") {
                echo " Trainer Dashboard";
            } 
            if ($userRole === "admin") {
                echo " Admin Dashboard";
            }
        ?>

        <div class="options">
            <p>Please select from the options listed below:</p>
            <ul>
                <?php
                    if ($userRole === "member") {
                        echo '<li><a href="pin-details.php">Pin</a></li>';
                        echo '<li><a href="schedule.php">Schedule</a></li>';
                        echo '<li><a href="nutritional-information.php">Nutrition</a></li>';
                        echo '<li><a href="log-page.php">Nutrition & Exercise Log</a></li>';
                    } elseif ($userRole === "trainer") {
                        echo '<li><a href="pin-details.php">Pin</a></li>';
                        echo '<li><a href="nutritional-information.php">Nutrition</a></li>';
                        echo '<li><a href="trainer-option2.php">Trainer Option 2</a></li>';
                    } elseif ($userRole === "admin") {
                        echo '<li><a href="pin-details.php">Pin</a></li>';
                        echo '<li><a href="nutritional-information.php">Nutrition</a></li>';
                        echo '<li><a href="admin-edit.php">Edit Members</a></li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</div>

<?php include("includes/views/footer.php"); ?>