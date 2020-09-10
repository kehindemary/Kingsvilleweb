<?php 

include 'header.php'; 

if(isset($_GET['delete'])){
    $sql = mysqli_query($server, "DELETE FROM maps WHERE id = '$_GET[delete]'");
    if($sql){ 
        echo "<script>alert('Map Successfully Deleted!!!'); window.location='maps.php'</script>";
     }
}
?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Map Management</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <span class="breadcrumb-item active">Map Management</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            <a href="newmap.php" class="btn btn-primary"><i class="anticon anticon-plus"></i> Add Maps</a>
                            <div class="m-t-25">
                                <table id="data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>SNO.</th>
                                            <th>Map Title</th>
                                            <th>Map Image</th>
                                            <th>Published Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sql=mysqli_query($server, "select * from maps order by id DESC") ;
                                            $x = 0;
                                            while($row=mysqli_fetch_assoc($sql)) { $x++
                                        ?>
                                        <tr>
                                            <td><?php echo $x; ?></td>
                                            <td><?php echo $row['title'] ?></td>
                                             <?php if(!empty($row['image_location'] )){ ?>
                                        <td><img src="../images/portfolio/<?php echo $row['image_location'] ?>" style="height:50px; width:50px"/></td>
                                        <?php }else{ ?>
                                        <td><img src="../images/portfolio/default.jpg" style="height:50px; width:50px"/></td>
                                        <?php } ?>
                                            <td><?php echo $row['timestamp']; ?></td>
                                            <td>
                                                <div class="dropdown dropdown-animated scale-right">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="maps.php?delete=<?php echo $row['id']; ?>" class="dropdown-item">Delete Map</a>
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