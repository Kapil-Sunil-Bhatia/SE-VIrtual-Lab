<?php
// Initialize the session
include '../../config.php';
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../../index.php");
    exit;
}
$username = $_SESSION['username'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $overall_experience = $_POST['overall_experience'];
    $ease_of_use = $_POST['ease_of_use'];
    $clarity_of_instructions = $_POST['clarity_of_instructions'];
    $technical_performance = $_POST['technical_performance'];
    $content_relevance = $_POST['content_relevance'];
    $suggestions = $_POST['suggestions'];
    $liked_most = $_POST['liked_most'];
    $areas_to_improve = $_POST['areas_to_improve'];
    $additional_comments = $_POST['additional_comments'];
    $recommendation = $_POST['recommendation'];

    $sql = "INSERT INTO feedback (overall_experience, ease_of_use, clarity_of_instructions, technical_performance, content_relevance, suggestions, liked_most, areas_to_improve, additional_comments, recommendation, username) VALUES ('$overall_experience', '$ease_of_use', '$clarity_of_instructions', '$technical_performance', '$content_relevance', '$suggestions', '$liked_most', '$areas_to_improve', '$additional_comments', '$recommendation', '$username')";

    if ($link->query($sql) === true) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }

    $link->close();
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Component Diagram</title>
    <!-- Link Styles -->
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0 auto;
        max-width: 600px;
        padding: 20px;
        background-color: #fdf7c3;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    label,
    select {
        display: block;
        margin-bottom: 10px;
    }

    select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    </style>
    <div class="sidebar">
        <div class="logo_details">
            <i class="bx bxl-audible icon"></i>
            <div class="logo_name">Component Diagram</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="expt.php">
                    <i class='bx bx-home-alt-2'></i>
                    <span class="link_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="Theory.php">
                    <i class='bx bx-book-add'></i>
                    <span class="link_name">Theory</span>
                </a>
                <span class="tooltip">Theory</span>
            </li>

            <li>
                <a href="Notations.php">
                    <i class='bx bxs-book-content'></i>
                    <span class="link_name">Notations</span>
                </a>
                <span class="tooltip">Notations</span>
            </li>
            <li>
                <a href="case_study.php">
                    <i class='bx bx-bar-chart-alt-2'></i>
                    <span class="link_name">Case Study</span>
                </a>
                <span class="tooltip">Case Study</span>
            </li>
            <li>
                <a href="https://component-diagram.onrender.com/" target="_blank">
                    <i class='bx bx-skip-next-circle'></i>
                    <span class="link_name">Simulator</span>
                </a>
                <span class="tooltip">Simulator</span>
            </li>
            <li>
                <a href="Quiz_main\index.html" target="_blank">
                    <i class='bx bxs-message-square-dots'></i>
                    <span class="link_name">Quiz</span>
                </a>
                <span class="tooltip">Quiz</span>
            </li>
            <li>
                <a href="feedback.php">
                    <i class='bx bx-message-dots'></i>
                    <span class="link_name">Feedback</span>
                </a>
                <span class="tooltip">Feedback</span>
            </li>
            <li>
                <a href="../../welcome.php">
                    <i class='bx bxs-home'></i>
                    <span class="link_name">Home Page</span>
                </a>
                <span class="tooltip">Home Page</span>
            </li>


        </ul>
    </div>
    <section class="home-section">
        <div class="text3"><u>FEEDBACK</u> : </div>
        <form method="post">
            <h1>Virtual Lab Feedback Form</h1>
            <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">

            <label for="overall_experience">Overall Experience:</label>
            <select name="overall_experience" id="overall_experience" required>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Below Average">Below Average</option>
                <option value="Poor">Poor</option>
            </select>

            <label for="ease_of_use">Ease of Use:</label>
            <select name="ease_of_use" id="ease_of_use" required>
                <option value="Very Easy">Very Easy</option>
                <option value="Easy">Easy</option>
                <option value="Neutral">Neutral</option>
                <option value="Difficult">Difficult</option>
                <option value="Very Difficult">Very Difficult</option>
            </select>

            <label for="clarity_of_instructions">Clarity of Instructions:</label>
            <select name="clarity_of_instructions" id="clarity_of_instructions" required>
                <option value="Very Clear">Very Clear</option>
                <option value="Clear">Clear</option>
                <option value="Neutral">Neutral</option>
                <option value="Confusing">Confusing</option>
                <option value="Very Confusing">Very Confusing</option>
            </select>

            <label for="technical_performance">Technical Performance:</label>
            <select name="technical_performance" id="technical_performance" required>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Below Average">Below Average</option>
                <option value="Poor">Poor</option>
            </select>

            <label for="content_relevance">Content Relevance:</label>
            <select name="content_relevance" id="content_relevance" required>
                <option value="Highly Relevant">Highly Relevant</option>
                <option value="Relevant">Relevant</option>
                <option value="Neutral">Neutral</option>
                <option value="Not Very Relevant">Not Very Relevant</option>
                <option value="Irrelevant">Irrelevant</option>
            </select>

            <label for="suggestions">Suggestions for Improvement:</label>
            <textarea name="suggestions" id="suggestions" rows="4" required></textarea>

            <label for="liked_most">What did you like the most about the virtual lab?</label>
            <textarea name="liked_most" id="liked_most" rows="4" required></textarea>

            <label for="areas_to_improve">What areas do you think need improvement?</label>
            <textarea name="areas_to_improve" id="areas_to_improve" rows="4" required></textarea>

            <label for="additional_comments">Additional Comments or Suggestions:</label>
            <textarea name="additional_comments" id="additional_comments" rows="4"></textarea>

            <label for="recommendation">Would you recommend this virtual lab to others?</label>
            <input type="radio" name="recommendation" value="Yes" required> Yes
            <input type="radio" name="recommendation" value="No" required> No

            <input type="submit" value="Submit">
        </form>
    </section>
    <!-- Scripts -->
</body>

</html>