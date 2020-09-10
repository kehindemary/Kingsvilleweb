<?php 
include 'header.php'; 

if(isset($_GET['edit'])){
    $sqledit=mysqli_query($server, "select * from news where id='$_GET[edit]'");
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
    
    if(isset($_POST['time'])){
        $type = 'event';
    }else{
        $type = 'news';
    }
    
    $content = addslashes($_POST['content']);
    $short = addslashes($_POST['short']);

    if(!empty($_FILES['image']['name'])){

        $photo_id = RandomString(20, "123456789").".jpg";
        $imageurl="../img/news/".$photo_id;
        move_uploaded_file($_FILES['image']['tmp_name'],$imageurl);
        
        $sql = mysqli_query($server, "insert into news (title, content, short_content,date, type, time, address, image_location)
        VALUES ('$_POST[name]', '$content', '$_POST[short]', '$date', '$type', '$_POST[time]', '$_POST[location]', '$photo_id')");
        
    }else{
        $sql = mysqli_query($server, "insert into news (title, content, short_content, type, time, address, date)
        VALUES ('$_POST[name]', '$content', '$short', '$type', '$_POST[time]', '$_POST[location]', '$date')");
    }

    if($sql){ 
        echo "<script>alert('News Successfully Added!!!'); window.location='news.php'</script>";
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
    
    if(isset($_POST['time'])){
        $type = 'event';
    }else{
        $type = 'news';
    }
    
    $content = addslashes($_POST['content']);
    $short = addslashes($_POST['short']);

    if(!empty($_FILES['image']['name'])){
        $photo_id = RandomString(20, "123456789").".jpg";
        $imageurl="../img/news/".$photo_id;
        move_uploaded_file($_FILES['image']['tmp_name'],$imageurl);
        $sql = mysqli_query($server, "update news set title = '$_POST[name]', content='$content', date='$date', short_content='$short', time='$_POST[time]', address='$_POST[location]', type='$type', image_location= '$photo_id' where id='$_GET[edit]'");
    }else{
        $sql = mysqli_query($server, "update news set title = '$_POST[name]', content='$content', date='$date', short_content='$_POST[short]' , time='$_POST[time]', address='$_POST[location]', type='$type' where id='$_GET[edit]'");
    }

    if($sql){ 
        echo "<script>alert('News Successfully Updated!!!'); window.location='news.php'</script>";
     }
}

?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Add News</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <a href="news.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>News Management</a>
                                <span class="breadcrumb-item active">Add News</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            
                            <div class="m-t-25">
                                <form id="basicForm" action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <label class="control-label">News Title <span class="asterisk">*</span></label>
                                        <input type="text" name="name" required class="form-control" <?php  if(isset($_POST['name'])){ echo "value='$_POST[name]'";}?> value="<?php echo @$editrow['title']?>" placeholder="News Title">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Select Date <span class="asterisk">*</span></label>
                                        <input type="date" name="date" class="form-control datepicker-input" <?php  if(isset($_POST['date'])){ echo "value='$_POST[date]'";}?> value="<?php echo @$editrow['date']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Short Description <span class="asterisk">*</span></label>
                                        <input type="text" name="short" required class="form-control" <?php  if(isset($_POST['short'])){ echo "value='$_POST[short]'";}?> value="<?php echo @$editrow['short_content']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="col-sm-12 control-label">Content <span class="asterisk">*</span></label>
                                        
                                        <textarea id="mytextarea" row="10" class="form-control" name="content">
                                            <?php  if(isset($_POST['content'])){ echo $_POST['content'];}else{?> <?php echo @$editrow['content'];}?>
                                        </textarea>
                                    </div>
                                    <hr>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Time <span class="asterisk">(only for upcoming events)</span></label>
                                        <input type="text" name="time" class="form-control" <?php  if(isset($_POST['time'])){ echo "value='$_POST[time]'";}?> value="<?php echo @$editrow['time']?>">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <label class="control-label">Location <span class="asterisk">(only for upcoming events)</span></label>
                                        <input type="text" name="location" class="form-control" <?php  if(isset($_POST['location'])){ echo "value='$_POST[location]'";}?> value="<?php echo @$editrow['address']?>">
                                    </div>
                                    
                                    <hr>
                                    <div class="row m-t-25">  
                                        <label class="control-label">Upload Featured Image </label> 
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    
                                    <div class="row m-t-25">
                                        <?php  if(isset($_GET['edit'])){ ?>
                                                <button class="btn btn-primary mr5" name="update">Update News</button>
                                            <?php }else{ ?>
                                                <button class="btn btn-primary mr5" name="submit">Save News</button>
                                            <?php } ?>
                                    </div>   
                                      
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php include 'footer.php'; ?>