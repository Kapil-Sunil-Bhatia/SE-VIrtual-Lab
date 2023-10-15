<!DOCTYPE html>
<html lang="en">

<head>
    <title>Deployment Diagram</title>
    <!-- Link Styles -->
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="sidebar">
        <div class="logo_details">
            <i class="bx bxl-audible icon"></i>
            <div class="logo_name">Deployment Diagram</div>
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
                <a href="https://se-vlab.onrender.com/" target="_blank">
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
        <div class="text4"><i class='bx bxs-caret-right-circle'></i> Deployment Diagram</div>
        <br>
        <div class="text5">
            <i class='bx bxs-chevron-right'></i> Different Notations used in Deployment Diagram are :
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i> Node: Represented as a box with the node's name inside.
            <br>
            <img src="../images/1d.png">
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i> Component: Represented as a rectangle with the component's name inside.
            <br>
            <img src="../images/2d.png">
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i> Artifact: Represented as a rectangle with the artifact's name inside,
            often shown attached to components.
            <br>
            <img src="../images/3d.png">
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i> Deployment Relationship: Shown as a line with an arrow, indicating the
            deployment of components on nodes or artifacts on nodes.
            <br>
            <img src="../images/4d.png">
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i> Association Relationship: Used to represent associations or
            dependencies between nodes, components, or artifacts.
            <br>
            <img src="../images/5d.png">
            <br>
            <br>
        </div>


    </section>
    <!-- Scripts -->
    <script src="script.js"></script>
</body>

</html>