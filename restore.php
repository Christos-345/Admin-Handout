<?php
$title = 'Restore | APM Admin';
include_once 'includes/header.inc.php';
?>

<style>
    .btn-success {
        margin-left: -10px;
    }

    .file-move {
        margin-right: 50px;
    }
</style>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->


    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                </div>
              </div>
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Restore</h4>
                </div>
                <div class="card-body">
                <form action="includes/restore.inc.php" method="POST" enctype="multipart/form-data">
                  <div class="col-sm-6">
                  <?php
                  if(isset($_GET['r'])){
                  if($_GET['r']=='success'){
                  echo '<p><b> Successfully Imported. </b></p>';}}
                  ?>
                  <div class="line"></div>
                  
                  <p><b>Note:</b> Restoring a backup will remove the database that's already in the server.</p>
                    <br><input type="file" name="fileToUpload" id="fileToUpload">
                    <div class="line"></div><br><br>
                    <button type="submit" name="submit" class="btn btn-primary">Restore</button>
                </form>
                </div>
              </div>
            </div>
        </div>
                       

    <!-- Manual Modal HTML -->
    <div id="manualProperty" class="modal fade">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">              
                   <?php
                   if(isset($_SESSION['lang'])){
                       if($_SESSION['lang'] == "gr"){
                           include_once 'manuals/manualPropertiesGreek.html';
                       }else if ($_SESSION['lang'] == "en"){
                           include_once 'manuals/manualPropertiesEnglish.html';
                       }
                   }                   
                   ?>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-primary" data-dismiss="modal" value="Ok" ?>
                    </div>
               
            </div>
        </div>
    </div>








</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include_once 'includes/footer.inc.php';
?>