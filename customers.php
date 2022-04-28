<?php
$title = 'Users | The Handout Admin';
include_once 'includes/header.inc.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2>Manage <b>Users</b></h2>
                        </div>
                   
                                <div class="col d-flex justify-content-end mb-2">
                                    <button type="submit" name="create_pdf3" class="btn btn-info"><i class="material-icons">&#xE147;</i> <?php echo $lang['generatereport']?></button>
                                </div>
                            </form>

                    </div>
                </div>
                <table data-page-length="5" id="contentTables" class="table table-striped table-hover">
                    <thead>
                        <tr>

                            <th>User ID</th>
                            <th><?php echo $lang['firstname']?></th>
                            <th><?php echo $lang['lastname']?></th>
                            <th><?php echo $lang['telephone']?></th>
                            <th><?php echo $lang['email']?></th>
                            <th><?php echo $lang['actions']?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include_once "includes/updateCustomerTable.inc.php" ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Edit Modal HTML -->
    <div id="editCustomer" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="includes/updateCustomerRow.inc.php" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $lang['editcustomer']?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label><?php echo $lang['firstname']?>*</label>
                            <input type="text" class="form-control" name="firstname" value='<?php echo $_GET['firstname'] ?>' required>
                        </div>
                        <div class="form-group">
                            <label><?php echo $lang['lastname']?>*</label>
                            <input type="text" class="form-control" name="lastname" value='<?php echo $_GET['lastname'] ?>' required>
                        </div>
                        <div class="form-group">
                            <label><?php echo $lang['telephone']?>*</label>
                            <input type="text" class="form-control" name="telephone" value='<?php echo $_GET['phoneNo'] ?>' required>
                        </div>
                        <div class="form-group">
                            <label><?php echo $lang['email']?>*</label>
                            <input type="email" class="form-control" name="email" value='<?php echo $_GET['email'] ?>' required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="<?php echo $lang['cancel']?>">
                        <input type="hidden" name="userID" value='<?php echo $_GET['userID'] ?>'>
                        <button type="submit" value="Yes" class="btn btn-info"><?php echo $lang['savechanges']?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteCustomer" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="includes/deleteCustomer.inc.php" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $lang['deletecustomer']?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p><?php echo $lang['areyousure']?></p>
                        <p class="text-warning"><small><?php echo $lang['thisaction']?></small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="<?php echo $lang['cancel']?>">
                        <input type="hidden" name="userID" value='<?php echo $_GET['userID'] ?>'>
                        <button type="submit" value="Yes" class="btn btn-danger"><?php echo $lang['delete']?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- Manual Modal HTML -->
     <div id="manualCustomer" class="modal fade">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">              
                   <?php
                   if(isset($_SESSION['lang'])){
                       if($_SESSION['lang'] == "gr"){
                           include_once 'manuals/manualCustomersGreek.html';
                       }else if ($_SESSION['lang'] == "en"){
                           include_once 'manuals/manualCustomersEnglish.html';
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