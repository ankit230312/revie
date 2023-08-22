<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <img src="img/new_logo.png" alt="" width="200">
                <p>Most people find it impossible to lick their own elbow.A crocodile is unable to extend its tongue.He head houses the shrimp's heart.</p>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>184 Main Collins Street West victoria 8007</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+1-677-124-44227</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@your business.com</p>

            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
                <a class="btn btn-link" href="about.php">About Us</a>
                <a class="btn btn-link" href="contact.php">Contact Us</a>
                <a class="btn btn-link" href="PrivacyPolicy.php">Privacy Policy</a>
                <a class="btn btn-link" href="Terms&Condition.php">Terms & Condition</a>
                <a class="btn btn-link" href="Faqs&Help.php">FAQs & Help</a>
                <a class="btn btn-link" href="404.php">PageNotFound</a>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Social Media</h4>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <center>
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        2023 &copy; <a class="border-bottom " href="https://rivietechnology.com/">Rivie Technology</a>, All Right Reserved.
                        Designed By <a class="border-bottom" href="https://crackercoding.com/">Cracker Coding</a><br><br>
                </center>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<!-- <a href="index.php" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

<!-- Inside this JavaScript file I've inserted Questions and Options only -->
<script src="js/questions.js"></script>

<!-- Inside this JavaScript file I've coded all Quiz Codes -->
<script src="js/script.js"></script>
<!-- <script>
    var currentURL = window.location.href;

    // Get the nav-link elements
    var navLinks = document.querySelectorAll('nav .nav-item');
    // console.log(navLinks)

    // Loop through the nav-links and check if their href matches the current URL
    for (var i = 0; i < navLinks.length; i++) {
        var link = navLinks[i];

        if (link.href === currentURL) {
            // Add the active class to the nav-link of the current page
            link.classList.add('active');

        }
    }
</script> -->
<script>
   window.addEventListener('DOMContentLoaded', (event) => {
  var currentUrl = window.location.href;
 

  if(currentUrl === "http://localhost/Rivie_Technology/rivie_update_new/"){
   
    currentUrl = "http://localhost/Rivie_Technology/rivie_update_new/index.php";

    // console.log(currentUrl);
  }
  
  const navLinks = document.querySelectorAll('.nav-link');
  

  navLinks.forEach((link) => {
    if (link.href === currentUrl) {
        link.classList.add('active');
    //   link.classList.add('hovered');
        
    }
  });
});
</script>