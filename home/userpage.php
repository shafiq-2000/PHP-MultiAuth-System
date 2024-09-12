<?php
session_start();
//Can't access this page without login-akhane email holo session a je value set kora  hoise,others name dilew hobe
if (!isset($_SESSION['email'])) {
    header("location:login.php");
} elseif ($_SESSION['usertype'] == "admin") {
    header("location:login.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body class="container">
    <h1 class="display-3  text-center bg-danger"><strong>Welcome</strong> To User Interface</h1>
    <a class="btn btn-warning text-center" href="../admin/logout.php"><strong>Logout</strong></a>
    <div class="mt-5">
        <marquee behavior="scroll" direction="left" scrollamount="10">
            <h3 class="display-3  text-center bg-info"> <strong>Welcome</strong> MY User Interface</h3>
        </marquee>
        <marquee behavior="scroll" direction="right" scrollamount="15">
            <h3 class="display-3  text-center bg-primary"> <strong>Welcome</strong> MY User Interface</h3>
        </marquee>
        <marquee behavior="scroll" direction="left" scrollamount="20">
            <h3 class="display-3  text-center bg-danger"> <strong>Welcome</strong> MY User Interface</h3>
        </marquee>
        <marquee behavior="scroll" direction="right" scrollamount="25">
            <h3 class="display-3  text-center bg-success"> <strong>Welcome</strong> MY User Interface</h3>
        </marquee>
        <marquee behavior="scroll" direction="left" scrollamount="30">
            <h3 class="display-3  text-center bg-info"> <strong>Welcome</strong> MY User Interface</h3>
        </marquee>
        <marquee behavior="scroll" direction="right" scrollamount="35">
            <h3 class="display-3  text-center bg-warning"> <strong>Welcome</strong> MY User Interface</h3>
        </marquee>
        <marquee behavior="scroll" direction="left" scrollamount="40">
            <h3 class="display-3  text-center bg-muted"> <strong>Welcome</strong> MY User Interface</h3>
        </marquee>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>