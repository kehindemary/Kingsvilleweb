<?php 
include 'header.php'; 

if(isset($_GET['edit'])){
    $sqledit=mysqli_query($server, "select * from teams where id='$_GET[edit]'");
    $editrow = mysqli_fetch_assoc($sqledit);
}

if (isset($_POST['submit'])) {

    $fname = addslashes($_POST['fname']);
    $position = addslashes($_POST['position']);
    $content = addslashes($_POST['content']);
    
    if(!empty($_FILES['image']['name'])){

        $photo_id = RandomString(20, "123456789").".jpg";
        $imageurl="../images/team/".$photo_id;
        move_uploaded_file($_FILES['image']['tmp_name'],$imageurl);
        
        
        $sql = mysqli_query($server, "insert into teams (fullname,position,content,image_location)
    VALUES ('$fname', '$position', '$content','$photo_id')");
        
    }else{
        $sql = mysqli_query($server, "insert into teams (fullname,position,content)
    VALUES ('$fname', '$position', '$content')");
    }
    
    if($sql){ 
        echo "<script>alert('Team Member Successfully Added!!!'); window.location='management.php'</script>";
    }

}

if (isset($_POST['update'])) {
    
    $fname = addslashes($_POST['fname']);
    $position = addslashes($_POST['position']);
    $content = addslashes($_POST['content']);
    
    if(!empty($_FILES['image']['name'])){
        $photo_id = RandomString(20, "123456789").".jpg";
        $imageurl="../images/teams/".$photo_id;
        move_uploaded_file($_FILES['image']['tmp_name'],$imageurl);
        
        $sql = mysqli_query($server, "update teams set fullname = '$fname', position= '$position', content = '$content', image_location= '$photo_id' where id='$_GET[edit]'");
    }else{
        $sql = mysqli_query($server, "update teams set fullname = '$fname', position= '$position', content = '$content' where id='$_GET[edit]'");
    }

    

    if($sql){ 
        echo "<script>alert('Team Successfully Updated!!!'); window.location='management.php'</script>";
     }
}

?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Add New Team Member</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a href="management.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Team Members</a>
                                <span class="breadcrumb-item active">Add New Team Member</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            
                            <div class="m-t-25">
                                <form id="basicForm" action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <label class="control-label">Fullname <span class="asterisk">*</span></label>
                                        <input type="text" name="fname" required class="form-control" <?php  if(isset($_POST['fname'])){ echo "value='$_POST[fname]'";}?> value="<?php echo @$editrow['fullname']?>" Placeholder="Full Name">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Position <span class="asterisk">*</span></label>
                                        <input type="text" name="position" required class="form-control" <?php  if(isset($_POST['position'])){ echo "value='$_POST[position]'";}?> value="<?php echo @$editrow['position']?>" Placeholder="Position">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="col-sm-12 control-label">Content <span class="asterisk">*</span></label>
                                        
                                        <textarea id="mytextarea" row="10" class="form-control" name="content">
                                            <?php  if(isset($_POST['content'])){ echo $_POST['content'];}else{?> <?php echo @$editrow['content'];}?>
                                        </textarea>
                                    </div>
                                    
                                    <div class="row m-t-25">  
                                        <label class="control-label">Upload Team Passport </label> 
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                     
                                    <div class="row m-t-25">
                                        <?php  if(isset($_GET['edit'])){ ?>
                                            <button class="btn btn-primary mr5" name="update">Update Member</button>
                                        <?php }else{ ?>
                                            <button class="btn btn-primary mr5" name="submit">Add New Member</button>
                                        <?php } ?>
                                    </div>   
                                        
                                    
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php include 'footer.php'; ?>