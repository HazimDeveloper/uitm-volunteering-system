

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MYSVS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="MYSVS" name="keywords">
        <meta content="MYSVS" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                     <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>+0182069623</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>uitm@edu.my</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">MYSVS</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link active">About</a>
                        <a href="causes.php" class="nav-item nav-link">Causes</a>
                        <a href="event.php" class="nav-item nav-link">Events</a>
                        <a href="blog.php" class="nav-item nav-link">Blog</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="edit_profile.php" class="dropdown-item">Edit Profile</a>
                                 <a href="volunteer.php" class="dropdown-item">Create New Events</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
						<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                            <div class="dropdown-menu">
                                <a href="login_form.php" class="dropdown-item">Login User</a>
                                <a href="login_admin.php" class="dropdown-item">Login Admin</a>
								<a href="login_officer.php" class="dropdown-item">Login Officer</a>
                            </div>
                        </div>
						<a href="logout.php" class="nav-item nav-link">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/uitm3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>UITM Students Volunteering System</h1>
                            <p>
                               Volunteering system for all UITM students for every branches in Malaysia.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="http://localhost/charity/volunteer.php">Help Now</a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/uitm4.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Get Involved with helping hand</h1>
                            <p>
                             For UITM students that wanted to help people in need, make a better environment and protect the planet.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="http://localhost/charity/volunteer.php">Help Now</a>
                                
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        
    
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>What people are talking about our volunteering services</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/testimonial-1.jpg" alt="Image">
                            <div class="testimonial-name">
                                <h3>Person Name</h3>
                                <p>Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Great experience!
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/testimonial-2.jpg" alt="Image">
                            <div class="testimonial-name">
                                <h3>Person Name</h3>
                                <p>Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                I enjoyed the program! Such a good experience
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="img/testimonial-3.jpg" alt="Image">
                            <div class="testimonial-name">
                                <h3>Person Name</h3>
                                <p>Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Great experience, i will join this again!
                            </p>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
						
						 <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Quick Links</h2>
                            <a href="">Ministry Of Higher Education</a>
                            <a href="">Academic Calendar</a>
                            <a href="">Graduate Quick Search</a>
                            <a href="">News</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
					
					<div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Contact Us</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Universiti Teknologi MARA Cawangan Terengganu Kampus Kuala Terengganu 21080 Kuala Terengganu, Terengganu Darul Iman</p>
                            <p><i class="fa fa-phone-alt"></i>+609-6216600</p>
                            <p><i class="fa fa-envelope"></i>korporatkt@uitm.edu.my</p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                  
                    </div>
                    
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a>Misha Nabilah</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
