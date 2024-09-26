<?php
    include('db.php');
    if(isset($_POST['save'])){
        $uname = $_POST['uname'];
        $uemail = $_POST['uemail'];
        $upass = $_POST['upass'];
        $role = "admin";
        $sql = "INSERT INTO users (user_name, user_mail, user_pass , user_role) VALUES ('$uname', '$uemail', '$upass' , '$role')";
        $result = mysqli_query($conn, $sql);

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
                        <h3 class="mt-1">User Lists</h3>
                        <form action="" class="p-3 mt-3" method="post">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">User Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="uname" class="form-control" >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">User Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="uemail" class="form-control" >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">User Password</label>
                                <div class="col-sm-10">
                                    <input type="text" name="upass" class="form-control" >
                                </div>
                            </div>
                            <input type="submit" name="save" value="Save" class="btn btn-success mt-4">
                        </form>

                        <table class="table" id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>User role</th>
                                    <th>User Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>User role</th>
                                    <th>User Password</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <?php
                                $sql = "SELECT * FROM users";
                                $result = mysqli_query($conn, $sql);
                                $count = mysqli_num_rows($result);
                                $i = 1;
                                while($row = mysqli_fetch_assoc($result)){
                                
                           ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $row['user_id'] ?></td>
                                    <td><?php echo $row['user_name'] ?></td>
                                    <td><?php echo $row['user_mail'] ?></td>
                                    <td><?php echo $row['user_role'] ?></td>
                                    <td><?php echo $row['user_pass'] ?></td>
                                    <td><a href="user_edit.php?id=<?php echo $row['user_id'] ?>" type="submit" class="btn btn-sm btn-outline-success">Edit</a>
                                        <a href="user_del.php?id=<?php echo $row['user_id'] ?>" type="submit" class="btn btn-sm btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php } ?>
                           
                          
                        </table>

                        
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
