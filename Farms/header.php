<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Same Page Property</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style>
    .navvv{
        background-color: #56d25b;
        border-color: #1e5120 !important;
        }
        .navvv a{
            color: #424a5d !important;
            border: solid 1px #56d25b;
            transition: all ease-in 0.5s;
        }
        .navvv a:hover{
            background-color: #424a5d !important;
            color: #56d25b !important;
        }
        body{
            background-color: #424a5d;
            color: f2f2f2;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-default navvv">
  <div class="container-fluid navvv">
    <div class="navbar-header navvv">
      <button type="button" class="navbar-toggle collapsed  " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" style="">Farms</a>
    </div>

    <div class="collapse navbar-collapse navvv" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <li><a href="index.php">Home</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="insert.php">Add Farm</a></li>
        
      </ul>

     
    </div>
  </div>
</nav>