<?php 
include 'header.php'; 
?>


            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Student Exam Details</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="index.php" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Dashboard</a>
                                <span class="breadcrumb-item active">Student Information</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!--<h4>Administrator Members</h4>-->
                            <a href="add-exam-details.php" class="btn btn-primary"><i class="anticon anticon-plus"></i> Add Exam Details</a>
                            <div class="m-t-25">
                                <table id="data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>SNO.</th>
                                            <th>Student Name</th>
                                            <th>Class</th>
                                            <th>Exam Taken</th>
                                            <th>Scores</th>
                                            <th>Average Score</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>1</td>
                                            <td>Mary</td>
                                            <td>JS2</td>
                                            <td>4</td>
                                            <td>100</td>
                                            <td>99%</td>
                                           <td>
                                                <div class="dropdown dropdown-animated scale-right">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="#" class="dropdown-item">Edit </a>
                                                        <a href="#" class="dropdown-item">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <?php include 'footer.php'; ?>