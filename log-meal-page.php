<?php include("includes/views/header.php"); ?>

<div class="main-container">
    <div class="form-container">
        <form action="includes/add-meal.php" method="post">
            <div class="form-group">
                <h2 class="form-title">Log New Meal</h2>
            </div>
            <div class="form-group">
                <label for="MealDate">Date:</label>
                <input type="datetime-local" name="MealDate">
            </div>
            <div class="form-group">
                <label for="MealDescription">Meal Description:</label>
                <input type="text" name="MealDescription" required>
            </div>
            <div class="form-group">
                <label for="MealPortion">Meal Portion (grams):</label>
                <input type="number" name="MealPortion" required>
            </div>
            <div class="form-group">
                <input type="submit" name="addMeal" value="Submit Nutrition Log" id="submit">
            </div>
        </form>
    </div>
</div>


<?php include("includes/views/footer.php"); ?>