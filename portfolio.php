<?php
require_once 'includes/master.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio | Kevin Taylor-Sakyi</title>
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
                <h1 class="page-header" id="completedProj">Completed Works<button type="button" id="completedProj" class="btn btn-default pull-right" aria-label="Right Align">
                  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                  </button>
              </h1>
                <p id="completedProjText">
                          <a href="http://asapdriving.co.uk">ASAP Driving</a><br/><br/>

                          <a href="http://arxiv.org/abs/1601.04602" download="Big Data: Understanding Big Data" target="_blank">Big Data: Understanding Big Data</a> (Please open on IE, Safari, or Firefox)<br/><br/>

                          <a href="http://arxiv.org/abs/1605.01097" download="Reliability Testing Strategy" target="_blank">Reliability Testing Strategy</a> (Please open on IE, Safari, or Firefox)<br/><br/>

                          <a href="docs/iot2.pdf" download="Internet of Things Business Report" target="_blank">Internet of Things (IoT) Business Report</a><br/><br/>

                          <a href="docs/PM poster.pdf" download="IT Project Management Poster" target="_blank">MSc in IT Project Management Poster</a><br/><br/>              

              </p>
            </div>
    </div>



    <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" id="progLan">Spoken Languages<button type="button" id="progLan" class="btn btn-default pull-right" aria-label="Right Align">
                  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                  </button>
              </h1>
    <div id="progLanText">
      <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                <span class="sr-only">100% Complete</span>
            </div>
            <span class="progress-type">English</span>
            <span class="progress-completed">100%</span>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                <span class="sr-only">100% Complete</span>
            </div>
            <span class="progress-type">Twi (Ghana)</span>
            <span class="progress-completed">100%</span>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                <span class="sr-only">40% Complete (success)</span>
            </div>
            <span class="progress-type">French</span>
            <span class="progress-completed">40%</span>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                <span class="sr-only">20% Complete (warning)</span>
            </div>
            <span class="progress-type">German</span>
            <span class="progress-completed">20%</span>
        </div>
    </div>
</div>
</div>   


</div>

<script>
$(document).ready(function(){
    $('#progLanText').hide();
    $("#completedProjText").show();

    $("#proj").click(function(){
        $("#projText").toggle();
    });

    $("#progLan").click(function(){
        $("#progLanText").toggle();
    });

    $("#completedProj").click(function(){
        $("#completedProjText").toggle();
    });
});
</script>
  </body>
</html>