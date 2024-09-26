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
                        <h3 class="my-4">Order Lists</h3>
                        <table class="table" id="datatablesSimple" >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Customer Phno</th>
                                    <th>Customer Address</th>
                                    <th>Product Name</th>
                                    <th>Order Date</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Customer Phno</th>
                                    <th>Customer Address</th>
                                    <th>Product Name</th>
                                    <th>Order Date</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>Phyo Thuta</td>
                                    <td>098752345</td>
                                    <td>Yangon Hlaing</td>
                                    <td>Nike DunkLow</td>
                                    <td>23/4/2024</td>
                                    <td>2</td>
                                    <td>300</td>
                                </tr>
                            </tbody>
                           
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
