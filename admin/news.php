<?php 
include 'header.php'; 

if(isset($_GET['delete'])){
    $sql = mysqli_query($server, "DELETE FROM news WHERE id = '$_GET[delete]'");
    if($sql){ 
        echo "<script>alert('News Successfully Deleted!!!'); window.location='news.php'</script>";
     }
}

?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">News Management</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <span class="breadcrumb-item active">News Management</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            <a href="addnews.php" class="btn btn-primary"><i class="anticon anticon-plus"></i> Add News Update</a>
                            <div class="m-t-25">
                                <table id="data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>SNO.</th>
                                            <th>Featured Image</th>
                                            <th>TITLE</th>
                                            <th>CONTENT</th>
                                            <th>Published Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sql=mysqli_query($server, "select * from news order by id DESC") ;
                                            $x = 0;
                                            while($row=mysqli_fetch_assoc($sql)) { $x++
                                        ?>
                                        <tr>
                                            <td><?php echo $x; ?></td>
                                             <?php if(!empty($row['image_location'] )){ ?>
                                            <td><img src="../img/news/<?php echo $row['image_location']; ?>" style="height:50px; width:50px"/></td>
                                            <?php }else{ ?>
                                            <td><img src="../img/news/default.jpg" style="height:50px; width:50px"/></td>
                                            <?php } ?>
                                            <td><?php echo $row['title']; ?></td>
                                            <td><?php echo $row['short_content']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td>
                                                <div class="dropdown dropdown-animated scale-right">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="addnews.php?edit=<?php echo $row['id']; ?>" class="dropdown-item">Edit News</a>
                                                        <a href="news.php?delete=<?php echo $row['id']; ?>" class="dropdown-item">Delete News</a>
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