<?php
// Include database connection
include('includes/db.php');

// Fetch questions from database
$sql = "SELECT * FROM quiz_questions";
$result = mysqli_query($conn, $sql);
$questions = [];
while ($row = mysqli_fetch_assoc($result)) {
    $questions[] = $row;
}

$score = null;
$total = count($questions);

// Process quiz submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_quiz'])) {
    $score = 0;
    foreach ($questions as $q) {
        $q_id = $q['id'];
        if (isset($_POST['question_' . $q_id])) {
            $user_answer = $_POST['question_' . $q_id];
            if ($user_answer === $q['correct_answer']) {
                $score++;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyHub - Quiz</title>
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
        <h1>Student Quiz</h1>
        <p>Test your knowledge with these multiple-choice questions.</p>

        <?php if ($score !== null): ?>
            <div class="card">
                <div class="quiz-score">
                    Your Score: <?php echo $score; ?> / <?php echo $total; ?>
                </div>
                <p style="text-align: center; margin-top: 10px;">
                    <?php 
                    $percent = ($score / $total) * 100;
                    if ($percent >= 80) echo "Excellent job! You have a great understanding.";
                    elseif ($percent >= 50) echo "Good effort! Keep studying to improve.";
                    else echo "Keep practicing. You'll get better!";
                    ?>
                </p>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="quiz.php" class="btn">Retake Quiz</a>
                </div>
            </div>
        <?php else: ?>
            <form action="quiz.php" method="POST" style="margin-top: 2rem;">
                <?php foreach ($questions as $index => $q): ?>
                    <div class="card quiz-question">
                        <h3>Q<?php echo ($index + 1); ?>: <?php echo htmlspecialchars($q['question']); ?></h3>
                        
                        <label class="quiz-option">
                            <input type="radio" name="question_<?php echo $q['id']; ?>" value="<?php echo htmlspecialchars($q['option1']); ?>" required>
                            <?php echo htmlspecialchars($q['option1']); ?>
                        </label>
                        
                        <label class="quiz-option">
                            <input type="radio" name="question_<?php echo $q['id']; ?>" value="<?php echo htmlspecialchars($q['option2']); ?>">
                            <?php echo htmlspecialchars($q['option2']); ?>
                        </label>
                        
                        <label class="quiz-option">
                            <input type="radio" name="question_<?php echo $q['id']; ?>" value="<?php echo htmlspecialchars($q['option3']); ?>">
                            <?php echo htmlspecialchars($q['option3']); ?>
                        </label>
                        
                        <label class="quiz-option">
                            <input type="radio" name="question_<?php echo $q['id']; ?>" value="<?php echo htmlspecialchars($q['option4']); ?>">
                            <?php echo htmlspecialchars($q['option4']); ?>
                        </label>
                    </div>
                <?php endforeach; ?>

                <div style="text-align: center;">
                    <button type="submit" name="submit_quiz" class="btn">Submit Quiz</button>
                </div>
            </form>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <footer style="text-align: center; padding: 2rem; color: #7f8c8d;">
        &copy; 2026 StudyHub Student Portal. All Rights Reserved.
    </footer>
</body>
</html>
