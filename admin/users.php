
<?php 
include 'header.php'; 

if(isset($_GET['delete'])){
    $sql = mysqli_query($server, "DELETE FROM users WHERE id = '$_GET[delete]'");
    if($sql){ 
        echo "<script>alert('Admin User Successfully Deleted!!!'); window.location='users.php'</script>";
     }
}

if(isset($_GET['reset'])){
    $sql = mysqli_query($server, "update users set password = '1234' where id='$_GET[reset]'");
    if($sql){ 
        echo "<script>alert('Admin Password Successfully Updated to 1234'); window.location='users.php'</script>";
     }
}

?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Administrative Members</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <span class="breadcrumb-item active">Administrative Members</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            <a href="newusers.php" class="btn btn-primary"><i class="anticon anticon-plus"></i> Add New Admin Member</a>
                            <div class="m-t-25">
                                <table id="data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>SNO.</th>
                                            <th>User Name</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Date Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sql=mysqli_query($server, "select * from users order by id DESC") ;
                                            $x = 0;
                                            while($row=mysqli_fetch_assoc($sql)) { $x++
                                        ?>
                                        <tr>
                                            <td><?php echo $x; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['timestamp']; ?></td>
                                            <td>
                                                <div class="dropdown dropdown-animated scale-right">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="newusers.php?edit=<?php echo $row['id']; ?>" class="dropdown-item">Edit User</a>
                                                        <a href="users.php?reset=<?php echo $row['id']; ?>" class="dropdown-item">Reset Password</a>
                                                        <a href="users.php?delete=<?php echo $row['id']; ?>" class="dropdown-item">Delete User</a>
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