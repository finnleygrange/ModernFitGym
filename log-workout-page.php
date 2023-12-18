<?php include("includes/views/header.php"); ?>

<div class="main-container">
    <div class="form-container">
        <form class action="includes/add-workout.php" method="post">
            <div class="form-group">
                <h2 class="form-title">Log New Workout</h2>
            </div>
            <div class="form-group">
                <label for="ExerciseDate">Date:</label>
                <input type="datetime-local" name="ExerciseDate">
            </div>
            <div class="form-group">
                <label for="ExerciseDescription">Exercise Description:</label>
                <input type="text" name="ExerciseDescription" required>
            </div>
            <div class="form-group">
                <label for="ExerciseDuration">Exercise Duration (minutes):</label>
                <input type="number" name="ExerciseDuration" required>
            </div>
            <div class="form-group">
                <input type="submit" name="addWorkout" value="Submit Workout Log" id="submit">
            </div>
        </form>
    </div>
</div>

<?php include("includes/views/footer.php"); ?>