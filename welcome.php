<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: welcome.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Virtual Lab of Software Engineering</title>
    <!-- Link Styles -->
    <!-- <link rel="stylesheet" href="/style.css"> -->
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <style>
    .btn {
        background-color: #9b2928;
        color: #fff;
        border-radius: 12px;
        padding: 5px;
        margin: 5px;
        text-decoration: none;
    }

    .btn:hover {
        font-size: 20px;
    }

    .button {
        display: inline-block;
        padding: 15px 25px;
        font-size: 24px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
    }

    .button:hover {
        background-color: #3e8e41
    }

    .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
    </style>
    <div class="nav">
        <nav>
            <div class="img">

                <img id="logo" src="images/Somaiya1.png" alt="">

            </div>
            <div class="row">

                <div class="icons">
                    <button type="button" name="button"> <a href="https://www.somaiya.edu.in/en" target="_blank">
                            <i class="bi bi-globe"></i> somaiya.edu
                        </a></button>
                    <a href="https://www.facebook.com/kjsieitofficial" target="_blank">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://twitter.com/kjsieit1" target="_blank">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/kjsieit_22/" target="_blank">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/kjsieitofficial" target="_blank">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQGGuSH8KhlwSwAAAYLQ0-lI197THvyK68qNQUCy_45bItZlyVxB3zJIOqkcWsZbXs1Fbm5WsDzldL7D_aRcaijw5KvMXS4IdirAPV3v2BqILFUp5pcJxb0qpO5rUYdLIvVI5aE=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fkjsieit"
                        target="_blank">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <img id="trust" src="images/Trust.png" alt="">
                </div>
            </div>
        </nav>

        <div class="background">
            <h3 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.
            </h3>
            <div class="header">
                <div class="headerWrapper">
                    <!-- <h6>we do</h6> -->
                    <h1>Virtual Lab of <br> Software Engineering</h1>
                    <div class="circle blue"></div>
                    <div class="square red"></div>
                    <div class="triangle green"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 177.893 177.893">
                            <defs>
                                <style>
                                .a {
                                    fill: url(#a);
                                }

                                .b {
                                    filter: url(#b);
                                }
                                </style>
                                <linearGradient id="a" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="#3dbed5" />
                                    <stop offset="1" stop-color="#3dd55a" />
                                </linearGradient>
                                <filter id="b" x="0" y="0" width="177.893" height="177.893"
                                    filterUnits="userSpaceOnUse">
                                    <feOffset dx="3" dy="3" input="SourceAlpha" />
                                    <feGaussianBlur stdDeviation="7.5" result="c" />
                                    <feFlood flood-color="#3dd55a" flood-opacity="0.396" />
                                    <feComposite operator="in" in2="c" />
                                    <feComposite in="SourceGraphic" />
                                </filter>
                            </defs>
                            <g class="b" transform="matrix(1, 0, 0, 1, 0, 0)">
                                <path class="a" d="M136.727,21104.928l-50.222,100h100Z"
                                    transform="translate(-8978.23 -19029.24) rotate(-25)" />
                            </g>
                        </svg></div>
                    <div class="circle orange"></div>
                </div>
            </div>
        </div>

        <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        </p>
        <br>
        <div class="buttons">
            <div class="btn-group">
                <a href="/VLAB_SE/Component_Diagram/expt.php"><button class="button">Component Diagram</button></a>
                <a href="/VLAB_SE/Deployment_Diagram/expt.php"><button class="button">Deployment Diagram</button></a>
            </div>
        </div>
        <br>
        <br>
        <br>



        <script>
        $(document).ready(function() {
            $('#nav-icon').click(function() {
                $(this).toggleClass('open');
                $(".overlay").toggleClass("open");
                $(".overlay a").toggleClass("open");
                $(".overlay p").toggleClass("open");
            });

            // Scroll Reveal
            // ScrollReveal().reveal('.services .grid .card');

            $('.square.blue').on('inview', function(event, isInView) {
                if (isInView) {
                    // element is now visible in the viewport
                    $(this).addClass("in-view");
                } else {
                    // element has gone out of viewport
                    $(this).removeClass("in-view");
                }
            });
        });
        </script>
        <footer>
            <div class="footer-content">
                <h6>Department Of Computer Engineering</h6>
                <br>
                <h6 style="font-size: 20px;"><i class="bi bi-c-circle"></i> 2022-23</h6>
                <br>
                <h6>Guided by : Prof. Chitra Bhole</h6>
                <br>
                <h6>Developed by : Dakshita Kolte, Kapil Bhatia, Palak Desai, Devanshi Joshi</h6>
            </div>
</body>

</html>