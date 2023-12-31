<?php
include("includes/views/header.php");

if (!isset($_SESSION['dataSelection'])) {
    $_SESSION['dataSelection'] = '';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['dataSelection'])) {
        $_SESSION['dataSelection'] = $_POST['dataSelection'];
    }
}

?>

<div class="main-container column">
    <div class="nav-section">
        <ul>
            <li>
                <form method="post">
                    <label for="dataSelection">Select Data:</label>
                    <select id="dataSelection" name="dataSelection" onchange="this.form.submit()">
                        <option value="" <?php if ($_SESSION['dataSelection'] == "") echo "selected"; ?>>
                            Please select
                        </option>
                        <option value="trainers"
                            <?php if ($_SESSION['dataSelection'] == "trainers") echo "selected"; ?>>
                            Trainers
                        </option>
                        <option value="members" <?php if ($_SESSION['dataSelection'] == "members") echo "selected"; ?>>
                            Members
                        </option>
                        <option value="admins" <?php if ($_SESSION['dataSelection'] == "admins") echo "selected"; ?>>
                            Admins
                        </option>
                    </select>
                </form>
            </li>
            <li><button class="table-btn"><a href="add-new-member.php">Add</a></button></li>
        </ul>
    </div>

    <div class="table">
        <?php
        include("includes/config.php");

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if (isset($_POST['dataSelection'])) {
            $selectedData = $_POST['dataSelection'];

            if ($selectedData == "trainers") {
                $query = "SELECT * FROM trainers";
                $result = mysqli_query($con, $query);
            
                if (mysqli_num_rows($result) > 0) {
                    echo "<h2>Trainers</h2>";
                    echo "<table>
                            <thead>
                                <tr>
                                    <th>TrainerID</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>";
            
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["TrainerID"] . "</td>";
                        echo "<td>" . $row["FirstName"] . "</td>";
                        echo "<td>" . $row["LastName"] . "</td>";
                        echo "<td>" . $row["Email"] . "</td>";
                        echo "<td>
                            <form method='post' action='includes/remove-trainer.php'>
                            <input type='hidden' name='removeTrainerID' value='" . $row["TrainerID"] . "'>
                            <button class='table-btn' type='submit' name='removeTrainer'>Remove</button>
                            </form>
                            </td>";
                    }

                    echo "</tr>";
            
                } else {
                    echo "<table>
                            <tr><td colspan='5'>No data available</td></tr>
                          </table>";
                }

                echo "</tbody></table>";
            }
            
            
            if ($selectedData == "members") {
                $query = "SELECT * FROM members";
                $result = mysqli_query($con, $query);

                if (mysqli_num_rows($result) > 0) {
                    echo "<h2>Members</h2>";
                    echo "<table>
                            <thead>
                                <tr>
                                    <th>MemberID</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["MemberID"] . "</td>";
                        echo "<td>" . $row["FirstName"] . "</td>";
                        echo "<td>" . $row["LastName"] . "</td>";
                        echo "<td>" . $row["Email"] . "</td>";
                        echo "<td>
                                <form method='post' action='includes/remove-member.php'>
                                    <input type='hidden' name='removeMemberID' value='" . $row["MemberID"] . "'>
                                    <button class='table-btn' type='submit' name='removeMember'>Remove</button>
                                </form>
                            </td>";
                        echo "</tr>";
                    }

                    echo "</tbody></table>";
                } else {
                    echo "<table>
                            <tr><td colspan='5'>No data available</td></tr>
                          </table>";
                }
            } 
            
            
            if ($selectedData == "admins") {
                $query = "SELECT * FROM admins";
                $result = mysqli_query($con, $query);

                if (mysqli_num_rows($result) > 0) {
                    echo "<h2>Admins</h2>";
                    echo "<table>
                            <thead>
                                <tr>
                                    <th>AdminID</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["AdminID"] . "</td>";
                        echo "<td>" . $row["FirstName"] . "</td>";
                        echo "<td>" . $row["LastName"] . "</td>";
                        echo "<td>" . $row["Email"] . "</td>";
                        echo "<td>
                        
                                    <form method='post' action='includes/remove-admin.php''>
                                    <input type='hidden' name='removeAdminID' value='" . $row["AdminID"] . "'>
                                    <button class='table-btn' type='submit' name='removeAdmin'>Remove</button>
                                    </form>
                                    </td>";
                    }
                    
                    echo "</tr>";

                } else {
                    echo "<table>
                            <tr><td colspan='5'>No data available</td></tr>
                          </table>";
                }
            }

            echo "</tbody></table>";

        }

        mysqli_close($con);
        ?>
    </div>
</div>

<?php include("includes/views/footer.php") ?>