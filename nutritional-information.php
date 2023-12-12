<?php
include("includes/views/header.php");
include("includes/config.php");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addNutritionalInfo"])) {
    // Process the form data and insert into the database
    $foodName = $_POST["foodName"];
    $calorieCount = $_POST["calorieCount"];
    $protein = $_POST["protein"];
    $carbohydrates = $_POST["carbohydrates"];
    $fat = $_POST["fat"];
    $fiber = $_POST["fiber"];

    $sql = "INSERT INTO nutritionalinformation (FoodName, CalorieCount, Protein, Carbohydrates, Fat, Fiber)
            VALUES ('$foodName', $calorieCount, $protein, $carbohydrates, $fat, $fiber)";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Nutritional information added successfully!');</script>";
    } else {
        echo "<script>alert('Error adding nutritional information: " . mysqli_error($con) . "');</script>";
    }
}


$sql = "SELECT * FROM nutritionalinformation";
$result = mysqli_query($con, $sql);
?>


<div class="main-container">
    <div class="nutrition-table">
        <h2>Nutritional Information Table</h2>
        <table>
            <thead>
                <tr>
                    <th>FoodID</th>
                    <th>FoodName</th>
                    <th>CalorieCount</th>
                    <th>Protein</th>
                    <th>Carbohydrates</th>
                    <th>Fat</th>
                    <th>Fiber</th>
                </tr>
            </thead>
            <tbody>
                <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["FoodID"] . "</td>";
                    echo "<td>" . $row["FoodName"] . "</td>";
                    echo "<td>" . $row["CalorieCount"] . "</td>";
                    echo "<td>" . $row["Protein"] . "</td>";
                    echo "<td>" . $row["Carbohydrates"] . "</td>";
                    echo "<td>" . $row["Fat"] . "</td>";
                    echo "<td>" . $row["Fiber"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No data available</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class = "nutrion-table-btn">
        <button type="button" onclick="showAddForm()">Add</button>
        <button type = "button">Remove</button>
        <button type = "button">Edit</button>
    </div>
 <!-- Add a form for adding nutritional information -->
 <form id="addForm" style="display: none;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="foodName">Food Name:</label>
            <input type="text" id="foodName" name="foodName" required>

            <label for="calorieCount">Calorie Count:</label>
            <input type="number" id="calorieCount" name="calorieCount" required>

            <label for="protein">Protein:</label>
            <input type="number" id="protein" name="protein" step="0.1" required>

            <label for="carbohydrates">Carbohydrates:</label>
            <input type="number" id="carbohydrates" name="carbohydrates" step="0.1" required>

            <label for="fat">Fat:</label>
            <input type="number" id="fat" name="fat" step="0.1" required>

            <label for="fiber">Fiber:</label>
            <input type="number" id="fiber" name="fiber" step="0.1" required>

            <button type="submit" name="addNutritionalInfo">Add</button>
        </form>
    </div>

    <script>
        function showAddForm() {
            // Show the add form and hide the table
            document.getElementById('addForm').style.display = 'block';
            document.querySelector('.nutrition-table table').style.display = 'none';
        }
    </script>
</body>
</html>

<?php
mysqli_close($con);
?>