<?php 
include 'header.php'; 

if (isset($_POST['submit'])) {

    $photo_id = RandomString(20, "123456789").".pdf";
    $imageurl="../download/".$photo_id;
    move_uploaded_file($_FILES['image']['tmp_name'],$imageurl);
    
    $title = addslashes($_POST['name']);
    
    $sql = mysqli_query($server, "insert into library (title,type,image_location)
    VALUES ('$title','$_POST[type]','$photo_id')");
    
    
    if($sql){ 
        echo "<script>alert('Library Added Successfully!!!'); window.location='library.php'</script>";
    }

}


?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Add Library</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a href="library.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Library Management</a>
                                <span class="breadcrumb-item active">Add Library</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            
                            <div class="m-t-25">
                                <form id="basicForm" action="" method="post" enctype="multipart/form-data">
                                    
                                    <div class="row">
                                        <label class="control-label">Book Title <span class="asterisk">*</span></label>
                                        <input type="text" name="name" required class="form-control" <?php  if(isset($_POST['name'])){ echo "value='$_POST[name]'";}?> value="<?php echo @$editrow['title']?>" placeholder="News Title">
                                    </div>
                                    <div class="row m-t-25">
                                        <label class="control-label">Select Type <span class="asterisk">*</span></label>
                                        <select name="type" class="form-control" required>
                                            <?php 
                                            if(!empty(@$editrow['type'])){ ?>
                                                <option value="<?php echo @$editrow['type']?>"><?php echo @$editrow['type']?></option>
                                            <?php }else{ ?>
                                                <option></option>
                                            <?php } ?>
                                            <option value="admission">Admission Form</option>
                                            <option value="calendar">School Calendar</option>
                                        </select>
                                    </div>
                                    <div class="row m-t-25">  
                                        <label class="control-label">Upload Book (PDF) <span class="asterisk">*</span></label> 
                                        <input type="file" class="form-control" name="image" required>
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <button class="btn btn-primary mr5" name="submit">Upload Library</button>
                                    </div>   
                                      
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php include 'footer.php'; ?>