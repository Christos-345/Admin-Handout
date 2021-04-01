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
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
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



</body>

</html>