<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Intro page| PG Life</title>
        <?php
            include "includes/file_links.php";
        ?>
    

        <link href="jisso.css" rel="stylesheet" />
    </head>
    <body>
        <?php
            include "includes/header.php";
        ?>

        <div id="banner">
            <div class="container">
                <h2 class="white pb-2 text-center" >Happiness per square feet</h2>
                <form>
                    <div id="a" class="input-group">
                        <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for PGs" />
                        <div class="input-group-append">
                             
                            <button type="submit" class="btn btn-secondary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5 text-center"><h1>Major Cities</h1></div>
                <div class="city col-md-3">
                    <a href="property_list.php?city=delhi">
                        <div class="city-card rounded-circle">
                            <img src="img/delhi.png" class="city-img" />
                        </div>
                    </a>
                </div>

                <div class="city col-md-3 ">
                    <a href="property_list.php?city=mumbai">
                        <div class="city-card rounded-circle">
                            <img src="img/mumbai.png" class="city-img" />
                        </div>
                    </a>
                </div>

                <div class="city col-md-3">
                    <a href="property_list.php?city=Bengaluru">
                        <div class="city-card rounded-circle">
                            <img src="img/bangalore.png" class="city-img" />
                        </div>
                    </a>

                </div>

                <div class="city col-md-3"><img href="img/bangalore.png"/>
                    <a href="property_list.php?city=hyderabad">
                        <div class="city-card rounded-circle">
                            <img src="img/hyderabad.png" class="city-img" />
                        </div>
                    </a>
                </div>

            </div>
            
        </div>
        <?php
            include "includes/signup_modal.php";
            include "includes/login_modal.php";
            include "includes/footer.php";
        ?>

    </body>
</html>