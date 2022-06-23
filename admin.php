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
                                <a href="#ADVISING" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-envelope nav-icon"></i>
                                    Advising
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Grades" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-scroll nav-icon"></i>
                                    Grades
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Admin" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-broadcast-tower nav-icon"></i>
                                    Admin Panel
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#creator" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-dove nav-icon"></i>
                                    Creator Panel
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
                        Design: <a href="https://templatemo.com" target="_parent" rel="sponsored">TemplateMo</a>
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
                                      <a style="color:#34568B";>Phone : </a>+880<?php echo $row[0];}?>
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
                                                      echo '+880';
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
                                <!-- advising-student id -->
                <!-- advising-student -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/Iimg-04.jpg"></div>
                    <div id="ADVISING" class="tm-section">
                        <h2 class="tm-text-primary">Advising Panel</h2>
                        <hr class="mb-5">
                        <div class="row">

                            <div class="col-xl-6 tm-contact-col-l mb-4">

                                <!-- description-->
                                <ul>
                                    <li>You must select at least three courses</li>
                                    <li>Choose the option "Choose" in order to keep your course empty</li>
                                    <li>You are to NOT take courses with the same title</li>
                                </ul> 

                                <p>    </p>

                                <!--form starts here --->
                                <form  action= "#ADVISING" method="post" class="tm-contact-form">

                                <b><a style="color:#34568B";>Please select an ID</a></b>
                                <!-- get id -->
                                <div class="form-group">
                                        <select required class="form-control" name="studentid" id="studentidID
                                        ">
                                            <?php
                                            $sql = "Select userid_login from login where usertype_login='student'";
                                            $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)!=0)
                                                    // echo '<option>Skip</option> ';
                                                    while($row=mysqli_fetch_array($result))
                                                    {   
                                                        echo '<option onkeyup="saveValue(this);">',$row[0],'</option>'; 
                                                    }
                                            ?>
                                        </select>
                                    </div>



                                <!---------course -1 ---------->
                                    <b><a style="color:#34568B";>Course 1 </a></b>
                                    <div class="form-group">
                                        <select required class="form-control" name="student_advising1" id="student_advising1id">
                                            <?php
                                            $sql = "Select course_code from course_offered";
                                            $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)!=0)
                                                    // echo '<option>Skip</option> ';
                                                    while($row=mysqli_fetch_array($result))
                                                    {   
                                                        echo '<option onkeyup="saveValue(this);">',$row[0],'</option>'; 
                                                    }
                                            ?>
                                        </select>
                                    </div>
                                    <!---course 2 ---->
                                        <b><a style="color:#34568B";>Course 2 </a></b>
                                        <div class="form-group">
                                        <select required class="form-control" name="student_advising2" id="student_advising2id">
                                            <?php
                                            $sql = "Select course_code from course_offered";
                                            $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)!=0)
                                                    // echo '<option>Skip</option> ';
                                                    while($row=mysqli_fetch_array($result))
                                                    {   
                                                        echo '<option onkeyup="saveValue(this);">',$row[0],'</option>'; 
                                                    }
                                            ?>
                                            </option>
                                        </select>
                                        </div>
                                    <!----- course3 ---->
                                        <b><a style="color:#34568B";>Course 3 </a></b>
                                        <div class="form-group">
                                        <select required class="form-control" name="student_advising3" id="student_advising3id">
                                            <?php
                                            $sql = "Select course_code from course_offered";
                                            $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)!=0)
                                                    // echo '<option>Skip</option> ';
                                                    while($row=mysqli_fetch_array($result))
                                                    {   
                                                        echo '<option onkeyup="saveValue(this);">',$row[0],'</option>'; 
                                                    }
                                            ?>
                                            </option>
                                        </select>
                                        </div>
                                    <!----- course4 ---->
                                        <b><a style="color:#34568B";>Course 4 (NOT MANDATORY) </a></b>                            
                                        <div class="form-group">
                                        <select required class="form-control" name="student_advising4" id="student_advising4id">
                                            <option>Choose</option>
                                            <?php
                                            $sql = "Select course_code from course_offered";
                                            $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)!=0)
                                                    // echo '<option>Skip</option> ';
                                                    while($row=mysqli_fetch_array($result))
                                                    {   
                                                        echo '<option onkeyup="saveValue(this);">',$row[0],'</option>'; 
                                                    }
                                            ?>
                                            </option>
                                        </select>
                                        </div>
                                    <!----- course5 ---->
                                        <b><a style="color:#34568B";>Course 5 (NOT MANDATORY) </a></b>
                                        <div class="form-group">
                                        <select required class="form-control" name="student_advising5" id="student_advising5id">
                                            <option>Choose</option>
                                            <?php
                                            $sql = "Select course_code from course_offered";
                                            $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)!=0)
                                                    // echo '<option>Skip</option> ';
                                                    while($row=mysqli_fetch_array($result))
                                                    {   
                                                        echo '<option onkeyup="saveValue(this);">',$row[0],'</option>'; 
                                                    }
                                            ?>
                                            </option>
                                        </select>
                                        </div>



                                     <div class="form-group tm-text-right">
                                        <input type="submit"  class="btn btn-primary" name="submit">
                                    </div>

                                </form>

                                    <?php
                                    if(isset($_POST['submit']))
                                        {   
                                            $studentid= $_POST['studentid'];
                                            $student_advising1 = $_POST['student_advising1'];
                                            $student_advising2 = $_POST['student_advising2'];
                                            $student_advising3 = $_POST['student_advising3'];
                                            $student_advising4 = $_POST['student_advising4'];
                                            $student_advising5 = $_POST['student_advising5'];
                                            $studentid2=$studentid;
                                        }

                                    ?>


                                    <div class="form-group">
                                        <form rows="8" name="message" class="form-control rounded-0" placeholder="Message" required>
                                            <?php
                                            
                                            
                                            if(isset($student_advising1,$student_advising2,$student_advising3,$student_advising4,$student_advising5))
                                            {   

                                                #UPDATE COURSE-1, COURSE-2, COURSE-3 TO DB

                                                $sql = "update `courses_student_info` SET `course_1`='$student_advising1',`course_2`='$student_advising2',`course_3`='$student_advising3' WHERE userid_login='$studentid2'";
                                                $result = mysqli_query($conn,$sql);



                                                if($student_advising4=='Choose' and $student_advising5=='Choose')
                                                {   
                                                    $student_advising4=" ";
                                                    $student_advising5=" ";
                                                    $updtCourseNo=3;
                                                    #UPDATE number of courses
                                                    $sql = "update `courses_student_info` SET `numberofcourses`='$updtCourseNo' WHERE userid_login='$studentid2'";
                                                    $result = mysqli_query($conn,$sql);


                                                    #update table-2

                                                    $sql = "update `student_careerinfo` SET `numberOfCourseThisSemester`='$updtCourseNo' WHERE  ID='$studentid2'";
                                                    $result = mysqli_query($conn,$sql);


                                                    #update zero course
                                                    $sql = "update `courses_student_info` SET `numberofcourses`='$updtCourseNo',`course_4`='',`course_5`='' WHERE userid_login='$studentid2'";
                                                    $result = mysqli_query($conn,$sql);

                                                    echo "<p>Courses taken for advising is $updtCourseNo</p>";
                                                }
                                                else if($student_advising4=='Choose')
                                                {   
                                                    #at course4 we will update $student_advising5
                                                    $sql = "update `courses_student_info` SET `course_4`='$student_advising5',`course_5`='' WHERE userid_login='$studentid2'";
                                                    $result = mysqli_query($conn,$sql);




                                                    $student_advising4=" ";
                                                    $updtCourseNo=4;


                                                    #update table-1
                                                    $sql = "update `courses_student_info` SET `numberofcourses`='$updtCourseNo' WHERE userid_login='$studentid2'";
                                                    $result = mysqli_query($conn,$sql);
                                                    #update table-2
                                                    $sql = "update `student_careerinfo` SET `numberOfCourseThisSemester`='$updtCourseNo' WHERE ID='$studentid2'";
                                                    $result = mysqli_query($conn,$sql);


                                                    echo "<p>Courses taken for advising is $updtCourseNo</p>";

                                                }
                                                else if($student_advising5=='Choose')
                                                {   
                                                    #at course5 we will update $student_advising4
                                                    $sql = "update `courses_student_info` SET `course_4`='$student_advising4', `course_5`='' WHERE userid_login='$studentid2'";
                                                    $result = mysqli_query($conn,$sql);



                                                    $student_advising5=" ";
                                                    $updtCourseNo=4;


                                                    #update table-1
                                                    $sql = "update `courses_student_info` SET `numberofcourses`='$updtCourseNo' WHERE userid_login='$studentid2'";
                                                    $result = mysqli_query($conn,$sql);


                                                    #update table-2
                                                    $sql = "update `student_careerinfo` SET `numberOfCourseThisSemester`='$updtCourseNo' WHERE ID='$studentid2'";
                                                    $result = mysqli_query($conn,$sql);


                                                    echo "<p>Courses taken for advising is $updtCourseNo</p>";      
                                                }
                                                else
                                                {   
                                                    #at course5 with $student_advising5 and course 4 with $student_advising4
                                                    $sql = "update `courses_student_info` SET `course_5`='$student_advising5',`course_4`='$student_advising4' WHERE userid_login='$studentid2'";
                                                    $result = mysqli_query($conn,$sql);

                                                    $updtCourseNo=5;



                                                    #update table-1
                                                    $sql = "update `courses_student_info` SET `numberofcourses`='$updtCourseNo' WHERE userid_login='$studentid2'";
                                                    $result = mysqli_query($conn,$sql);


                                                    #update table-2
                                                    $sql = "update `student_careerinfo` SET `numberOfCourseThisSemester`='$updtCourseNo' WHERE ID='$studentid2'";
                                                    $result = mysqli_query($conn,$sql);


                                                    echo "<p>Courses taken for advising is $updtCourseNo</p>";      
                                                }

                                            }



                                            if(isset($studentid,$student_advising1,$student_advising2,$student_advising3,$student_advising4,$student_advising5))
                                            {   
                                                echo $studentid;
                                                echo " has just been advised ";
                                                echo "<b>";
                                                echo $student_advising1;
                                                echo " ";
                                                echo $student_advising2;
                                                echo " ";
                                                echo $student_advising3;
                                                echo " ";
                                                echo $student_advising4;
                                                echo " ";
                                                echo $student_advising5;
                                            }
                                            else
                                            {
                                                echo "Please Select a Course";
                                            } 

                                            ?>
                                        </form>
                                    </div>

                                <!--- experimental JS --->
                                <script type="text/javascript">
                                    document.getElementById("studentidID").value = getSavedValue("student_advising1id");
                                    document.getElementById("student_advising1id").value = getSavedValue("student_advising1id");    // set the value to this input
                                    document.getElementById("student_advising2id").value = getSavedValue("student_advising2id");   // set the value to this input
                                    document.getElementById("student_advising3id").value = getSavedValue("student_advising3id");    // set the value to this input
                                    document.getElementById("student_advising4id").value = getSavedValue("student_advising4id");
                                    document.getElementById("student_advising5id").value = getSavedValue("student_advising5id");
                                    /* Here you can add more inputs to set value. if it's saved */

                                    //Save the value function - save it to localStorage as (ID, VALUE)
                                    function saveValue(e){
                                        var id = e.id;  // get the sender's id to save it . 
                                        var val = e.value; // get the value. 
                                        localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override . 
                                    }

                                    //get the saved value function - return the value of "v" from localStorage. 
                                    function getSavedValue  (v){
                                        if (!localStorage.getItem(v)) {
                                            return "";// You can change this to your defualt value. 
                                        }
                                        return localStorage.getItem(v);
                                    }
                                        </script>
                                    </div>
                                </div>
                                    <div class="text-right">
                                        <a href="#Grades" class="btn btn-primary tm-btn-next">Next Page</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!------------------------------------------------------grade------------------------------------------------------------->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/Iimg-05.jpg"></div>
                    <div id="Grades" class="tm-section">
                        <h2 class="tm-text-primary">Update Grades</h2>
                        <hr class="mb-5">
                        <div class="row">
                            <div class="col-xl-6 tm-contact-col-l mb-4">
                                <!--form starts here --->
                                <form  action= "#Grades" method="post" class="tm-contact-form">

                                <!-- get id -->
                                <div class="form-group">
                                        <b><a style="color:#34568B";>Please select an ID</a></b>
                                        <select required class="form-control" name="studentidgrade" id="studentidIDgrade
                                        ">
                                            <?php
                                            $sql = "Select userid_login from login where usertype_login='student'";
                                            $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)!=0)
                                                    // echo '<option>Skip</option> ';
                                                    while($row=mysqli_fetch_array($result))
                                                    {   
                                                        echo '<option onkeyup="saveValue(this);">',$row[0],'</option>'; 
                                                    }
                                            ?>
                                        </select>

                                        <div class="form-group">
                                                <p></p>
                                                <b><a style="color:#34568B";>Semester</a></b>
                                                <input type="number" class="form-control rounded-0" placeholder="Semester Number"required name="semSld" min="0" max="12" value="0" step="1" pattern="\d*">
                                            

                                                <p></p>
                                                <b><a style="color:#34568B";>Grade</a></b>
                                                <input type="number" class="form-control rounded-0" placeholder="Grade"required name="gradeSld" min="0" max="4.00" value="0" step=".01">
                                            

                                                <p></p>
                                                <b><a style="color:#34568B";>Number of semester completed</a></b>   
                                                <input type="number" class="form-control rounded-0" placeholder="Number of Semester Completed"required name="semComSld" min="0" max="12" value="0" step="1" pattern="\d*">
                                            
                                        </div>
                                    </div>


                                     <div class="form-group tm-text-right">
                                        <input type="submit"  class="btn btn-primary" name="submitGrade">
                                    </div>

                                </form>

                                    <?php
                                    if(isset($_POST['submitGrade']))
                                        {   
                                            $studentidgrade= $_POST['studentidgrade']; #id
                                            $studentid2grade=$studentidgrade;

                                            $studentsemSld=$_POST['semSld'];           #gradeSemester
                                            $studentgradeSld=$_POST['gradeSld'];       #grade
                                            $studentsemComSld=$_POST['semComSld'];     #number of semester completed                               
                                        }

                                    ?>

                                    <?php
                                            
                                            #UPDATE TO DB semesterCompleted, grade, gradeforwhatsem
                                            if(isset($_POST['submitGrade']))
                                        {       
                                            if($studentsemComSld>0)
                                            {
                                                #updating number of semester
                                                $sql = "UPDATE `student_gradepersemester` SET `semesterCompleted`='$studentsemComSld' WHERE userid_login='$studentid2grade' ";
                                                $result = mysqli_query($conn,$sql);
                                            }

                                            if($studentsemSld>0)
                                            {
                                                #updating grade
                                                $pb="_result";
                                                $pf="semester$studentsemSld$pb";
                                                $sql = "UPDATE `student_gradepersemester` SET `$pf`='$studentgradeSld' WHERE userid_login='$studentid2grade' ";
                                                $result = mysqli_query($conn,$sql);
                                            }
                                        }
                                    ?>

                                    <div class="form-group">
                                        <form rows="8" name="message" class="form-control rounded-0" placeholder="Message" required>
                                            <?php
                                            
                                            #UPDATE TO DB
                                            if(isset($_POST['submitGrade']))
                                            {   
                                                echo "<h6><b>UPDATE SUCCESSFUL!</b></h6>";

                                                if($studentsemSld>0)
                                                {
                                                    echo "Student ID: <b>",$studentidgrade,"</b><br>";
                                                    echo "For Semester <b>",$studentsemSld,"</b> result was updated to <b>",$studentgradeSld,"</b><br>";
                                                }

                                                else
                                                {
                                                    echo "No results were updated. <br>";
                                                }


                                                if($studentsemComSld>0)
                                                {
                                                    echo "Number of Semester completed <b>",$studentsemComSld,"</b>";
                                                }
                                                else
                                                {
                                                    echo 'Number of Semester was not updated.';
                                                }
                                            }

                                            else
                                            {
                                                echo 'No updates were made';
                                            }
