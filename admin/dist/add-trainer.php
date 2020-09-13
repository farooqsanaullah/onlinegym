<?php  include 'check_admin_login.php';   ?>
<?php 


include 'dbconnection/dbconnection.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $expertination = $_POST['expertination'];
    $description = $_POST['description'];


    $email_query = " select * from trainers where email='$email' ";
    $query = mysqli_query($con, $email_query);

    $email_count = mysqli_num_rows($query);
    if ($email_count > 0) {
        echo "<script> alert('Email already exists');  </script>";
    } else {
        $insert_query = "insert into trainers(name,email,phone_number,expertination,description,image_url) 
              values('$name','$email','$phone_number','$expertination','$description','')";
        $insert_data = mysqli_query($con, $insert_query);
        if ($insert_data) {

            echo "<script> alert('Successfully Add Trainer');  </script>";
        } else {
            echo "<script> alert('Error');  </script>";
        }
    }
    
}


?> 
 


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
                                        <h3 style="display: inline !important;" class="text-center font-weight-light my-4">Add Trainer</h3>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <form style="margin-top: 20px;" action="" method="post">

                                        <div class="col-md-12">
                                            <div class="challenge-img" align="center">
                                                <img src="https://cdn.lifehack.org/wp-content/uploads/2018/04/24222733/workout-routines-for-women.0011.jpeg" class="img-fluid circle" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Name</label>
                                            <input class="form-control py-4" type="text" name="name" placeholder="Enter name" required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Email</label>
                                            <input class="form-control py-4" type="text" name="email"  placeholder="Enter email" required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Phone Number</label>
                                            <input class="form-control py-4" type="number" name="phone_number" placeholder="Enter phone number" required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Expertination</label>
                                            <input class="form-control py-4" type="text" placeholder="Enter expertination" name="expertination" required/>
                                        </div>

                                        <div class="form-group">
                                            <label class="small mb-1">Description</label>

                                            <textarea class="form-control" aria-label="With textarea" name="description" cols="12" rows="10" required></textarea>
                                        </div>
                                        <div class="col-md-12">

                                            <label for="imgs" class="file__div">
                                                <input type="file" id="imgs" (change)="processFile($event)" hidden accept=" image/jpeg, image/png" multiple="false" />
                                                <a mat-raised-button class="attach__button">
                                                    Profile image </a>
                                            </label>
                                        </div>



                                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" name="submit" type="submit">Submit</button></div>

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
    