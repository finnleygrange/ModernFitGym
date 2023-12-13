<?php include("includes/views/header.php"); ?>

<div class="main-container">
    <section>
        <div class="nav-section">
            <ul>
                <li>Workout</li>
                <li>Nutrition</li>
            </ul>
        </div>
    </section>
    <section class="form-container">
        <form class action="process_workout.php" method="post">
            <div class="form-group">
                <h2 class="form-title">Workout Form</h2>
            </div>
            <div class="form-group">
                <label for="exerciseDescription">Exercise Description:</label>
                <input type="text" name="exerciseDescription" required>
            </div>
            <div class="form-group">
                <label for="exerciseDuration">Exercise Duration (minutes):</label>
                <input type="number" name="exerciseDuration" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit Workout Log" id="submit">
            </div>
        </form>
    </section>
    <section class="form-container">
        <form action="process_nutrition.php" method="post">
            <div class="form-group">
                <h2 class="form-title">Nutrition Form</h2>
            </div>
            <div class="form-group">
                <label for="mealDescription">Meal Description:</label>
                <input type="text" name="mealDescription" required>
            </div>
            <div class="form-group">
                <label for="mealPortion">Meal Portion (grams):</label>
                <input type="number" name="mealPortion" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit Nutrition Log" id="submit">
            </div>
        </form>
    </section>
    <section>
        <?php include("includes/display-workouts.php"); ?>
    </section>
</div>
<?php include("includes/views/footer.php") ?>