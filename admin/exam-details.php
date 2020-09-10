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
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a href="users.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Administrative Members</a>
                                <span class="breadcrumb-item active">Exam Details</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            <div class="m-t-25">
                                <form id="basicForm" action="" method="post" >
                                <div class="row">
                                        <label class="control-label">Student Name<span class="asterisk">*</span></label>
                                        <input type="text" name="fname" required class="form-control" Placeholder="Full Name">
                                    </div>
                                    <div class="row">
                                        <label class="control-label">Class<span class="asterisk">*</span></label>
                                        <input type="text" name="classname" required class="form-control" Placeholder="Class">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Subject<span class="asterisk">*</span></label>
                                        <input type="text" name="subject" required class="form-control"  Placeholder="Subject">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Grade<span class="asterisk">*</span></label>
                                        <input type="text" name="grade" required class="form-control"  Placeholder="Grade">
                                    </div>
                                    <div class="row m-t-25">
                                            <button class="btn btn-primary mr5" name="submit">Submit</button>
                                    </div>   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php include 'footer.php'; ?>