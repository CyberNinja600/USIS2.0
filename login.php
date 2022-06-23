
<!doctype html>
<html lang="en">
  <head>
    <!-- used  bootstrap css files-->
    <meta charset="utf-8">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owllogin.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstraplogin.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/stylelogin.css">

    <title>BRAC Learning Module</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <!--add bracu img-->
          <img src="img/bracu_logo.png" alt="Image" class="img-fluid">
        </div>

        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Need help?
                Email to
             <a href="https://static.truckersmp.com/images/vtc/logo/21823.1594940844.png" target="_blank"> donotemail@anyone.com </a></p>
            </div>

            <?php
  
  if (isset($_POST['username_login']) && isset($_POST['password_login']))
  {
    function validate($data)
    {
      $data=trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $username_login = $_POST['username_login'];
    $password_login = $_POST['password_login'];

    $con = new mysqli("localhost","root","","project");

    require_once("DBconnect.php");

    $stmt = $conn-> prepare("select * from login where username_login = ?");
    $stmt-> bind_param("s", $username_login);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    session_start();
    if($stmt_result->num_rows>0)
    {
      $data=$stmt_result->fetch_assoc();
      if($data['password_login'] == $password_login)
      { 

        #data fectching

        //fetching values for other php files, like id to know who am i working for
        $sql1 = $conn-> prepare('SELECT userid_login FROM login WHERE username_login=?');
        $sql1->bind_param("s",$username_login);
        $sql1->execute();
        $sql1_result = $sql1->get_result();
        $whatisID= mysqli_fetch_all($sql1_result, MYSQLI_ASSOC);
        mysqli_free_result($sql1_result);
        foreach($whatisID as $type)
        {
          $userid_loginvar=$type['userid_login'];
          #$_COOKIE['userid'] = $userid_loginvar;
          $_SESSION['userid'] = $userid_loginvar;
        }


        //write query for fetching usertype based on username
        $sql = $conn-> prepare('SELECT usertype_login FROM login WHERE username_login=?');
        $sql->bind_param("s",$username_login);
        $sql->execute();
        $sql_result = $sql->get_result();
        $whatistype= mysqli_fetch_all($sql_result, MYSQLI_ASSOC);
        mysqli_free_result($sql_result);

        foreach($whatistype as $type)
        {
          // echo htmlspecialchars($type['usertype_login']);

          if(htmlspecialchars($type['usertype_login'])=="student")
          { 
            #include "student.php";
            header("Location: http://localhost/project/student.php");
            exit();
          }
          elseif(htmlspecialchars($type['usertype_login'])=="admin")
          { 
            #include "admin.php";
            header("Location: http://localhost/project/admin.php");
            exit();
          }
          else
          {
            #include "faculty.php";
            header("Location: http://localhost/project/faculty.php");
            exit();
          }
        }
        
      }

      else
      {
        echo "</h2> Invalid password</h2>";
      }
    }
    else
    {
      echo "</h2> Invalid Email </h2>";
    }

  
  }
?>

            <form action="login.php" method="post">

              <!--username-->
              <div class="form-group first">
                <label for="username_login"></label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username_login">
              </div>

              <!--password-->
              <div class="form-group last mb-4">
                <label for="password_login"></label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password_login">
              </div>
              
              <!--submit-->
              <input type="submit" value="Log In" class="btn btn-block btn-primary" name='bro'
              <div class="panel-footer text-right" >
                &copy; Team Alpha
              </div>

            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
  </body>
</html
