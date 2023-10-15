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

        <div class="text3"><u>THEORY</u> : </div>
        <br>
        <div class="text4"><i class='bx bxs-caret-right-circle'></i> Deployment Diagram</div>
        <br>
        <div class="text5">
            <i class='bx bxs-chevron-right'></i>A Deployment Diagram in UML (Unified Modeling Language) is a diagram
            that
            represents the physical deployment of software components, hardware nodes, and the connections between them
            within
            a system or an application.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i> It's a type of structural diagram that provides a clear view of how
            software
            and hardware elements are distributed across different nodes or servers in a real-world environment.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>In a Deployment Diagram, the key elements are:
            <br>
            <br>
            1. Nodes
            <br>
            Nodes represent physical entities, such as servers, workstations, or devices, on which software components
            or
            artifacts are deployed. Nodes are typically depicted as boxes.
            <br>
            <br>
            2. Components
            <br>
            Components represent software modules, classes, or packages that are deployed on nodes. These components can
            be
            executable programs, libraries, or other software artifacts.
            <br>
            <br>
            3. Artifacts
            <br>
            Artifacts are instances of physical files or data that are used or produced by components. They can
            represent
            things like configuration files, databases, or documents.
            <br>
            <br>
            4. Dependencies
            <br>
            Lines with arrows connecting nodes, components, and artifacts represent dependencies and associations
            between
            them. For example, a component may depend on a database artifact, or a node may host multiple components.
            <br>
            <br>
        </div>
        <br>
        <br>
        <div class="text4"><i class='bx bxs-caret-right-circle'></i> Advantages</div>
        <br>
        <div class="text5">
            <i class='bx bxs-chevron-right'></i> Visualizing Physical Deployment
            <br>
            Deployment diagrams provide a clear visual representation of how software and hardware components are
            distributed
            across physical nodes. This helps in understanding the system's physical architecture.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i> System Optimization
            <br>
            They help in optimizing the deployment by visualizing the distribution of components and identifying
            bottlenecks
            or potential areas for improvement.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i> Communication
            <br>
            Deployment diagrams facilitate communication among stakeholders, including developers, architects, and
            system
            administrators, by providing a common understanding of the system's physical configuration.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i> Testing and Maintenance
            <br>
            They aid in planning testing and maintenance activities by showing where components are deployed, making it
            easier
            to identify which parts of the system need attention.
            <br>
            <br>
        </div>
        <br>
        <br>
        <div class="text4"><i class='bx bxs-caret-right-circle'></i> Disadvantages</div>
        <br>
        <div class="text5">
            <i class='bx bxs-chevron-right'></i>Complexity
            <br>
            For large-scale systems, deployment diagrams can become complex and challenging to maintain.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>Abstraction Level
            <br>
            Deployment diagrams focus on physical deployment but may not provide detailed information about software
            interactions or behaviors.
            <br>
            <br>
            <i class='bx bxs-chevron-right'></i>Learning Curve
            <br>
            Understanding and creating deployment diagrams may require familiarity with UML notation and concepts, which
            can
            be a learning curve for some individuals.
            <br>
            <br>

        </div>
        <br>
        <br>



    </section>
    <!-- Scripts -->
    <script src="script.js"></script>
</body>

</html>
