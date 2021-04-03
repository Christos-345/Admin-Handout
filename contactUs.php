<?php
$title = 'Interest List | APM Admin';
include_once 'includes/header.inc.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Contact Us List</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Contact Us List</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addInterest" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add in Interest List</span></a>
                            <form action="includes/contactUsPDF.inc.php" method="POST">
                             <div class="col d-flex justify-content-end mb-2">
                              <button type="submit" name="create_pdf8" class="btn btn-info"><i class="material-icons">&#xE147;</i> Generate report</button>
                            </form>
                        </div>


                    </div>
                </div>
                <table data-page-length="5" id="contentTables" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Contact ID</th>
                            <th>User ID</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include_once "includes/updateWaitList.inc.php"; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Add Modal HTML -->
    <div id="addInterest" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="includes/interestList.inc.php" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title">Add in Interest List</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="first" class="form-control-label">Firstname</label>

                            <input type="text" name="first" id="first" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="last" class="form-control-label">Lastname</label>

                            <input type="text" name="last" id="last" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-control-label">Telephone</label>

                            <input type="number" name="phone" id="phone" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="email" class="form-control-label">Email</label>

                            <input type="email" name="email" id="email" class="form-control ">

                        </div>
                        <div class="form-group">
                            <label for="sbjct" class="form-control-label">Subject</label>

                            <input type="text" name="sbjct" id="sbjct" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="msg" class="form-control-label">Message</label>

                            <textarea name="msg" id="msg" class="form-control width:100%" width rows="5"></textarea>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" name="cancel" class="btn btn-defauls" data-dismiss="modal" value="Cancel">
                        <input type="submit" name="submit" class="btn btn-success" value="Add">
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
                        <h4 class="modal-title">Edit Customer</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Firstname*</label>
                            <input type="text" class="form-control" name="firstname" required>
                        </div>
                        <div class="form-group">
                            <label>Lastname*</label>
                            <input type="text" class="form-control" name="lastname" required>
                        </div>
                        <div class="form-group">
                            <label>Telephone*</label>
                            <input type="text" class="form-control" name="telephone" required>
                        </div>
                        <div class="form-group">
                            <label>Email*</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteInterest" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Customer</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
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