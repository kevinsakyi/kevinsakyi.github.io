<?php
require_once 'includes/master.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services | Kevin Taylor-Sakyi</title>
    <link href="css-bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72559782-1', 'auto');
  ga('send', 'pageview');
  </script>
  </head>

  <style>
      .container{
        margin-top: -30px;
      }
    </style>

  <body>

  	<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" id="proj">Availability<button type="button" id="proj" class="btn btn-default pull-right" aria-label="Right Align">
                  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                  </button>
              </h1>
                <p id="projText">As a current Master's IT Project Managent student Kevin is looking for projects facilitated around this field; at the moment he is looking for 
                opportunities ranging from Project Management, IT Consultancy, Enterprise Computing Strategies, Software Engineering, and Web-Development. Below is a list of his technical 
                skill-set as well as reports/projects he has developed in the portfolio section. Please use the contact form on 
                the 'Contact' page if you'd like more information about Kevin's completed works or if you have any other queries. 
              </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" id="progLan">Technical Skills<button type="button" id="progLan" class="btn btn-default pull-right" aria-label="Right Align">
                  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                  </button>
              </h1>
    <div id="progLanText">
    	<div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                <span class="sr-only">95% Complete</span>
            </div>
            <span class="progress-type">HTML</span>
            <span class="progress-completed">95%</span>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                <span class="sr-only">85% Complete (success)</span>
            </div>
            <span class="progress-type">PHP</span>
            <span class="progress-completed">85%</span>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                <span class="sr-only">85% Complete (success)</span>
            </div>
            <span class="progress-type">SQL</span>
            <span class="progress-completed">85%</span>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                <span class="sr-only">75% Complete (warning)</span>
            </div>
            <span class="progress-type">JavaScript / jQuery</span>
            <span class="progress-completed">75%</span>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (danger)</span>
            </div>
            <span class="progress-type">JAVA</span>
            <span class="progress-completed">40%</span>
        </div>
    </div>
</div>
</div>

<script>
$(document).ready(function(){
    $('#progLanText').hide();

    $("#proj").click(function(){
        $("#projText").toggle();
    });

    $("#progLan").click(function(){
        $("#progLanText").toggle();
    });

});
</script>
  </body>
</html>