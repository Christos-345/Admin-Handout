<?php
$title = 'Backup| APM Admin';
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
            <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Automatic Backup</h4>
                </div>
            <div class="card-body">
                <form action="includes/autobackup.inc.php" method="POST" >
                  <div class="col-sm-6">
                  <?php
                  if(isset($_GET['b'])){
                  if($_GET['b']=='success'){
                  echo '<p><b> Successfully Updated. </b></p>';}
                  else if($_GET['b']=='fail'){
                    echo '<p><b> A problem has occured. </b></p>';}}
                  ?>
                    <div class="line"></div>
                    <p>Choose below the interval at which you want the automatic backup to occur.</p>
                    <p><b>Current Interval:</b> Every <b><?php
                    
                    include_once 'includes/dbh.inc.php';

                    $getQuery2 = "SELECT * from autobackup WHERE bID=(SELECT MAX(bID) FROM autobackup);";
                    $setQuery2 = mysqli_query($conn, $getQuery2);
                    $searchProp = array();
                    
                    while ($row = mysqli_fetch_assoc($setQuery2)) 
                    {
                    
                        $searchProp[] = array(
                      
                          $lastbackup = $row['lastbackup'],
                          $autointerval = $row['autointerval']
                        );  
                       
                    }
                    
                    echo $autointerval;
                    
                    ?></b> days. </p>
                    <div class="line"></div>
                    <div class="col-sm-6 mb-3">
                      <select name="autointerval" class="form-control" required data-error="Please select the interval.">
                      <option value=''></option>
                        <option value='7'>Every 7 days</option>
                        <option value='30'>Every 30 days</option>
                        <option value='60'>Every 60 days</option>
                        <option value='90'>Every 90 days</option>
                      </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Update Interval</button>
                </form>
                </div>
              </div>
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Manual Backup</h4>
                </div>
                <div class="card-body">
                <form action="includes/backup.inc.php" method="POST" >
                  <div class="col-sm-6">
                    <div class="line"></div>
                    <p><b>Note:</b> Pressing "Backup now" will create a backup of the database for downloading.</p>
                    <div class="line"></div>
                    <button type="submit" name="submit" class="btn btn-primary">Backup Now</button>
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