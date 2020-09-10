<?php 
include 'header.php'; 

if(isset($_GET['delete'])){
    $sql = mysqli_query($server, "DELETE FROM library WHERE id = '$_GET[delete]'");
    if($sql){ 
        echo "<script>alert('Document Successfully Deleted!!!'); window.location='library.php'</script>";
     }
}

?>


            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Library Management</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <span class="breadcrumb-item active">Library Management</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            <a href="addlibrary.php" class="btn btn-primary"><i class="anticon anticon-plus"></i> Add Library</a>
                            <div class="m-t-25">
                                <table id="data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>SNO.</th>
                                            <th>Book</th>
                                            <th>Title</th>
                                            <th>Type</th>
                                            <th>Published Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $sql=mysqli_query($server, "select * from library  order by id DESC") ;
                                            $x = 0;
                                            while($row=mysqli_fetch_assoc($sql)) { $x++
                                        ?>
                                        <tr>
                                            <td><?php echo $x; ?></td>
                                             <?php if(!empty($row['image_location'] )){ ?>
                                        <td><img src="../download/pdf.png" style="height:50px; width:50px"/></td>
                                        <?php }else{ ?>
                                        <td><img src="../images/library/pdf.png" style="height:50px; width:50px"/></td>
                                        <?php } ?>
                                            <td><?php echo $row['title']; ?></td>
                                            <td><?php if($row['type'] == 'admission'){ echo "Admission Form";}else{echo "School Calendar"; } ?></td>
                                            <td><?php echo $row['timestamp']; ?></td>
                                            <td>
                                                <div class="dropdown dropdown-animated scale-right">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="library.php?delete=<?php echo $row['id']; ?>" class="dropdown-item">Delete Library</a>
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