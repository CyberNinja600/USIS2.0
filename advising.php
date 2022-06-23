<html>
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
	</head>
	<body>
		<?php
		require_once("DBconnect.php");
      	$userid_login=$_COOKIE['userid'];
		?>
		<form  action="advising.php" method="get" class="tm-contact-form">
        <div class="form-group">
            <select class="form-control" id="advising_student">
                <option >
                <?php
                $sql = "Select course_code from course_offered";
                $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)!=0)
                        while($row=mysqli_fetch_array($result)){
                ?>
                <?php 
                    echo '<option value="-">' 
                ?>

                <?php
                    echo $row[0]; 
                ?>
            
                <?php    
                    echo '</option>';  } 
                ?>
                </option>
            </select>
        </div>
	</body>
</html>