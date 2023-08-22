<?php include 'common/header.php'?>


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="Images/s1.jpg" alt="Slider1" style="height: 100vh; width: 100vw;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-uppercase mb-3 animated slideInDown">Hello World</h5>
                                <h1 class="display-3 animated slideInDown">Learn the language not just word</h1>
                                <p class="fs-5 mb-4 pb-2">Although studying the most frequently used terms in a language can be a useful method to get started learning that language, that is not the complete picture..</p>
                                <a href="course.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="Images/s2.jpg" alt="Slider2" style="height: 100vh; width: 100vw;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                                <h5 class="text-uppercase mb-3 animated slideInDown">Hello World</h5>
                                <h1 class="display-3 animated slideInDown">Kids love technology and digital learning</h1>
                                <p class="fs-5  mb-4 pb-2">Although studying the most frequently used terms in a language can be a useful method to get started learning that language, that is not the complete picture..</p>
                                <a href="course.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="Images/s3.jpg" alt="Slider3" style="height: 100vh; width: 100vw;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                                <h5 class="text-uppercase mb-3 animated slideInDown">ONLINE COURSES</h5>
                                <h1 class="display-3 animated slideInDown">Wide range online courses</h1>
                                <p class="fs-5 mb-4 pb-2">Although studying the most frequently used terms in a language can be a useful method to get started learning that language, that is not the complete picture..</p>
                                <a href="course.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Carousel End -->


    <!-- Features Start -->
    
    <!-- <div class="container-xxl">
        <div class="col-sm-2">
            <img src="Images/icon-1.png" alt="">
        </div>
        <div class="col-sm-2">
            <img src="Images/icon-2.png" alt="">
        </div>
        <div class="col-sm-2">
            <img src="Images/icon-3.png" alt="">
        </div>
        <div class="col-sm-2">
            <img src="Images/icon-4.png" alt="">
        </div>
        <div class="col-sm-2">
            <img src="Images/icon-5.png" alt="">
        </div>
        <div class="col-sm-2">
            <img src="Images/icon-6.png" alt="">
        </div>
    </div>'; -->
    
    
   <!-- Essential facts Starts -->
   
   <?php  
       if(isset( $_SESSION['email']))
       {

 
   ?>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3><u>Essential Fast Facts</u></h3>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/High Quality.jfif" width="400" alt="High">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">High Quality</h3>
                        <div class="mb-3">
                            <p class="text-center">A We endeavour for 'excellence' by providing tailored solutions & services that best satisfies the vice.</p>
                            <p class="text-center">Our passion for constant improvement in providing superior solutions & security is our aim to earn the trust of, and build long relationships with our customers. We achieved through hard-work, dedication, honesty and high-quality services.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Amazing Result.jpg" alt="Amazing Result" width="400" style="height: 254px;">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Amazing Result</h3>
                        <div class="mb-3">
                            <p>The application manages the information about various students along with the course they opted in different years, the marks secured by the distinctive students in various subjects in different exams:</p>
                            <ul>
                                <li>View results of tests and exams online</li>
                                <li>Search test and exam scores with valid test ID</li>
                                <li>Download report of the results</li>
                                <li>Request for re-evaluation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Best Pricing.jpg" alt="Best Pricing" style="height: 255px;">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Best Pricing</h3>
                        <div class="mb-3">
                            <p>We provide educational solution services at the best price. <a href="contact.php">Kindly connect with us</a> to know more.</p>
                            <p>When selling a product or service, a firm can employ a number of different pricing tactics. Senior executives must first identify the company to decide the best pricing strategy for it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Innovative.jpg" alt="Innovative">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Innovative</h3>
                        <div class="mb-3">
                            <p>Technological innovations are having a significant impact on educational systems at all levels. Online courses, teaching aids, educational software, social networking tools, and other emerging technologies are disrupting the traditional classroom environment.
                            Understanding the effects that technological innovations have on students and teachers is critical to developing strategies and techniques to manage and use technology in education.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Team Work.jfif" width="400" alt="Team Work" style="height: 240px;">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Team Work</h3>
                        <div class="mb-3">
                            <p>Creativity forms the backbone of everything we do at Identity – inventing creative solutions to even the most random of tasks is what makes us special.</p>
                            <p>We are home to a strong pool of exceptional creatives with bucket loads of experience in providing educational software services, all of whom bring something different to the table.</p>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Support.jfif" width="400" alt="Support" style="height: 240px;">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Support</h3>
                        <div class="mb-3">
                            <p>Our way of doing business is to approach each client exclusively. Working with you, we gain an understanding of your requirements.
                            As an educational software solution provider, we provide our clients with the best services available 24/7. This enables us to earn their trust and complete projects with full spirit, blending our innovative concepts to make our services advanced, adequate, and accessible.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php }
    else{

  
?>
<div class="container-xxl">
        <div class="container">
           <div class="row" style="margin-left: 15px; align-items: center;">
            <div class="col-sm-2">
                <img src="Images/icon-1.png" alt="">
            </div>

            <div class="col-sm-2">
                <img src="Images/icon-2.png" alt="">
            </div>

            <div class="col-sm-2">
                <img src="Images/icon-3.png" alt="">
            </div>

            <div class="col-sm-2">
                <img src="Images/icon-4.png" alt="">
            </div>

            <div class="col-sm-2">
                <img src="Images/icon-5.png" alt="">
            </div>

            <div class="col-sm-2">
                <img src="Images/icon-6.png" alt="">
            </div>            
           </div> 
        </div>
    </div> 


<?php  } ?>

 <!-- Essential facts End -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3><u>Essential Fast Facts</u></h3>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/High Quality.jfif" width="400" alt="High">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">High Quality</h3>
                        <div class="mb-3">
                            <p class="text-center">A We endeavour for 'excellence' by providing tailored solutions & services that best satisfies the vice.</p>
                            <p class="text-center">Our passion for constant improvement in providing superior solutions & security is our aim to earn the trust of, and build long relationships with our customers. We achieved through hard-work, dedication, honesty and high-quality services.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Amazing Result.jpg" alt="Amazing Result" width="400" style="height: 254px;">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Amazing Result</h3>
                        <div class="mb-3">
                            <p>The application manages the information about various students along with the course they opted in different years, the marks secured by the distinctive students in various subjects in different exams:</p>
                            <ul>
                                <li>View results of tests and exams online</li>
                                <li>Search test and exam scores with valid test ID</li>
                                <li>Download report of the results</li>
                                <li>Request for re-evaluation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Best Pricing.jpg" alt="Best Pricing" style="height: 255px;">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Best Pricing</h3>
                        <div class="mb-3">
                            <p>We provide educational solution services at the best price. <a href="contact.php">Kindly connect with us</a> to know more.</p>
                            <p>When selling a product or service, a firm can employ a number of different pricing tactics. Senior executives must first identify the company to decide the best pricing strategy for it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Innovative.jpg" alt="Innovative">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Innovative</h3>
                        <div class="mb-3">
                            <p>Technological innovations are having a significant impact on educational systems at all levels. Online courses, teaching aids, educational software, social networking tools, and other emerging technologies are disrupting the traditional classroom environment.
                            Understanding the effects that technological innovations have on students and teachers is critical to developing strategies and techniques to manage and use technology in education.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Team Work.jfif" width="400" alt="Team Work" style="height: 240px;">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Team Work</h3>
                        <div class="mb-3">
                            <p>Creativity forms the backbone of everything we do at Identity – inventing creative solutions to even the most random of tasks is what makes us special.</p>
                            <p>We are home to a strong pool of exceptional creatives with bucket loads of experience in providing educational software services, all of whom bring something different to the table.</p>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="illustration/illustration/Support.jfif" width="400" alt="Support" style="height: 240px;">
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Support</h3>
                        <div class="mb-3">
                            <p>Our way of doing business is to approach each client exclusively. Working with you, we gain an understanding of your requirements.
                            As an educational software solution provider, we provide our clients with the best services available 24/7. This enables us to earn their trust and complete projects with full spirit, blending our innovative concepts to make our services advanced, adequate, and accessible.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <!-- Courses Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h4 class=" text-center text-primary px-3">Courses</h4>
                <h1 class="mb-5">Popular Courses</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-2.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-3.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Courses End -->


    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
                <h1 class="mb-5">Best tutors you can find</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="Images/instructor-1.png" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Brenda Harris</h5>
                            <small>Teacher</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="Images/instructor-2.png" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Sherlock Anderson</h5>
                            <small>Teacher</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="Images/instructor-3.png" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Simona Rider</h5>
                            <small>Teacher</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="Images/instructor-4.png" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Victor Green</h5>
                            <small>Teacher</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h4 class="text-center px-3">Testimonial</h4>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Bridge is a life saver. I don't have the time or money for a college education. My goal is to become a freelance web developer, and thanks to Bridge, I'm really close.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Bridge is a life saver. I don't have the time or money for a college education. My goal is to become a freelance web developer, and thanks to Bridge, I'm really close.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Bridge is a life saver. I don't have the time or money for a college education. My goal is to become a freelance web developer, and thanks to Bridge, I'm really close..</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Bridge is a life saver. I don't have the time or money for a college education. My goal is to become a freelance web developer, and thanks to Bridge, I'm really close..</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


       <!-- Testimonial Start -->
       <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">                
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                 </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->

    <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">

