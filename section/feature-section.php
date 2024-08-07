<?php 

    include_once("config.php");

    $feature_sql = "SELECT * FROM `feature`";
    $feature_result = mysqli_query($conn, $feature_sql);

?>



<section id="feature">
    <p class="title">গুরুত্বপূর্ণ স্থাপনা</p>
    <div class="row gx-5">
        <div class="col-md-6">
            <?php while($row = mysqli_fetch_assoc($feature_result)): ?>
            <div class="row mb-5">
                <div class="col-4">
                    <div class="feature-title-img">
                        <img class="h-100 w-100 img-fluid" src="<?php echo 'admin/'.$row['image']?>" />
                    </div>
                </div>

                <div class="col-8 ps-5">
                    <h4><?php echo $row['title']?></h4>
                    <p><?php echo $row['subtitle']?></p>
                    <hr class="dotted-hr"/>
                </div>
            </div>
            <?php endwhile; ?>
        </div>

        <div class="col-md-6">
            <div class="feature-img-right">
                <img class="h-100 w-100 img-fluid" src="./images/feature-main.png" alt="" />
            </div>
        </div>
    </div>
</section>