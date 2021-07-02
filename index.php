<?php include('./include/db.php');
$query = "SELECT * FROM basic_setup,personal_setup,aboutus_setup";
$runquery = mysqli_query($db,$query);
$data = mysqli_fetch_array($runquery);
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?=$data['title']?></title>
    <meta content="<?=$data['description']?>" name="description">
    <meta content="<?=$data['keyword']?>" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/<?=$data['icon']?>" rel="icon">
    <link href="assets/img/<?=$data['icon']?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/blink.css" rel="stylesheet">
    <link href="assets/css/map.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css">

    <!-- =======================================================
  * Template Name: iPortfolio - v1.2.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        #hero {
            background: url(assets/img/<?=$data['homewallpaper']?>);
        }

    </style>
</head>

<body>


  
    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="darkSwitch">
                  <label style="color: #fff; position: absolute;" class="custom-control-label" for="darkSwitch">Full Dark mood?</label>
            </div>
            <div class="profile">
                <img src="assets/img/<?=$data['profilepic']?>" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="#"><?=$data['name']?></a></h1>
                <div class="social-links mt-3 text-center">

                    <?php 
        if($data['twitter']!=""){
            ?>
                    
                    <a href="<?=$data['twitter']?>" class="twitter"><i class="bx bxl-telegram"></i></a>
                    
                    <?php
        }    
        if($data['facebook']!=""){
            ?>
                    <a href="<?=$data['facebook']?>" class="facebook"><i class="bx bxl-facebook" target="_blank"></i></a>
                    <?php
        }
      if($data['instagram']!=""){
            ?>
                    <a href="<?=$data['instagram']?>" class="instagram"><i class="bx bxl-instagram" target="_blank"></i></a>
                    <?php
        }
       if($data['skype']!=""){
            ?>
                    <!--
                    <a href="<?=$data['instagram']?>" class="google-plus"><i class="bx bxl-skype"></i></a>
                    -->
                    <?php
        }
      if($data['linkedin']!=""){
            ?>
                    <!--
                    <a href="<?=$data['linkedin']?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    -->
                    <?php
        }
      if($data['github']!=""){
            ?>
                    <a href="<?=$data['instagram']?>" class="github"><i class="bx bxl-github" target="_blank"></i></a>
                    <?php
        } 
        ?>
                </div>
            </div>

            <nav class="nav-menu">
                <ul>
                    <li class=""><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                    <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                    <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
                    <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>
                    

                </ul>

            </nav><!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1><?=$data['name']?></h1>

            <p>I'm <span class="typed" data-typed-items="<?php
          $prof = explode(",",$data['professions']);
          foreach($prof as $value){echo $value.",";}?>"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <p><?=$data['shortdesc']?></p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/<?=$data['profilepic']?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3><?=$data['heading']?></h3>
                        <p class="font-italic">
                            <?=$data['subheading']?>
                        </p>
                        <div>
                            <ul class="row">
                                <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Birthday :</strong> <?=$data['dob']?></li>
                                <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Email :</strong> <?=$data['emailid']?></li>
                                <li class="col-lg-5"><i class="icofont-rounded-right"></i> <strong>Mobile :</strong> <?=$data['mobile']?></li>
                                
                                
                                   
                               
                                
                                


                            </ul>
                        </div>
                        <p>
                            <?=$data['longdesc']?>
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                </div>

                <div class="row skills-content">

                    <div class="row col-lg-12" data-aos="fade-up">
<?php
                    $query3 = "SELECT * FROM skills";
$runquery3= mysqli_query($db,$query3);
while($data3=mysqli_fetch_array($runquery3)){
    ?>
                        <div class="progress col-lg-6">
                            <span class="skill"><?=$data3['skill']?> <i class="val"><?=$data3['score']?>%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?=$data3['score']?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                                <?php
}
                    ?>
                        

                        
                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Education</h3>
                        <?php
                    $query4 = "SELECT * FROM resume WHERE category='e'";