<div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
  <div class="row gx-lg-5 align-items-center mb-5">
    <div class="col-lg-6 mb-lg-0" style="z-index: 10">
    <h6>ONLINE COURSES</h6>
      <h1 class=" display-5 fw-bold ls-tight">
      Register now and save </h1>
      <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Temporibus, expedita iusto veniam atque, magni tempora mollitia
        dolorum consequatur nulla, neque debitis eos reprehenderit quasi
        ab ipsum nisi dolorem modi. Quos?
      </p>
    </div>

    <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
    
      <div class="card bg-glass">
        <div class="card-body px-4 py-5 px-md-5">
          <form>
            <!-- 2 column grid layout with text inputs for the first and last names -->
        
                 <!-- Name input -->
                 <div class="form-outline mb-4">
              <input type="email" id="" class="form-control" />
              <label class="form-label" for="Name">Name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control" />
              <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="text" id="form3Example4" class="form-control" />
              <label class="form-label" for="form3Example4">Phone Number</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block w-100 h-100 mb-4">
              Register Now
            </button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Section: Design Block -->


<!-- Client Section Start -->
<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
         <img src="Images/client-1.png" alt="">
         </div>
         <div class="col-lg-3">
         <img src="Images/client-2.png" alt="">
         </div>
         <div class="col-lg-3">
         <img src="Images/client-3.png" alt="">
         </div>
         <div class="col-lg-3">
         <img src="Images/client-4.png" alt="">
         </div>
          
    </div>
</div>
 -->

        

    <?php include 'common/footer.php'?>