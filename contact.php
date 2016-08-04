<?php
require_once 'includes/database.php';
require_once 'includes/master.php';

if(isset($_POST['submit'])){
    $_POST['fname'];
    $_POST['lname'];
    $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];





  //Use of variables to store specific regular expressions to ensure only Aston email addresses 
  $a='((?:[a-z][a-z0-9_]*))';
  $b='(@)';
  // $c='(aston\\.ac\\.uk)';

  // if (preg_match_all ("/".$a.$b.$c."/is", $_POST['email'])){
  if (preg_match_all ("/".$a.$b."/is", $_POST['email'])){
  $email = $_POST['email'];
  }

  if(preg_match('/^([A-Za-z]+)$/', $_POST['fname'])){
  $firstname = $_POST['fname'];
  }

  if(preg_match('/^([A-Za-z]+)$/', $_POST['lname'])){
  $lastname = $_POST['lname'];
  }



    
    if(  empty($firstname)  || empty($lastname) || empty($email) || empty($message) || empty($subject) ){
      echo "<script>
      alert('Please complete all fields appropriately. First and last names must contain only alphabets.');
      window.location.href='contact.php';
      </script>";
    }else{


      $firstname = preg_replace('/\s+/', '', $firstname);
      $lastname = preg_replace('/\s+/', '', $lastname);
      $email = preg_replace('/\s+/', '', $email);
     
      global $conn;
      //Contents from the form is sent to the database, where the admin will be able to view the message later
      $row = $conn->prepare("INSERT INTO messages (firstname, lastname, email, message, subject, deleted, status, reply) 
      VALUES ('$firstname','$lastname','$email', '$message','$subject', '0','0','0' )" );
      $row->execute();
      echo "<script>
      alert('Your message has been sent. Kevin will contact you as soon as possible.');
      window.location.href='index.php';
      </script>";      

      mail("kevin.sakyi@gmail.com","Personal Website Email",$message);      
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="HandheldFriendly" content="true" />    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kevin Taylor-Sakyi">

    <title>Contact | Kevin Taylor-Sakyi</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="css-bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css-bootstrap/custom.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        /*padding-top: 70px;*/
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72559782-1', 'auto');
  ga('send', 'pageview');
  </script>
</head>
<body>

    <!-- Page Content -->
    <div class="container">
    
  <form id="formFix" role="form" method="post">
    <div class="form-group">
      <input type="text" name="fname" class="form-control" id="fname" placeholder="First name">
    </div>
    <div class="form-group">
      <input type="text" name="lname" class="form-control" id="lname" placeholder="Last name">
    </div>
        <div class="form-group">
      <input type="email" name="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
      <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
    </div>
    <div class="form-group">
      <input type="text" name="message" class="form-control" id="message" placeholder="Message">
    </div>
    <button name="submit" type="submit" class="btn btn-success btn">Send Email</button>
 
  </form>

                  
</div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>