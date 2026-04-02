-- Database creation for StudyHub
CREATE DATABASE IF NOT EXISTS studyhub_db;
USE studyhub_db;

-- Table for Notices
CREATE TABLE IF NOT EXISTS notices (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    date DATE NOT NULL
);

-- Table for Timetable
CREATE TABLE IF NOT EXISTS timetable (
    id INT AUTO_INCREMENT PRIMARY KEY,
    day VARCHAR(20) NOT NULL,
    subject VARCHAR(100) NOT NULL,
    time VARCHAR(50) NOT NULL
);

-- Table for Quiz Questions
CREATE TABLE IF NOT EXISTS quiz_questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT NOT NULL,
    option1 VARCHAR(255) NOT NULL,
    option2 VARCHAR(255) NOT NULL,
    option3 VARCHAR(255) NOT NULL,
    option4 VARCHAR(255) NOT NULL,
    correct_answer VARCHAR(255) NOT NULL
);

-- Table for Feedback
CREATE TABLE IF NOT EXISTS feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Sample Data for Notices
INSERT INTO notices (title, content, date) VALUES
('Mid-Semester Exams', 'The mid-semester exams will begin from April 10th.', '2026-03-15'),
('Workshop on Web Dev', 'Join the upcoming PHP & MySQL workshop this Friday at 2 PM.', '2026-03-16'),
('Holidays Update', 'The college will remain closed on March 25th for Holi.', '2026-03-17');

-- Sample Data for Timetable
INSERT INTO timetable (day, subject, time) VALUES
('Monday', 'Web Technology', '09:00 AM - 10:00 AM'),
('Monday', 'Database Systems', '10:00 AM - 11:00 AM'),
('Tuesday', 'Software Engineering', '09:00 AM - 10:00 AM'),
('Tuesday', 'Operating Systems', '11:00 AM - 12:00 PM'),
('Wednesday', 'Web Technology Lab', '02:00 PM - 04:00 PM');

-- Sample Data for Quiz
INSERT INTO quiz_questions (question, option1, option2, option3, option4, correct_answer) VALUES
('What does PHP stand for?', 'Personal Home Page', 'PHP: Hypertext Preprocessor', 'Private Home Page', 'Personal Hypertext Processor', 'PHP: Hypertext Preprocessor'),
('Which of the following is used to connect to a MySQL database in PHP?', 'mysqli_connect()', 'mysql_connect()', 'db_connect()', 'connect_db()', 'mysqli_connect()'),
('What does SQL stand for?', 'Structured Query Language', 'Simple Query Language', 'Standard Query Language', 'Sequential Query Language', 'Structured Query Language'),
('Which HTML tag is used to create a hyperlink?', '<a>', '<link>', '<href>', '<url>', '<a>');
