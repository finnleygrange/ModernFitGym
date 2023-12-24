<?php include("includes/views/header.php"); ?>

<div class="main-container">
    <div class="schedule-container">
        <h1 id="h1-schedule">Weekly Gym Schedule</h1>
        <table class="schedule-table">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Workout</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include("includes/config.php");
                
                $memberID = $_SESSION["id"];
                $query = "SELECT * FROM schedule WHERE MemberID = $memberID";
                $result = mysqli_query($con,$query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                        <td class='day'>Monday</td>
                        <td>$row[Monday]</td<
                    </tr>
                    <tr>
                        <td class='day'>Tuesday</td>
                        <td>$row[Tuesday]</td<
                    </tr>
                    <tr>
                        <td class='day'>Wednesday</td>
                        <td>$row[Wednesday]</td<
                    </tr>
                    <tr>
                        <td class='day'>Thursday</td>
                        <td>$row[Thursday]</td<
                    </tr>
                    <tr>
                        <td class='day'>Friday</td>
                        <td>$row[Friday]</td<
                    </tr>
                    <tr>
                        <td class='day'>Saturday</td>
                        <td>$row[Saturday]</td<
                    </tr>
                    <tr>
                        <td class='day'>Sunday</td>
                        <td>$row[Sunday]</td<
                    </tr>";
                    }
                } else {
                    echo "<tr>
                        <td class='day'>Monday</td>
                    </tr>
                    <tr>
                        <td class='day'>Tuesday</td>
                    </tr>
                    <tr>
                        <td class='day'>Wednesday</td>
                    </tr>
                    <tr>
                        <td class='day'>Thursday</td>
                    </tr>
                    <tr>
                        <td class='day'>Friday</td>
                    </tr>
                    <tr>
                        <td class='day'>Saturday</td>
                    </tr>
                    <tr>
                        <td class='day'>Sunday</td>
                    </tr>";
                }
                ?>
                


            </tbody>

        </table>
        <a href='log-schedule.php'><button class='nutrion-table-btn' type='button'>Add</button></a>
    </div>
</div>

<?php include("includes/views/footer.php") ?>