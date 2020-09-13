
<?php  include 'header.php';   ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-xl-4 col-sm-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <div>
                                        <img src="./assets/img/fuse.svg" style="display: inline !important;padding-right:10px" alt="logo" width="60" height="60">
                                        <h3 style="display: inline !important;" class="text-center font-weight-light my-4">Add class</h3>

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
                                            <label class="small mb-1">Class Name</label>
                                            <input class="form-control py-4" type="text" placeholder="Enter class name" />
                                        </div>

                                        <div class="form-group">
                                            <label class="small mb-1">Description</label>

                                            <textarea class="form-control" aria-label="With textarea" cols="12" rows="10"></textarea>
                                        </div>
                                        <div class="col-md-12">

                                            <label for="imgs" class="file__div">
                                                <input type="file" id="imgs" (change)="processFile($event)" hidden accept=" image/jpeg, image/png" multiple="false" />
                                                <a mat-raised-button class="attach__button">
                                                   image of class </a>
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
    
<?php include 'footer.php';?>