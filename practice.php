<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ganpati Paying Guest | PG Life</title>
    <?php
        include "includes/file_links.php";
    ?>


    <link href="css/property_detail.css" rel="stylesheet" />
</head>

<body>
    <?php
        include "includes/header.php";
    ?>
    
    <div id="loading">
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="property_list.html">Mumbai</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Ganpati Paying Guest
            </li>
        </ol>
    </nav>

    <div id="property-images" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#property-images" data-slide-to="0" class="active"></li>
            <li data-target="#property-images" data-slide-to="1" class=""></li>
            <li data-target="#property-images" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/properties/1/1d4f0757fdb86d5f.jpg" alt="slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/properties/1/46ebbb537aa9fb0a.jpg" alt="slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/properties/1/eace7b9114fd6046.jpg" alt="slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#property-images" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#property-images" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="page-container">
        <div class="row">
            <div class="star-container">
            <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="intrested-container">
                <i class="is-interested-image far fa-heart"></i>
                <div class="interested-text">
                    <span class="interested-user-count">6</span> interested
                </div>
            </div>
        </div>
    </div>




</body>