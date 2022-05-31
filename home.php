<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Career NextGen</title>

    <link rel="stylesheet" href="home.css" />



</head>

<body>
    <!-- navigation bar -->

    <nav class="navbar navbar-expand-lg py-2 sticky-top navbar-light bg-light">
        <div class="container">

            <a class="navbar-brand" href="home.php" style="color: #520670; font-weight: bold; font-size: x-large;">Career
                NextGen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" style="font-size: medium;color: #520670;" aria-current="page"
                            href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: medium;color: #520670;" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: medium; color: #520670;" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: medium;color: #520670;" href="#">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: medium;color: #520670;" href="#join">Join Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: medium;color: #520670;" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: medium;color: #520670;" href="showFAQ.php">FAQ</a>
                    </li>



                </ul>
                <div class="dropdown">
                    <button class="btn btn-primary ms-lg-3"
                        style="background:linear-gradient(to right,#a506e4, #520670); font-weight: bold;">Login
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="studentroleselection.php">Student</a>
                        <a href="universitylogin.html">University</a>
                        <a href="jobPortal/login-company.php">Company</a>
                        <a href="login-advisor.php">Advisor</a>
                        <a href="adminlogin.html">Admin</a>
                    </div>

                </div>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">

                    <h1 class="display-4 text-white" style="font-family: 'Times New Roman', Times, serif;">Taking your
                        career to the next level.</h1>
                    <p class="text-white my-3" style="font-family: 'Times New Roman', Times, serif; font-size: larger;">
                        The only way to do great work is to love what you do. If you haven’t found it yet, keep looking.
                        Don’t settle!.We are
                        here to guide you to achieve your destination
                    </p>
                    <a href="#" class="btn me-2 btn-primary"
                        style="background:linear-gradient(to right,#a506e4, #520670);">Get Started</a>
                    <a href="#" class="btn btn-outline-dark"
                        style="background:linear-gradient(to right,#a506e4, #810a77); color: antiquewhite; font-weight: 200;">Help</a>
                </div>
            </div>
        </div>
    </div><!-- //HERO -->


    <!-- SERVICES -->
    <section id="services">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 style="color: #520670;">SERIVCES</h6>
                    <h1 style="font-family: 'Times New Roman', Times, serif;">Our Services</h1>
                    <p>We facilitate professional skills development, interaction
                        of students with industry experts, university-industry
                        collaboration, mentorship and guidance and many more provisions through this platform.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect bounceInUp">
                        <div class="iconbox">
                            <i class='bx bxs-check-shield'></i>
                        </div>
                        <h5 class="mt-4 mb-2">University-Industry Collaboration</h5>
                        <p style="font-size: 16.3px;">Partnership between universities and industries allows to
                            provide proper career guidance to the students </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-comment-detail'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Find jobs</h5>
                        <p>The job portal allows companies to publish vacancies and students to find their desired jobs
                            on various fields
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-cog'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Apply for jobs</h5>
                        <p>Students can forward applications to published job vacancies and get hired after the companies reviewed
                            the received applications
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-heart'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Meet Career Advisors</h5>
                        <p>Opportunity to interact with mentors who guide them towards career development
                            to solve their doubts related to the career path </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-rocket'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Career Development Courses</h5>
                        <p>Develop professional skills through courses and online evaluations.Students will be able to enrolll for 
                            courses on their own
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-doughnut-chart'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Interview Practice</h5>
                        <p>Get chances to participate for practice interviews with mentors to get prepared to face
                            real interviews with much confidence
                        </p>
                    </div>
                </div>






            </div>
        </div>
    </section><!-- SERVICES -->

    <!-- FEATURES -->
    <section class="row w-100 py-0 bg-light" id="features">
        <div class="col-lg-6 col-img"></div>
        <div class="col-lg-6 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h6 style="color: #520670;">WHY TO CHOOSE US</h6>
                        <h1 style="font-family: 'Times New Roman', Times, serif;">Best solution to Spark Up Your Career</h1>
                        <p>You can experience te best ever falicities from here withus at Career NextGen!</p>

                        <div class="feature d-flex mt-3">
                            <div class="iconbox me-3">
                                <i class='bx bxs-comment-edit'></i>
                            </div>
                            <div>
                                <h5>24x7 Access</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo </p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            <div class="iconbox me-3">
                                <i class='bx bxs-user-circle'></i>
                            </div>
                            <div>
                                <h5>Feature</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo </p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            <div class="iconbox me-3">
                                <i class='bx bxs-download'></i>
                            </div>
                            <div>
                                <h5>Feature</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- FEATURES -->

    <!-- JOIN WITH US -->
    <section id="join" class="bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 style="color: #520670;">JOIN WITH US</h6>
                    <h1 style="font-family: 'Times New Roman', Times, serif;">Changing People For The Better</h1>
                    <p>You can now join with us to experience or to provide the best ever services realted to career guidance.

                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>Join As A</h6>
                        <h3>UNIVERSITY</h3>
                        <hr>
                        <ul class="list-unstyled mb-4">
                           
                            <li><i class='bx bxs-check-circle'></i>
                                 Industry Collaboration</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Practice interviews</li>
                           
                            <li><i class='bx bxs-check-circle'></i>Respond to issues</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Undergraduate interaction</li>
                        </ul>
                        <button type="button" class="btn float-left"
                        style="background:linear-gradient(to right,#a506e4, #520670);color: white;">Read More</button>
                        <button type="button" onclick="document.location='universitylogin.html'" class="btn btn-primary float-right"
                            style="background:linear-gradient(to right,#a506e4, #520670);">Join</button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>Join As A</h6>
                        <h3>COMPANY</h3>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                University Partnership</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Vacancy Pubication</li>
                            
                            <li><i class='bx bxs-check-circle'></i>
                                Application Review</li>
                                <li><i class='bx bxs-check-circle'></i>
                                    Hire suitable Candidates</li>
                        </ul>
                        <button type="button" class="btn float-left"
                        style="background:linear-gradient(to right,#a506e4, #520670);color: white;">Read More</button>
                        <button type="button" onclick="document.location='jobPortal/register-company.php'" class="btn btn-primary float-right"
                            style="background:linear-gradient(to right,#a506e4, #520670);">Join</button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>Join As A</h6>
                        <h3>MENTOR</h3>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Guide students</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Career Coaching</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Resolve Career issues </li>
                            <li><i class='bx bxs-check-circle'></i>
                                Maintain Student Interaction</li>
                           
                        </ul>
                        <button type="button" class="btn float-left"
                        style="background:linear-gradient(to right,#a506e4, #520670);color: white;">Read More</button>
                        <button type="button" onclick="document.location='advisorregistration.php'" class="btn btn-primary float-right"
                            style="background:linear-gradient(to right,#a506e4, #520670);">Join</button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>Join As A</h6>
                        <h3>STUDENT</h3>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Search jobs</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Apply for jobs</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Interact with mentors</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Career development Tips</li>
                           
                        </ul>
                        <!-- <button class="btn btn-primary" float-right>Get Started</button> -->

                        <button type="button" class="btn float-left"
                        style="background:linear-gradient(to right,#a506e4, #520670);color: white;">Read More</button>
                        <button type="button" onclick="document.location='sign.html'" class="btn btn-primary float-right"
                            style="background:linear-gradient(to right,#a506e4, #520670);">Join</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- JOIN WITH US -->







    <!-- CONTACT -->


    <section id="contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 style="color: #520670;">CONTACT</h6>
                    <h1 style="font-family: 'Times New Roman', Times, serif;">Get In Touch</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="container1">
                <div class="content">
                    <div class="left-side">
                        <div class="address details">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="topic1">Address</div>
                            <div class="text-one">222,Gajaba Lane,</div>
                            <div class="text-two">Kumbukawaththa,Gonapola</div>
                            <div class="text-two">Sri Lanka</div>
                        </div>
                        <div class="phone details">

                            <i class="fas fa-phone-alt"></i>
                            <div class="topic1">Phone</div>
                            <div class="text-one">076-6814648</div>
                            <div class="text-two">071-9312176</div>
                        </div>
                        <div class="email details">
                            <i class="fas fa-envelope"></i>
                            <div class="topic1">Email</div>
                            <div class="text-one">careernextgen@gmail.com</div>
                            <div class="text-two">rmndhananjani@gmail.com</div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="topic1-text">Send us a message</div>
                        <p>If you have any work from me or any types of quries related to my tutorial, you can send me
                            message from here. It's my pleasure to help you.</p>
                        <form action="contactadmin.php">
                            <div class="input-box">
                                <input type="text" placeholder="Enter your name">
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Enter your email">
                            </div>
                            <div class="input-box message-box">

                                <textarea name="" id="" cols="30" rows="5" class="form-control"
                                    placeholder="Enter Message"></textarea>

                            </div>
                            <div class="button">
                                <input type="button" value="Send Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <section class="contact1">
    <div class="container1">
        <div class="contactInfo">
            <div>
                <h2 color=white;>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><img src="images/tick.png"></span>
                        <span>
                            loreum@gmail.com
                        </span>
                    </li>
                    <li>
                        <span><img src="images/tick.png"></span>
                        <span>
                            054-205-5632
                    </li>
                </ul>
            </div>
            <div class="contactForm">
                
            </div>
            </div>
    </div> -->


            <!-- <form action="" class="row g-3 justify-content-center">
            <div class="col-md-5">
                <input type="text" class="form-control" placeholder="Full Name">
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" placeholder="Enter E-mail">
            </div>
            <div class="col-md-10">
                <input type="text" class="form-control" placeholder="Enter Subject">
            </div>
            <div class="col-md-10">
                <textarea name="" id="" cols="30" rows="5" class="form-control"
                    placeholder="Enter Message"></textarea>
            </div>
            <div class="col-md-10 d-grid">
                <button class="btn btn-primary">Contact</button>
            </div>
        </form> -->

        </div>
    </section><!-- CONTACT -->

    <!-- TEAM -->
    <section id="team">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 style="color: #520670;">TEAM</h6>
                    <h1 style="font-family: 'Times New Roman', Times, serif;">Meet Our Admin Panel</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="row text-center g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="images/20210917_103155.jpg" alt="">
                        <h5 class="mb-0 mt-4">Nethma Dhananjani</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-linkedin'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="images/adm1_ccexpress.jpeg" alt="">
                        <h5 class="mb-0 mt-4">Nayana Kalyani</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-linkedin'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="images/adm1_ccexpress.jpeg" alt="">
                        <h5 class="mb-0 mt-4">Sunil Rajapaksha</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-linkedin'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="images/adm1_ccexpress.jpeg" alt="">
                        <h5 class="mb-0 mt-4">Viraj Karunarathna</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-linkedin'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- TEAM -->

    <!-- <footer>
    <div class="content12">
      <div class="top">
        <div class="logo-details">
          <i class="fab fa-slack"></i>
          <span class="logo_name">CodingLab</span>
        </div>
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Company</li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Get started</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Services</li>
          <li><a href="#">App design</a></li>
          <li><a href="#">Web design</a></li>
          <li><a href="#">Logo design</a></li>
          <li><a href="#">Banner design</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Account</li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">My account</a></li>
          <li><a href="#">Prefrences</a></li>
          <li><a href="#">Purchase</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Courses</li>
          <li><a href="#">HTML & CSS</a></li>
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">Photography</a></li>
          <li><a href="#">Photoshop</a></li>
        </ul>
        <ul class="box input-box">
          <li class="link_name">Subscribe</li>
          <li><input type="text" placeholder="Enter your email"></li>
          <li><input type="button" value="Subscribe"></li>
        </ul>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright © 2021 <a href="#">CodingLab.</a>All rights reserved</span>
        <span class="policy_terms">
          <a href="#">Privacy policy</a>
          <a href="#">Terms & condition</a>
        </span>
      </div>
    </div>
  </footer> -->



</style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


</body>

</html>