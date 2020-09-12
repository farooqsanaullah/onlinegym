<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Branch</title>
    <link rel="icon" href="./assets/img/fuse.svg" sizes="16x16">

    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/panel.css" rel="stylesheet" />

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <img src="./assets/img/fuse.svg" style="display: inline !important;padding:5px 10px" alt="logo" width="60" height="60">

        <a class="gym_name" href="index.html">Fitness Fuel</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="users.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                            Users
                        </a>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Classes" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Classes
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="Classes" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="add-class.php"><i class="fa fa-plus-circle m-left" aria-hidden="true"></i> Add Class</a>
                                <a class="nav-link" href="classes.php"><i class="fa fa-eye m-left" aria-hidden="true"></i> View Classes</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Trainers" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Trainers
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="Trainers" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="add-trainer.php"><i class="fa fa-plus-circle m-left" aria-hidden="true"></i> Add Trainer</a>
                                <a class="nav-link" href="trainer.php"><i class="fa fa-eye m-left" aria-hidden="true"></i> View Trainers</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Schedule" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Schedule
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="Schedule" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="add-schedule.php"><i class="fa fa-plus-circle m-left" aria-hidden="true"></i> Add Schedule</a>
                                <a class="nav-link" href="schedule.php"><i class="fa fa-eye m-left" aria-hidden="true"></i> View Schedule</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Branches" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Branches
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="Branches" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="add-branch.php"><i class="fa fa-plus-circle m-left" aria-hidden="true"></i> Add Branch</a>
                                <a class="nav-link" href="branches.php"> <i class="fa fa-eye m-left" aria-hidden="true"></i> View Branches</a>
                            </nav>
                        </div>

                        
                        <a class="nav-link" href="change-password.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-key" aria-hidden="true"></i></div>
                            Change password
                        </a>
                        <a class="nav-link" href="login.html">
                            <div class="sb-nav-link-icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                            Sign out
                        </a>
                    </div>
                </div>

            </nav>

        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-xl-4 col-sm-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <div>
                                        <img src="./assets/img/fuse.svg" style="display: inline !important;padding-right:10px" alt="logo" width="60" height="60">
                                        <h3 style="display: inline !important;" class="text-center font-weight-light my-4">Add Branch</h3>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <form style="margin-top: 20px;">

                                        <div class="col-md-12">
                                            <div class="challenge-img" align="center">
                                                <img src="https://image.freepik.com/free-photo/sport-woman-enjoy-workout-with-treadmill-gym-fitness-center_9693-130.jpg" class="img-fluid circle" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Branch Name</label>
                                            <input class="form-control py-4" type="text" placeholder="Enter branch name" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Branch Address</label>
                                            <input class="form-control py-4" type="text" placeholder="Enter branch address" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Contact No</label>
                                            <input class="form-control py-4" type="text" placeholder="Enter contact no" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Description</label>

                                            <textarea class="form-control" aria-label="With textarea" cols="12" rows="10"></textarea>
                                        </div>
                                        <div class="col-md-12">

                                            <label for="imgs" class="file__div">
                                                <input type="file" id="imgs" (change)="processFile($event)" hidden accept=" image/jpeg, image/png" multiple="false" />
                                                <a mat-raised-button class="attach__button">
                                                   image of branch </a>
                                            </label>
                                        </div>



                                        <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block" href="index.html" type="submit">Submit</a></div>

                                    </form>
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
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>