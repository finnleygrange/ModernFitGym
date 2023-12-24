<?php include("includes/views/header.php"); ?>

<div class="main-container">
    <div class="form-container">
        <form class action="includes/add-schedule.php" method="post">
            <div class="form-group">
                <h2 class="form-title">Log New Schedule</h2>
            </div>
            <div class="form-group">
                <label for="monday">Monday:</label>
                <input type="text" name="monday">
            </div>
            <div class="form-group">
                <label for="tuesday">Tuesday:</label>
                <input type="text" name="tuesday">
            </div>
            <div class="form-group">
                <label for="wednesday">Wednesday:</label>
                <input type="text" name="wednesday">
            </div>
            <div class="form-group">
                <label for="thursday">Thursday:</label>
                <input type="text" name="thursday">
            </div>
            <div class="form-group">
                <label for="friday">Friday:</label>
                <input type="text" name="friday">
            </div>
            <div class="form-group">
                <label for="saturday">Saturday:</label>
                <input type="text" name="saturday">
            </div>
            <div class="form-group">
                <label for="sunday">Sunday:</label>
                <input type="text" name="sunday">
            </div>
            <div class="form-group">
                <input type="submit" name="addSchedule" value="Submit schedule" id="submit">
            </div>
        </form>
    </div>
</div>

<?php include("includes/views/footer.php"); ?>