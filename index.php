<?php 
  
  include_once 'config.php';
  
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo $ins_name_bn.' | '.$ins_name_en. 'official website' ?></title>


        <?php include_once './section/header-links.php' ?>
    </head>

    <body>
        
        <div class="main-container">
            <div class="container-fluid bg-white">

                <!-- Header with Nav Start -->
                <?php include_once './section/header-section.php' ?>
                <!-- Header with Nav End -->

                <!-- Banner Slider Start -->
                <?php include_once './section/banner-slider.php' ?>
                <!-- Banner Slider End -->

                <div class="row">
                    <div class="col-md-9">
                        <?php include_once './section/about.php' ?>
                        <?php include_once './section/mayor-speech.php' ?>
                        <?php include_once './section/feature-section.php' ?>
                        <?php include_once './section/achievement.php' ?>
                    </div>
                    <div class="col-md-3">
                        <?php include_once './section/sidebar-right.php' ?>
                    </div>
                </div>

                <!-- Counsellor Section START  -->
                <?php include_once './section/counsellor.php' ?>
                <!-- Counsellor Section END  -->

                 <!-- Teacher Section START  -->
                <?php include_once './section/employee.php' ?>
                <!-- Teacher Section END  -->

                <!-- Photo Gallery Start -->
                <?php include_once './section/photo-gallery.php' ?>
                <!-- Photo Gallery End -->

                <!-- Video Gallery Start -->
                <?php include_once './section/video-gallery.php' ?>
                <!-- Video Gallery End -->

                <!-- Footer Section START  -->
                <?php include_once './section/footer-section.php' ?>
                <!-- Footer Section END  -->

            </div>
        </div>

        <div onclick="topFunction()" id="scrollTopButton" title="Go to top">^</div>
  
        <?php include_once './section/footer-links.php' ?>

    </body>

</html>