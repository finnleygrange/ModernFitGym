<?php include("includes/views/header.php"); ?>



<div class="main-container column">
    <div class="details">
        <?php 
        
            echo "<h2>{$_SESSION["firstName"]}</h2>";
            echo "<h2>{$_SESSION["lastName"]}</h2>";
            echo "<h2>{$_SESSION["email"]}</h2>";
        
        ?>
    </div>
    <div class="form-container">
        <form action="includes/update-details.php" method="post">
            <div class="form-group">
                <label for="newFirstName">Update First Name:</label>
                <input type="text" id="newFirstName" name="newFirstName" placeholder="Enter new first name" required>
            </div>
            <div class="form-group">
                <label for="newLastName">Update Last Name:</label>
                <input type="text" id="newLastName" name="newLastName" placeholder="Enter new last name" required>
            </div>
            <div class="form-group">
                <label for="newEmail">Update Email:</label>
                <input type="text" id="newEmail" name="newEmail" placeholder="Enter new Email" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Update Details">
            </div>
        </form>
    </div>
</div>




<?php include("includes/views/footer.php") ?>