#-------------------------------------------------------------show grade sheet------------------------------------------------------#

                                            if(isset($_POST['submitGrade']))
                                            {   

                                                echo'<p>        </p><h3 class="tm-text-primary">Gradesheet</h3>
                                                <hr class="mb-5">
                                                <div class="row">
                                                    <div class="col-lg-6 tm-col-home mb-4">
                                                        <div class="tm-text-container">
                                                            <div>
                                                                <div class="form-group">
                                                                    <form rows="1" name="message" class="form-control rounded-0"required>
                                                                       <table style="width:100%">
                                                                          <tr>
                                                                            <th>Semester Number</th>
                                                                            <th>CGPA</th>
                                                                          </tr>';
                                                                    
                                                                    
                                                                    #loop this
                                                                    for($semNo=1;$semNo<13;$semNo++)
                                                                    {
                                                                      $sqleditor="semester";
                                                                      $sqleditor2="_result";
                                                                      $sqleditor="$sqleditor$semNo$sqleditor2";
                                                                      $sql = "Select $sqleditor from student_gradepersemester WHERE userid_login=$studentid2grade";
                                                                      $result = mysqli_query($conn,$sql);
                                                                        if(mysqli_num_rows($result)!=0)
                                                                            // echo '<option>Skip</option> ';
                                                                            while($row=mysqli_fetch_array($result))
                                                                            {   
                                                                                echo '<tr>
                                                                                        <th>',$semNo,'</th>
                                                                                        <th>',$row[0],'</th>
                                                                                      </tr>'; 
                                                                            }
                                                                    }
                                                                     
                                                                
                                                        echo     '</table><from></div></div></div>';
                                                                    

                                                                    $cgpa=0;
                                                                    $sql = "Select * from student_gradepersemester WHERE userid_login='$studentid2grade'";
                                                                    $result = mysqli_query($conn,$sql);
                                                                    if(mysqli_num_rows($result)!=0)
                                                                      while($row=mysqli_fetch_array($result))
                                                                      {
                                                                        for($i=1;$i<=12;$i++)
                                                                        {
                                                                          $cgpa=$row[$i]+$cgpa;
                                                                        }
                                                                        $cgpa=$cgpa/$row[13];
                                                                        $cgpa=number_format((float)$cgpa, 2, '.', '');
                                                                        


                                                                echo '<p><strong>
                                                                      <a style="color:#34568B";>Total CGPA: </a>'; 
                                                                echo $cgpa; }

                                                                echo    '</strong></p><div>';
                                                                    
                                                                    $sql = "Select semesterCompleted from student_gradepersemester WHERE userid_login='$studentid2grade'";
                                                                    $result = mysqli_query($conn,$sql);
                                                                    if(mysqli_num_rows($result)!=0)
                                                                      while($row=mysqli_fetch_array($result)){
                                                                    


                                                                echo  '<p><strong>
                                                                      <a style="color:#34568B";>Semester Completed: </a>'; 
                                                                echo $row[0];}
                                                                echo '</strong></p></div>
                                                                        </div>';
                                                                    
                                                                }


                                            ?>
                                        </form>
                                    </div>
                                </div>
                                
                                <!----right---->
                                    
                                        <div class="col-lg-6 tm-col-home mb-4">
                                            <div class="tm-text-container">
                                                <form rows="8" name="message" class="form-control rounded-0" placeholder="Message" required>
                                                    <h2>Show grades</h2>
                                                        <div class="form-group">
                                                            <p></p>
                                                            <b><a style="color:#34568B";>ID</a></b>
                                                            <input type="number" class="form-control rounded-0" placeholder="ID"required name="uidCheck" min="0" max="99999999" value="1500000" step="1" pattern="\d*">
                                                        
                                                        
                                                        </div>

                                                

                                                <p>
                                                    <div class="form-group tm-text-right">
                                                        <input type="submit"  class="btn btn-primary" name="checkGrade">
                                                    </div>
                                                </p>
                                                
                                                </form rows="8" name="message" class="form-control rounded-0" placeholder="Message" required>


                                                        <?php
                                                        if(isset($_POST['checkGrade']))
                                                            {   
                                                                $stduid  = $_POST['uidCheck']; #id
                                                                $stduid2 = $stdIDinfo;                        
                                                            }

                                                        ?>

                                                <div class="form-group">
                                                    <form rows="8" name="message" class="form-control rounded-0" placeholder="Message" required>

                                                        <?php
                                                            if(isset($_POST['checkGrade']))
                                                            {
                                                                $sql = "UPDATE `SELECT * FROM `student_gradepersemester` WHERE userid_login=$stduid2";
                                                                $result = mysqli_query($conn,$sql);

                                                                if(mysqli_num_rows($result)!=0)
                                                                // echo '<option>Skip</option> ';
                                                                while($row=mysqli_fetch_array($result))
                                                                {   
                                                                    echo $row[0]; 
                                                                }
                                                            }

                                                            else
                                                            {
                                                                echo 'please insert an ID';
                                                            }

                                                        ?>

                                                        

                                                    </form rows="8" name="message" class="form-control rounded-0" placeholder="Message" required>
                                                </div>

                                            </div>
                                        </div>
                                    

                                  



                                <!----right---->

                                </div>
                                <div class="text-right">
                                        <a href="#Admin" class="btn btn-primary tm-btn-next">Next Page</a>
                                </div>
                            </div>
                        </div>
                <!-----------------------------------------------------Edit Panel----------------------------------------------------->
                    <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/Iimg-06.jpg"></div>
                    <div id="Admin" class="tm-section">
                        <h2 class="tm-text-primary">Edit Student Information</h2>
                        <hr class="mb-5">
                        <div class="row">
                            <div class="col-xl-6 tm-contact-col-l mb-4">
                                <!--form starts here --->
                                <form  action= "#Admin" method="post" class="tm-contact-form">

                                <!-- get id -->
                                <div class="form-group">
                                        <b><a style="color:#34568B";>Please select an ID</a></b>
                                        <select required class="form-control" name="stdIDinfo" id="studentidIDgrade
                                        ">
                                            <?php
                                            $sql = "Select userid_login from login where usertype_login='student'";
                                            $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)!=0)
                                                    // echo '<option>Skip</option> ';
                                                    while($row=mysqli_fetch_array($result))
                                                    {   
                                                        echo '<option onkeyup="saveValue(this);">',$row[0],'</option>'; 
                                                    }
                                            ?>
                                        </select>

                                        <div class="form-group">
                                                <p></p>
                                                <b><a style="color:#34568B";>Name</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Name" name="stdName" min="0">
                                            
                                                <p></p>
                                                <b><a style="color:#34568B";>Phone</a></b>
                                                <input type="number" class="form-control rounded-0"  placeholder="Phone Number" name="stdphn" min="0" max="20000000000"pattern="\d*">

                                                <p></p>
                                                <b><a style="color:#34568B";>Gender</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Gender" name="stdGen" min="0">

                                                <p></p>
                                                <b><a style="color:#34568B";>Blood Group</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Bloodgroup"  name="stdBG" min="0">

                                                <p></p>
                                                <b><a style="color:#34568B";>Nationality</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Nationality"  name="stdNation" min="0">

                                                <p></p>
                                                <b><a style="color:#34568B";>User Email</a></b>
                                                <input type="email" class="form-control rounded-0" placeholder="Email"  name="stdEmail" min="0">                                                

                                                <p></p>
                                                <b><a style="color:#34568B";>Mailing Address</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Current Address"  name="stdCA" min="0">
                                                
                                                <p></p>
                                                <b><a style="color:#34568B";>Permanent Address</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Permanent Address"  name="stdPA" min="0"> 

                                                <p></p>
                                                <b><a style="color:#34568B";>Death Of Birth</a></b>
                                                <input type="date" class="form-control rounded-0" value="2023-12-31" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"  placeholder="Date of Birth"  name="stdDOB" min="0">

                                                <p></p>
                                                <b><a style="color:#34568B";>Department</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Permanent Address" name="stdDep" min="0">                                       
                                        </div>
                                    </div>


                                     <div class="form-group tm-text-right">
                                        <input type="submit"  class="btn btn-primary" name="submitINFO">
                                    </div>

                                </form>

                                    <?php
                                    if(isset($_POST['submitINFO']))
                                        {   
                                            $stdIDinfo  = $_POST['stdIDinfo']; #id
                                            $stdIDinfo2 = $stdIDinfo;
                                            $stdName    = $_POST['stdName'];
                                            $stdPhn     = $_POST['stdphn'];
                                            $stdGen     = $_POST['stdGen'];
                                            $stdBG      = $_POST['stdBG'];
                                            $stdNation  = $_POST['stdNation'];
                                            $stdEmail   = $_POST['stdEmail'];
                                            $stdCa      = $_POST['stdCA'];
                                            $stdPa      = $_POST['stdPA'];
                                            $stdDOB     = $_POST['stdDOB'];
                                            $stdDep     = $_POST['stdDep'];                         
                                        }

                                    ?>

                                <?php
                                            
                                    ?>

                                    <div class="form-group">
                                        <form rows="8" name="message" class="form-control rounded-0" placeholder="Message" required>
                                            <?php
                                            
                                            #UPDATE TO DB semesterCompleted, grade, gradeforwhatsem
                                            if(isset($_POST['submitINFO']))
                                        {    

                                            echo "<a style='color:#34568B';>";
                                            echo "<h5><b>Update Succesful!!</a></b></h5></br> Target ID: <b>",$stdIDinfo2,"</b> </br>";

                                            if($stdName=="")
                                            {
                                                echo "<b>Name</b> was not Updated </br>";
                                            }
                                            else
                                            {
                                                #updating name

                                                $sql = "UPDATE `student_personalinfo` SET `Name`='$stdName' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Name</b> was updated to <b><a style="color:#34568B";>',$stdName,'</a></b> </br>';
                                            }

                                            


                                            if($stdPhn=="")
                                            {
                                                echo "<b>Phone</b> was not Updated </br>";
                                            }
                                            else
                                            {
                                                #update phone here;
                                                $sql = "UPDATE `student_personalinfo` SET `phone`='$stdPhn' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Phone</b> was updated to <b><a style="color:#34568B";>',$stdPhn,'</a></b> </br>'; 
                                            }




                                            if($stdGen=="")
                                            {
                                                echo "<b>Gender</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update Gender group
                                                $sql = "UPDATE `student_personalinfo` SET `Gender`='$stdGen' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Gender</b> was updated to <b><a style="color:#34568B";>',$stdGen,'</a></b> </br>';
                                            }
                                            



                                            if($stdBG=="")
                                            {
                                                echo "<b>Blood</b> Group was not updated </br>";
                                            }
                                            else
                                            {
                                                #update blood group
                                                $sql = "UPDATE `student_personalinfo` SET `BloodType`='$stdBG' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Blood Type: </b> was updated to <b><a style="color:#34568B";>',$stdBG,'</a></b> </br>';
                                            }



                                            if($stdNation=="")
                                            {
                                                echo "<b>Nationality</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update Nation group

                                                $sql = "UPDATE `student_personalinfo` SET `Nationality`='$stdNation' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Nationality: </b> was updated to <b><a style="color:#34568B";>',$stdNation,'</a></b> </br>';
                                            }



                                            if($stdEmail=="")
                                            {
                                                echo "<b>Email</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update Email

                                                $sql = "UPDATE `student_personalinfo` SET `userEmail`='$stdEmail' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                #update Email on login

                                                $sql = "UPDATE `login` SET `email_login`='$stdEmail' WHERE userid_login='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Email </b> was updated to <b><a style="color:#34568B";>',$stdEmail,'</a></b> </br>';
                                            }




                                            if($stdCa=="")
                                            {
                                                echo "<b>Mailing address</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update Current address group
                                                $sql = "UPDATE `student_personalinfo` SET `mailingAddress`='$stdCa' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Mailing address </b> was updated to <b><a style="color:#34568B";>',$stdCa,'</a></b> </br>';
                                            }


                                            if($stdPa   == "")
                                            {
                                                echo "<b>Permanent address</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update  permanent address
                                                $sql = "UPDATE `student_personalinfo` SET `permanentAddress`='$stdPa' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>permanent address</b> was updated to <b><a style="color:#34568B";>',$stdPa,'</a></b> </br>';
                                            }
                                        

                                            if($stdDOB =="2023-12-31")
                                            {
                                                echo "<b>Death of birth</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update date of birth
                                                
                                                $sql = "UPDATE `student_personalinfo` SET `dob`='$stdDOB' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);
                                                echo '<b>Date of Birth</b> was updated to <b><a style="color:#34568B";>',$stdDOB,'</a></b> </br>';

                                            }




                                            if($stdDep =="")
                                            {
                                                echo "<b>Department</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update department
                                                $sql = "UPDATE `student_careerinfo` SET `department`='$stdDep' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Department</b> was updated to <b><a style="color:#34568B";>',$stdDep,'</a></b> </br>'; 
                                            }
                                        }
                                        else
                                        {
                                            echo '<i>Fill up the form</i>';
                                        }
                                        ?>
                                        </form>
                                        </div>                                    

                                <!--- experimental JS --->

                                    </div>
                                </div>
                                <div class="text-right">
                                <a href="#fac_edit" class="btn btn-primary tm-btn-next">Next Page</a>
                                </div>
                            </div>

                            <!----------facultu edit here-->

                        <div id="fac_edit" class="tm-section">
                        <h2 class="tm-text-primary">Edit Faculty Information</h2>
                        <hr class="mb-5">
                        <div class="row">
                            <div class="col-xl-6 tm-contact-col-l mb-4">
                                <!--form starts here --->
                                <form  action= "#fac_edit" method="post" class="tm-contact-form">

                                <!-- get id -->
                                <div class="form-group">
                                        <b><a style="color:#34568B";>Please select an ID</a></b>
                                        <select required class="form-control" name="stdIDinfo" id="studentidIDgrade
                                        ">
                                            <?php
                                            $sql = "Select ID from faculty_personalinfo";
                                            $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)!=0)
                                                    // echo '<option>Skip</option> ';
                                                    while($row=mysqli_fetch_array($result))
                                                    {   
                                                        echo '<option onkeyup="saveValue(this);">',$row[0],'</option>'; 
                                                    }
                                            ?>
                                        </select>

                                        <div class="form-group">
                                                <p></p>
                                                <b><a style="color:#34568B";>Name</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Name"required name="stdName" min="0">
                                            
                                                <p></p>
                                                <b><a style="color:#34568B";>Phone</a></b>
                                                <input type="number" class="form-control rounded-0"  placeholder="Phone Number"required name="stdphn" min="0" max="20000000000"pattern="\d*">

                                                <p></p>
                                                <b><a style="color:#34568B";>Gender</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Gender" required name="stdGen" min="0">

                                                <p></p>
                                                <b><a style="color:#34568B";>Blood Group</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Bloodgroup" required name="stdBG" min="0">

                                                <p></p>
                                                <b><a style="color:#34568B";>Nationality</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Nationality" required name="stdNation" min="0">

                                                <p></p>
                                                <b><a style="color:#34568B";>User Email</a></b>
                                                <input type="email" class="form-control rounded-0"  placeholder="Email" required name="stdEmail" min="0">                                                

                                                <p></p>
                                                <b><a style="color:#34568B";>Mailing Address</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Current Address" required name="stdCA" min="0">
                                                
                                                <p></p>
                                                <b><a style="color:#34568B";>Permanent Address</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Permanent Address" required name="stdPA" min="0"> 

                                                <p></p>
                                                <b><a style="color:#34568B";>Death Of Birth</a></b>
                                                <input type="date" class="form-control rounded-0" value="2023-12-31" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" required placeholder="Date of Birth"  name="stdDOB" min="0">

                                                <p></p>
                                                <b><a style="color:#34568B";>Department</a></b>
                                                <input type="text" class="form-control rounded-0" placeholder="Department" required name="stdDep" min="0">


                                                <p></p>
                                                <b><a style="color:#34568B";>Course Code</a></b>
        

                                                <select required class="form-control" name="fac_cc" id="fac_ccedit">
                                                    <option onkeyup="saveValue(this);">Choose</option>
                                                    <?php
                                                    $sql = "Select course_code from course_offered";
                                                    $result = mysqli_query($conn,$sql);
                                                        if(mysqli_num_rows($result)!=0)
                                                            // echo '<option>Skip</option> ';
                                                            while($row=mysqli_fetch_array($result))
                                                            {   
                                                                echo '<option onkeyup="saveValue(this);">',$row[0],'</option>'; 
                                                            }
                                                    ?>
                                                </select>


                                        </div>
                                    </div>


                                     <div class="form-group tm-text-right">
                                        <input type="submit"  class="btn btn-primary" name="submitfacINFO">
                                    </div>

                                </form>

                                    <?php
                                    if(isset($_POST['submitfacINFO']))
                                        {   
                                            $stdIDinfo  = $_POST['stdIDinfo']; #id
                                            $stdIDinfo2 = $stdIDinfo;
                                            $stdName    = $_POST['stdName'];
                                            $stdPhn     = $_POST['stdphn'];
                                            $stdGen     = $_POST['stdGen'];
                                            $stdBG      = $_POST['stdBG'];
                                            $stdNation  = $_POST['stdNation'];
                                            $stdEmail   = $_POST['stdEmail'];
                                            $stdCa      = $_POST['stdCA'];
                                            $stdPa      = $_POST['stdPA'];
                                            $stdDOB     = $_POST['stdDOB'];
                                            $stdDep     = $_POST['stdDep'];
                                            $facCC      = $_POST['fac_cc'];                
                                        }

                                    ?>

                                <?php
                                            
                                    ?>

                                    <div class="form-group">
                                        <form rows="8" name="message" class="form-control rounded-0" placeholder="Message" required>
                                            <?php
                                            
                                            #UPDATE TO DB semesterCompleted, grade, gradeforwhatsem
                                            if(isset($_POST['submitfacINFO']))
                                        {    

                                            echo "<a style='color:#34568B';>";
                                            echo "<h5><b>Update Succesful!!</a></b></h5></br> Target ID: <b>",$stdIDinfo2,"</b> </br>";

                                            if($stdName=="")
                                            {
                                                echo "<b>Name</b> was not Updated </br>";
                                            }
                                            else
                                            {
                                                #updating name

                                                $sql = "UPDATE `faculty_personalinfo` SET `Name`='$stdName' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Name</b> was updated to <b><a style="color:#34568B";>',$stdName,'</a></b> </br>';
                                            }

                                            


                                            if($stdPhn=="")
                                            {
                                                echo "<b>Phone</b> was not Updated </br>";
                                            }
                                            else
                                            {
                                                #update phone here;
                                                $sql = "UPDATE `faculty_personalinfo` SET `phone`='$stdPhn' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Phone</b> was updated to <b><a style="color:#34568B";>',$stdPhn,'</a></b> </br>'; 
                                            }




                                            if($stdGen=="")
                                            {
                                                echo "<b>Gender</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update Gender group
                                                $sql = "UPDATE `faculty_personalinfo` SET `Gender`='$stdGen' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Gender</b> was updated to <b><a style="color:#34568B";>',$stdGen,'</a></b> </br>';
                                            }
                                            



                                            if($stdBG=="")
                                            {
                                                echo "<b>Blood</b> Group was not updated </br>";
                                            }
                                            else
                                            {
                                                #update blood group
                                                $sql = "UPDATE `faculty_personalinfo` SET `BloodType`='$stdBG' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Blood Type: </b> was updated to <b><a style="color:#34568B";>',$stdBG,'</a></b> </br>';
                                            }



                                            if($stdNation=="")
                                            {
                                                echo "<b>Nationality</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update Nation group

                                                $sql = "UPDATE `faculty_personalinfo` SET `Nationality`='$stdNation' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Nationality: </b> was updated to <b><a style="color:#34568B";>',$stdNation,'</a></b> </br>';
                                            }



                                            if($stdEmail=="")
                                            {
                                                echo "<b>Email</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update Email

                                                $sql = "UPDATE `faculty_personalinfo` SET `userEmail`='$stdEmail' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                #update on login

                                                $sql = "UPDATE `login` SET `email_login`='$stdEmail' WHERE userid_login='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Email </b> was updated to <b><a style="color:#34568B";>',$stdEmail,'</a></b> </br>';
                                            }




                                            if($stdCa=="")
                                            {
                                                echo "<b>Mailing address</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update Current address group
                                                $sql = "UPDATE `faculty_personalinfo` SET `mailingAddress`='$stdCa' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Mailing address </b> was updated to <b><a style="color:#34568B";>',$stdCa,'</a></b> </br>';
                                            }


                                            if($stdPa   == "")
                                            {
                                                echo "<b>Permanent address</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update  permanent address
                                                $sql = "UPDATE `faculty_personalinfo` SET `permanentAddress`='$stdPa' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>permanent address</b> was updated to <b><a style="color:#34568B";>',$stdPa,'</a></b> </br>';
                                            }
                                        

                                            if($stdDOB =="2023-12-31")
                                            {
                                                echo "<b>Death of birth</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update date of birth
                                                
                                                $sql = "UPDATE `faculty_personalinfo` SET `dob`='$stdDOB' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);
                                                echo '<b>Date of Birth</b> was updated to <b><a style="color:#34568B";>',$stdDOB,'</a></b> </br>';

                                            }




                                            if($stdDep =="")
                                            {
                                                echo "<b>Department</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update department
                                                $sql = "UPDATE `faculty_careerinfo` SET `department`='$stdDep' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Department</b> was updated to <b><a style="color:#34568B";>',$stdDep,'</a></b> </br>'; 
                                            }

                                            if($facCC == "")
                                            {
                                                echo "<b>Course Code</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update course_code
                                                $sql = "UPDATE `courses_faculty_info` SET `course_code`='$facCC' WHERE userid_login='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Course Code</b> was updated to <b><a style="color:#34568B";>',$facCC,'</a></b> </br>';
                                            }

                                        }
                                        else
                                        {
                                            echo '<i>Fill up the form</i>';
                                        }
                                        ?>
                                        </form>
                                        </div>                                    

                                <!--- experimental JS --->
                                
                                
                                    </div>
                                </div>
                                <div class="text-right">
                                <a href="#admininformation" class="btn btn-primary tm-btn-next">Next Page</a>
                                </div>
                            </div>

                            <!--Facultu edit end here---->

                            <!--admin info edit start here-->
                        <div id="admininformation" class="tm-section">
                        <h2 class="tm-text-primary">Edit Admin Information</h2>
                        <hr class="mb-5">
                        <div class="row">
                            <div class="col-xl-6 tm-contact-col-l mb-4">
                                <!--form starts here --->
                                <form  action= "#admininformation" method="post" class="tm-contact-form">

                                <!-- get id -->
                                <div class="form-group">
                                        <b><a style="color:#34568B";>Please select an ID</a></b>
                                        <select required class="form-control" name="stdIDinfo" id="studentidIDgrade
                                        ">
                                            <?php
                                            $sql = "Select ID from admin_personalinfo";
                                            $result = mysqli_query($conn,$sql);
                                                if(mysqli_num_rows($result)!=0)
                                                    // echo '<option>Skip</option> ';
                                                    while($row=mysqli_fetch_array($result))
                                                    {   
                                                        echo '<option onkeyup="saveValue(this);">',$row[0],'</option>'; 
                                                    }
                                            ?>
                                        </select>

                                        <div class="form-group">
                                                <p></p>
                                                <b><a style="color:#34568B";>Name</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Name" name="stdName" min="0">
                                            
                                                <p></p>
                                                <b><a style="color:#34568B";>Phone</a></b>
                                                <input type="number" class="form-control rounded-0" placeholder="Phone Number" name="stdphn" min="0" max="20000000000"pattern="\d*">

                                                <p></p>
                                                <b><a style="color:#34568B";>Gender</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Gender"  name="stdGen" min="0">

                                                <p></p>
                                                <b><a style="color:#34568B";>Blood Group</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Bloodgroup"  name="stdBG" min="0">

                                                <p></p>
                                                <b><a style="color:#34568B";>Nationality</a></b>
                                                <input type="text" class="form-control rounded-0" placeholder="Nationality"  name="stdNation" min="0">

                                                <p></p>
                                                <b><a style="color:#34568B";>User Email</a></b>
                                                <input type="email" class="form-control rounded-0" placeholder="Email"  name="stdEmail" min="0">                                                

                                                <p></p>
                                                <b><a style="color:#34568B";>Mailing Address</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Current Address"  name="stdCA" min="0">
                                                
                                                <p></p>
                                                <b><a style="color:#34568B";>Permanent Address</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Permanent Address"  name="stdPA" min="0"> 

                                                <p></p>
                                                <b><a style="color:#34568B";>Death Of Birth</a></b>
                                                <input type="date" class="form-control rounded-0"  pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"  placeholder="Date of Birth"  name="stdDOB" min="0">

                                                <p></p>
                                                <b><a style="color:#34568B";>Department</a></b>
                                                <input type="text" class="form-control rounded-0"  placeholder="Permanent Address"  name="stdDep" min="0">                                       
                                        </div>
                                    </div>


                                     <div class="form-group tm-text-right">
                                        <input type="submit"  class="btn btn-primary" name="submitAdminINFO">
                                    </div>

                                </form>

                                    <?php
                                    if(isset($_POST['submitAdminINFO']))
                                        {   
                                            $stdIDinfo  = $_POST['stdIDinfo']; #id
                                            $stdIDinfo2 = $stdIDinfo;
                                            $stdName    = $_POST['stdName'];
                                            $stdPhn     = $_POST['stdphn'];
                                            $stdGen     = $_POST['stdGen'];
                                            $stdBG      = $_POST['stdBG'];
                                            $stdNation  = $_POST['stdNation'];
                                            $stdEmail   = $_POST['stdEmail'];
                                            $stdCa      = $_POST['stdCA'];
                                            $stdPa      = $_POST['stdPA'];
                                            $stdDOB     = $_POST['stdDOB'];
                                            $stdDep     = $_POST['stdDep'];                         
                                        }

                                    ?>

                                <?php
                                            
                                    ?>

                                    <div class="form-group">
                                        <form rows="8" name="message" class="form-control rounded-0" placeholder="Message" required>
                                            <?php
                                            
                                            #UPDATE TO DB semesterCompleted, grade, gradeforwhatsem
                                            if(isset($_POST['submitAdminINFO']))
                                        {    

                                            echo "<a style='color:#34568B';>";
                                            echo "<h5><b>Update Succesful!!</a></b></h5></br> Target ID: <b>",$stdIDinfo2,"</b> </br>";

                                            if($stdName=="")
                                            {
                                                echo "<b>Name</b> was not Updated </br>";
                                            }
                                            else
                                            {
                                                #updating name

                                                $sql = "UPDATE `admin_personalinfo` SET `Name`='$stdName' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Name</b> was updated to <b><a style="color:#34568B";>',$stdName,'</a></b> </br>';
                                            }

                                            


                                            if($stdPhn=="")
                                            {
                                                echo "<b>Phone</b> was not Updated </br>";
                                            }
                                            else
                                            {
                                                #update phone here;
                                                $sql = "UPDATE `admin_personalinfo` SET `phone`='$stdPhn' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Phone</b> was updated to <b><a style="color:#34568B";>',$stdPhn,'</a></b> </br>'; 
                                            }




                                            if($stdGen=="")
                                            {
                                                echo "<b>Gender</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update Gender group
                                                $sql = "UPDATE `admin_personalinfo` SET `Gender`='$stdGen' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Gender</b> was updated to <b><a style="color:#34568B";>',$stdGen,'</a></b> </br>';
                                            }
                                            



                                            if($stdBG=="")
                                            {
                                                echo "<b>Blood</b> Group was not updated </br>";
                                            }
                                            else
                                            {
                                                #update blood group
                                                $sql = "UPDATE `admin_personalinfo` SET `BloodType`='$stdBG' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Blood Type: </b> was updated to <b><a style="color:#34568B";>',$stdBG,'</a></b> </br>';
                                            }



                                            if($stdNation=="")
                                            {
                                                echo "<b>Nationality</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update Nation group

                                                $sql = "UPDATE `admin_personalinfo` SET `Nationality`='$stdNation' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Nationality: </b> was updated to <b><a style="color:#34568B";>',$stdNation,'</a></b> </br>';
                                            }



                                            if($stdEmail=="")
                                            {
                                                echo "<b>Email</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update Email

                                                $sql = "UPDATE `admin_personalinfo` SET `userEmail`='$stdEmail' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                #update on login

                                                $sql = "UPDATE `login` SET `email_login`='$stdEmail' WHERE userid_login='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Email </b> was updated to <b><a style="color:#34568B";>',$stdEmail,'</a></b> </br>';
                                            }




                                            if($stdCa=="")
                                            {
                                                echo "<b>Mailing address</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update Current address group
                                                $sql = "UPDATE `admin_personalinfo` SET `mailingAddress`='$stdCa' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Mailing address </b> was updated to <b><a style="color:#34568B";>',$stdCa,'</a></b> </br>';
                                            }


                                            if($stdPa   == "")
                                            {
                                                echo "<b>Permanent address</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update  permanent address
                                                $sql = "UPDATE `admin_personalinfo` SET `permanentAddress`='$stdPa' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>permanent address</b> was updated to <b><a style="color:#34568B";>',$stdPa,'</a></b> </br>';
                                            }
                                        

                                            if($stdDOB =="2023-12-31")
                                            {
                                                echo "<b>Death of birth</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update date of birth
                                                
                                                $sql = "UPDATE `admin_personalinfo` SET `dob`='$stdDOB' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);
                                                echo '<b>Date of Birth</b> was updated to <b><a style="color:#34568B";>',$stdDOB,'</a></b> </br>';

                                            }




                                            if($stdDep =="")
                                            {
                                                echo "<b>Department</b> was not updated </br>";
                                            }
                                            else
                                            {
                                                #update department
                                                $sql = "UPDATE `admin_careerinfo` SET `department`='$stdDep' WHERE ID='$stdIDinfo2'";
                                                $result = mysqli_query($conn,$sql);

                                                echo '<b>Department</b> was updated to <b><a style="color:#34568B";>',$stdDep,'</a></b> </br>'; 
                                            }
                                        }
                                        else
                                        {
                                            echo '<i>Fill up the form</i>';
                                        }
                                        ?>
                                        </form>
                                        </div>                                    

                                <!--- experimental JS --->
                                
                                    </div>
                                </div>
                                <div class="text-right">
                                <a href="#creator" class="btn btn-primary tm-btn-next">Next Page</a>
                                </div>
                            </div>


                            <!--admin info edit ends here-->
                        </div>
                    </div>
                </div>


                <!--------------------------------------------creator panel-------------------------------------------------------------------------->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/Iimg-04.jpg"></div>
                    <div id="creator" class="tm-section">
                        <h2 class="tm-text-primary">Creator Studio</h2>
                        <hr class="mb-5">
                        <div class="row">

                            <div class="col-xl-6 tm-contact-col-l mb-4">

                                <!-- description-->
                                <ul>

                                </ul> 
                                <!----description ends here-->
                                <p>    </p>

                                <!--form starts here --->
                                <form  action= "#creator" method="post" class="tm-contact-form">


                                <!-- get id -->
                                <b><a style="color:#34568B";>ID</a></b>
                                <div class="form-group">
                                    <input type="number" class="form-control rounded-0" value="" placeholder="ID" required name="ykid" max="99999999" ">
                                </div>
                                <!--get user type-->

                                <b><a style="color:#34568B";>User Type</a></b>
                                <div class="form-group">
                                        <select required class="form-control" name="useType" id="userTypeID">
                                            <option onkeyup="saveValue(this);">student</option>
                                            <option onkeyup="saveValue(this);">faculty</option>
                                            <option onkeyup="saveValue(this);">admin</option>
                                        </select>

                                </div>

                                <!-- get username -->
                                <p></p>
                                <b><a style="color:#34568B";>Username</a></b>
                                <input type="text" class="form-control rounded-0" value="" placeholder="Username" required name="ykwUsername" id="ykwUsernameID">
              
                                <!---get password-->
                                <p></p>
                                <b><a style="color:#34568B";>Password</a></b>
                                <input type="password" class="form-control rounded-0" value="" placeholder="Password" required name="ykwPass" id="ykwUsernameID">

                                <p></p>
                                <b><a style="color:#34568B";>Name</a></b>
                                <input type="text" class="form-control rounded-0" value="" placeholder="Name"required name="ykwName" min="0">
                            
                                <p></p>
                                <b><a style="color:#34568B";>Phone</a></b>
                                <input type="number" class="form-control rounded-0" value="" placeholder="Phone Number"required name="ykwphn" min="0" max="20000000000"pattern="\d*">

                                <p></p>
                                <b><a style="color:#34568B";>Gender</a></b>
                                <input type="text" class="form-control rounded-0" value="" placeholder="Gender" required name="ykwGen" min="0">

                                <p></p>
                                <b><a style="color:#34568B";>Blood Group</a></b>
                                <input type="text" class="form-control rounded-0" value="" placeholder="Bloodgroup" required name="ykwBG" min="0">

                                <p></p>
                                <b><a style="color:#34568B";>Nationality</a></b>
                                <input type="text" class="form-control rounded-0" value="" placeholder="Nationality" required name="ykwNation" min="0">

                                <p></p>
                                <b><a style="color:#34568B";>User Email</a></b>
                                <input type="email" class="form-control rounded-0" value=""placeholder="Email" required name="ykwEmail" min="0">                                                

                                <p></p>
                                <b><a style="color:#34568B";>Mailing Address</a></b>
                                <input type="text" class="form-control rounded-0" value="" placeholder="Current Address" required name="ykwCA" min="0">
                                
                                <p></p>
                                <b><a style="color:#34568B";>Permanent Address</a></b>
                                <input type="text" class="form-control rounded-0" value="" placeholder="Permanent Address" required name="ykwPA" min="0"> 

                                <p></p>
                                <b><a style="color:#34568B";>Death Of Birth</a></b>
                                <input type="date" class="form-control rounded-0" value="" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" required placeholder="Date of Birth"  name="ykwDOB" min="0">

                                <p></p>
                                <b><a style="color:#34568B";>Department</a></b>
                                <input type="text" class="form-control rounded-0" value="" placeholder="Permanent Address" required name="ykwDep" min="0">

                                <div> <br></div>

                                    <!------new------------------------------------------------------>
                                    <!-------------new ends here-------------------------------------->
                                    
                                    <div class="form-group tm-text-right">
                                        <input type="submit"  class="btn btn-primary" name="createID">
                                    </div>

                                </form>


                                <?php
                                    if(isset($_POST['createID']))
                                        {   
                                            $newIDinfo  = $_POST['ykid']; #id
                                            $newIDinfo2 = $newIDinfo;
                                            $uType      = $_POST['useType'];
                                            $newName    = $_POST['ykwUsername'];
                                            $newpass    = $_POST['ykwPass'];
                                            $newFname    = $_POST['ykwName'];
                                            $newPhn    = $_POST['ykwphn'];
                                            $newGen    = $_POST['ykwGen'];
                                            $newBG    = $_POST['ykwBG'];
                                            $newNation    = $_POST['ykwNation'];
                                            $newEmail    = $_POST['ykwEmail'];
                                            $newCA    = $_POST['ykwCA'];
                                            $newPA    = $_POST['ykwPA'];
                                            $newDOB    = $_POST['ykwDOB'];
                                            $newDep    = $_POST['ykwDep'];

                                            // $newrlname  = $_POST['randomName'];
                                            // $newphone   = $_POST['random'];                  
                                        }

                                ?>

                                    <div class="form-group">
                                        <form rows="8" name="message" class="form-control rounded-0" placeholder="Message" required>
                                            <?php

                                                if(isset($_POST['createID']))
                                                {   


                                                    #before this please check type

                                                    if($newIDinfo2=="000")
                                                    {
                                                        echo $newIDinfo2;
                                                    }
                                                    else
                                                    {   
                                                        #check for duplicate
                                                        #update id here
                                                        #multiple update careful

                                                        #checking for duplicate id
                                                        $sql = "Select userid_login from login where userid_login='$newIDinfo2'";
                                                        $result = mysqli_query($conn,$sql);
                                                        if(mysqli_num_rows($result)!=0)
                                                        // echo '<option>Skip</option> ';
                                                        while($row=mysqli_fetch_array($result))
                                                        {   
                                                            $checkerID=$row[0];
                                                        }
                                                        else
                                                        {
                                                            $checkerID="10101010101010";
                                                        }

                                                        #checking for duplicate name
                                                        $sql = "Select username_login from login where username_login='$newName'";
                                                        $result = mysqli_query($conn,$sql);
                                                        if(mysqli_num_rows($result)!=0)
                                                        // echo '<option>Skip</option> ';
                                                        while($row=mysqli_fetch_array($result))
                                                        {   

                                                            $checkerName=$row[0];
                                                        }
                                                        else
                                                        {
                                                            $checkerName="Namedoesnotexistandthisisthekey";
                                                        }


                                                        if($checkerID==$newIDinfo2)
                                                        {
                                                            echo "<b>ERROR :</b> UID already exists! Please insert a unique identification number";
                                                        }
                                                        else
                                                        {
                                                            #check for same username
                                                            if($newName==$checkerName)
                                                            {
                                                                echo "<b>ERROR :</b> Username already exists! Please insert a unique username";
                                                            }
                                                            else
                                                            {
                                                                #check for type

                                                                if($uType=="student")
                                                                {   

                                                                    #id update on student_personalinfo;
                                                                    $sql = "INSERT INTO `student_personalinfo`(`ID`,`dob`,`Gender`,`Name`,`phone`,`BloodType`,`Nationality`,`userEmail`,`mailingAddress`,`permanentAddress`) VALUES ('$newIDinfo2', '$newDOB','$newGen','$newFname','$newPhn','$newBG', '$newNation','$newEmail','$newCA','newPA')";
                                                                    $result = mysqli_query($conn,$sql);

                                                                    #id update on student_careerinfo
                                                                    $sql = "INSERT INTO `student_careerinfo`(`ID`, `totalCredit`, `department`, `numberOfCourseThisSemester`) VALUES ('$newIDinfo2','0','Not Decided','5')";
                                                                    $result = mysqli_query($conn,$sql);

                                                                    #id update on student_gradepersemester
                                                                    $sql = "INSERT INTO `student_gradepersemester`(`userid_login`, `semester1_result`, `semester2_result`, `semester3_result`, `semester4_result`, `semester5_result`, `semester6_result`, `semester7_result`, `semester8_result`, `semester9_result`, `semester10_result`, `semester11_result`, `semester12_result`, `semesterCompleted`) VALUES ('$newIDinfo2','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','1')";
                                                                    $result = mysqli_query($conn,$sql);

                                                                    #id update on courses_studentinfo
                                                                    $sql = "INSERT INTO `courses_student_info`(`userid_login`, `numberofcourses`, `course_1`, `course_2`, `course_3`, `course_4`, `course_5`) VALUES ('$newIDinfo2','5','NotAdvised','NotAdvised','NotAdvised','NotAdvised','NotAdvised')";
                                                                    $result = mysqli_query($conn,$sql);

                                                                    #id update on login
                                                                    $sql = "INSERT INTO `login`(`username_login`, `password_login`, `usertype_login`,`userid_login`) VALUES ('$newName','$newpass','$uType','$newIDinfo2')";
                                                                    $result = mysqli_query($conn,$sql);


                                                                    echo "<b>Welcome to USIS!</b><br>";
                                                                    echo "ID type: <a style='color:#34568B';>$uType</a><br>";
                                                                    echo "Unique Identification Number: <a style='color:#34568B';>$newIDinfo2</a><br>";
                                                                    echo "Username: <a style='color:#34568B';>$newName</a><br>";  
                                                                    echo "Password: <a style='color:#34568B';>$newpass</a><br>";



                                                                }

                                                                if($uType=="faculty")
                                                                {   
                                                                    #id update on faculty_personalinfo;
                                                                    $sql = "INSERT INTO `faculty_personalinfo`(`ID`,`dob`,`Gender`,`Name`,`phone`,`BloodType`,`Nationality`,`userEmail`,`mailingAddress`,`permanentAddress`) VALUES ('$newIDinfo2', '$newDOB','$newGen','$newFname','$newPhn','$newBG', '$newNation','$newEmail','$newCA','newPA')";
                                                                    $result = mysqli_query($conn,$sql);

                                                                    #id update on coures_faculty_info
                                                                    $sql = "INSERT INTO `courses_faculty_info`(`userid_login`, `course_code`, `NumberOfStudents`) VALUES ('$newIDinfo2','NotAdvised','0')";
                                                                    $result = mysqli_query($conn,$sql);


                                                                    #id update on faculty_careerinfo
                                                                    $sql = "INSERT INTO `faculty_careerinfo`(`ID`, `department`, `JoiningDate`, `course_code`) VALUES ('$newIDinfo2','Undecided','2022-04-25','NotAdvised')";
                                                                    $result = mysqli_query($conn,$sql);


                                                                    #id update on login
                                                                    $sql = "INSERT INTO `login`(`username_login`, `password_login`, `usertype_login`,`userid_login`) VALUES ('$newName','$newpass','$uType','$newIDinfo2')";
                                                                    $result = mysqli_query($conn,$sql);
                                                                    echo "<b>Welcome to USIS!</b><br>";
                                                                    echo "ID type: <a style='color:#34568B';>$uType</a><br>";
                                                                    echo "Unique Identification Number: <a style='color:#34568B';>$newIDinfo2</a><br>";
                                                                    echo "Username: <a style='color:#34568B';>$newName</a><br>";  
                                                                    echo "Password: <a style='color:#34568B';>$newpass</a><br>";

                                                                }

                                                                if($uType=="admin")
                                                                {   
                                                                    #id update on faculty_personalinfo;
                                                        $sql = "INSERT INTO `admin_personalinfo`(`ID`,`dob`,`Gender`,`Name`,`phone`,`BloodType`,`Nationality`,`userEmail`,`mailingAddress`,`permanentAddress`) VALUES ('$newIDinfo2','$newDOB','$newGen','$newFname','$newPhn','$newBG', '$newNation','$newEmail','$newCA','newPA')";
                                                                    $result = mysqli_query($conn,$sql);

                                                                    #id update on faculty_careerinfo
                                                                    
                                                                    $sql = "INSERT INTO `admin_careerinfo`(`ID`, `department`, `JoiningDate`, `Designation`) VALUES ('$newIDinfo2','$newDep','2022-04-25','Admin')";
                                                                    $result = mysqli_query($conn,$sql);

                                                                    #id update on login
                                                                    $sql = "INSERT INTO `login`(`username_login`, `password_login`, `usertype_login`,`userid_login`) VALUES ('$newName','$newpass','$uType','$newIDinfo2')";
                                                                    $result = mysqli_query($conn,$sql);
                                                                    
                                                                    echo "<b>Welcome to USIS!</b><br>";
                                                                    echo "ID type: <a style='color:#34568B';>$uType</a><br>";
                                                                    echo "Unique Identification Number: <a style='color:#34568B';>$newIDinfo2</a><br>";
                                                                    echo "Username: <a style='color:#34568B';>$newName</a><br>";  
                                                                    echo "Password: <a style='color:#34568B';>$newpass</a><br>";
                                                                }

                                                            }

                                                        }   
                                                    }



                                                
                                                }

                                                else
                                                {
                                                    echo "<b>Please Insert Info<b>";
                                                }


                                            ?>
                                        </form>
                                    </div>

                                <!--- experimental JS --->
                                    </div>
                                </div>
                                    <div class="text-right">
                                        <a href="#studentinformation" class="btn btn-primary tm-btn-next">Go Top</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!---creator panel ends here->
                <!---end--->
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