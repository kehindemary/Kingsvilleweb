<?php 
include 'header.php'; 

if(isset($_GET['edit'])){
    $sqledit=mysqli_query($server, "select * from adverts where id='$_GET[edit]'");
    $editrow = mysqli_fetch_assoc($sqledit);
}

if (isset($_POST['submit'])) {

    if(isset($_POST['date'])){
        $today = $_POST['date'];
        
        $date = date("F j, Y",strtotime($today));
    }else{
        $today = date(Y-m-d); 
        $date = date("F j, Y",strtotime($today));
    }
    
    $content = addslashes($_POST['contents']);
    $short = addslashes($_POST['short']);
    
    $sql = mysqli_query($server, "insert into adverts (title, content, short_desc, date)
        VALUES ('$_POST[name]', '$content', '$short', '$date')");
    

    if($sql){ 
        echo "<script>alert('Advertisement Successfully Added!!!'); window.location='adverts.php'</script>";
    }else{
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

}

if (isset($_POST['update'])) {
    
    if(isset($_POST['date'])){
        $today = $_POST['date'];
        $date = date("F j, Y",strtotime($today));
    }else{
        $today = date(Y-m-d);
        $date = date("F j, Y",strtotime($today));
    }
    
    $content = addslashes($_POST['contents']);
    $short = addslashes($_POST['short']);

    
    $sql = mysqli_query($server, "update adverts set title = '$_POST[name]', content='$content', short_desc='$short', date='$date' where id='$_GET[edit]'");

    if($sql){ 
        echo "<script>alert('Adertisement Successfully Updated!!!'); window.location='adverts.php'</script>";
     }
}

?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Add Advertisement</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a href="adverts.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Advertisement Management</a>
                                <span class="breadcrumb-item active">Add Adverts</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            
                            <div class="m-t-25">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <label class="control-label">Adverts Title <span class="asterisk">*</span></label>
                                        <input type="text" name="name" required class="form-control" <?php  if(isset($_POST['name'])){ echo "value='$_POST[name]'";}?> value="<?php echo @$editrow['title']?>" placeholder="Advert Title">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Select Date <span class="asterisk">*</span></label>
                                        <input type="text" name="date" class="form-control datepicker-input" <?php  if(isset($_POST['date'])){ echo "value='$_POST[date]'";}?> value="<?php echo @$editrow['date']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Short Content <span class="asterisk">*</span></label>
                                        <input type="text" name="short" required class="form-control" <?php  if(isset($_POST['short'])){ echo "value='$_POST[short]'";}?> value="<?php echo @$editrow['short_desc']?>">
                                    </div>
                                    
                                    <div class="m-t-25">
                                        <label class="col-sm-12 control-label">Content <span class="asterisk">*</span></label>
                                        
                                        <textarea id="mytextarea"  class="form-control" name="contents">
                                            <?php  if(isset($_POST['contents'])){ echo $_POST['contents'];}else{?> <?php echo @$editrow['content'];}?>
                                        </textarea>
                                        
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <?php  if(isset($_GET['edit'])){ ?>
                                                <button class="btn btn-primary mr5" name="update">Update Advertisement</button>
                                            <?php }else{ ?>
                                                <button class="btn btn-primary mr5" name="submit">Save Advertisement</button>
                                            <?php } ?>
                                    </div>   
                                      
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php include 'footer.php'; ?>