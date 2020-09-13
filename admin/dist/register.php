<?php

include 'dbconnection/dbconnection.php';


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $class_name = $_POST['class_name'];
    $phone_number = $_POST['phone_number'];

    $hash_password = password_hash($password, PASSWORD_BCRYPT); // password bcrypt

    $email_query = " select * from users where email='$email' ";
    $query = mysqli_query($con, $email_query);

    $email_count = mysqli_num_rows($query);
    if ($email_count > 0) {
        echo "<script> alert('Email already exists');  </script>";
    } else {
        $insert_query = "insert into users(name,email,password,class_name,phone_number,image_url,enrollment,registered) 
              values('$name','$email','$hash_password','$class_name','$phone_number','','','')";
        $insert_data = mysqli_query($con, $insert_query);
        if ($insert_data) {

            echo "<script> alert('Successfully register in Fitfuel Gym');  </script>";
        } else {
            echo "<script> alert('Error');  </script>";
        }
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register User</title>

    <link rel="icon" href="./assets/img/fuse.svg" sizes="16x16">
    <link href="css/styles.css" rel="stylesheet" />

    <link href="css/panel.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #ffffff !important;">







    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-4 col-xl-4 col-sm-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <div>
                                        <img src="./assets/img/fuse.svg" style="display: inline !important;padding-right:10px" alt="logo" width="60" height="60">
                                        <h3 style="display: inline !important;" class="text-center font-weight-light my-4">Register User</h3>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-row">

                                            <div class="col-md-12">
                                                <div class="challenge-img" align="center">
                                                    <img src="https://img5.cfcdn.club/35/22/35d6c9b0bd10a57c8084c229bff6c222_350x350.jpg" class="img-fluid circle" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="small mb-1">Name</label>
                                                    <input class="form-control py-4" type="text" placeholder="Enter name" name="name" required />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="small mb-1">Email</label>
                                                    <input class="form-control py-4" type="email" name="email" placeholder="Enter email" required autocomplete="false" />
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="small mb-1">Password</label>
                                                    <input class="form-control py-4" type="password" name="password" placeholder="Enter password" required autocomplete="false" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="small mb-1">Phone Number</label>
                                                    <input class="form-control py-4" type="number" name="phone_number" placeholder="Enter phone number" required autocomplete="false" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <select class="browser-default custom-select" name="class_name" required>
                                                    <option value="">Please select class</option>
                                                    <option value="Body Combat">Body Combat</option>
                                                    <option value="Yoga Programs">Yoga Programs</option>
                                                    <option value="Cycling Program">Cycling Program</option>
                                                    <option value="Boxing Fitness">Boxing Fitness</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12">

                                                <label for="imgs" class="file__div">
                                                    <input type="file" id="imgs" (change)="processFile($event)" hidden accept=" image/jpeg, image/png" multiple="false" />
                                                    <a mat-raised-button class="attach__button">
                                                        Profile image </a>
                                                </label>
                                            </div>


                                        </div>


                                        <div class="form-group mt-4 mb-0">
                                            <button class="btn btn-primary btn-block" type="submit" name="submit">Sign Up</button></div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
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
</body>

</html>