<?php
$title = 'Admins | The Handout Admin';
include_once 'includes/header.inc.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">
<style>
.btn-success{
    height: 38px;
}
</style>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $lang['users-admins']?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2><?php echo $lang['manage']?> <b><?php echo $lang['adminsss']?></b></h2>
                        </div>
                            <a href="#addAdmin" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span><?php echo $lang['add new admin']?></span></a>

                            <form action="includes/adminsPDF.inc.php" method="POST">
                                <div class="col d-flex justify-content-end mb-2">
                                    <button type="submit" name="create_pdf2" class="btn btn-info" ><i class="material-icons">&#xE147;</i> <?php echo $lang['generatereport']?></button>
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
                        <form action="includes/deleteAdmin.inc.php" method="POST">
                            <?php include_once "includes/updateAdminTable.inc.php"; ?>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Add Modal HTML -->
    <div id="addAdmin" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">

                <body>
                    <form action="includes/insertAdmin.inc.php" method="POST" data-toggle="validator">
                        <div class="modal-header">
                            <h4 class="modal-title"><?php echo $lang['add admin']?></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label><?php echo $lang['firstname']?>*</label>
                                <input type="text" class="form-control" name="first" required data-error = "<?php echo $lang['entername']?>">
                                <div class="help-block with-errors"></div>

                            </div>
                            <div class="form-group">
                                <label><?php echo $lang['lastname']?>*</label>
                                <input type="text" class="form-control" name="last" required data-error = "<?php echo $lang['entersurname']?>"> 
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label><?php echo $lang['telephone']?>*</label>
                                <input type="number" class="form-control" name="phone" data-minlength="8" required data-error = "<?php echo $lang['enterphone']?>"
                                       data-minlength-error = "<?php echo $lang['eightdigits']?>">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label><?php echo $lang['email']?>*</label>
                                <input type="email" class="form-control" name="email" required data-error = "<?php echo $lang['validemail']?>">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label><?php echo $lang['password']?>*</label>
                                <input type="password" class="form-control" id = "password" data-minlength="6" name="password" data-error= "<?php echo $lang['apassword']?>"
                                       required data-minlength-error = "<?php echo $lang['sixchars']?>">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label><?php echo $lang['repeatpassword']?>*</label>
                                <input type="password" class="form-control" name="Repassword" data-match="#password" data-error = "<?php echo $lang['arpassword']?>"
                                       required data-match-error = "<?php echo $lang['errpassword']?>">
                                <div class="help-block with-errors"></div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-defauls" name="cancel" data-dismiss="modal" value="<?php echo $lang['cancel']?>">
                            <input type="submit" class="btn btn-success" name="submit" value="<?php echo $lang['add']?>">
                        </div>
                    </form>
                </body>
            </div>
        </div>
    </div>

    <!-- Edit Modal HTML -->
    <div id="editAdmin" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="includes/updateAdminRow.inc.php" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $lang['editadmin']?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label><?php echo $lang['firstname']?>*</label>
                            <input type="text" class="form-control" name="firstname" value= '<?php echo $_GET['firstname']?>' required>
                        </div>
                        <div class="form-group">
                            <label><?php echo $lang['lastname']?>*</label>
                            <input type="text" class="form-control" name="lastname" value= '<?php echo $_GET['lastname']?>' required>
                        </div>
                        <div class="form-group">
                            <label><?php echo $lang['telephone']?>*</label>
                            <input type="text" class="form-control" name="telephone" value= '<?php echo $_GET['phoneNo']?>' required>
                        </div>
                        <div class="form-group">
                            <label><?php echo $lang['email']?>*</label>
                            <input type="email" class="form-control" name="email" value= '<?php echo $_GET['email']?>' required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="hidden" name="userID" value= '<?php echo $_GET['userID']?>'>
                        <button type="submit" value="Yes" class="btn btn-info"><?php echo $lang['savechanges']?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteAdmin" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="includes/deleteAdmin.inc.php" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $lang['deleteadmin']?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p><?php echo $lang['areyousure']?></p>
                        <p class="text-warning"><small><?php echo $lang['thisaction']?></small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="hidden" name="userID" value= '<?php echo $_GET['userID']?>'>
                        <button type="submit" value="Yes" class="btn btn-danger"><?php echo $lang['delete']?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Manual Modal HTML -->
    <div id="manualAdmin" class="modal fade">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">              
                   <?php
                   if(isset($_SESSION['lang'])){
                       if($_SESSION['lang'] == "gr"){
                           include_once 'manuals/manualAdminsGreek.html';
                       }else if ($_SESSION['lang'] == "en"){
                           include_once 'manuals/manualAdminsEnglish.html';
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