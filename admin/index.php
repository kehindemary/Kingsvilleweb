<?php include 'header.php'; ?>

            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-blue">
                                            <i class="anticon anticon-user"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0"><?php echo countUsers() ?></h2>
                                            <p class="m-b-0 text-muted">Members (Admin)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="anticon anticon-line-chart"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0"><?php echo countGallery() ?></h2>
                                            <p class="m-b-0 text-muted">Gallery</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-gold">
                                            <i class="anticon anticon-profile"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0"><?php echo countNews() ?></h2>
                                            <p class="m-b-0 text-muted">Published News</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-purple">
                                            <i class="anticon anticon-book"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0"><?php echo countAdvert() ?></h2>
                                            <p class="m-b-0 text-muted">Published Advert</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <!-- Content Wrapper END -->

               <?php include 'footer.php'; ?>