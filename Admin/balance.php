
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
            <h3 class="my-3">Balance Quantity</h3>

            <form action="" class="p-3 mt-3" method="post">
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"
                  >Product Name</label
                >
                <div class="col-sm-10">
                  <input type="text" name="pro_name" class="form-control" />
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"
                  >Date</label
                >
                <div class="col-sm-10">
                  <input type="date" name="date" class="form-control" />
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"
                  >Income Quantity</label
                >
                <div class="col-sm-10">
                  <input type="text" name="inc_qty" class="form-control" />
                </div>
              </div>
              <input
                type="submit"
                name="save"
                value="Save"
                class="btn btn-success mt-4"
              />
            </form>

            <div class="row w-50 my-5">
              <form action="" method="post" class="d-flex">
                <select name="cat" id="" class="form-control mx-4">
                  <option value="">Search By category</option>
                  <option value="">Shoes</option>
                  <option value="">Clothes</option>
                  <option value="">Hat</option>
                </select>
                <input
                  type="submit"
                  name="search"
                  class="btn btn-success"
                  value="Search"
                />
              </form>
            </div>

            <table class="table" id="datatablesSimple">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Balance ID</th>
                  <th>Product Name</th>
                  <th>Order ID</th>
                  <th>Order Quantity</th>
                  <th>Date</th>
                  <th>Income Quantity</th>
                  <th>Balance</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Balance ID</th>
                  <th>Product Name</th>
                  <th>Order ID</th>
                  <th>Order Quantity</th>
                  <th>Date</th>
                  <th>Income Quantity</th>
                  <th>Balance</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tr>
                <td>1</td>
                <td>123</td>
                <td>Nike Jordan 1</td>
                <td>2</td>
                <td>4</td>
                <td>12/5/2024</td>
                <td>300</td>
                <td>40000</td>
                <td>
                  <a href="balance_edit.html" type="submit" class="btn btn-outline-success" >Edit</a>
                  <a href="balance_delete.html" class="btn btn-outline-danger" >Delete</a>
                </td>
               
              </tr>
            </table>
          </div>
        </main>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/datatables-simple-demo.js"></script>
  </body>
</html>
