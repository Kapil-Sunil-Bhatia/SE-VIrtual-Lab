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

        <div class="text3"><u>CASE STUDY : AUTOMATED TELLER MACHINE (ATM) SYSTEM </u></div>
        <br>
        <div class="text4"><i class='bx bxs-caret-right-circle'></i> COMPONENTS </div>
        <br>
        <div class="text5">
            1. ATM Machine
            <br>
            <i class='bx bxs-chevron-right'></i>Physical hardware and software components responsible for interacting
            with customers and performing ATM transactions.
            <br>
            <i class='bx bxs-chevron-right'></i>Subcomponents: Customer Station, Card Reader, Transaction Processor.
            <br>
            <br>
            2. Customer Station:
            <br>
            <i class='bx bxs-chevron-right'></i>The interface through which customers interact with the ATM to perform
            transactions.
            <br>
            <i class='bx bxs-chevron-right'></i>Subcomponents: Keypad, Display, Cash Dispenser Interface.
            <br>
            <br>
            3. Card Reader:
            <br>
            <i class='bx bxs-chevron-right'></i>Reads and validates the customer's ATM card.
            <br>
            <i class='bx bxs-chevron-right'></i>Subcomponents: Card Reader Mechanism, Card Validation.
            <br>
            <br>
            4. Transaction Processor:
            <br>
            <i class='bx bxs-chevron-right'></i>Processes various types of ATM transactions and interacts with the
            bank's databases.
            <br>
            <i class='bx bxs-chevron-right'></i>Subcomponents: Transaction Manager, Account Balance, Fund Transfer.
            <br>
            <br>
            5. Bank Databases:
            <br>
            <i class='bx bxs-chevron-right'></i>Central database(s) storing customer account information, transaction
            history, and other banking-related data.
            <br>
            <i class='bx bxs-chevron-right'></i>Subcomponents: Customer Account Database, Transaction History Database.
            <br>
            <br>
            6. Webpage:
            <br>
            <i class='bx bxs-chevron-right'></i>The online banking interface accessible through the ATM for certain
            transactions.
            <br>
            <i class='bx bxs-chevron-right'></i>Subcomponents: Webpage Interface, Webpage Data Retrieval.
            <br>
            <br>
            7. Employee Station:
            <br>
            <i class='bx bxs-chevron-right'></i>A workstation used by bank employees to manage and maintain the ATM
            system.
            <br>
            <i class='bx bxs-chevron-right'></i>Subcomponents: Administrative Interface, System Logs, Remote Control.
            <br>
            <br>
            8. Client Desktop:
            <br>
            <i class='bx bxs-chevron-right'></i>The interface through which clients access online banking services from
            a desktop computer.
            <br>
            <i class='bx bxs-chevron-right'></i>Subcomponents: Desktop Interface, Client Database Access.
            <br>
            <br>
            <b>Component-based Diagram:</b>
            <br>
            <img src="../images/Picture2.png">
        </div>
        <br>
        <br>
        <br>
        <br>



        </div>




    </section>
    <!-- Scripts -->
    <script src="script.js"></script>
</body>

</html>
