
<?php include 'common/header.php'?>
<style>
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  }

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
</style>


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"><a class="text-white" href="about.php">About</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="Images/illustration1.jpeg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="section-title">About Us</h4>
                   <p class="mb-4">The Rivie Technology is incorporate with a vision "Creating value in Education through Knowledge and Technology.Rivie Technology is a premier provider of online and blended learning solutions and services. By combining eLearning development, learning management, collaboration technologies and career-oriented approach we deliver solutions that help organizations to create high performing culture.</p>
                         <p class="mb-4"> Rivie believes in using the finest skills, resources and techniques, for updating, integrating and providing excellent solution and services.  This innovative learning platform is offered as a web based service. This learning platform makes it easy and useful for the students and teachers.

                         We provide ourselves on giving a personalized level of service. Our way of doing business is to approach every client solely, working with you, we have a tendency to gain associate understanding of your needs that allow us to deliver custom designed services and solutions for your organizations.
                         </p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="contact.php">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

     <!-- Our Mission and vision Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">                            
                          <h4 class="section-title bg-white text-start"><u>Our Vision</u></h4>
                         <p class="mb-4">To be the foremost admired and accountable integrated Company  delivering finest services and to achieve clients trust to built a loyal customer base.</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                           <h4 class="section-title bg-white text-start"><u>Our Mission</u></h4>
                          <p class="mb-4">To provide state of the art solutions with innovative ideas and technologies that square measure economical, extremely reliable and sustainable..</p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <!-- Our Mission and vision End -->
    

<!--Essential facts start here  -->
<div class="container">
    <h6 class="text-center" style="color: #ffbe30;">ONLINE COURSES</h6>
    <h2 class="text-center mt-3"><ins>Essential Fast Facts</ins>&#8595;</h2>
   <div class="row">
  <div class="col-sm-4 fadeInUp" data-wow-delay="0.1s">
  <div class="flip-card">
 <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 class="text-center">High Quality ♦</h3>
    <img src="illustration/illustration/High Quality.jfif" alt="Hight Quality">  
    <button type="button" class="btn btn-outline-secondary mt-3 text-white">Read More</button>    
    </div>
    <div class="flip-card-back">
    <p class="text-center">A We endeavour for 'excellence' by providing tailored solutions & services that best satisfies the vice. </p>
      <p class="text-center">Our passion for constant improvement in providing superior solutions & security is our aim to earn the trust of, and build long relationships with our customers. We achieved through hard-work, dedication, honesty and high-quality services.</p>
    </div>
  </div>
  </div>
</div>

<div class="col-sm-4 fadeInUp" data-wow-delay="0.1s">
  <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 class="text-center">Support ♦</h3>
    <img src="illustration/illustration/Support.jfif" alt="Support">  
    <button type="button" class="btn btn-outline-secondary mt-3 text-white">Read More</button>
    </div>
    <div class="flip-card-back">
    <p class="text-center">Our way of doing business is to approach each client exclusively, working with you, we gain an understanding of your requirements.. </p>
      <p class="text-center">Being as an educational software solution provider, we provide our clients, the best services available 24/7. Which enable us to achieve their trust and empower us to complete the project with full spirit. We blend our innovative concepts to make our services Advanced, Adequate, Accessible..</p>
    </div>
  </div>
  </div>
</div>

<div class="col-sm-4 fadeInUp" data-wow-delay="0.1s">
  <div class="flip-card">
    <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 class="text-center">Team Work ♦</h3>
    <img src="illustration/illustration/Team Work.jfif" alt="Team Work">  
    <button type="button" class="btn btn-outline-secondary mt-3 text-white">Read More</button>
    </div>
    <div class="flip-card-back">
    <p class="text-center">Creativity forms the backbone of everything we do at Identity – inventing creative solutions to even the most random of tasks is what makes us special. </p>
      <p class="text-center">We are home to a strong pool of exceptional creatives with bucket loads of experience in providing educational software services, all of whom bring something different.</p>
    </div>
  </div>
  </div>
</div>

<div class="col-sm-4 fadeInUp mt-3" data-wow-delay="0.1s">
  <div class="flip-card">
          <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 class="text-center">Amazing Result ♦</h3>
    <img src="illustration/illustration/Amazing Result.jpg" alt="Amazing Result" width="200">  
    <button type="button" class="btn btn-outline-secondary mt-3 text-white">Read More</button>
    </div>
    <div class="flip-card-back">
    <p class="text-center">The application manages the information about various students along with the course they opted in different years, the marks secured by the distinctive students in various subjects in different exam..</p>
      <p class="text-center">→Download report of the results in PDF/exel format <br>
                                        →View results of tests and exams online <br>
                                        →Search test and exam scores with valid test ID <br>
                                        →View Results for all Subjects from anywhere using smart devices <br>
                                        →Request for re-evaluation</p>
    </div>
  </div>
  </div>
</div>

<div class="col-sm-4 fadeInUp mt-3" data-wow-delay="0.1s">
  <div class="flip-card">
          <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 class="text-center">Innovative ♦</h3>
    <img src="illustration/illustration/Innovative.jpg" alt="Innovative" width="250">  
    <button type="button" class="btn btn-outline-secondary mt-3 text-white">Read More</button>
    </div>
    <div class="flip-card-back">
    <p class="text-center">Technological innovations are having a significant impact on educational systems at all levels. Online courses, teaching aids, educational software, social networking tools, and other emerging technologies are disrupting the traditional classroom environment.</p>
      <p class="text-center">Understanding the effects that technological innovations has on students, teachers is critical to developing strategies and techniques to manage and use technology in education..</p>
    </div>
  </div>
  </div>
</div>

<div class="col-sm-4 fadeInUp mt-3" data-wow-delay="0.1s">
  <div class="flip-card">
          <div class="flip-card-inner">
    <div class="flip-card-front">
    <h3 class="text-center">Best Pricing ♦</h3>
    <img src="illustration/illustration/Best Pricing.jpg" alt="Best Pricing" width="250">  
    <button type="button" class="btn btn-outline-secondary mt-3 text-white">Read More</button>
    </div>
    <div class="flip-card-back">
    <p class="text-center">We provide educational solution services at best price <a href="contact.php">Kindly connect us</a> </p>
      <p class="text-center">When selling a product or service, a firm can employ a number of different pricing tactics. Senior executives must first identify the company in order to decide the best pricing strategy for it...</p>
    </div>
  </div>
  </div>
</div>
</div>
</div>

<!--Essential facts End here  -->
 
 
    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="section-title">Instructors</h4>
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
        

    <?php include 'common/footer.php'?>