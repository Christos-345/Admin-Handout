<?php
$title = 'Newsletter | APM Admin';
include_once 'includes/header.inc.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $lang['newsletter']?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2><?php echo $lang['manage']?> <b><?php echo $lang['newsletter']?></b></h2>
                        </div>
                        <div class="col-sm-8">
                            <a href="#sendNewsletter" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span><?php echo $lang['sendnewsletter']?></span></a>
                            <form action="includes/newsletterPDF.inc.php" method="POST">
                                <div class="col d-flex justify-content-end mb-2">
                                    <button type="submit" name="create_pdf5" class="btn btn-info"><i class="material-icons">&#xE147;</i> <?php echo $lang['generatereport']?></button>
                            </form>

                        </div>
                    </div>
                </div>
                <table data-page-length='5' id="contentTables" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Entry ID</th>
                            <th><?php echo $lang['email']?></th>
                            <th><?php echo $lang['actions']?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include_once "includes/updateNewsletterTable.inc.php"; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!-- Add Modal HTML -->
<div id="sendNewsletter" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo $lang['newnewsletter']?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label><?php echo $lang['firstname']?>*</label>
                        <input type="text" class="form-control" name="subject" required>
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
                    <div class="form-group">
                        <label><?php echo $lang['password']?>*</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <label><?php echo $lang['repeatpassword']?>*</label>
                        <input type="password" class="form-control" name="Repassword" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-defauls" data-dismiss="modal" value="<?php echo $lang['cancel']?>">
                    <input type="submit" class="btn btn-success" value="<?php echo $lang['send']?>">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteNewsletterUser" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo $lang['deleteuser']?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p><?php echo $lang['areyousure']?></p>
                    <p class="text-warning"><small><?php echo $lang['thisaction']?></small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="<?php echo $lang['cancel']?>">
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