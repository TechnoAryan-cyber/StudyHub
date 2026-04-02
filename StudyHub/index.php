<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyHub - Dashboard</title>
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

    <!-- Main Content -->
    <div class="container">
        <h1>Welcome to StudyHub Student Dashboard</h1>
        <p>A simple utility portal to manage your academic information effectively.</p>
        
        <div class="grid" style="margin-top: 2rem;">
            <div class="card">
                <h3>View Notices</h3>
                <p>Stay updated with latest college announcements and updates.</p>
                <a href="notices.php" class="btn" style="margin-top: 10px;">Go to Notices</a>
            </div>
            
            <div class="card">
                <h3>Weekly Timetable</h3>
                <p>Check your class schedule for the week ahead.</p>
                <a href="timetable.php" class="btn" style="margin-top: 10px;">View Timetable</a>
            </div>
            
            <div class="card">
                <h3>Take a Quiz</h3>
                <p>Test your knowledge with our MCQ-based quiz system.</p>
                <a href="quiz.php" class="btn" style="margin-top: 10px;">Start Quiz</a>
            </div>
            
            <div class="card">
                <h3>Provide Feedback</h3>
                <p>We value your suggestions. Let us know how we can improve.</p>
                <a href="feedback.php" class="btn" style="margin-top: 10px;">Give Feedback</a>
            </div>
        </div>

        <div class="card" style="margin-top: 2rem;">
            <h2>Quick Academic Info</h2>
            <p><strong>Course:</strong> B.Tech - Computer Science & Engineering</p>
            <p><strong>Semester:</strong> 6th</p>
            <p><strong>Batch:</strong> 2023-2027</p>
        </div>
    </div>

    <!-- Footer -->
    <footer style="text-align: center; padding: 2rem; color: #7f8c8d;">
        &copy; 2026 StudyHub Student Portal. All Rights Reserved.
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
