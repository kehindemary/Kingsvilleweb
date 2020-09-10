<?php 
include 'header.php'; 

if(isset($_GET['edit'])){
    $sqledit=mysqli_query($server, "select * from users where id='$_GET[edit]'");
    $editrow = mysqli_fetch_assoc($sqledit);
}

if (isset($_POST['submit'])) {

    $sql = mysqli_query($server, "insert into users (fullname,username,email,password)
    VALUES ('$_POST[fname]', '$_POST[uname]', '$_POST[email]', '1234')");
    
    
    if($sql){ 
        echo "<script>alert('Admin User Successfully Added!!!'); window.location='users.php'</script>";
    }

}

if (isset($_POST['update'])) {

    $sql = mysqli_query($server, "update users set fullname = '$_POST[fname]', username='$_POST[uname]', email= '$_POST[email]' where id='$_GET[edit]'");

    if($sql){ 
        echo "<script>alert('User Successfully Updated!!!'); window.location='users.php'</script>";
     }
}

?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Add New Administrator Member</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a href="users.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Administrative Members</a>
                                <span class="breadcrumb-item active">Add New Administrative Member</span>
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
                                        <label class="control-label">Username <span class="asterisk">*</span></label>
                                        <input type="text" name="uname" required class="form-control" <?php  if(isset($_POST['uname'])){ echo "value='$_POST[uname]'";}?> value="<?php echo @$editrow['username']?>" Placeholder="Username">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">E-mail <span class="asterisk">*</span></label>
                                        <input type="text" name="email" required class="form-control" <?php  if(isset($_POST['email'])){ echo "value='$_POST[email]'";}?> value="<?php echo @$editrow['email']?>" Placeholder="Email">
                                    </div>
                                     
                                    <div class="row m-t-25">
                                        <?php  if(isset($_GET['edit'])){ ?>
                                            <button class="btn btn-primary mr5" name="update">Update User</button>
                                        <?php }else{ ?>
                                            <button class="btn btn-primary mr5" name="submit">Add New User</button>
                                        <?php } ?>
                                    </div>   
                                        
                                    <div class="row m-t-25">  
                                        <p style="color:red"><em>Default password for all accounts created is <b>1234</b></em></p>  
                                    </div>   
                                      
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php include 'footer.php'; ?>