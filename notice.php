<?php 
  
    include_once 'config.php';
    
    $id = $_GET['id'];
    $sql = "SELECT * FROM notice WHERE `id` = $id";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($con));
    $result = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Bootstrap demo</title>

        <?php include_once './section/header-links.php' ?>
    </head>

    <body>
        
        <div style="width: 75%; margin:auto">
            <div class="container-fluid bg-white">

                <!-- Header with Nav Start -->
                <?php include_once './section/header-section.php' ?>
                <!-- Header with Nav End -->

                <nav aria-label="breadcrumb" class="mt-4 position-static">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">হোম</a></li>
                        <li class="breadcrumb-item"><a href="notice-list.php" class="text-decoration-none">সব নোটিশ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">নোটিশ</li>
                    </ol>
                </nav>

                <div class="row mt-4">
                    <div class="col-md-9">
                        <div class="mt-5 table-responsive">
                            

                                <h4 class="mb-4"><?php echo $result['title'] ?></h4>
                                <p class="text-black-50"><i>Date: <?php echo date_format(date_create($result['date']),"d/m/Y"); ?></i></p>
                                <hr>
                                <p><?php echo $result['description'] ?></p>
                                

                                <?php if(!empty($result['file'])): ?>
                                    <object class="pdf" 
                                        data="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/admin/'.$result['file'] ?>"
                                        width="100%"
                                        height="800">
                                    </object>
                                <?php endif; ?>
                                    
                            
                        </div>
                        
                    </div>
                    <div class="col-md-3">
                        <?php include_once './section/sidebar-right.php' ?>
                    </div>
                </div>


                <!-- Footer Section START  -->
                <?php include_once './section/footer-section.php' ?>
                <!-- Footer Section END  -->

            </div>
        </div>
  
        <?php include_once './section/footer-links.php' ?>

    </body>

</html>