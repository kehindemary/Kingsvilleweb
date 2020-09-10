<?php 

include 'header.php'; 

if(isset($_GET['delete'])){
    $sql = mysqli_query($server, "DELETE FROM video WHERE id = '$_GET[delete]'");
    if($sql){ 
        echo "<script>alert('Video Successfully Deleted!!!'); window.location='video.php'</script>";
     }
}
?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Video Management</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <span class="breadcrumb-item active">Video Management</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            <a href="addvideo.php" class="btn btn-primary"><i class="anticon anticon-plus"></i> Add Video</a>
                            <div class="m-t-25">
                                <table id="data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>SNO.</th>
                                            <th>Youtube Link</th>
                                            <th>Published Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sql=mysqli_query($server, "select * from video order by id DESC") ;
                                            $x = 0;
                                            while($row=mysqli_fetch_assoc($sql)) { $x++
                                        ?>
                                        <tr>
                                            <td><?php echo $x; ?></td>
                                            <td><?php echo $row['url']; ?></td>
                                            <td><?php echo $row['timestamp']; ?></td>
                                            <td>
                                                <div class="dropdown dropdown-animated scale-right">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="addvideo.php?edit=<?php echo $row['id']; ?>" class="dropdown-item">Edit Video</a>
                                                        <a href="video.php?delete=<?php echo $row['id']; ?>" class="dropdown-item">Delete Video</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php include 'footer.php'; ?>