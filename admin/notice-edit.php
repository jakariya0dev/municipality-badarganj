<?php 

    include_once './../config.php';
    include_once 'auth.php';

    $file_error = false;
   
    if(isset($_GET['id'])){

        $n_id = $_GET['id'];
        $sql = "SELECT * FROM notice WHERE id = $n_id";

        $result = mysqli_query($conn, $sql) or die("Query Failed: ". mysqli_error($conn));
        $data = mysqli_fetch_assoc($result);

    }


    if(isset($_POST['update_btn'])){


      if($_FILES['n_file']['size'] < 5*1024*1024){

        $n_id = $_POST['n_id'];
        $n_title = $_POST['n_title'];
        $n_description = $_POST['n_description'];
        $n_file = $_POST['old_file'];
        $n_date = $_POST['n_date'];

        if($_FILES['n_file']['size'] > 0){

          $n_file = $_POST['n_file'];

          $dir_name = 'uploads/notice/';
          if (!file_exists($dir_name)) { mkdir($dir_name, 0755, true); }

          $file_name = time() .'.'. pathinfo($_FILES['n_file']['name'], PATHINFO_EXTENSION);
          move_uploaded_file($_FILES['n_file']['tmp_name'], $dir_name.$file_name);

          if(file_exists($_POST['old_file'])){
            unlink($_POST['old_file']);
          }

          $n_file = $dir_name.$file_name;

        }

        

        $sql = "UPDATE `notice` SET `title`='$n_title',`description`='$n_description',`date`='$n_date',`file`='$n_file' WHERE id = $n_id";
        $result = mysqli_query($conn, $sql) or die("Query Failed: ". mysqli_error($conn));

        if($result){
            header("Location: notice-all.php");
        }
        else{
            echo "<script>Update Added Failed </script>";
        }
      }
      else{
        $file_error = true;
      }

    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Site Admin</title>
    <?php include './components/header-links.php' ?>
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      <?php include './components/sidebar.php'?>
      <!-- partial -->

      <div class="container-fluid page-body-wrapper">
        
        <!-- partial:partials/_navbar.html -->
        <?php include './components/navbar.php'?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Notice</h4>
                    
                    <p class="card-description"> Home / Notice /<code>Edit</code> </p>
                    
                    <hr class="mb-5">

                    <?php if ($file_error): ?>
                      <div class="alert alert-warning mb-5" role="alert">
                        <h4>You Have Error!</h4> 
                        Select a valid file with less than 5MB size.
                      </div>
                    <?php endif; ?>

                    
                    <form action="<?php echo $_SERVER['PHP_SELF'].'?id='.$n_id ?>" method="post" enctype="multipart/form-data">
                    
                        <div class="form-group">
                            <label>Notice Title</label>
                            <input name="n_title" type="text" class="form-control form-control-lg" value="<?php echo $data['title'] ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Notice Description</label>
                            <textarea name="n_description" class="form-control custom-text-area" id="exampleTextarea1" rows="8"> <?php echo $data['description'] ?> </textarea>
                        </div>

                        <div class="form-group">
                            <label>Notice File</label>
                            <input name="old_file" type="hidden" value="<?php echo $data['file'] ?>">
                            <input name="n_file" type="file" accept=".jpeg,.jpg,.png,.pdf" class="form-control form-control-lg">

                            <?php if(!empty($data['file'])): ?>
                                <p class="mt-2 mb-4" >Has An Old File: <?php echo $data['file']; ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label>Notice Date</label>
                            <input name="n_date" type="date" class="form-control form-control-lg" value="<?php echo $data['date'] ?>" required>
                        </div>
                        
                        <input type="hidden" name="n_id" value="<?php echo $data['id'] ?>">

                        <input type="submit" value="Save Changes" name="update_btn" class="btn btn-primary">
                    </form>


                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php include './components/footer.php'?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->

      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <?php include './components/footer-links.php'?>
    
  </body>
</html>
