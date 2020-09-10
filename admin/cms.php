<?php 
include 'header.php'; 

$sqledit=mysqli_query($server, "select * from cms limit 1");
$editrow = mysqli_fetch_assoc($sqledit);

if (isset($_POST['submit'])) {
    
    $address = addslashes($_POST['addre']);
    $sql = mysqli_query($server, "update cms set phone1 = '$_POST[phone1]', phone2='$_POST[phone2]', email1= '$_POST[email1]', email2= '$_POST[email2]', address= '$address', fblink='$_POST[facebook]', twlink='$_POST[twitter]', inlink='$_POST[instagram]', ytlink='$_POST[youtube]', gllink='$_POST[google]' where id='1'");
    
    
    if($sql){ 
        echo "<script>alert('CMS Updated Successfully!!!'); window.location='cms.php'</script>";
    }

}


?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Content Management System</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <span class="breadcrumb-item active">Content Management System</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            
                            <div class="m-t-25">
                                <form id="basicForm" action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <label class="control-label">Phone Number <span class="asterisk">*</span></label>
                                        <input type="text" name="phone1" class="form-control" <?php  if(isset($_POST['phone1'])){ echo "value='$_POST[phone1]'";}?> value="<?php echo @$editrow['phone1']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Phone Number 2 <span class="asterisk">*</span></label>
                                        <input type="text" name="phone2" class="form-control" <?php  if(isset($_POST['phone2'])){ echo "value='$_POST[phone2]'";}?> value="<?php echo @$editrow['phone2']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Email <span class="asterisk">*</span></label>
                                        <input type="text" name="email1" class="form-control" <?php  if(isset($_POST['email1'])){ echo "value='$_POST[email1]'";}?> value="<?php echo @$editrow['email1']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Email 2 </label>
                                        <input type="text" name="email2" class="form-control" <?php  if(isset($_POST['email2'])){ echo "value='$_POST[email2]'";}?> value="<?php echo @$editrow['email2']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="col-sm-12 control-label">Address <span class="asterisk">*</span></label>
                                        
                                        <textarea id="mytextarea" row="10" class="form-control" name="addre">
                                            <?php  if(isset($_POST['addre'])){ echo $_POST['addre'];}?> <?php echo @$editrow['address']?>
                                        </textarea>
                                    </div>
                                    
                                    <hr>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Facebook Link <span class="asterisk">*</span></label>
                                        <input class="form-control" name="facebook" <?php  if(isset($_POST['facebook'])){ echo "value='$_POST[facebook]'";}?> value="<?php echo @$editrow['fblink']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Instagram Link <span class="asterisk">*</span></label>
                                        <input class="form-control" name="instagram" <?php  if(isset($_POST['instagram'])){ echo "value='$_POST[instagram]'";}?> value="<?php echo @$editrow['inlink']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Twitter Link <span class="asterisk">*</span></label>
                                        <input class="form-control" name="twitter" <?php  if(isset($_POST['twitter'])){ echo "value='$_POST[twitter]'";}?> value="<?php echo @$editrow['twlink']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Youtube Link <span class="asterisk">*</span></label>
                                        <input class="form-control" name="youtube" <?php  if(isset($_POST['youtube'])){ echo "value='$_POST[youtube]'";}?> value="<?php echo @$editrow['ytlink']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Google Link <span class="asterisk">*</span></label>
                                        <input class="form-control" name="google" <?php  if(isset($_POST['google'])){ echo "value='$_POST[google]'";}?> value="<?php echo @$editrow['gllink']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <button class="btn btn-primary mr5" name="submit">Update CSM Contents</button>
                                            
                                    </div>   
                                      
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php include 'footer.php'; ?>