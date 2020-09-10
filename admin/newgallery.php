<?php 
include 'header.php'; 

if (isset($_POST['submit'])) {
    
    foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
        $file_name = $_FILES["files"]["name"][$key];
        $file_tmp = $_FILES["files"]["tmp_name"][$key];
        
        $photo_id = RandomString(20, "123456789").".jpg";
        $imageurl="../img/gallery/".$photo_id;
        move_uploaded_file($_FILES['files']['tmp_name'][$key],$imageurl);
        
        $sql = mysqli_query($server, "insert into gallery (title,image_location,category)
        VALUES ('$_POST[title]', '$photo_id', '$_POST[category]')");
        
        
        if($sql){ 
            echo "<script>alert('Photo Added To Gallery Successfully!!!'); window.location='gallery.php'</script>";
        }
    }


    

}


?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Add Photo</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a href="gallery.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Gallery Management</a>
                                <span class="breadcrumb-item active">Add Photo</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            
                            <div class="m-t-25">
                                <form id="basicForm" action="" method="post" enctype="multipart/form-data">
                                    <div class="row m-t-25">  
                                        <label class="control-label">Tile of photo </label> 
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                    <div class="row m-t-25">  
                                        <label class="control-label">Upload Photos To Gallery <span class="asteris">you can select multiple images to upload</span> </label> 
                                        <input type="file" class="form-control" name="files[]" multiple>
                                    </div>
                                    <div class="row m-t-25">  
                                        <label class="control-label">Select Gallery Category </label> <br/>
                                        <select name="category" class="form-control">
                                            <option value="">All</option>
                                            <option value="education">Education</option>
                                            <option value="event">Event</option>
                                            <option value="facility">Facility</option>
                                            <option value="campus">Campus</option>
                                        </select>
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <button class="btn btn-primary mr5" name="submit">Upload Gallery Images</button>
                                    </div>   
                                      
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php include 'footer.php'; ?>