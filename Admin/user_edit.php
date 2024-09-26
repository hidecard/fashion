<?php
include('db.php');  
if(isset($_POST['save'])){
    $uid = $_POST['uid'];
    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $upass = $_POST['upass'];
    $sql = "UPDATE users SET user_name='$uname', user_mail='$uemail', user_pass='$upass' WHERE user_id='$uid'";
    $result = mysqli_query($conn, $sql);
}
if(isset($_GET['uid'])){
    $uid = $_GET['uid'];
    $sql = "SELECT * FROM users WHERE user_id='$uid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $uname = $row['user_name'];
    $uemail = $row['user_mail'];
    $upass = $row['user_pass'];
}
?>
<?php include('head.php')?>
    <body class="sb-nav-fixed">
    <?php include('top_nav.php')?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            <?php include('side_nav.php')?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h3 class="mt-4">User Lists</h3>
        <form action="" class="p-3 mt-5" method="post">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">User ID</label>
                <div class="col-sm-10">
                    <input type="text" value="" disabled name="uid" class="form-control" >
                </div>
            </div>    
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"><]NAME</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="uname" class="form-control" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">User Email</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="uemail" class="form-control" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">User Password</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="upass" class="form-control" >
                </div>
            </div>
            <input type="submit" name="save" value="Save" class="btn btn-success mt-4">
        </form>


                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
