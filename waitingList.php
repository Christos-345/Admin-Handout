<?php
$title = 'Interest List | APM Admin';
include_once 'includes/header.inc.php';
?>
<style>
.btn-success{
    height: 38px;
}
</style>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $lang['manualcontactlist']?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2><?php echo $lang['manage']?> <b><?php echo $lang['manualcontactlist']?></b></h2>
                        </div>
                            <a href="#addInterest" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span><?php echo $lang['addininterestlist']?></span></a>
                            <form action="includes/waitingListPDF.inc.php" method="POST">
                             <div class="col d-flex justify-content-end mb-2">
                              <button type="submit" name="create_pdf7" class="btn btn-info"><i class="material-icons">&#xE147;</i> <?php echo $lang['generatereport']?></button>
                            </form>
                        </div>


                    </div>
                </div>
                <table data-page-length="5" id="contentTables" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Waiting List ID</th>
                            <th><?php echo $lang['firstname']?></th>
                            <th><?php echo $lang['lastname']?></th>
                            <th><?php echo $lang['telephone']?></th>
                            <th><?php echo $lang['email']?></th>
                            <th><?php echo $lang['subject']?></th>
                            <th><?php echo $lang['message']?></th>
                            <th><?php echo $lang['actions']?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include_once "includes/updateMWaitList.inc.php"; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Add Modal HTML -->
    <div id="addInterest" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="includes/interestList.inc.php" method="POST" data-toggle="validator">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $lang['addininterestlist']?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="first" class="form-control-label"><?php echo $lang['firstname']?>*</label>

                            <input type="text" name="first" id="first" data-error = "<?php echo $lang['entername']?>" class="form-control" required>
                            <div class="help-block with-errors"></div>

                        </div>
                        <div class="form-group">
                            <label for="last" class="form-control-label"><?php echo $lang['lastname']?>*</label>

                            <input type="text" name="last" id="last" data-error = "<?php echo $lang['lastname']?>" class="form-control" required>
                            <div class="help-block with-errors"></div>

                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-control-label"><?php echo $lang['telephone']?>*</label>

                            <input type="number" name="phone" id="phone" data-minlength="8" 
                              data-minlength-error = "<?php echo $lang['eightdigits']?>" data-error = "<?php echo $lang['enterphone']?>" class="form-control" required>
                              <div class="help-block with-errors"></div>

                        </div>
                        <div class="form-group">
                            <label for="email" class="form-control-label"><?php echo $lang['email']?></label>

                            <input type="email" name="email" id="email" class="form-control" data-error = "<?php $lang['validemail']?>">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="sbjct" class="form-control-label"><?php echo $lang['subject']?>*</label>

                            <input type="text" name="sbjct" id="sbjct" class="form-control" required data-error = "<?php echo $lang['subj']?>">
                            <div class="help-block with-errors"></div>

                        </div>
                        <div class="form-group">
                            <label for="msg" class="form-control-label"><?php echo $lang['message']?></label>

                            <textarea name="msg" id="msg"  
                            class="form-control width:100%" width rows="5" ></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" name="cancel" class="btn btn-defauls" data-dismiss="modal" value="<?php echo $lang['cancel']?>">
                        <input type="submit" name="submit" class="btn btn-success" value="<?php echo $lang['add']?>">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal HTML -->
    <div id="editInterest" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $lang['editcustomer']?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label><?php echo $lang['firstname']?>*</label>
                            <input type="text" class="form-control" name="firstname" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo $lang['lastname']?>*</label>
                            <input type="text" class="form-control" name="lastname" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo $lang['telephone']?>*</label>
                            <input type="text" class="form-control" name="telephone" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo $lang['email']?>*</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="<?php echo $lang['cancel']?>">
                        <input type="submit" class="btn btn-success" value="<?php echo $lang['save']?>">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteInterest" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action = "includes/deleteInterested.inc.php" method = "POST">
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
                        <input type="hidden" name="MWaitListID" value= "<?php echo $_GET['MWaitListID']?>">
                        <input type="submit" class="btn btn-danger" value="<?php echo $lang['delete']?>">
                    </div>
                </form>
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