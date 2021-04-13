<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; APM Smart Houses <?php echo date("Y") ?></span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $lang['readytoleave']?></h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body"><?php echo $lang['selectlogout']?></div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo $lang['cancel']?></button>
        <a class="btn btn-primary" href="includes/logout.inc.php">Logout</a>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

<!-- Validator Javascript --->
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="js/paginationTable.js"></script>

<!--Plugin JavaScript file-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>

<!--Sweet Alert-->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

<!--Sweet alerts used in the website-->
<?php
if (isset($_GET['insert'])) {
  if ($_GET['insert'] == 'successful') {
    echo '
      <script>
      $(document).ready(function(){
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Insert Successful!",
          showConfirmButton: false,
          timer: 1600                 
        }).then(function() {
        })
      });                 
      </script>
      ';
  } else if ($_GET['insert'] == 'fail') {
    echo '
    <script>
    $(document).ready(function(){
      Swal.fire({
        position: "center",
        icon: "error",
        title: "Insert Failed!",
        showConfirmButton: false,
        timer: 1600                 
      }).then(function() {
        
      })
    });                 
    </script>
    ';
  }
}

if (isset($_GET['deletion'])) {
  if ($_GET['deletion'] == 'success') {
    echo '
      <script>
      $(document).ready(function(){
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Delete Successful!",
          showConfirmButton: false,
          timer: 1600                 
        }).then(function() {
          
        })
      });                 
      </script>
      ';
  } else if ($_GET['deletion'] == 'error') {
    echo '
    <script>
    $(document).ready(function(){
      Swal.fire({
        position: "center",
        icon: "error",
        title: "Delete Failed!",
        showConfirmButton: false,
        timer: 1600                 
      }).then(function() {
        
      })
    });                 
    </script>
    ';
  } else if ($_GET['deletion'] == 'empty') {
    echo '
    <script>
    $(document).ready(function(){
      Swal.fire({
        position: "center",
        icon: "error",
        title: "Delete Empty!",
        showConfirmButton: false,
        timer: 1600                 
      }).then(function() {
        
      })
    });                 
    </script>
    ';
  }
}

if (isset($_GET['error'])) {
  if ($_GET['error'] == 'stmtFailed') {
    echo '
    <script>
    $(document).ready(function(){
      Swal.fire({
        position: "center",
        icon: "error",
        title: "Something Went Wrong!",
        showConfirmButton: false,
        timer: 1600                 
      }).then(function() {
        
      })
    });                 
    </script>
    ';
  }
}

if (isset($_GET['update'])) {
  if ($_GET['update'] == 'successful') {
    echo '
      <script>
      $(document).ready(function(){
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Update Successful!",
          showConfirmButton: false,
          timer: 1600                 
        }).then(function() {
          
        })
      });                 
      </script>
      ';
  }
}
if (isset($_GET['upload'])) {
  if ($_GET['upload'] == 'success') {
    echo '
      <script>
      $(document).ready(function(){
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Multimedia Upload Successful!",
          showConfirmButton: false,
          timer: 1600                 
        }).then(function() {
          
        })
      });                 
      </script>
      ';
  }
}
if(isset($_GET['upload'])){
  if ($_GET['upload'] == 'wrongext') {

    echo '
      <script>
      $(document).ready(function(){
        Swal.fire({
          position: "center",
          icon: "error",
          title: "Wrong file format used! Please check you files formats and upload all your files again.",
          showConfirmButton: false,
          timer: 4000                 
        }).then(function() {
        })
      });                 
      </script>
      ';
  }
}

if(isset($_GET['upload'])){
  if ($_GET['upload'] == 'largefile') {

    echo '
      <script>
      $(document).ready(function(){
        Swal.fire({
          position: "center",
          icon: "error",
          title: "Large file used! Please check you files sizes and upload all you files again.",
          showConfirmButton: false,
          timer: 4000                 
        }).then(function() {
        })
      });                 
      </script>
      ';
  }
}

if (isset($_GET['registration'])) {
  if ($_GET['registration'] == 'success') {
    echo '
      <script>
      $(document).ready(function(){
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Registration Successful!",
          showConfirmButton: false,
          timer: 1600                 
        }).then(function() {
          
        })
      });                 
      </script>
      ';
  }
  if ($_GET['registration'] == 'cancel') {
    echo '
      <script>
      $(document).ready(function(){
        Swal.fire({
          position: "center",
          icon: "error",
          title: "Registration Canceled!",
          showConfirmButton: false,
          timer: 1600                 
        }).then(function() {
          
        })
      });                 
      </script>
      ';
  }
  if ($_GET['registration'] == 'error') {
    echo '
      <script>
      $(document).ready(function(){
        Swal.fire({
          position: "center",
          icon: "error",
          title: "Registration Failed!",
          showConfirmButton: false,
          timer: 1600                 
        }).then(function() {
          
        })
      });                 
      </script>
      ';
  }
}

?>

<!--Script to show edit Admin modal when form is submitted-->
<?php if (isset($_GET['modal']) && 'editAdmin' == $_GET['modal']) { ?>
  <script type='text/javascript'>
    $("#editAdmin").modal();
  </script>
<?php } ?>
<!--Script to show delete Admin modal when form is submitted-->
<?php if (isset($_GET['modal']) && 'deleteAdmin' == $_GET['modal']) { ?>
  <script type='text/javascript'>
    $("#deleteAdmin").modal();
  </script>
<?php } ?>

<!--Script to edit Customer modal when form is submitted-->
<?php if (isset($_GET['modal']) && 'editCustomer' == $_GET['modal']) { ?>
  <script type='text/javascript'>
    $("#editCustomer").modal();
  </script>
<?php } ?>
<!--Script to show delete Customer modal when form is submitted-->
<?php if (isset($_GET['modal']) && 'deleteCustomer' == $_GET['modal']) { ?>
  <script type='text/javascript'>
    $("#deleteCustomer").modal();
  </script>
<?php } ?>

<!--Script to show edit property modal when form is submitted-->
<?php if (isset($_GET['modal']) && 'editProperty' == $_GET['modal']) { ?>
  <script type='text/javascript'>
    $("#editProperty").modal();
  </script>
<?php } ?>
<!--Script to show delete property modal when form is submitted-->
<?php if (isset($_GET['modal']) && 'deleteProperty' == $_GET['modal']) { ?>
  <script type='text/javascript'>
    $("#deleteProperty").modal();
  </script>
<?php } ?>

<!--Script to show edit renovation modal when form is submitted-->
<?php if (isset($_GET['modal']) && 'editRenovation' == $_GET['modal']) { ?>
  <script type='text/javascript'>
    $("#editRenovation").modal();
  </script>
<?php } ?>
<!--Script to show delete renovation modal when form is submitted-->
<?php if (isset($_GET['modal']) && 'deleteRenovation' == $_GET['modal']) { ?>
  <script type='text/javascript'>
    $("#deleteRenovation").modal();
  </script>
<?php } ?>


<script>

</script>



</body>

</html>