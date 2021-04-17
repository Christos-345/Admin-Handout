<?php
$title = 'Newsletter | APM Admin';
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
        <h1 class="h3 mb-0 text-gray-800"><?php echo $lang['newsletter']?></h1>
        <a href="#manualNewsletter" class="btn btn-primary" data-toggle="modal"><i class="fas fa-question-circle"></i> <span><?php echo $lang['help']?></span></a>
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
                            <a href="#sendNewsletter" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span><?php echo $lang['sendnewsletter']?></span></a>
                            <form action="includes/newsletterPDF.inc.php" method="POST">
                                <div class="col d-flex justify-content-end mb-2">
                                    <button type="submit" name="create_pdf5" class="btn btn-info"><i class="material-icons">&#xE147;</i> <?php echo $lang['generatereport']?></button>
                            </form>

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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="includes/sendNewsletter.inc.php" method = "POST">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo $lang['newnewsletter']?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Subject*</label>
                        <input type="text" class="form-control" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label>Message*</label>
                        <textarea class ="form-control" name="message" id="message" cols="100" rows="10"></textarea>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-defauls" data-dismiss="modal" value="<?php echo $lang['cancel']?>">
                    <input type="submit" name = "submitSendNewsletter" class="btn btn-success" value="<?php echo $lang['send']?>">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteNewsletterUser" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action = "includes/deleteNewsletter.inc.php" method = "POST">
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
                    <input type="hidden" name="entryID" value= '<?php echo $_GET['entryID']?>'>
                    <input type="submit" class="btn btn-danger" value="<?php echo $lang['delete']?>">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Manual Modal HTML -->
<div id="manualNewsletter" class="modal fade">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">              
                   <?php
                   if(isset($_SESSION['lang'])){
                       if($_SESSION['lang'] == "gr"){
                           include_once 'manuals/manualNewsletterGreek.html';
                       }else if ($_SESSION['lang'] == "en"){
                           include_once 'manuals/manualNewsletterEnglish.html';
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