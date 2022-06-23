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

                                  $sql = "Select Name from student_personalinfo WHERE ID='$userid_login'";
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
                                    Student Information
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
                                <a href="#meetFaculty" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-user-friends nav-icon"></i>
                                    Meet Your Faculties
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
                                      $userid_login=$_SESSION['userid'];
                                    ?>


                                    <?php
                                    $sql = "Select Name from student_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                      
                                    <p><strong>
                                      <a style="color:#34568B";>Name: </a><?php echo $row[0]; }?>

                                    </strong></p>

                                    <?php
                                    $sql = "Select dob from student_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                      
                                    <p><strong>
                                      <a style="color:#34568B";>Date of birth: </a><?php echo $row[0]; }?>
                                    </strong></p>
                                    
                                    <?php
                                    $sql = "Select Nationality from student_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <p><strong>
                                      <a style="color:#34568B";>Nationality: </a><?php echo $row[0]; }?>
                                    </strong></p>

                                    <?php
                                    $sql = "Select mailingAddress from student_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <p><strong>
                                      <a style="color:#34568B";>Mailing Address: </a><?php echo $row[0]; }?>
                                    </strong></p>

                                     <?php
                                    $sql = "Select permanentAddress from student_personalinfo WHERE ID='$userid_login'";
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
                                    $sql = "Select Gender from student_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <p><strong>
                                      <a style="color:#34568B";>Gender: </a><?php echo $row[0];}?>
                                    </strong></p>



                                     <?php
                                    $sql = "Select phone from student_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <p><strong>
                                      <a style="color:#34568B";>Phone : </a>+880<?php echo $row[0];}?>
                                    </strong></p>


                                     <?php
                                    $sql = "Select ID from student_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <p><strong>
                                      <a style="color:#34568B";>ID : </a><?php echo $row[0];}?>
                                    </strong></p>



                                     <?php
                                    $sql = "Select BloodType from student_personalinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <p><strong>
                                      <a style="color:#34568B";>Blood : </a><?php echo $row[0];}?>
                                    </strong></p>



                                     <?php
                                    $sql = "Select userEmail from student_personalinfo WHERE ID='$userid_login'";
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
                                    $sql = "Select ID from student_careerinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>                      
                                    <p><strong>
                                      <a style="color:#34568B";>ID: </a><?php echo $row[0];}?>
                                    </strong></p>


                                     <?php
                                    $sql = "Select department from student_careerinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>    
                                    <p><strong>
                                      <a style="color:#34568B";>Department: </a><?php echo $row[0];}?>
                                    </strong></p>


                                     <?php
                                    $sql = "Select semesterCompleted from student_gradepersemester WHERE userid_login='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?> 
                                    <p><strong>
                                      <a style="color:#34568B";>Semester: </a><?php $tem=1+$row[0]; echo $tem;}?>
                                    </strong></p>

                                     <?php
                                    $cgpa=0;
                                    $sql = "Select * from student_gradepersemester WHERE userid_login='$userid_login'";
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
                                        ?>
                                    <p><strong>
                                      <a style="color:#34568B";>CGPA: </a><?php echo $cgpa;}?>
                                    </strong></p>


                                </div>                                
                            </div>
                            <div class="col-lg-6 tm-col-home mb-4">
                                <div class="tm-text-container">
                                    <div class="tm-icon-container mb-5 mr-0 ">
                                        <i class="fas fa-broadcast-tower fa-4x tm-text-primary"></i>
                                    </div>

                                     <?php
                                    $sql = "Select numberofcourses from courses_student_info WHERE userid_login='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>                                  
                                    <p><strong>
                                      <a style="color:#34568B";>Number Of Courses: </a><?php echo $row[0];}?>
                                    </strong></p>


                                     <?php
                                    $sql = "Select * from courses_student_info WHERE userid_login='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <p><strong>
                                      <a style="color:#34568B";>Courses: </a><?php echo $row[2]," ",$row[3]," ",$row[4]," ",$row[5]," ",$row[6];}?>
                                    </strong></p>



                                    <?php
                                    $sql = "Select totalCredit from student_careerinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result)){
                                    ?> 
                                    <p><strong>
                                      <a style="color:#34568B";>Total Credit: </a><?php echo $row[0];}?>
                                    </strong></p>
                                    <div class="text-right">
                                        <a href="#meetFaculty" class="btn btn-primary tm-btn-next">Next Page</a>
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
                    <section id="meetFaculty" class="tm-section">
                        <h2 class="tm-text-primary">Meet Your Faculties!</h2>
                        <hr class="mb-5">
                        
                        <div class="row tm-row-about">
                            <div class="tm-col-about tm-col-about-l">
                                <p class="mb-4">
                                  <strong>Here you can see your advised courses and faculties</strong>
                            </div>
                            <div class="tm-col-about tm-col-about-r">
                                <!--<img src="img/limg-home-01-big.jpg" alt="Image" class="img-fluid mb-5 tm-img-about"> -->
                                <p>
                                    If you are taking you RS, you should check you <a href="https://www.bracu.ac.bd/sites/default/files/academics/residential-semester/RS%20Handbook%2C%20Spring%202022%28M%29.pdf" target=_blank>Handook </a>
                                </p>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="tm-carousel">
                                <?php

                                    $sql = "Select numberOfCourseThisSemester from student_careerinfo WHERE ID='$userid_login'";
                                    $result = mysqli_query($conn,$sql);
                                    if(mysqli_num_rows($result)!=0)
                                      while($row=mysqli_fetch_array($result))
                                      {
                                        $coursenumber=$row[0];
                                      }

                                      for($unique=0;$unique<$coursenumber;$unique++)
                                      {
                                        echo '<div class="tm-carousel-item">
                                          <figure class="effect-honey mb-4">
                                              <img src="img/unknown.jpg" alt="Featured Item">
                                              <figcaption>
                                                  <ul class="tm-social">
                                                      <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                                                      <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                                                      <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                                                  </ul>
                                              </figcaption>
                                          </figure>
                                          <div class="tm-about-text">'?>
                                          <?php
                                              echo '<h3 class="mb-3 tm-text-primary tm-about-title">'
                                          ?>

                                          <?php     
                                                    $emptyarray=[];
                                                    $coursenamearray=[];
                                                    $routinsetter=[];
                                                    if($coursenumber==3)
                                                    {
                                                      $sql = "Select course_1,course_2,course_3 from courses_student_info WHERE userid_login='$userid_login'";
                                                      $result = mysqli_query($conn,$sql);
                                                      if(mysqli_num_rows($result)!=0)
                                                        while($row=mysqli_fetch_array($result))
                                                        {
                                                          $coursename1=$row[0];
                                                          $coursename2=$row[1];
                                                          $coursename3=$row[2];

                                                          array_push($coursenamearray, $coursename1,$coursename2,$coursename3);

                                                          if(mysqli_num_rows($result)!=0)
                                                            while($row=mysqli_fetch_array($result))
                                                            {
                                                              array_push($emptyarray, $row[0]);
                                                              array_push($routinsetter, $row[1]);
                                                            }

                                                          $sql = "Select facultyname,course_time from course_offered WHERE course_code='$coursename1'";
                                                          $result = mysqli_query($conn,$sql);
                                                          if(mysqli_num_rows($result)!=0)
                                                            while($row=mysqli_fetch_array($result))
                                                            {
                                                              array_push($emptyarray, $row[0]);
                                                              array_push($routinsetter, $row[1]);
                                                            }
                                                          $sql = "Select facultyname,course_time from course_offered WHERE course_code='$coursename2'";
                                                          $result = mysqli_query($conn,$sql);
                                                          if(mysqli_num_rows($result)!=0)
                                                            while($row=mysqli_fetch_array($result))
                                                            { 
                                                              array_push($emptyarray, $row[0]);
                                                              array_push($routinsetter, $row[1]);
                                                            }
                                                          $sql = "Select facultyname,course_time from course_offered WHERE course_code='$coursename3'";
                                                          $result = mysqli_query($conn,$sql);
                                                          if(mysqli_num_rows($result)!=0)
                                                            while($row=mysqli_fetch_array($result))
                                                            {
                                                              array_push($emptyarray, $row[0]);
                                                              array_push($routinsetter, $row[1]);
                                                            }
                                                            echo $emptyarray[$unique];
                                                        }
                                                    }
                                                    elseif($coursenumber==4)
                                                    {
                                                      $sql = "Select course_1,course_2,course_3,course_4 from courses_student_info WHERE userid_login='$userid_login'";
                                                      $result = mysqli_query($conn,$sql);
                                                      if(mysqli_num_rows($result)!=0)
                                                        while($row=mysqli_fetch_array($result))
                                                        {
                                                          $coursename1=$row[0];
                                                          $coursename2=$row[1];
                                                          $coursename3=$row[2];
                                                          $coursename4=$row[3];

                                                          array_push($coursenamearray, $coursename1,$coursename2,$coursename3,$coursename4);

                                                          if(mysqli_num_rows($result)!=0)
                                                            while($row=mysqli_fetch_array($result))
                                                            {
                                                              array_push($emptyarray, $row[0]);
                                                              array_push($routinsetter, $row[1]);
                                                            }

                                                          $sql = "Select facultyname,course_time from course_offered WHERE course_code='$coursename1'";
                                                          $result = mysqli_query($conn,$sql);
                                                          if(mysqli_num_rows($result)!=0)
                                                            while($row=mysqli_fetch_array($result))
                                                            {
                                                              array_push($emptyarray, $row[0]);
                                                              array_push($routinsetter, $row[1]);
                                                            }
                                                          $sql = "Select facultyname,course_time from course_offered WHERE course_code='$coursename2'";
                                                          $result = mysqli_query($conn,$sql);
                                                          if(mysqli_num_rows($result)!=0)
                                                            while($row=mysqli_fetch_array($result))
                                                            { 
                                                              array_push($emptyarray, $row[0]);
                                                              array_push($routinsetter, $row[1]);
                                                            }
                                                          $sql = "Select facultyname,course_time from course_offered WHERE course_code='$coursename3'";
                                                          $result = mysqli_query($conn,$sql);
                                                          if(mysqli_num_rows($result)!=0)
                                                            while($row=mysqli_fetch_array($result))
                                                            {
                                                              array_push($emptyarray, $row[0]);
                                                              array_push($routinsetter, $row[1]);
                                                            }
                                                          $sql = "Select facultyname,course_time from course_offered WHERE course_code='$coursename4'";
                                                          $result = mysqli_query($conn,$sql);
                                                          if(mysqli_num_rows($result)!=0)
                                                            while($row=mysqli_fetch_array($result))
                                                            {
                                                              array_push($emptyarray, $row[0]);
                                                              array_push($routinsetter, $row[1]);
                                                            }
                                                            echo $emptyarray[$unique];
                                                        }
                                                   }

                                                    elseif($coursenumber==5)
                                                    {
                                                      $sql = "Select course_1,course_2,course_3,course_4, course_5 from courses_student_info WHERE userid_login='$userid_login'";
                                                      $result = mysqli_query($conn,$sql);
                                                      if(mysqli_num_rows($result)!=0)
                                                        while($row=mysqli_fetch_array($result))
                                                        {
                                                          $coursename1=$row[0];
                                                          $coursename2=$row[1];
                                                          $coursename3=$row[2];
                                                          $coursename4=$row[3];
                                                          $coursename5=$row[4];

                                                          array_push($coursenamearray, $coursename1,$coursename2,$coursename3,$coursename4,$coursename5);

                                                          if(mysqli_num_rows($result)!=0)
                                                            while($row=mysqli_fetch_array($result))
                                                            {
                                                              array_push($emptyarray, $row[0]);
                                                              array_push($routinsetter, $row[1]);
                                                            }

                                                          $sql = "Select facultyname,course_time from course_offered WHERE course_code='$coursename1'";
                                                          $result = mysqli_query($conn,$sql);
                                                          if(mysqli_num_rows($result)!=0)
                                                            while($row=mysqli_fetch_array($result))
                                                            {
                                                              array_push($emptyarray, $row[0]);
                                                              array_push($routinsetter, $row[1]);
                                                            }
                                                          $sql = "Select facultyname,course_time from course_offered WHERE course_code='$coursename2'";
                                                          $result = mysqli_query($conn,$sql);
                                                          if(mysqli_num_rows($result)!=0)
                                                            while($row=mysqli_fetch_array($result))
                                                            { 
                                                              array_push($emptyarray, $row[0]);
                                                              array_push($routinsetter, $row[1]);
                                                            }
                                                          $sql = "Select facultyname,course_time from course_offered WHERE course_code='$coursename3'";
                                                          $result = mysqli_query($conn,$sql);
                                                          if(mysqli_num_rows($result)!=0)
                                                            while($row=mysqli_fetch_array($result))
                                                            {
                                                              array_push($emptyarray, $row[0]);
                                                              array_push($routinsetter, $row[1]);
                                                            }
                                                          $sql = "Select facultyname,course_time from course_offered WHERE course_code='$coursename4'";
                                                          $result = mysqli_query($conn,$sql);
                                                          if(mysqli_num_rows($result)!=0)
                                                            while($row=mysqli_fetch_array($result))
                                                            {
                                                              array_push($emptyarray, $row[0]);
                                                              array_push($routinsetter, $row[1]);
                                                            }
                                                          $sql = "Select facultyname,course_time from course_offered WHERE course_code='$coursename5'";
                                                          $result = mysqli_query($conn,$sql);
                                                          if(mysqli_num_rows($result)!=0)
                                                            while($row=mysqli_fetch_array($result))
                                                            {
                                                              array_push($emptyarray, $row[0]);
                                                              array_push($routinsetter, $row[1]);
                                                            }
                                                            echo $emptyarray[$unique];
                                                          }
                                                      }
                                                

                                          ?>

                                        <?php 
                                          echo'</h3> <p>'
                                        ?> 

                                        <?php 
                                          echo $routinsetter[$unique];
                                        ?>

                                        <?php 
                                        echo '</p>' 
                                        ?>

                                        <?php echo'
                                              <h4 class="tm-text-secondary tm-about-subtitle">'  
                                        ?> 

                                        <?php 
                                              echo $coursenamearray[$unique];                                        
                                        ?>

                                        <?php echo'</h4>
                                          </div>
                                        </div>';
                                      }
                                ?>
                            </div>
                                <div> 
                                    <div><p></p></div>
                                    <div class="text-right">
                                        <a href="#ADVISING" class="btn btn-primary tm-btn-next">Next Page</a>
                                    </div>
                                </div>
                        </div>
                    </section>

                </div>


                <!------------------------------------------------------------------------------------------------------------------------------------------------>
                <!-- advising-student -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/Iimg-04.jpg"></div>
                    <div id="ADVISING" class="tm-section">
                        <h2 class="tm-text-primary">Advising Panel</h2>
                        <hr class="mb-5">
                        <div class="row">
                            <div class="col-xl-6 tm-contact-col-l mb-4">
                                <!--form starts here --->
                                <!---------course -1 ---------->

                                <form  action= "#ADVISING" method="post" class="tm-contact-form">
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
                                    <b><a style="color:#34568B";>Course 4 </a></b>                            
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
                                    <b><a style="color:#34568B";>Course 5 </a></b>
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
                                            $student_advising1 = $_POST['student_advising1'];
                                            $student_advising2 = $_POST['student_advising2'];
                                            $student_advising3 = $_POST['student_advising3'];
                                            $student_advising4 = $_POST['student_advising4'];
                                            $student_advising5 = $_POST['student_advising5'];
                                        }

                                    ?>


                                    <div class="form-group">
                                        <form rows="8" name="message" class="form-control rounded-0" placeholder="Message" required>
                                            <?php
                                            
                                            
                                            if(isset($student_advising1,$student_advising2,$student_advising3,$student_advising4,$student_advising5))
                                            {   

                                                #UPDATE COURSE-1, COURSE-2, COURSE-3 TO DB

                                                $sql = "update `courses_student_info` SET `course_1`='$student_advising1',`course_2`='$student_advising2',`course_3`='$student_advising3' WHERE userid_login='$userid_login'";
                                                $result = mysqli_query($conn,$sql);



                                                if($student_advising4=='Choose' and $student_advising5=='Choose')
                                                {   
                                                    $student_advising4=" ";
                                                    $student_advising5=" ";
                                                    $updtCourseNo=3;
                                                    #UPDATE number of courses
                                                    $sql = "update `courses_student_info` SET `numberofcourses`='$updtCourseNo' WHERE userid_login='$userid_login'";
                                                    $result = mysqli_query($conn,$sql);


                                                    #update table-2

                                                    $sql = "update `student_careerinfo` SET `numberOfCourseThisSemester`='$updtCourseNo' WHERE  ID='$userid_login'";
                                                    $result = mysqli_query($conn,$sql);


                                                    #update zero course
                                                    $sql = "update `courses_student_info` SET `numberofcourses`='$updtCourseNo',`course_4`='',`course_5`='' WHERE userid_login='$userid_login'";
                                                    $result = mysqli_query($conn,$sql);

                                                    echo "<p>Courses taken for advising is $updtCourseNo</p>";
                                                }
                                                else if($student_advising4=='Choose')
                                                {   
                                                    #at course4 we will update $student_advising5
                                                    $sql = "update `courses_student_info` SET `course_4`='$student_advising5',`course_5`='' WHERE userid_login='$userid_login'";
                                                    $result = mysqli_query($conn,$sql);




                                                    $student_advising4=" ";
                                                    $updtCourseNo=4;


                                                    #update table-1
                                                    $sql = "update `courses_student_info` SET `numberofcourses`='$updtCourseNo' WHERE userid_login='$userid_login'";
                                                    $result = mysqli_query($conn,$sql);
                                                    #update table-2
                                                    $sql = "update `student_careerinfo` SET `numberOfCourseThisSemester`='$updtCourseNo' WHERE ID='$userid_login'";
                                                    $result = mysqli_query($conn,$sql);


                                                    echo "<p>Courses taken for advising is $updtCourseNo</p>";

                                                }
                                                else if($student_advising5=='Choose')
                                                {   
                                                    #at course5 we will update $student_advising4
                                                    $sql = "update `courses_student_info` SET `course_4`='$student_advising4', `course_5`='' WHERE userid_login='$userid_login'";
                                                    $result = mysqli_query($conn,$sql);



                                                    $student_advising5=" ";
                                                    $updtCourseNo=4;


                                                    #update table-1
                                                    $sql = "update `courses_student_info` SET `numberofcourses`='$updtCourseNo' WHERE userid_login='$userid_login'";
                                                    $result = mysqli_query($conn,$sql);


                                                    #update table-2
                                                    $sql = "update `student_careerinfo` SET `numberOfCourseThisSemester`='$updtCourseNo' WHERE ID='$userid_login'";
                                                    $result = mysqli_query($conn,$sql);


                                                    echo "<p>Courses taken for advising is $updtCourseNo</p>";      
                                                }
                                                else
                                                {   
                                                    #at course5 with $student_advising5 and course 4 with $student_advising4
                                                    $sql = "update `courses_student_info` SET `course_5`='$student_advising5',`course_4`='$student_advising4' WHERE userid_login='$userid_login'";
                                                    $result = mysqli_query($conn,$sql);

                                                    $updtCourseNo=5;



                                                    #update table-1
                                                    $sql = "update `courses_student_info` SET `numberofcourses`='$updtCourseNo' WHERE userid_login='$userid_login'";
                                                    $result = mysqli_query($conn,$sql);


                                                    #update table-2
                                                    $sql = "update `student_careerinfo` SET `numberOfCourseThisSemester`='$updtCourseNo' WHERE ID='$userid_login'";
                                                    $result = mysqli_query($conn,$sql);


                                                    echo "<p>Courses taken for advising is $updtCourseNo</p>";      
                                                }

                                            }



                                            if(isset($student_advising1,$student_advising2,$student_advising3,$student_advising4,$student_advising5))
                                            {   
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

                                                echo "</b> has just been advised";
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

                                    <!---rules---->
                                <ul>
                                    <b><li>Please Select at least three courses</li>
                                    <li>Keep option three or four "Choose" if you do NOT want to take anymore course </li>
                                    <li>Do NOT take Courses with the same title</li>
                                    </b>
                                    
                                </ul>
                                       
                                    <div class="text-right">
                                        <a href="#Grades" class="btn btn-primary tm-btn-next">Next Page</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>


<!------------------------------------------------------------------------------------------------------------->

                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/Iimg-05.jpg"></div>                   
                        <section id="Grades" class="tm-section">
                        <h2 class="tm-text-primary">Gradesheet</h2>
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
                                                  </tr>
                                            
                                            <?php
                                            #loop this
                                            for($semNo=1;$semNo<13;$semNo++)
                                            {
                                              $sqleditor="semester";
                                              $sqleditor2="_result";
                                              $sqleditor="$sqleditor$semNo$sqleditor2";
                                              $sql = "Select $sqleditor from student_gradepersemester WHERE userid_login=$userid_login";
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
                                             
                                            ?>
                                                </table>
                                            <from>
                                        </div>

 

                                    </div>
                                </div>
                                            <?php
                                            $cgpa=0;
                                            $sql = "Select * from student_gradepersemester WHERE userid_login='$userid_login'";
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
                                                ?>
                                            <p><strong>
                                              <a style="color:#34568B";>Total CGPA: </a><?php echo $cgpa;}?>
                                            </strong></p><div>
                                            <?php
                                            $sql = "Select semesterCompleted from student_gradepersemester WHERE userid_login='$userid_login'";
                                            $result = mysqli_query($conn,$sql);
                                            if(mysqli_num_rows($result)!=0)
                                              while($row=mysqli_fetch_array($result)){
                                            ?> 
                                            <p><strong>
                                              <a style="color:#34568B";>Semester Completed: </a><?php echo $row[0];}?>
                                            </strong></p></div>
                            </div>
                        </section>
                        </div>
                    </div>
                </div>




                <!-- Copyright -->                
                <div class="tm-section-wrap tm-copyright row">
                    <div class="col-12">
                        <div class="text-right">
                            Copyright Team Alpha
                        </div> 
                    </div>
                </div>                 
            </div> <!-- .tm-main -->                      
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    <script src="js/jquery-3.4.1.min.js"></script>          <!--  -->
    <script src="js/jquery.singlePageNav.min.js"></script>  <!--  -->
    <script src="js/parallax/parallax.min.js"></script>     <!--  -->
    <script src="js/imagesloaded.pkgd.min.js"></script>     <!--  -->
    <script src="js/isotope.pkgd.min.js"></script>          <!--  -->
    <script src="js/jquery.magnific-popup.min.js"></script> <!--  -->
    <script src="slick/slick.min.js"></script>              <!--  -->
    <script src="js/templatemo-script.js"></script>
</body>
</html> 