<?php
session_start();
include("checklogin.php");
check_login();

	
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
    a:hover{
        color: #56d25b;
  background-color: #white !important;
  border-color: #white !important;
    }
    </style>
    <title>Welcome </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
</head>
<body style="background-color: #424a5d">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Welcome !</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><?php echo $_SESSION['name'];?></a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <header class="jumbotron hero-spacer">
            <h1>A Warm Welcome to AgroCart!</h1>
            <p>Find Registration form Bellow:</p>
            
        
            <center>
            <div class="dsf" style="margin-top:8%;  margin-bottom:8%;">

            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfY_julvjkB0Tf4iZHcbMOWJFLw_gSplNmZzXh_7Y9l4E6TUg/viewform?vc=0&c=0&w=1&usp=mail_form_link" style="color: white;
                background-color: #56d25b !important;
                border-color: #1e5120 !important; 
                background-color:hover: #56d25b;  margin-left:30px !important;" class="btn btn-primary btn-large"> Rent Form </a>
                
            <a href="#" style="color: white; background-color: #56d25b !important; border-color: #1e5120 !important; 
                background-color:hover: #56d25b; margin-left:30px !important;" class="btn btn-primary btn-large"> Produce Form </a>

               
            <a href="#" style="color: white; background-color: #56d25b !important; border-color: #1e5120 !important; 
                background-color:hover: #56d25b; margin-left:30px !important;" class="btn btn-primary btn-large"> Co-farm Form </a>
                
            <a href="#" style="color: white; background-color: #56d25b !important; border-color: #1e5120 !important; 
                background-color:hover: #56d25b; margin-left:30px !important;" class="btn btn-primary btn-large"> Job Form </a>

        </div>
            
        </center>
            <div class="f_detail" style="margin-top:5%;">

            <p>Find Details of Farms Bellow:</p>   
           
           <center>

           <div style="margin-top:8%;">
            <a href="http://localhost/Farms/" style="color: white; background-color: #56d25b !important; border-color: #1e5120 !important; 
                background-color:hover: #56d25b; margin-left:30px !important;" class="btn btn-primary btn-large"> Farm's Details </a>


            </div>

            </center>


            
        </header>

        <hr>


      


        </div>

        <hr>


    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
