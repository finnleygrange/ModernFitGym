<?php
include("includes/views/header.php");
include("includes/config.php");
?>

<div class="main-container column">
    <?php 
        $userRole = $_SESSION['userRole'];
        if ($userRole !== 'member') {
            echo "<div style='width:75px;'>";
            echo "<a href='add-nutrition-page.php'><button class='table-btn' type='button' onclick='showAddForm()'>Add</button></a>";
            echo "</div>";
        }
    ?>
    <div class="table">
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
                    <?php 
                        if ($userRole !== 'member') {
                            echo "<th></th>";
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM nutritionalinformation";
                    $result = mysqli_query($con, $sql);

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
                            $userRole = $_SESSION['userRole'];
                            if ($userRole !== 'member') {
                                    echo "<td>
                        
                                    <form method='post' action='includes/remove-nutrition.php''>
                                    <input type='hidden' name='removeFoodID' value='" . $row["FoodID"] . "'>
                                    <button class='table-btn' type='submit' name='removeNutritionalInfo'>Remove</button>
                                    </form>
                                    </td>";
                            }

                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8'>No data available</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include("includes/views/footer.php"); ?>