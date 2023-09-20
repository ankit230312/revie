<?php include 'common/header.php'?>


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Notification</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                           <li class="breadcrumb-item text-white active" aria-current="page"><a href="contact.php">Contact</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
               <h1 class="section-title bg-white text-center text-primary px-3 mb-5">Notification</h1>
            </div>
            <div class="row g-4">
                    <form>
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Select Your Branch">
                                    <label for="Branch">Branch</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Select Your Batch">
                                    <label for="batch">Batch</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Select Your Division">
                                    <label for="division">Division</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Select Your Standard">
                                    <label for="Standard">Standard</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Select Your Exam">
                                    <label for="ExamPattern">Exam</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <button class="btn btn-primary" type="submit">Push Notification</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                <button class="btn btn-primary" type="submit">Custom Notification</button>
              </div>
            </div>
        </div>
    </div>
 
    <!-- Contact End -->

    <?php include 'common/footer.php'?>