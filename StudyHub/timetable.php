<?php
// Include database connection
include('includes/db.php');

// Fetch timetable from database
$sql = "SELECT * FROM timetable ORDER BY FIELD(day, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyHub - Timetable</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="logo">StudyHub</div>
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="notices.php">Notices</a></li>
            <li><a href="timetable.php">Timetable</a></li>
            <li><a href="quiz.php">Quiz</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Weekly Timetable</h1>
        <p>Your current class schedule for this semester.</p>

        <div style="margin-top: 2rem;">
            <table>
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Subject</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><strong><?php echo htmlspecialchars($row['day']); ?></strong></td>
                                <td><?php echo htmlspecialchars($row['subject']); ?></td>
                                <td><?php echo htmlspecialchars($row['time']); ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='3' style='text-align: center;'>No timetable data available.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <footer style="text-align: center; padding: 2rem; color: #7f8c8d;">
        &copy; 2026 StudyHub Student Portal. All Rights Reserved.
    </footer>
</body>
</html>
