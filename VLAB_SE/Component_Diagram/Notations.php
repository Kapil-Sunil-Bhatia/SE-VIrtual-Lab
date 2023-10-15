<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../../index.php");
    exit;
}?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Component Diagram</title>
    <!-- Link Styles -->
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
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
        <div class="text3"><u>NOTATIONS</u> : </div>
        <br>
        <div class="text4"><i class='bx bxs-caret-right-circle'></i> Component Diagram</div>
        <br>
        <div class="text5">
            <i class='bx bxs-chevron-right'></i> Different Notations used in Component Diagram are :
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i> Initial State
            <br>
            <img src="../images/1c.png">
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i> Actor
            <br>
            <img src="../images/2c.png">
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i> Aggregation
            <br>
            <img src="../images/3c.png">
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i> Component
            <br>
            <img src="../images/4c.png">
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>Control Flow
            <br>
            <img src="../images/5c.png">
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>Dependency
            <br>
            <img src="../images/6c.png">
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i> Interface
            <br>
            <img src="../images/7c.png">
            <br>
        </div>


    </section>
    <!-- Scripts -->
    <script src="script.js"></script>
</body>

</html>
