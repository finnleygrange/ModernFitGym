<?php include("includes/views/header.php"); ?>

<div class="main-container column">
    <?php
    include("includes/config.php");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $memberID = isset($_GET['memberID']) ? $_GET['memberID'] : null;

    $memberQuery = "SELECT * FROM members WHERE MemberID = $memberID";
    $memberResult = mysqli_query($con, $memberQuery);
    $memberRow = mysqli_fetch_assoc($memberResult);

    if ($memberRow) {
        echo "<h2>Member Progress - " . $memberRow['FirstName'] . " " . $memberRow['LastName'] . "</h2>";

        echo "<div class='table'>";
        echo "<h3>Meal Logs</h3>";
        echo "<table>
                <thead>
                    <tr>
                        <th>Meal_ID</th>
                        <th>Date</th>
                        <th>MealDescription</th>
                        <th>MealPortion</th>
                    </tr>
                </thead>
                <tbody>";

        $mealSql = "SELECT * FROM meals WHERE MemberID = $memberID";
        $mealResult = mysqli_query($con, $mealSql);

        if (mysqli_num_rows($mealResult) > 0) {
            while ($row = mysqli_fetch_assoc($mealResult)) {
                echo "<tr>";
                echo "<td>" . $row["MealID"] . "</td>";
                echo "<td>" . $row["Date"] . "</td>";
                echo "<td>" . $row["MealDescription"] . "</td>";
                echo "<td>" . $row["MealPortion"] . " grams" . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr>
                    <td colspan='5'>No meal data available</td>
                  </tr>";
        }

        echo "</tbody></table>";
        echo "</div>";

        echo "<div class='table'>";
        echo "<h3>Workout Logs</h3>";
        echo "<table>
                <thead>
                    <tr>
                        <th>Workout_ID</th>
                        <th>Date</th>
                        <th>ExerciseDescription</th>
                        <th>ExerciseDuration</th>
                    </tr>
                </thead>
                <tbody>";

        $workoutSql = "SELECT * FROM workouts WHERE MemberID = $memberID";
        $workoutResult = mysqli_query($con, $workoutSql);

        if (mysqli_num_rows($workoutResult) > 0) {
            while ($row = mysqli_fetch_assoc($workoutResult)) {
                echo "<tr>";
                echo "<td>" . $row["WorkoutID"] . "</td>";
                echo "<td>" . date("Y-m-d H:i", strtotime($row["Date"])) . "</td>";
                echo "<td>" . $row["ExerciseDescription"] . "</td>";
                echo "<td>" . $row["ExerciseDuration"] . " minutes" . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr>
                    <td colspan='5'>No workout data available</td>
                  </tr>";
        }

        echo "</tbody></table>";
        echo "</div>";

    } else {
        echo "Member not found.";
    }

    mysqli_close($con);
    ?>
</div>

<?php include("includes/views/footer.php"); ?>