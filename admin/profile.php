<?php 
include 'header.php'; 

$id = $user['id'];
$sqledit=mysqli_query($server, "select * from users where id='$id'");
$editrow = mysqli_fetch_assoc($sqledit);

if (isset($_POST['update'])) {
    
    if(isset($_POST['opassword']) && isset($_POST['npassword'])){
        $verify = mysqli_query($server, "select * from users where id='$id' && password='$_POST[opassword]'");
        
        if(mysqli_num_rows($verify)==1){
            $sql = mysqli_query($server, "update users set password = '$_POST[npassword]' where id='$id'");
        }else{
            echo "<script>alert('Old password not correct'); window.location='profile.php'</script>";
        }
        
    }
    
    if(isset($_POST['name']) && isset($_POST['username']) && $_POST['email']){
        $sql = mysqli_query($server, "update users set fullname = '$_POST[name]', username='$_POST[username]', email='$_POST[email]' where id='$id'");
    }


    if($sql){ 
        echo "<script>alert('Profile Successfully Updated!!!'); window.location='profile.php'</script>";
     }
}

?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">My Profile</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <span class="breadcrumb-item active">My Profile</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            
                            <div class="m-t-25">
                                <form id="basicForm" action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <label class="control-label">Full Name <span class="asterisk">*</span></label>
                                        <input type="text" name="name" required class="form-control" <?php  if(isset($_POST['name'])){ echo "value='$_POST[name]'";}?> value="<?php echo @$editrow['fullname']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Username <span class="asterisk">*</span></label>
                                        <input type="text" name="username" class="form-control" <?php  if(isset($_POST['username'])){ echo "value='$_POST[username]'";}?> value="<?php echo @$editrow['username']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Email <span class="asterisk">*</span></label>
                                        <input type="text" name="email" required class="form-control" <?php  if(isset($_POST['email'])){ echo "value='$_POST[email]'";}?> value="<?php echo @$editrow['email']?>">
                                    </div>
                                    <br/><br/><strong>CHANGE PASSWORD</strong><hr>
                                    <div class="row m-t-25">
                                        <label class="col-sm-12 control-label">Old Password <span class="asterisk">*</span></label>
                                        
                                        <input type="text" name="opassword" class="form-control">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="col-sm-12 control-label">New Password <span class="asterisk">*</span></label>
                                        
                                        <input type="text" name="npassword" class="form-control">
                                    </div>
                                        
                                    
                                    <div class="row m-t-25">
                                        
                                        <button class="btn btn-primary mr5" name="update">Update Profile Details</button>
                                    </div>   
                                      
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php include 'footer.php'; ?>