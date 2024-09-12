<?php
$conn = mysqli_connect("localhost", "root", "", "ecom_project");
// if($conn){
//     echo "database is connect";
// }


if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //$password=md5($_POST['password']);
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $usertype = "user";

    $sql = "INSERT INTO users (name,email,password,phone,address,usertype) VALUES ('$name','$email', '$password','$phone','$address','$usertype')";

    $data = mysqli_query($conn, $sql);

    if ($data) {
        echo "<script>alert('Data Insert success') </script>";
        header('location:register.php');
        exit();
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="../admin/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="../admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="../admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="../admin/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="../admin/assets/css/pace.min.css" rel="stylesheet" />
    <script src="../admin/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="../admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/assets/css/app.css" rel="stylesheet">
    <link href="../admin/assets/css/icons.css" rel="stylesheet">
    <title>Ecom||Project</title>
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">

                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <form action="" method="POST">
                                        <div class="text-center">
                                            <h3 class="">Sign Up</h3>
                                            <p>Already have an account? <a href="login.php">Sign in here</a>
                                            </p>
                                        </div>

                                        <div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
                                            <hr />
                                        </div>
                                        <div class="form-body">
                                            <form class="row g-3 action="" method="" >
                                            <div class=" col-sm-12">
                                                <label for="inputFirstName" class="form-label"> Name</label>
                                                <input type="text" name="name" class="form-control" id="inputFirstName" placeholder="Jhon">
                                        </div>


                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="example@user.com">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" name="password" class="form-control" id="inputChoosePassword" placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="inputFirstName" class="form-label"> Phone</label>
                                            <input type="number" name="phone" class="form-control" id="inputFirstName" placeholder="Enter your phone">
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="inputFirstName" class="form-label"> Address</label>
                                            <input type="text" name="address" class="form-control" id="inputFirstName" placeholder="Enter your address">
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" name="save" class="btn btn-primary"><i class='bx bx-user'></i>Sign up</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="../admin/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="../admin/assets/js/jquery.min.js"></script>
    <script src="../admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="../admin/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="../admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="../admin/assets/js/app.js"></script>
</body>

</html>