<?php include("includes/views/header.php"); ?>
<div class="main-container">
    <div class="form-container">
        <form action="includes/register.php" method="post" id="registration-form">
            <div class="form-group">
                <h2 class="form-title">Create a new account</h2>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Type your email" required>
            </div>
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" placeholder="First name" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" placeholder="Last name" required>
            </div>
            <div class="form-group">
                <p>Your information is strictly used for authentication purposes.</p>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" id="submit">
            </div>
            <div class="form-group">
                <p class="login-here">Already have an account? <a href="login-page.php">Login Here</a></p>
            </div>
        </form>
    </div>
</div>
<?php include("includes/views/footer.php") ?>