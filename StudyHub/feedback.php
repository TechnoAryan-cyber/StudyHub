<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyHub - Feedback</title>
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
        <h1>Student Feedback</h1>
        <p>Your feedback helps us improve the portal for everyone.</p>

        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'success') {
            echo "<div class='card' style='background: #d4edda; color: #155724;'>Thank you for your feedback! It has been submitted successfully.</div>";
        }
        ?>

        <div class="card" style="margin-top: 2rem;">
            <form id="feedbackForm" action="submit_feedback.php" method="POST" onsubmit="return validateForm()">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>
                
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Enter your feedback here..." required></textarea>
                </div>

                <button type="submit" class="btn">Submit Feedback</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer style="text-align: center; padding: 2rem; color: #7f8c8d;">
        &copy; 2026 StudyHub Student Portal. All Rights Reserved.
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
