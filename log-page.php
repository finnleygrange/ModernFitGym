<?php include("includes/views/header.php"); ?>

<div class="main-container column">
    <section>
        <div class="nav-section">
            <ul>
                <li><button class="table-btn"><a href="log-workout-page.php">Log New Workout</a></button></li>
                <li><button class="table-btn"><a href="log-meal-page.php">Log New Meal</a></button></li>
            </ul>
        </div>
    </section>
    <section class="row">
    </section>

    <div class="table">
        <h2>Meal Logs</h2>
        <table>
            <thead>
                <tr>
                    <th>Meal_ID</th>
                    <th>Date</th>
                    <th>MealDescription</th>
                    <th>MealPortion</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <?php
                    include("includes/config.php");

                    if (!$con) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                
                    $mealSql = "SELECT * FROM meals WHERE MemberID = $_SESSION[id]";
                    $mealResult = mysqli_query($con, $mealSql);
                    
                    if (mysqli_num_rows($mealResult) > 0) {
                        while ($row = mysqli_fetch_assoc($mealResult)) {
                            echo "<tr>";
                            echo "<td>" . $row["MealID"] . "</td>";
                            echo "<td>" . $row["Date"] . "</td>";
                            echo "<td>" . $row["MealDescription"] . "</td>";
                            echo "<td>" . $row["MealPortion"] . " grams" . "</td>";
                            echo    "<td>
                                    <form method='post' action='includes/remove-meal.php''>
                                    <input type='hidden' name='removeMealID' value='" . $row["MealID"] . "'>
                                    <button class='table-btn' type='submit' name='removeMeal'>Remove</button>
                                    </form>
                                    </td>";
                        }
                    } else {
                        echo "<tr>
                            <td colspan='5'>No meal data available</td>
                        </tr>";
                    }
                    echo "</tr>";
                ?>
            </tbody>
        </table>
    </div>

    <div class="table">
        <h2>Workout Logs</h2>
        <table>
            <thead>
                <tr>
                    <th>Workout_ID</th>
                    <th>Date</th>
                    <th>ExerciseDescription</th>
                    <th>ExerciseDuration</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $workoutSql = "SELECT * FROM workouts WHERE MemberID = $_SESSION[id]";
                    $workoutResult = mysqli_query($con, $workoutSql);
                    
                    if (mysqli_num_rows($workoutResult) > 0) {
                        while ($row = mysqli_fetch_assoc($workoutResult)) {
                            echo "<tr>";
                            echo "<td>" . $row["WorkoutID"] . "</td>";
                            echo "<td>" . date("Y-m-d H:i", strtotime($row["Date"])) . "</td>";
                            echo "<td>" . $row["ExerciseDescription"] . "</td>";
                            echo "<td>" . $row["ExerciseDuration"] . " minutes" . "</td>";
                            echo    "<td>
                                    <form method='post' action='includes/remove-workout.php''>
                                    <input type='hidden' name='removeWorkoutID' value='" . $row["WorkoutID"] . "'>
                                    <button class='table-btn' type='submit' name='removeWorkout'>Remove</button>
                                    </form>
                                    </td>";
                        }
                    } else {
                        echo "<tr>
                            <td colspan='5'>No workout data available</td>
                        </tr>";
                    }
                    echo "</tr>";
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php include("includes/views/footer.php") ?>