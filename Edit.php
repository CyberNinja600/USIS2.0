<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRAC LEARNING MODULE</title>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/specimen/Kumbh+Sans -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">  <!-- https://fontawesome.com/-->  
    <link rel="stylesheet" href="css/magnific-popup.css">       <!-- https://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">        <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="slick/slick.min.css">          <!-- https://kenwheeler.github.io/slick/ -->
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="css/templatemo-upright.css">
<!--
    

-->
</head>
<body>    
    <div class="container-fluid">
        <div class="row">
            <!-- Leftside bar -->
            <div id="tm-sidebar" class="tm-sidebar"> 
                <nav class="tm-nav">
                    <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div>
                        <div class="tm-brand-box">
                            <h1 class="tm-brand"><center> Welcome!                          
                                  <?php
                                  require_once("DBconnect.php");
                                  session_start();
                                  #$userid_login=$_COOKIE['userid'];
                                  $userid_login=$_SESSION['userid'];

                                  $sql = "Select Name from admin_personalinfo WHERE ID='$userid_login'";
                                  $result = mysqli_query($conn,$sql);
                                  if(mysqli_num_rows($result)!=0)
                                    while($row=mysqli_fetch_array($result))
                                    { 
                                      echo $row[0];
                                    }     
                                ?> </center></h1>
                        </div>                
                        <ul id="tm-main-nav">
                            <li class="nav-item">                                
                                <a href="#studentinformation" class="nav-link current">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-home nav-icon"></i>
                                    Personal Information
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#careerinformation" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-images nav-icon"></i>
                                    Career Information
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-user-friends nav-icon"></i>
                                    Show all students
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="nav-link external" target="_blank" rel="sponsored">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-external-link-alt nav-icon"></i>
                                    External
                                </a>
                            </li>
                        </ul>
                    </div>
                    <footer class="mb-3 tm-mt-100">
                        Design: <a href="https://templatemo.com" target="_parent" rel="sponsored">No one</a>
                    </footer>
                </nav>
            </div>
            
            <div class="tm-main">
                <!-- studentinformation -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/Iimg-01.jpg"></div>                   
                    <section id="studentinformation" class="tm-section">
                        <h2 class="tm-text-primary">Welcome to BRACU LEARNING MANAGEMENT SYSTEM</h2>
                        <hr class="mb-5">
                        <div class="row">
                            <div class="col-lg-6 tm-col-home mb-4">

                                <div class="tm-text-container">
                                    <div class="tm-icon-container mb-5 mr-0">
                                        <i class="fas fa-portrait fa-4x tm-text-primary"></i>
                                    </div>
                                    <?php
                                      require_once("DBconnect.php");
                                      #$userid_login=$_COOKIE['userid'];
                                      $userid_login=$_SESSION['userid'];
                                    ?>


                                    <?php
                                    $sql = "Select Name from admin_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                      
                                    <p><strong>
                                      <a style="color:#34568B";>Name: </a><?php echo $row[0]; }?>

                                    </strong></p>

                                    <?php
                                    $sql = "Select dob from admin_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                      
                                    <p><strong>
                                      <a style="color:#34568B";>Date of birth: </a><?php echo $row[0]; }?>
                                    </strong></p>
                                    
                                    <?php
                                    $sql = "Select Nationality from admin_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <p><strong>
                                      <a style="color:#34568B";>Nationality: </a><?php echo $row[0]; }?>
                                    </strong></p>

                                    <?php
                                    $sql = "Select mailingAddress from admin_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <p><strong>
                                      <a style="color:#34568B";>Mailing Address: </a><?php echo $row[0]; }?>
                                    </strong></p>

                                     <?php
                                    $sql = "Select permanentAddress from admin_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <p><strong>
                                      <a style="color:#34568B";>Permanent Address: </a><?php echo $row[0]; }?>
                                    </strong></p>


                                </div>                                
                            </div>
                            <div class="col-lg-6 tm-col-home mb-4">
                                <div class="tm-text-container">
                                    <div class="tm-icon-container mb-5 mr-0 ">
                                        <i class="fas fa-broadcast-tower fa-4x tm-text-primary"></i>
                                    </div> 


                                     <?php
                                    $sql = "Select Gender from admin_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <p><strong>
                                      <a style="color:#34568B";>Gender: </a><?php echo $row[0];}?>
                                    </strong></p>



                                     <?php
                                    $sql = "Select phone from admin_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <p><strong>
                                      <a style="color:#34568B";>Phone : </a>+800<?php echo $row[0];}?>
                                    </strong></p>


                                     <?php
                                    $sql = "Select ID from admin_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <p><strong>
                                      <a style="color:#34568B";>ID : </a><?php echo $row[0];}?>
                                    </strong></p>



                                     <?php
                                    $sql = "Select BloodType from admin_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <p><strong>
                                      <a style="color:#34568B";>Blood : </a><?php echo $row[0];}?>
                                    </strong></p>



                                     <?php
                                    $sql = "Select userEmail from admin_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <p><strong>
                                      <a style="color:#34568B";>Email : </a><?php echo $row[0];}?>
                                    </strong></p>

                                    <div class="text-right">
                                        <a href="#careerinformation" class="btn btn-primary tm-btn-next">Next Page</a>
                                    </div>                          
                                </div>
                            </div>
                        </div>
                        <hr class="tm-hr-short mb-5">
                        <div class="row tm-row-home">                            
                            <div class="tm-col-home tm-col-home-l">
                                <div class="media mb-4">
                                    <i class="fas fa-scroll fa-4x tm-post-icon tm-text-primary"></i>
                                    <div class="media-body">
                                        <a href="#" class="d-block mb-2 tm-text-primary tm-post-link">What is BRAC?</a>  
                                        <p>
                                            BRAC is an international development organisation based in <a href="https://en.wikipedia.org/wiki/Bangladesh" target="_parent" rel="sponsored">Bangladesh</a>. In order to receive foreign donations, BRAC was subsequently registered under the NGO Affairs Bureau of the Government of Bangladesh . </p>
                                    </div>                                    
                                </div>
                                <div class="media mb-4">
                                    <i class="fas fa-cloud-sun fa-4x tm-post-icon tm-text-primary"></i>
                                    <div class="media-body">
                                        <a href="#" class="d-block mb-2 tm-text-primary tm-post-link">BRAC UNIVERSITY & 2001</a>  
                                        <p>
                                            Brac University (BracU) established in 2001 is located in Dhaka Bangladesh. BracU follows a liberal arts approach to education which nurtures fresh ideas and gives new impetus to the field of tertiary education.
                                        </p>
                                    </div>                                    
                                </div>
                                <div class="media mb-4">
                                    <i class="fas fa-dove fa-4x tm-post-icon tm-text-primary"></i>
                                    <div class="media-body">
                                        <a href="#" class="d-block mb-2 tm-text-primary tm-post-link">Motto</a>  
                                        <p>
                                            Inspiring Excellence
                                        </p>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="tm-col-home mr-0 ml-auto">
                                <div></div>                                
                            </div>
                        </div>
                    </section>
                </div>


                <!------------------------------------------------------------------------------------------------------------------------------------------------>
                <!-- careerinformationn -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/Iimg-02.jpg"></div>                   
                    <section id="careerinformation" class="tm-section">
                        <h2 class="tm-text-primary">Career Information</h2>
                        <hr class="mb-5">
                        <div class="row">
                            <div class="col-lg-6 tm-col-home mb-4">
                                <div class="tm-text-container">
                                    <div class="tm-icon-container mb-5 mr-0">
                                        <i class="fas fa-portrait fa-4x tm-text-primary"></i>
                                    </div>


                                                                          <?php
                                    $sql = "Select ID from admin_careerinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>                      
                                    <p><strong>
                                      <a style="color:#34568B";>ID: </a><?php echo $row[0];}?>
                                    </strong></p>


                                     <?php
                                    $sql = "Select department from admin_careerinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>    
                                    <p><strong>
                                      <a style="color:#34568B";>Department: </a><?php echo $row[0];}?>
                                    </strong></p>

                                </div>                                
                            </div>
                            <div class="col-lg-6 tm-col-home mb-4">
                                <div class="tm-text-container">
                                    <div class="tm-icon-container mb-5 mr-0 ">
                                        <i class="fas fa-broadcast-tower fa-4x tm-text-primary"></i>
                                    </div>

                                     <?php
                                    $sql = "Select JoiningDate from admin_careerinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>                                  
                                    <p><strong>
                                      <a style="color:#34568B";>Joining Date: </a><?php echo $row[0];}?>
                                    </strong></p>

                                     <?php
                                    $sql = "Select  Designation from admin_careerinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                        $courseteacherteaching=$row[0];
                                    ?>                                  
                                    <p><strong>
                                      <a style="color:#34568B";>Teaching: </a><?php echo $courseteacherteaching;}?>
                                    </strong></p>




                                    <div class="text-right">
                                        <a href="#about" class="btn btn-primary tm-btn-next">Next Page</a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <hr class="tm-hr-short mb-5">
                        <div class="row tm-row-home">                            
                            <div class="tm-col-home tm-col-home-l">
                                <div class="media mb-4">
                                    <i class="fas fa-scroll fa-4x tm-post-icon tm-text-primary"></i>
                                    <div class="media-body">
                                        <a class="d-block mb-2 tm-text-primary tm-post-link"><b>How Does UID work?</b></a>  
                                        <p>
                                          UID is your Unique ID, you must never forget you ID. 
                                        </p>
                                    </div>                                    
                                </div>
                                <div class="media mb-4">
                                    <i class="fas fa-cloud-sun fa-4x tm-post-icon tm-text-primary"></i>
                                    <div class="media-body">
                                        <a href="https://admissions.bracu.ac.bd/academia/" target="_blank" class="d-block mb-2 tm-text-primary tm-post-link">Help Your Friend Apply</a>  
                                        <p>
                                            The entire admission process will be online and applicants can apply from the convenience of their home. <a href="https://admissions.bracu.ac.bd/academia/" target="_blank" rel="sponsored">Click Here!</a> 
                                        </p>
                                    </div>                                    
                                </div>
                                <div class="media mb-4">
                                    <i class="fas fa-dove fa-4x tm-post-icon tm-text-primary"></i>
                                    <div class="media-body">
                                        <a href="https://www.bracu.ac.bd/international-applicants/scholarship-financial-aid" target="_blank" class="d-block mb-2 tm-text-primary tm-post-link">Scholarship & Details</a>  
                                        <p>
                                            <a href="https://www.bracu.ac.bd/international-applicants/scholarship-financial-aid" target="_blank" rel="sponsored">Click Here!</a> To Apply For Scholarship.
                                        </p>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="tm-col-home mr-0 ml-auto">
                                <div></div>                                
                            </div>
                        </div>
                    </section>
                </div>
                </div>
                <!----------------------------------------------------------------------------------------------------------------------------------------->
                <!-- About section -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/Iimg-03.jpg"></div>
                    <section id="about" class="tm-section">
                        <h2 class="tm-text-primary">Meet Your Students!</h2>
                        <hr class="mb-5">
                        
                        <div class="row tm-row-about">
                            <div class="tm-col-about tm-col-about-l">
                                <p class="mb-4">
                                  <strong>Here you can see all the students info!</strong>
                            </div>
                            <div class="tm-col-about tm-col-about-r">
                                <p>
                                    <!---write quote--->
                                </p>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="tm-carousel">
                            <!--- write you code here -->
                            <?php  
                                   #stunder number
                                    $noOFStudents=0;
                                    $sql = "Select ID from student_personalinfo";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result))
                                      {
                                        $noOFStudents++;
                                        $studentnumber=$noOFStudents;
                                      }


                                   #rest
                                   $sql = "Select course_code from courses_faculty_info WHERE userid_login='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result))
                                      {
                                        $courseteacherteaching1=$row[0];
                                      }

                                      
                                      for($unique=0;$unique<$studentnumber;$unique++)
                                      {
                                        echo '<div class="tm-carousel-item">
                                          <figure class="effect-honey mb-4">
                                              <img src="img/unknown.jpg" alt="Featured Item">
                                              <figcaption>
                                                  <ul class="tm-social">
                                                      <li><a href="https://facebook.com" target=_blank class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                                      <li><a href="https://twitter.com" target=_blank class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                                      <li><a href="https://instagram.com" target=_blank class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                                                  </ul>
                                              </figcaption>
                                          </figure>
                                          <div class="tm-about-text">'?>
                                          <?php
                                              echo '<h3 class="mb-3 tm-text-primary tm-about-title">'
                                          ?>

                                          <?php     

                                                    $forstudentid=[];
                                                    $sql = "Select ID from student_personalinfo";
                                                    $result = mysqli_query($conn,$sql);
                                                    if(mysqli_num_rows($result)!=0)
                                                      while($row=mysqli_fetch_array($result))
                                                      {
                                                          array_push($forstudentid, $row[0]);
                                                      }
                                                      echo $forstudentid[$unique];
                                          ?>

                                        <?php 
                                          echo'</h3> <p>'
                                        ?> 

                                        <?php       
                                                    $forstudentName=[];
                                                    $forstudentEmail=[];
                                                    $forstudentPhone=[];
                                                    $forstudentgrade=[]; 

                                                    $sql = "Select Name,userEmail,phone from student_personalinfo WHERE ID='$forstudentid[$unique]'";
                                                    $result = mysqli_query($conn,$sql);
                                                    if(mysqli_num_rows($result)!=0)
                                                      while($row=mysqli_fetch_array($result))
                                                      {
                                                          array_push($forstudentName, $row[0]);
                                                          array_push($forstudentEmail, $row[1]);
                                                          array_push($forstudentPhone, $row[2]);
                                                      }

                                                    #fecth cgpa here
                                                    $cgpastd=0;
                                                    $sql = "Select * from student_gradepersemester WHERE userid_login='$forstudentid[$unique]'";
                                                    $result = mysqli_query($conn,$sql);
                                                    if(mysqli_num_rows($result)!=0)
                                                      while($row=mysqli_fetch_array($result))
                                                      {
                                                        for($i=1;$i<=12;$i++)
                                                        {
                                                          $cgpastd=$row[$i]+$cgpastd;
                                                        }
                                                        $cgpastd=$cgpastd/$row[13];
                                                        $cgpastd=number_format((float)$cgpastd, 2, '.', '');

                                                        array_push($forstudentgrade,$cgpastd);
                                                    }
                                                      echo '<b>';
                                                      echo $forstudentName[0] ;
                                                      echo '</b>';
                                                      echo '<br>';
                                                      echo $forstudentEmail[0] ;
                                                      echo '<br>';
                                                      echo '+';
                                                      echo $forstudentPhone[0] ;
                                                      echo '<br> <b>CGPA: </b>';
                                                      echo $forstudentgrade[0];
                                                      echo '</br>';
                                        ?>
                                        <?php
                                        echo '</p>' 
                                        ?>
                                        <?php echo'
                                              <h4 class="tm-text-secondary tm-about-subtitle">'  
                                        ?> 
                                        <?php 
                                              echo 'Student'; ?>
                                        <?php echo'</h4>
                                          </div>
                                        </div>';
                                      }
                                ?> 

                        </div>
                        <div class="mt-5">
                            <div class="tm-carousel">
                                <div class="tm-carousel-item">
                                    <div class="tm-about-text">
                                        <h3 class="mb-3 tm-text-primary tm-about-title">
                                        </h3> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>





                <!------------------------------------------------------------------------------------------------------------------------->
                    
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    <script src="js/jquery-3.4.1.min.js"></script>          <!-- https://jquery.com/ -->
    <script src="js/jquery.singlePageNav.min.js"></script>  <!-- https://github.com/ChrisWojcik/single-page-nav -->
    <script src="js/parallax/parallax.min.js"></script>     <!-- https://pixelcog.github.io/parallax.js/ -->
    <script src="js/imagesloaded.pkgd.min.js"></script>     <!-- https://imagesloaded.desandro.com/ -->
    <script src="js/isotope.pkgd.min.js"></script>          <!-- https://isotope.metafizzy.co/ -->
    <script src="js/jquery.magnific-popup.min.js"></script> <!-- https://dimsemenov.com/plugins/magnific-popup/ -->
    <script src="slick/slick.min.js"></script>              <!-- https://kenwheeler.github.io/slick/ -->
    <script src="js/templatemo-script.js"></script>
</body>
</html> 