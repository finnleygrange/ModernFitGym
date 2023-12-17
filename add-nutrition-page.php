<?php include("includes/views/header.php") ?>

<div class="main-container">
    <div class="form-container">
        <form id="addForm" method="post" action="includes/add-nutrition.php">
            <div class="form-group">
                <label for="foodName">Food Name:</label>
                <input type="text" id="foodName" name="foodName" required>
            </div>
            <div class="form-group">
                <label for="calorieCount">Calorie Count:</label>
                <input type="number" id="calorieCount" name="calorieCount" required>
            </div>
            <div class="form-group">
                <label for="protein">Protein:</label>
                <input type="number" id="protein" name="protein" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="carbohydrates">Carbohydrates:</label>
                <input type="number" id="carbohydrates" name="carbohydrates" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="fat">Fat:</label>
                <input type="number" id="fat" name="fat" step="0.1" required>
            </div>
            <div class="form-group">
                <label for="fiber">Fiber:</label>
                <input type="number" id="fiber" name="fiber" step="0.1" required>
            </div>
            <div class="form-group">
                <input type="submit" name="addNutritionalInfo" value="Add">
            </div>
        </form>
    </div>
</div>


<?php include("includes/views/footer.php") ?>