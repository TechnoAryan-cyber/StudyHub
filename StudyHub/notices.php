<?php
// Include database connection
include('includes/db.php');

// Fetch notices from database
$sql = "SELECT * FROM notices ORDER BY date DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyHub - Notices</title>
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
        <h1>Latest Notices</h1>
        <p>Keep track of all important announcements from the college.</p>

        <div style="margin-top: 1.5rem;">
            <?php
            if (mysqli_num_rows($result) > 0) {
                // Loop through each notice
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="notice-item">
                        <div class="notice-date">Date: <?php echo date('d M, Y', strtotime($row['date'])); ?></div>
                        <h3 style="margin: 5px 0;"><?php echo htmlspecialchars($row['title']); ?></h3>
                        <p><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>
                    </div>
                    <?php
                }
            } else {
                echo "<div class='card'><p>No notices found.</p></div>";
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer style="text-align: center; padding: 2rem; color: #7f8c8d;">
        &copy; 2026 StudyHub Student Portal. All Rights Reserved.
    </footer>
</body>
</html>
