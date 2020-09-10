<?php 
include 'header.php'; 

if (isset($_POST['submit'])) {

    $photo_id = RandomString(20, "123456789").".jpg";
    $imageurl="../images/portfolio/".$photo_id;
    move_uploaded_file($_FILES['image']['tmp_name'],$imageurl);
    
    $sql = mysqli_query($server, "insert into maps (title, image_location)
    VALUES ('$_POST[name]', '$photo_id')");
    
    
    if($sql){ 
        echo "<script>alert('Map Photo Added Successfully!!!'); window.location='maps.php'</script>";
    }

}


?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Add Map Photo</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a href="maps.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Map Management</a>
                                <span class="breadcrumb-item active">Add Map</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            
                            <div class="m-t-25">
                                <form id="basicForm" action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <label class="control-label">Map Title <span class="asterisk">*</span></label>
                                        <input type="text" name="name" required class="form-control" <?php  if(isset($_POST['name'])){ echo "value='$_POST[name]'";}?> value="<?php echo @$editrow['title']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">  
                                        <label class="control-label">Upload Map Photo </label> 
                                        <input type="file" class="form-control" name="image" required>
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <button class="btn btn-primary mr5" name="submit">Upload Map</button>
                                    </div>   
                                      
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php include 'footer.php'; ?>