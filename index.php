<?php
                        session_start();
                        $name = $_SESSION["name"];
                    
                        echo("<div class='namediv'><h4>Hi, $name</h4></div>");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Farm-Ez(main page)</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
            left: -80px;
            cursor: pointer;
            color: #000000; /* Set the color as needed */
            width: 23px;
            height: 23px;
            opacity: 0.7;
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
        .fa-user{
                position: relative;
                left: 50px;
                color: #333;
                scale: 0.5;
                justify-content: space-between;
            }
            .logout{
                position: relative;
                left: 50px;
            }

        .fa-search{
            position: relative;
            left: 620px;
            top: -35px;
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-start">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="index.html" class="navbar-brand ms-lg-5">
                       <center><h1 class="m-0 display-4 text-primary"><span class="text-secondary"><img src="img/Picture2.png" alt="Logo" style="height:120px;width:400px;"></center> 
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
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white"><img src="img/Picture2.png" alt="Logo" style="height:120px;width:400px;">
            </a>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="home.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <a href="product.html" class="nav-item nav-link">Product</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                &nbsp;
                &nbsp;
                &nbsp;
                <div class="search">
                    <!-- ///////////////////////////////////////////// -->

                    <!-- <h1>Search Bar Example</h1> -->

                    <!-- Search Bar -->
                    <form id="searchForm" onsubmit="openResult(); return false;">
                        <input type="text" id="searchInput" name="q" placeholder="Search..." oninput="search()">
                        <!-- Microphone Icon -->
                        <i class="fas fa-microphone microphone-icon" onclick="startVoiceRecognition()"></i>
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                
                    <!-- Display Search Results -->
                    
                
                    <!-- Voice Modal -->
                    <div id="voiceModal">
                        <div class="hearing-tunes"><i style='font-size:24px' class='fas'>&#xf3c9;</i>  Listening...</div>
                    </div>
                
                    <!-- Add Font Awesome CDN script -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
                
                    <script>
                        var recognition; // Declare the recognition object globally
                        var listeningTimer; // Timer for automatic stop after 2 seconds of pause
                
                        function search() {
                            // Get the search query from the input field
                            var query = document.getElementById("searchInput").value;
                
                            // Get the container where search results will be displayed
                            var resultsContainer = document.getElementById("searchResults");
                
                            // Clear previous search results
                            resultsContainer.innerHTML = "";
                
                            // Perform the search only if the query is not empty
                            if (query.trim() !== "") {
                                // Simulate an AJAX request (replace this with your actual AJAX call)
                                // For demonstration purposes, we'll just create a link to the HTML file
                                var resultLink = document.createElement("a");
                                resultLink.href = query.toLowerCase() + ".html"; // Assuming the HTML file is named based on the search query
                                resultLink.textContent = "Open " + query + ".html";
                
                                // Display the link to the HTML file
                                resultsContainer.appendChild(resultLink);
                            }
                        }
                
                        function openResult() {
                            // Get the search query from the input field
                            var query = document.getElementById("searchInput").value;
                
                            // Open the HTML file based on the search query
                            window.location.href = query.toLowerCase() + ".html";
                        }
                
                        function startVoiceRecognition() {
                            // Show the voice modal
                            var voiceModal = document.getElementById('voiceModal');
                            voiceModal.style.display = 'block';
                
                            // Initialize the SpeechRecognition object
                            recognition = new webkitSpeechRecognition() || new SpeechRecognition();
                
                            // Set the language for recognition
                            recognition.lang = 'en-US';
                
                            // Start recognition
                            recognition.start();
                
                            // Event handler for when speech is recognized
                            recognition.onresult = function (event) {
                                var voiceQuery = event.results[0][0].transcript;
                
                                // Set the voice recognition result to the search input
                                document.getElementById("searchInput").value = voiceQuery;
                
                                // Reset the listening timer
                                clearTimeout(listeningTimer);
                                // Start the listening timer again
                                listeningTimer = setTimeout(stopVoiceRecognition, 2000);
                
                                // Trigger the search function
                                search();
                            };
                
                            // Event handler for errors
                            recognition.onerror = function (event) {
                                console.error('Speech recognition error:', event.error);
                            };
                
                            // Event handler for when recognition is ended
                            recognition.onend = function () {
                                console.log('Speech recognition ended.');
                            };
                        }
                
                        function stopVoiceRecognition() {
                            // Stop recognition
                            if (recognition) {
                                recognition.stop();
                            }
                
                            // Hide the voice modal
                            var voiceModal = document.getElementById('voiceModal');
                            voiceModal.style.display = 'none';
                        }
                    </script>   

                    <!-- //////////////////////////////////////////////////////// -->
                    <div id="voiceModal">
                        <div class="hearing-tunes">&#128266; Listening...</div>
                    </div>
                </div>
                <i class="fa fa-user"></i>
                <a href="consumer.php" class="nav-item nav-link active logout">Logout</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h3 class="text-white">Organic Vegetables</h3>
                            <h1 class="display-1 text-white mb-md-4">Organic Vegetables For Healthy Life</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Explore</a> -->
                            <!-- <a href="" class="btn btn-secondary py-md-3 px-md-5">Contact</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h3 class="text-white">Organic Fruits</h3>
                            <h1 class="display-1 text-white mb-md-4">Organic Fruits For Better Health</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Explore</a> -->
                            <!-- <a href="" class="btn btn-secondary py-md-3 px-md-5">Contact</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6">
                    <div class="bg-primary bg-vegetable d-flex flex-column justify-content-center p-5" style="height: 300px;width:450px;">
                        <h3 class="text-white mb-3">Organic Vegetables</h3>
                        <p class="text-white">Experience the pure essence of vegetables untouched by synthetic pesticides or fertilizers.</p>
                        <a class="text-white fw-bold" href="vegetable.html">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-secondary bg-fruit d-flex flex-column justify-content-center p-5" style="height: 300px;width:450px;">
                        <h3 class="text-white mb-3">Organic Fruits</h3>
                        <p class="text-white">Our organic fruits are a testament to the authentic, vibrant flavors that nature intended.</p>
                        <a class="text-white fw-bold" href="fruits.html">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-secondary bg-vegetable d-flex flex-column justify-content-center p-5" style="height: 300px;width:450px;">
                        <h3 class="text-white mb-3">Food grains</h3>
                        <p class="text-white">Our organic fruits are a testament to the authentic, vibrant flavors that nature intended.</p>
                        <a class="text-white fw-bold" href="foodgrain.html">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->


    <!-- About Start -->
    <div class="container-fluid about pt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="d-flex h-100 border border-5 border-primary border-bottom-0 pt-4">
                      <img class="img-fluid mt-auto mx-auto" src="img/about.png" style="height:500px;width:550px;position:sticky;padding:90px;">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <div class="mb-3 pb-2">
                        <h6 class="text-primary text-uppercase">About Us</h6>
                        <h1 class="display-5">We Provide Organic Food For Your Family</h1>
                    </div>
                    <p class="mb-4">We believe in more than just growing organic produce; we believe in cultivating relationships—with our land, our vegetables, and, most importantly, with you, our valued customers. The essence of our farm extends beyond the fields and into the shared experiences we create together..</p>
                    <div class="row gx-5 gy-4">
                        <div class="col-sm-6">
                            <i class="fa fa-seedling display-1 text-secondary"></i>
                            <h4>100% Organic</h4>
                            <p class="mb-0">Organic farmers rely on natural processes and substances to enhance soil fertility, control pests, and promote plant growth.</p>
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-award display-1 text-secondary"></i>
                            <h4>Award Winning</h4>
                            <p class="mb-0">We're proud to carry certifications that ensure the integrity of our farming practices, giving you the confidence that you're choosing the very best for your health and the environment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid bg-primary facts py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-star fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Our Experience</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">5</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Farm Specialist</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">9</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Complete Project</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">10</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Happy Clients</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">50</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->
    

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                        <h6 class="text-primary text-uppercase">Services</h6>
                        <h1 class="display-5">Organic Farm Services</h1>
                    </div>
                    <p class="mb-4">Experience the convenience of farm-fresh goodness delivered straight to your doorstep. Our subscription services ensure that you receive a regular supply of seasonal organic vegetables, fruits, and herbs, handpicked and packed with care. Say goodbye to the supermarket shuffle and embrace the ease of healthy, organic living.</p>
                    <a href="contact.html" class="btn btn-primary py-md-3 px-md-5">Contact Us</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-carrot display-1 text-primary mb-3"></i>
                        <h4>Fresh Vegetables</h4>
                        <p class="mb-0">Our organic vegetables start as seeds planted in nutrient-rich, pesticide-free soil.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <i class="fa fa-apple-alt display-1 text-primary mb-3"></i>
                        <h4>Fresh Fruits</h4>
                        <p class="mb-0">The sweet aroma of ripe fruits and the vibrant colors of nature come together to bring you an exquisite selection of organic delights.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <!-- <i class="fa fa-farm display-1 text-primary mb-3"></i> -->
                        <i class="fa fa-tree display-1 text-primary mb-3"></i>
                        <h4>Food Grains</h4>
                        <p class="mb-0">These tiny powerhouses form the backbone of diets across the globe, offering sustenance, energy, and a plethora of health benefits. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="Farming Plans.html"><div class="service-item bg-light text-center p-5">
                        <i class="fa fa-seedling display-1 text-primary mb-3"></i>
                        <h4>Farming Plans</h4>
                        <p class="mb-0">Discover regenerative agriculture techniques, eco-friendly practices, and guidance on reducing your farm's ecological footprint. </p>
                    </div>
                </div></a>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid bg-primary feature py-5 pb-lg-0 my-5">
        <div class="container py-5 pb-lg-0">
            <div class="mx-auto text-center mb-3 pb-2" style="max-width: 500px;">
                <h6 class="text-uppercase text-secondary">Features</h6>
                <h1 class="display-5 text-white">Why Choose Us!!!</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="text-white mb-5">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-seedling fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">100% Organic</h4>
                        <p class="mb-0"> Our organic vegetables start as seeds planted in nutrient-rich, pesticide-free soil. As they grow, they're nurtured with care, allowing them to reach their full potential in both flavor and nutritional value.</p>
                    </div>
                    <div class="text-white">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">Award Winning</h4>
                        <p class="mb-0">Look for the mark of certification on every piece of fruit, assuring you that it has been grown with the utmost care and adherence to stringent organic standards.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-block bg-white h-100 text-center p-5 pb-lg-0">
                        <p>We want you to know the faces behind your food. On our website, you'll find profiles of our farmers, sharing their stories, passion for sustainable farming, and the challenges they overcome. This transparency is the foundation of trust, allowing you to connect with the individuals who pour their hearts into nurturing the crops you enjoy.</p>
                        <img class="img-fluid" src="img/feature.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-white mb-5">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-tractor fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">Modern Farming</h4>
                        <p class="mb-0">We're committed to embracing cutting-edge techniques that not only increase efficiency but also prioritize sustainability and environmental stewardship.</p>
                    </div>
                    <div class="text-white">
                        <div class="bg-secondary rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fs-4 text-white"></i>
                        </div>
                        <h4 class="text-white">24/7 Support</h4>
                        <p class="mb-0">Your business doesn't sleep, and neither do we. With our 24x7 support, you can rest assured that any issues will be addressed promptly, ensuring minimal disruptions to your operations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5">Our Fresh & Organic Products</h1>
            </div>
            <div class="owl-carousel product-carousel px-5">
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-1.png" alt="">
                        <h6 class="mb-3">Onion</h6>
                        <h5 class="text-primary mb-0">Rs9.00/kg</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href="Onion.html"><i class="bi bi-cart text-white"></i></a>
                            <!-- <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-2.png" alt="">
                        <h6 class="mb-3">Tomato</h6>
                        <h5 class="text-primary mb-0">Rs29.00/kg</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href="Tomato.html"><i class="bi bi-cart text-white" ></i></a>
                            <!-- <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-3.jpeg" alt="">
                        <h6 class="mb-3">Chickoo</h6>
                        <h5 class="text-primary mb-0">Rs10.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href="Chickoo.html"><i class="bi bi-cart text-white"></i></a>
                            <!-- <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-4.png" alt="">
                        <h6 class="mb-3">Steam rice</h6>
                        <h5 class="text-primary mb-0">Rs19.00/kg</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href="Steamrice.html"><i class="bi bi-cart text-white"></i></a>
                            <!-- <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5 my-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel p-5">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="img/testimonial-1.jpg" alt="">
                            <p class="fs-5">I've been using the Farm-Ez Application for several months now, and it has truly transformed the way I manage and sell my farm products. This Website is a game-changer for both farmers and customers alike.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Venkappa S</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">The interface is incredibly intuitive, making it easy for me to list my products, update inventory, and communicate with customers. It took me no time to get the hang of it, and the seamless navigation makes the whole process stress-free.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Vinay k</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">The Team</h6>
                <h1 class="display-5">We Are Professional Organic Farm Providers</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/farmer1.jpg" alt="">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white">Veerayya Halemani</h4>
                                    <span class="text-white">Farm Worker</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fa fa-phone-alt text-secondary"></i></a>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/farmer2.jpg" alt="">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white">Bassappa Yalvigi</h4>
                                    <span class="text-white">Street vendor</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fa fa-phone-alt text-secondary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row g-0">
                        <div class="col-10">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/farmer3.jpg" alt="">
                                <div class="position-absolute start-0 bottom-0 w-100 py-3 px-4" style="background: rgba(52, 173, 84, .85);">
                                    <h4 class="text-white">Kallayya H</h4>
                                    <span class="text-white">Farmer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="h-100 d-flex flex-column align-items-center justify-content-around bg-secondary py-5">
                                <a class="btn btn-square rounded-circle bg-white" href="#"><i class="fa fa-phone-alt text-secondary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Our Blog</h6>
                <h1 class="display-5">Latest Articles From Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="img/blog-1.jpg" alt="">
                        <a class="blog-overlay" href="">
                            <h4 class="text-white">"The Art of Organic Farming: A Journey into Sustainable Agriculture"</h4>
                            <span class="text-white fw-bold">Jan 21, 2008</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="img/blog-2.jpg" alt="">
                        <a class="blog-overlay" href="">
                            <h4 class="text-white">"From Seed to Table: The Lifecycle of Organic Produce"</h4>
                            <span class="text-white fw-bold">Apr 01, 2015</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="img/blog-3.jpg" alt="">
                        <a class="blog-overlay" href="">
                            <h4 class="text-white">"Organic vs. Conventional: Unpacking the Differences"</h4>
                            <span class="text-white fw-bold">Sep 31, 2020</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    

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
                                <p class="text-white mb-0">Farm-ez@ymail.com</p>
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
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Popular Links</h4>
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
                        </form>
                    </div>
                </div>
            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>