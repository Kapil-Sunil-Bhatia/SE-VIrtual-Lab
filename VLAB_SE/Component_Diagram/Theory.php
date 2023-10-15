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

        <div class="text3"><u>THEORY</u> : </div>
        <br>
        <div class="text4"><i class='bx bxs-caret-right-circle'></i> Component Diagram</div>
        <br>
        <div class="text5">
            <i class='bx bxs-chevron-right'></i>Component Diagrams are used to show code modules of a system in Unified
            Modelling Language (UML).
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>They are generally used for modelling subsystems. It represents how each
            and
            every component acts during execution and running of a system program. They are also used to show and
            represent
            structure and organization of all components.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i> The component diagrams represent implementation of view models. The
            component
            diagrams are for representing interfaces and dependencies among software architecture.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>The word component simply means modules of a class that usually
            represents an
            independent subsystem.
            These components have ability to interface with rest of system.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>The component diagram is used to explain working and behaviour of
            various
            components of a system and is static diagrams of UML.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>The main purpose of component diagram is simply to show relationship
            among
            various components of a system. There exists a whole development approach that revolves around components:
            component-based development (CBD).
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>In this approach, component diagrams allow the planner to identify the
            different components so the whole system does what it's supposed to do.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>More commonly, in an OO programming approach, the component diagram
            allows a
            senior developer to group classes together based on common purpose so that the developer and others can look
            at a
            software development project at a high level.
            <br>
        </div>
        <br>
        <br>
        <div class="text4"><i class='bx bxs-caret-right-circle'></i> Advantages</div>
        <br>
        <div class="text5">
            <i class='bx bxs-chevron-right'></i>Component diagrams are very simple, standardized, and very easy to
            understand.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>It is also useful in representing implementation of system.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>These are very useful when you want to make a design of some device that
            contains an input-output socket.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>Use of reusable components also helps in reducing overall development
            cost.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>It is very easy to modify and update implementation without causing any
            other
            side effects.
        </div>
        <br>
        <br>
        <div class="text4"><i class='bx bxs-caret-right-circle'></i> Disadvantages</div>
        <br>
        <div class="text5">
            <i class='bx bxs-chevron-right'></i>They cannot be used for designing Software like web pages, applications,
            etc.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>It also requires sponsoring equipment and actuators for each and every
            component.

        </div>
        <br>
        <br>



    </section>
    <!-- Scripts -->
    <script src="script.js"></script>
</body>

</html>
