
<?php 
include 'header.php'; 

if(isset($_GET['delete'])){
    $sql = mysqli_query($server, "DELETE FROM teams WHERE id = '$_GET[delete]'");
    if($sql){ 
        echo "<script>alert('Team Management Successfully Deleted!!!'); window.location='management.php'</script>";
     }
}

?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Management Team Members</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <span class="breadcrumb-item active">Management Team Members</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            <a href="addmanagement.php" class="btn btn-primary"><i class="anticon anticon-plus"></i> Add New Management Team</a>
                            <div class="m-t-25">
                                <table id="data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>SNO.</th>
                                            <th>Photo</th>
                                            <th>Full Name</th>
                                            <th>Position</th>
                                            <th>Date Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sql=mysqli_query($server, "select * from teams order by id DESC") ;
                                            $x = 0;
                                            while($row=mysqli_fetch_assoc($sql)) { $x++
                                        ?>
                                        <tr>
                                            <td><?php echo $x; ?></td>
                                                <?php if(!empty($row['image_location'] )){ ?>
                                            <td><img src="../images/team/<?php echo $row['image_location'] ?>" style="height:50px; width:50px"/></td>
                                            <?php }else{ ?>
                                            <td><img src="../images/team/default.jpg" style="height:50px; width:50px"/></td>
                                            <?php } ?>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['position']; ?></td>
                                            <td><?php echo $row['timestamp']; ?></td>
                                            <td>
                                                <div class="dropdown dropdown-animated scale-right">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="addmanagement.php?edit=<?php echo $row['id']; ?>" class="dropdown-item">Edit Team Member</a>
                                                        <a href="management.php?delete=<?php echo $row['id']; ?>" class="dropdown-item">Delete Team Member</a>
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