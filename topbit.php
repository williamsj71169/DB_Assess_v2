<!DOCTYPE HTML>

<html lang="en">

    
<?php
    
    session_start();
    include("config.php");
    include("functions.php");
        
    // Conect to database
        
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if (mysqli_connect_errno())
        
    {
        echo "Connection failed:".mysqli_connect_error();
        exit;
    }        
?>
    
<head>
    <meta charset="UTF-32">
    <meta name="description" content="Food Review Database">
    <meta name="keywords" content="Put keywords here">
    <meta name="author" content="Jessika Williams">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Food Reviews</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/Food_Reviews.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="others/maybe_logo.png" width="150" height="150" alt="generic logo" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>The Website Of Food Reviews</h1>
        </div>    <!-- / banner -->

        <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
        <div class="box nav">
            <a href="index.php">Home</a> | 
            <a href="contact.php">Contact</a>
        </div>    <!-- / nav -->        
        
        
