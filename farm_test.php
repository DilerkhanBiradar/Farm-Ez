<?php
                        session_start();
                        $name = $_SESSION["name"];
                    
                        echo("<br><h4>Hi , $name</h4>");
                        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Farm-Ez products</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="product1.css">
    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        /* Add some basic styling for better presentation 
        #searchResults {
            margin-top: 10px;
            border: 1px solid #ccc;
            padding: 10px;
        }*/

        /* Style the microphone icon */
        .microphone-icon {
            position: relative;
            top: -6px;
            left: -5px;
            cursor: pointer;
            color: #000000; /* Set the color as needed */
            width: 23px;
            height: 23px;
            opacity: 0.7;
        }
        .cart{
            font-size: 30px;
            color: #ffffff;
            opacity: 1;
            padding: 10px;
        }
        .cart:hover{
            color: #ffffff;
        }
       
        /* Style for the modal */
        #voiceModal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color:transparent;
            box-shadow: 0 0 10px rgba(225, 220, 220, 0.1);
            z-index: 1000;
            border-radius: 10px;
        }
        .search button{
            position: relative;
            left: -20px;
        }

        .fa-shopping-cart{
            position: relative;
            top: 10px;
            height: 35px;
            width: 35px;
            color: #000000;
            opacity: 0.7;
        }

        #searchInput{
           position: relative;
           left: 100px;
        }
        /* Animation for hearing tunes */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }

        .hearing-tunes {
            animation: pulse 1s infinite;
            font-size: 24px;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #718f7e, #4a7b67);
            border-radius: 10px;
            padding:10px;
        }

        


        
            .imageContainer img {
                max-width: 100px;
                max-height: 100px;
                object-fit: cover;
            }
    
            .closeButton {
                cursor: pointer;
            }
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
            }
            
            form {
                max-width: 600px;
                margin: 20px auto;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            
            h1 {
                text-align: center;
                color: #333;
            }
            
            label {
                display: block;
                margin-bottom: 8px;
                font-weight: bold;
            }
            
            input[type="text"],
            input[type="number"],
            textarea,
            button {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
            }
            
            input[type="file"] {
                display: none; /* Hide the default file input */
            }
            
            button {
                background-color: #4caf50;
                color: #fff;
                border: none;
                padding: 15px;
                cursor: pointer;
                font-size: 18px;
            }
            
            button:hover {
                background-color: #45a049;
            }
            
            .imageContainer {
                margin-top: 20px;
            }
            
            #selectedFileInfo {
                margin-bottom: 10px;
            }
            
            /* Style the file input container as a button */
            label[for="photo"] {
                display: block;
                background-color: #4caf50;
                color: #fff;
                padding: 10px;
                cursor: pointer;
                border-radius: 4px;
                text-align: center;
                font-size: 16px;
            }
            
            label[for="photo"]:hover {
                background-color: #45a049;
            }
            
            /* Style the selected images container */
            #capturedImageContainer {
                display: flex;
                flex-wrap: wrap;
            }
            
            /* Style each selected image */
            #capturedImageContainer img {
                width: 100px;
                height: 100px;
                margin: 5px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            #popup {
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 20px;
                background-color: #fff;
                border: 1px solid #ccc;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                z-index: 1000;
            }
            .fa-user{
                position: relative;
                left: 1000px;
                color: #333;
                scale: 0.5;
                justify-content: space-between;
            }
            .logout{
                position: relative;
                left: 1010px;
            }
            .out{
                position: relative;
                right: 350px;
                scale: 0.6;
            }
            .outn {
                background-color: transparent;
                border: none;
                color: #fff;
                font-size: 16px;
                padding: 0;
                margin: 0;
                cursor: pointer;
            }

            .outn option {
                background-color: #333;
                color: #fff;
            }
            
           
            
        

    </style>

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="index.php" class="navbar-brand ms-lg-5">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary"><img src="img/Picture2.png" alt="Logo" style="height:120px;width:400px;">
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-end">
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.php" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white"><img src="img/Picture2.png" alt="Logo" style="height:120px;width:400px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="contact.html" class="nav-item nav-link active">Contact</a>
                <!-- <a href="farmer.php">Logout</a> -->
                <i class="fa fa-user"></i>
                <a href="farmer.php" class="nav-item nav-link active logout">Logout</a>
           
                


                    <!-- <a href="#" class="cart">Cart (0)</a> -->
                    <!-- ////////////////////////////////////////////////// -->

                    <!-- ////////////////////////////////////////////////// -->
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- ///////////////////////////////////////////////////// -->
    
    <center>
    
        <form enctype="multipart/form-data">
            <h1>File Upload Example</h1>
        
            <!-- File Upload -->
            <label for="photo">Upload photos:</label>
            <input type="file" id="photo" name="photo" accept="image/*" multiple>
        
            <br><br>
        
            <!-- Container to display selected file information -->
            <div id="selectedFileInfo"></div>
        
            <br><br>
        
            <!-- Display selected images -->
            <div class="imageContainer" id="capturedImageContainer"></div>
        
            <!-- Button to trigger file upload -->
            <button onclick="uploadPhotos()">Upload Photos</button>
        
        
            <h1>Product Information Form</h1>
            
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
        
                <br><br>
        
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
        
                <br><br>
        
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" step="0.01" required>
        
                <br><br>
        
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" required>
        
                <br><br>
        
                <input type="button" value="Submit" onclick="submitForm(event)">
    
               
            </form>
        
            <div id="popup"></div>
         <script>
                function uploadPhotos() {
                    // Get the selected files from the file input
                    var selectedFiles = document.getElementById("photo").files;
        
                    // Log the selected files (you can perform further actions here)
                    if (selectedFiles.length > -1) {
                        console.log("Selected Files:", selectedFiles);
                       // displaySelectedFileInfo(selectedFiles);
                        displaySelectedImages(selectedFiles); // Display the selected images
                    } else {
                        console.log("No files selected.");
                    }
                }
        
                function displaySelectedFileInfo(files) {
                    // Create a paragraph element to display file information
                    var fileInfo = document.createElement("p");
                    fileInfo.textContent = "Selected Files: " + files.length;
        
                    // Append the paragraph element to the container
                    document.getElementById("selectedFileInfo").innerHTML = "";
                    document.getElementById("selectedFileInfo").appendChild(fileInfo);
                }
        
                function displaySelectedImages(files) {
                    // Create a container div
                    var container = document.getElementById("capturedImageContainer");
                    container.innerHTML = "";
        
                    // Loop through selected files and create img elements
                    for (var i = 0; i < files.length; i++) {
                        var image = document.createElement("img");
                        image.src = URL.createObjectURL(files[i]);
        
                        // Create a close button for each image
                        var closeButton = document.createElement("span");
                        closeButton.textContent = "Close";
                        closeButton.className = "closeButton";
                        closeButton.addEventListener("click", createCloseHandler(files[i], image));
        
                        // Create a div to wrap the image and close button
                        var imageWrapper = document.createElement("div");
                        imageWrapper.appendChild(image);
                        imageWrapper.appendChild(closeButton);
        
                        // Append the image and close button wrapper to the container
                        container.appendChild(imageWrapper);
                    }
                }
        
                function createCloseHandler(file, imageElement) {
                    return function () {
                        // Remove the file from the array
                        var selectedFiles = document.getElementById("photo").files;
                        var index = Array.from(selectedFiles).indexOf(file);
                        if (index !== -1) {
                            document.getElementById("photo").value = ""; // Clear the file input
                            selectedFiles = Array.from(selectedFiles);
                            selectedFiles.splice(index, 1);
                            document.getElementById("photo").files = new FileList({ length: selectedFiles.length, item: function (i) { return selectedFiles[i]; } });
                        }
        
                        // Remove the image and close button wrapper from the container
                        imageElement.parentNode.parentNode.removeChild(imageElement.parentNode);
                        displaySelectedFileInfo(selectedFiles);
                    };
                }
                function submitForm(event) {
                    event.preventDefault(); // Prevent the default form submission
        
                    // Get form values
                    var title = document.getElementById('title').value;
                    var description = document.getElementById('description').value;
                    var price = document.getElementById('price').value;
                    var quantity = document.getElementById('quantity').value;
        
                    // Get selected file information
                    var fileInput = document.getElementById('photo');
                    var selectedFiles = fileInput.files;
                    var fileDetails = "Selected Photos:\n";
                    for (var i = 0; i < selectedFiles.length; i++) {
                        fileDetails += selectedFiles[i].name + "\n";
                    }
        
                    // Create a message with entered details and file information
                    var message = "Entered Details:\n";
                    message += "Title: " + title + "\n";
                    message += "Description: " + description + "\n";
                    message += "Price: $" + price + "\n";
                    message += "Quantity: " + quantity + "\n\n";
                    message += fileDetails;
        
                    // Display the message in the popup
                    var popup = document.getElementById('popup');
                    popup.innerText = message;
                    popup.style.display = 'block';
                }
            </script>
        </center>
    

    <!-- ///////////////////////////////////////////////////////////// -->


    <!-- Footer Start -->
    <div class="container-fluid bg-footer bg-primary text-white mt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-white mb-4">Get In Touch</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-white me-2"></i>
                                <p class="text-white mb-0">SDMCET,Dharwad</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-white me-2"></i>
                                <p class="text-white mb-0">Farm-Ez@ymail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-white me-2"></i>
                                <p class="text-white mb-0">+91 1234 567</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Our Services</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Meet The Team</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Latest Blog</a>
                                <a class="text-white" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/logo.png" class="logo" alt="farm-ez">
            <center><b><h1>Farm-Ez</h1></b></center>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-secondary fw-bold" href="#">Farm-Ez</a>. All Rights Reserved.</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>