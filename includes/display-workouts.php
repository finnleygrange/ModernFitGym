<?php
    include("includes/config.php");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM logs";
    $result = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["LogID"] . "</td>";
        echo "<td>" . $row["MemberID"] . "</td>";
        echo "<td>" . $row["Date"] . "</td>";
        echo "<td>" . $row["ExerciseDescription"] . "</td>";
        echo "<td>" . $row["ExerciseDuration"] . "</td>";
        echo "</tr>";
    }
    } else {
    echo "<tr>
        <td colspan='7'>No data available</td>
    </tr>";
    }
?>