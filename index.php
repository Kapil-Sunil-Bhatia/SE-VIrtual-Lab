<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else {
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else {
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="FAVICON1.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Roboto:wght@300;400&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS only -->
    <style>
    body {
        font: 14px sans-serif;

        height: 100vh;
        margin: 0;
        background-color: #f8f9fa;
    }

    .wrapper {
        width: 360px;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

    }

    .center {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .alert {
        margin-top: 1rem;
    }

    .logo {
        height: 6rem;
        width: 100%;
    }

    #trust {
        height: 50px;
        width: 80px;
        margin-right: 20px;
    }

    .icons a {
        color: black;
        text-decoration: none;
        margin: 0 0.3rem;
    }

    .icons a:hover {
        color: #b7202e;
    }

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #9b2928;
        color: white;
        text-align: center;
    }

    .footer-content {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        background-color: #9b2928;
    }

    .footer-content h6 {
        line-height: 1rem;
        color: white;
        line-height: 25px;
        letter-spacing: 1px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand"><img class="logo" src="images/Somaiya1.png" alt="logo"></a>
        <form class="form-inline">
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
                <img id="trust" src="images/Trust.png" alt="Trust.png">
            </div>
            <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
        </form>
    </nav>

    <div class="center">
        <div class="wrapper">
            <h2>Login</h2>
            <p>Please fill in your credentials to login.</p>

            <?php
if (!empty($login_err)) {
    echo '<div class="alert alert-danger">' . $login_err . '</div>';
}
?>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username"
                        class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password"
                        class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
                <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
            </form>
        </div>
    </div>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <footer>
        <div class="footer-content">

            <h6><b>Department Of Computer Engineering</b></h6>
            <h6><i class="bi bi-c-circle"></i><b>2022-23</b> </h6>
            <h6><b>Guided by : Prof. Chitra Bhole</b></h6>
            <h6><b>Developed by : Dakshita Kolte, Kapil Bhatia, Palak Desai, Devanshi Joshi</b></h6>
        </div>
    </footer>

</body>

</html>