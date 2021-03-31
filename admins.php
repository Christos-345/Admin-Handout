<?php
$title = 'Admins | APM Admin';
include_once 'includes/header.inc.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users - Admins</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2>Manage <b>Admins</b></h2>
                        </div>
                        <div class="col-sm-8">

                            <a href="#addAdmin" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Admin</span></a>

                            <a href="#deleteAdmin" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                            <form action="includes/propertiesPDF.inc.php" method="POST">
                                <div class="col d-flex justify-content-end mb-2">
                                    <button type="submit" name="create_pdf1" class="btn btn-primary"><i class="material-icons">&#xE147;</i> Generate report</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <table data-page-length="5" id="contentTables" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="includes/deleteAdmin.inc.php" onsubmit="return confirm('Are you sure you want to delete this administrator');" method="POST">
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
                    <form action="includes/insertAdmin.inc.php" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Admin</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Firstname*</label>
                                <input type="text" class="form-control" name="first">
                            </div>
                            <div class="form-group">
                                <label>Lastname*</label>
                                <input type="text" class="form-control" name="last">
                            </div>
                            <div class="form-group">
                                <label>Telephone*</label>
                                <input type="number" class="form-control" name="phone">
                            </div>
                            <div class="form-group">
                                <label>Email*</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label>Password*</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label>Repeat Password*</label>
                                <input type="password" class="form-control" name="Repassword">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-defauls" name="cancel" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-success" name="submit" value="Add">
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
                        <h4 class="modal-title">Edit Admin</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Firstname*</label>
                            <input type="text" class="form-control" name="firstname" value= '<?php echo $_GET['firstname']?>' required>
                        </div>
                        <div class="form-group">
                            <label>Lastname*</label>
                            <input type="text" class="form-control" name="lastname" value= '<?php echo $_GET['lastname']?>' required>
                        </div>
                        <div class="form-group">
                            <label>Telephone*</label>
                            <input type="text" class="form-control" name="telephone" value= '<?php echo $_GET['phoneNo']?>' required>
                        </div>
                        <div class="form-group">
                            <label>Email*</label>
                            <input type="email" class="form-control" name="email" value= '<?php echo $_GET['email']?>' required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="hidden" name="userID" value= '<?php echo $_GET['userID']?>'>
                        <button type="submit" value="Yes" class="btn btn-info">Save Changes</button>
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
                        <h4 class="modal-title">Delete Admin</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="hidden" name="userID" value= '<?php echo $_GET['userID']?>'>
                        <button type="submit" value="Yes" class="btn btn-danger">Delete</button>
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