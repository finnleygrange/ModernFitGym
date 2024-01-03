<?php include("includes/views/header.php"); ?>

<div class="main-container">
    <div class="table">
        <?php
        include("includes/config.php");

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
            
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
                                <a href='member-progress.php?memberID=" . $row["MemberID"] . "'>
                                    <button class='table-btn' type='submit' name='viewProgress'>View Progress</button>
                                </a>
                            </td>";

                        echo "</tr>";
                    }

                    echo "</tbody></table>";
                } else {
                    echo "<table>
                            <tr><td colspan='5'>No data available</td></tr>
                          </table>";
                }

        mysqli_close($con);
        ?>
    </div>
</div>

<?php include("includes/views/footer.php"); ?>