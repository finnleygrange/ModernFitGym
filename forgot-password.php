<?php include("includes/head.php") ?>
<?php include("includes/header.php") ?>

<div class="main-container">
    <form action="" id="email-verification-form" onsubmit="submitEmail()">
        <div class="form-group">
            <h2 class="form-title">Confirm email</h2>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Type your email" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Get Verification Code" id="getVerificationCode">
        </div>
    </form>
    <form action="" id="code-verification-form">
        <div class="form-group">
            <h2 class="form-title">Verify</h2>
        </div>
        <div class="form-group">
            <label for="code">Verification Code</label>
            <input type="text" name="text" id="code" placeholder="6-digit-code" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Verify" id="verifyCode">
        </div>
    </form>
    <form action="" id="new-password-form">
        <div class="form-group">
            <h2 class="form-title">Reset password</h2>
        </div>
        <div class="form-group">
            <label for="newPassword">New Password</label>
            <input type="password" name="newPassword" id="newPassword" placeholder="Type a new password" required>
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirm New Password</label>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm your new password"
                required>
        </div>
        <div class="form-group">
            <input type="submit" value="Reset Password" id="verifyCode">
        </div>
    </form>
</div>
<?php include("includes/footer.php") ?>