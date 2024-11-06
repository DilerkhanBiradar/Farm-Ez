<html>

<head>
    <title>
        Farm-Ez
    </title>
    <link rel="stylesheet" href="farmstyle.css">

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
                        <input type="email" name="fmail" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="fpassword" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn">Login</button>
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
                $dbname = "farmer";
                
                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Check if form is submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Retrieve user input
                    $email = $_POST['fmail'];
                    $password = $_POST['fpassword'];
                    
                    // Validate user credentials
                    $sql = "SELECT * FROM farmer_details WHERE email = '$email' AND password = '$password'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // User authentication successful
                        // $sql1 = "SELECT name FROM farmer_details WHERE email = '$email' AND password = '$password'";
                        // $res = $conn->query($sql1);
                        $row = $result->fetch_assoc();
                        $_SESSION["name"] = $row["name"];

                        echo "<script>
                            alert('Login successful. Welcome!');
                            window.location.href = 'farm_test.php';
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
                        <input type="text" name="fname" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="femail" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="fpwd" required>
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

                <!-- ///////////////////////// -->
                <?php
                $usrename = "root";
                $servername = "localhost";
                $password = "";
                $database = "farmer";

                if (isset($_GET["fname"]) && isset($_GET["fpwd"]) && isset($_GET["femail"])) {

                    $fname = $_GET["fname"];
                    $fpwd = $_GET["fpwd"];
                    $femail = $_GET["femail"];

                    $conn = new mysqli($servername, $usrename, $password, $database);
                    if ($conn->connect_error) {
                        echo "error: " . $conn->connect_error;
                    }

                    $sql = "INSERT INTO farmer_details (name,password,email) VALUES ('" . $fname . "','" . $fpwd . "','" . $femail . "')";

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
            <h1>Hello Farmer ,</h1><br>
            <hr><br>
            <h3>Please do login here</h3>
            <h3>with your Email and password</h3>
            <h3>or Register if you are new user.</h3>
        </div>

    </div>

    <script src="farmscript.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- chat -->

    <!-- chat -->

</body>

</html>