<?php 
   
    $companyName = "Franklin's Fine Dining";
    include('includes/arrays.php');
?>


<!doctype html>

<html>

<head>
    <title><?php echo TITLE; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
</head>

<body id="final-example">

    <div class="wrapper">
        <div id="banner">
            <a href="/" title="Return to Home"></a>
            <img src="img/banner.png" alt="Franklin's Fine Dining">
        </div>
        <!--banner-->

        <div id="nav">
            
                <?php include('includes/nav.php'); ?>
          
        </div>
        <!--nav-->
        <div class="content">