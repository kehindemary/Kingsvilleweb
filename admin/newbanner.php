<?php 
include 'header.php'; 

if (isset($_POST['submit'])) {

    $photo_id = RandomString(20, "123456789").".jpg";
    $imageurl="../img/slider/".$photo_id;
    move_uploaded_file($_FILES['image']['tmp_name'],$imageurl);
    
    $sql = mysqli_query($server, "insert into banners (image_location)
    VALUES ('$photo_id')");
    
    
    if($sql){ 
        echo "<script>alert('Banner Added Successfully!!!'); window.location='banners.php'</script>";
    }

}


?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Add Banner</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a href="banners.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Banner Management</a>
                                <span class="breadcrumb-item active">Add Banner</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            
                            <div class="m-t-25">
                                <form id="basicForm" action="" method="post" enctype="multipart/form-data">
                                    
                                    <div class="row m-t-25">  
                                        <label class="control-label">Upload Banner </label> 
                                        <input type="file" class="form-control" name="image" required>
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <button class="btn btn-primary mr5" name="submit">Upload Banner</button>
                                    </div>   
                                      
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php include 'footer.php'; ?>