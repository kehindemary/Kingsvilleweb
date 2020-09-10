<?php 
include 'header.php'; 

if(isset($_GET['edit'])){
    $sqledit=mysqli_query($server, "select * from video where id='$_GET[edit]'");
    $editrow = mysqli_fetch_assoc($sqledit);
}

if (isset($_POST['submit'])) {
    
    $content = addslashes($_POST['name']);

    
    $sql = mysqli_query($server, "insert into video (url)
        VALUES ('$content')");
    

    if($sql){ 
        echo "<script>alert('Video Successfully Added!!!'); window.location='video.php'</script>";
    }

}

if (isset($_POST['update'])) {
    
    $content = addslashes($_POST['name']);

    $sql = mysqli_query($server, "update video set url='$content' where id='$_GET[edit]'");
    
    if($sql){ 
        echo "<script>alert('Video Successfully Updated!!!'); window.location='video.php'</script>";
     }
}

?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Add Video</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a href="video.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Video Management</a>
                                <span class="breadcrumb-item active">Add Video</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            
                            <div class="m-t-25">
                                <form id="basicForm" action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <label class="col-sm-12 control-label">Video Youtube Link <span class="asterisk">*</span></label>
                                        <textarea row="10" class="form-control" name="name">
                                            <?php  if(isset($_POST['name'])){ echo $_POST['name'];}else{?> <?php echo @$editrow['url'];}?>
                                        </textarea>
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <?php  if(isset($_GET['edit'])){ ?>
                                                <button class="btn btn-primary mr5" name="update">Update Video</button>
                                            <?php }else{ ?>
                                                <button class="btn btn-primary mr5" name="submit">Save Video</button>
                                            <?php } ?>
                                    </div>   
                                      
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php include 'footer.php'; ?>