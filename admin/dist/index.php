<?php  include 'check_admin_login.php';   ?>


<?php  include 'header.php';   ?>
  
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    
                    <div class="row mt-table">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="summary-title">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i> Total Users
                                </div>
                                <div class="card-body">
                                   <h1>+100</h1>
                                </div>
                                
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="users.php">View Details</a>
                                    
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="summary-title">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i> Total Braches
                                </div>
                                <div class="card-body">
                                   <h1>+10</h1>
                                </div>
                                
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="branches.php">View Details</a>
                                    
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="summary-title">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i> Total Classess
                                </div>
                                <div class="card-body">
                                   <h1>+30</h1>
                                </div>
                                
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="classes.php">View Details</a>
                                    
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="summary-title">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i> Total Trainer
                                </div>
                                <div class="card-body">
                                   <h1>+20</h1>
                                </div>
                                
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="trainer.php">View Details</a>
                                    
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; 2020</div>

                    </div>
                </div>
            </footer>
        </div> 
        
<?php include 'footer.php';?>