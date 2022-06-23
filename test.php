<?php

    require_once("DBconnect.php");



    #update Numberof students.
    $sql = "Select course_code from courses_faculty_info WHERE userid_login='1001'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)!=0)
      while($row=mysqli_fetch_array($result))
      {
        $temp=$row[0];
      }

    #echo $temp;
    $noOFcourse=0;
    $sql = "Select course_1,course_2,course_3,course_4,course_5 from courses_student_info WHERE course_1='$temp' or course_2='$temp' or course_3='$temp' or course_4='$temp' or course_5='$temp'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)!=0)
      while($row=mysqli_fetch_array($result))
      { 
        $noOFcourse++;
      }
    echo $noOFcourse;
  ?>