$runquery4= mysqli_query($db,$query4);
while($data4=mysqli_fetch_array($runquery4)){
    ?>
                    <div class="resume-item">
                            <h4><?=$data4['title']?></h4>
                            <h5><?=$data4['year']?></h5>
                            <p><em><?=$data4['ogname']?></em></p>
                            <p><?=$data4['workdesc']?></p>
                        </div>
                                <?php
}
                    ?>
                        
                        
                        
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        
                        <?php
                    $query4 = "SELECT * FROM resume WHERE category='pe'";
$runquery4= mysqli_query($db,$query4);
while($data4=mysqli_fetch_array($runquery4)){
    ?>
                    <div class="resume-item">
                            <h4><?=$data4['title']?></h4>
                            <h5><?=$data4['year']?></h5>
                            <p><em><?=$data4['ogname']?></em></p>
                            <p><?=$data4['workdesc']?></p>
                        </div>
                                <?php
}
                    ?>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                </div>


                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                   <?php
                    $query5 = "SELECT * FROM portfolio";
                    $runquery5= mysqli_query($db,$query5);
                    while($data5=mysqli_fetch_array($runquery5)){
                        ?>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="assets/img/<?=$data5['projectpic']?>" class="img-fluid" alt="">
                            <div class="portfolio-links" title="<?=$data5['projectname']?>">
                                
                                <a href="assets/img/<?=$data5['projectpic']?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="<?=$data5['projectlink']?>" target="_blank" title="Visit <?=$data5['projectname']?>"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                                <?php
}
                    ?>
                    

                    
                       

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Hire me</h2>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p><?=$data['location']?></p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p><a href="mailto:<?=$data['emailid']?>"><?=$data['emailid']?></a></p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p><?=$data['mobile']?></p>
                            </div>
                             <div class="email">
                                <i class="icofont-download"></i>
                                <h4>Resume:</h4>
                                <p><a href="download.php?file=resume.pdf" download>Download</a></p>

                            </div>
                        </div>


                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="include/message.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" 
                                    pattern="[a-zA-Z0-9!@#$%^*_|]{6,25}" id="name" data-rule="minlen:4" required data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" pattern="[a-zA-Z0-9!@#$%^*_|]{6,25}" name="email" id="email" data-rule="email" required data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <select type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" required data-msg="Please Choose one at least"/>
                                <option>Choose one of the subjects</option>
                                <option>Front-End</option>
                                <option>Back-end</option>
                                <option>Penetration Test</option>
                                <option>Graphic Design</option>
                                <option>PHP</option>
                                <option>Python</option>
                                <option>IT Consultant</option>
                                </select>
                                <div class="validate"></div>
                            </div>

                            <div class="form-group">
                                <label for="quantity">Budget in $</label>
                                <input type="number" class="form-control" name="quantity" id="quantity" required data-msg="Please Enter Your Budget." />
                                <div class="validate"></div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" pattern="[a-zA-Z0-9!@#$%^*_|]{6,25}" id="message" rows="10" data-rule="required" required data-msg="Please write something for us"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="bg-success error-message"></div>
                                <div class="sent-message"></div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
<!--
                    
-->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <!--<div class="container">
            <a class="weatherwidget-io" href="https://forecast7.com/en/43d2276d85/almaty/" data-label_1="ALMATY" data-label_2="WEATHER" data-icons="Climacons Animated" data-mode="Current" data-days="3" data-textcolor="rgba(255,255,255, 0.9)" >ALMATY WEATHER</a>
                    <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                    </script>
        -->
            <div class="credits">
                <p><span style="font-size: 18px;" id="datetime"></span></p>
            </div>

            <script>
                    var dt = new Date();
                    document.getElementById("datetime").innerHTML = dt.toLocaleTimeString();
            </script>
            
            <div class="copyright">
                <b><?php include 'rights.php';?></b>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/map.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="assets/js/dark-mode-switch.min.js"></script>


    <!-- Google Analytics -->
    <script>
        window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');
    </script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
    <!-- End Google Analytics -->
</body>
</html>
