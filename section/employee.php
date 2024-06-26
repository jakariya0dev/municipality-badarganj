<?php 

    $sql4teacher = "SELECT * FROM `employee`";

    $teacher = mysqli_query($conn, $sql4teacher);
    
?>
<section id="employee">
    <p class="title">কর্মকর্তা-কর্মচারী</p>

    <div class="container bg-white">
        
        <div class="owl-carousel owl-theme">

            <?php while ($row = mysqli_fetch_array($teacher)): ?>
                <a href="<?php echo 'employee-profile.php?id='.$row['id'] ?>" class="text-decoration-none">
                    <div class="item">
                        <div class="team-member">
                            <div class="pro-pic">
                                <img class="img-fluid w-100 h-100" src="<?php echo 'admin/'.$row['image'] ?>" />
                            </div>
                            <div class="social-icon mb-3">
                                <i class="fa-solid fa-phone-volume"></i> &nbsp; <?php echo $row['phone'] ?>
                            </div>
                            <div class="text-center">
                                <h4 class="mb-0"><?php echo $row['name'] ?></h4>
                                <p><?php echo $row['designation'] ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endwhile; ?>
        
        </div>
    </div>
</section>