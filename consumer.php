<html>

<head>
    <title>
        Farm-Ez
    </title>
    <link rel="stylesheet" href="consumerstyle.css">

</head>

<body>
    <div class="banner">
        <div class="navbar">
            <center><img src="picture2.png" class="logo"></center>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Stats</a></li>
                <li><a href="#">Notifications</a></li>
            </ul>
        </div>

        <div class="wrapper">
            <div class="form-box login">
                <h2>Login</h2>
                <form action="" method="post">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="cmail" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="cpassword" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <!-- <input type="submit" value="login"> -->
                    <div class="login-register">
                        <p>Don't have an account ? <a href="#" class="register-link">Register</a></p>
                    </div>
                </form>

                <!-- ///////////////////////////////////////////////////////// -->
                <?php
                session_start();
                // Database connection parameters
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "consumer";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Check if form is submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Retrieve user input
                    $email = $_POST['cmail'];
                    $password = $_POST['cpassword'];

                    // Validate user credentials
                    $sql = "SELECT * FROM consumer_details WHERE email = '$email' AND password = '$password'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // User authentication successful

                        $row = $result->fetch_assoc();
                        $_SESSION["name"] = $row["name"];

                        echo "<script>
                            alert('Login successful. Welcome!');
                            window.location.href = 'index.php';
                            </script>";
                    } else {
                        // User authentication failed
                        echo "<script>
                            alert('Invalid email or password. Please try again.');
                            </script>";
                    }
                }

                // Close the database connection
                $conn->close();
                ?>


                <!-- ///////////////////////////////////////////////////////////// -->

            </div>

            <div class="form-box register">
                <h2>Registration</h2>
                <form action="">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" name="cname" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="cemail" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="cpwd" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox"> I agree to terms & conditions</label>
                        <!-- <a href="#">Forgot Password?</a> -->
                    </div>
                    <button type="submit" class="btn">Register</button>
                    <div class="login-register">
                        <p>Already have an account ? <a href="#" class="login-link"> Login</a></p>
                    </div>
                </form>

                <?php
                $usrename = "root";
                $servername = "localhost";
                $password = "";
                $dbname = "consumer";

                if (isset($_GET["cname"]) && isset($_GET["cpwd"]) && isset($_GET["cemail"])) {

                    $cname = $_GET["cname"];
                    $cpwd = $_GET["cpwd"];
                    $cemail = $_GET["cemail"];

                    $conn = new mysqli($servername, $usrename, $password, $dbname);
                    if ($conn->connect_error) {
                        echo "error: " . $conn->connect_error;
                    }

                    $sql = "INSERT INTO consumer_details (name,password,email) VALUES ('" . $cname . "','" . $cpwd . "','" . $cemail . "')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<center><h4>Regestration Successfull</h4></center>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();

                } else {
                    echo "";
                }
                ?>

                <!-- ///////////////////////////////// -->
            </div>
        </div>
        <div class="hang">
            <h1>Hello Consumer ,</h1><br>
            <hr><br>
            <h3>Please do login here</h3>
            <h3>with your Email and password</h3>
            <h3>or Register if you are new user.</h3>
        </div>

    </div>

    <script src="conscript.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>