<?php 
  session_start();

  require('db.php');

  $obj = new Db();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>News Site - messzsoarz</title>

  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button 
          type="button" 
          class="navbar-toggle" 
          data-toggle="collapse" 
          data-target="#myNavbar">
          <span class="icon-bar"></span>

          <span class="icon-bar"></span>
          
          <span class="icon-bar"></span>                        
        </button>

        <a class="navbar-brand" href="#">News Site</a>
      </div>

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="#">
              Home
            </a>
          </li>        
        </ul>       
      </div>
    </div>
  </nav>
  