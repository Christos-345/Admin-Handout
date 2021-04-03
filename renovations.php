<?php
$title = 'Renovations | APM Admin';
include_once 'includes/header.inc.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Renovations</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2>Manage <b>Renovations</b></h2>
                        </div>
                        <div class="col-sm-8">
                            <a href="#addRenovation" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Renovation</span></a>
                            <a href="#addRenovationMultimedia" class="btn btn-secondary" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Multimedia</span></a>
                            <form action="includes/revonationsPDF.inc.php" method="POST">
                                <div class="col d-flex justify-content-end mb-2">
                                    <button type="submit" name="create_pdf4" class="btn btn-info"><i class="material-icons">&#xE147;</i> Generate report</button>
                            </form>

                        </div>
                    </div>
                </div>
                <table data-page-length='5' id="contentTables" class="table table-striped table-hover">
                    <thead>
                        <tr>

                            <th>Renovation ID</th>
                            <th>Property ID</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include_once "includes/updateRenovationsTable.inc.php"; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<!-- Add Modal HTML -->
<div id="addRenovation" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="includes/insertRenovation.inc.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add Renovation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="propertyID" class="form-control-label">Property:</label>
                        <select class="form-control" id="propertyID" name="propertyID">
                            <option value=""></option>
                            <!--PHP script to get all property IDs from database-->
                            <?php
                            include_once 'dbh.inc.php';
                            $sql = 'SELECT distinct propertyID FROM properties where category = "Renovation" OR category = "Decoration"; ';
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value = " . $row['propertyID'] . ">" . $row['propertyID'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control rounded-0" name="description" id="description" rows="8" cols="100"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-defauls" data-dismiss="modal" value="Cancel">
                    <input type="submit" name="submitRenovation" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal HTML -->
<div id="editRenovation" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="includes/updateRenovationRow.inc.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add Renovation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="propertyID" class="form-control-label">Property:</label>
                        <select class="form-control" id="propertyID" name="propertyID">
                            <option value="<?php echo $_GET['propertyID'] ?>"><?php echo $_GET['propertyID'] ?></option>
                            <!--PHP script to get all property IDs from database-->
                            <?php
                            include_once 'dbh.inc.php';
                            $sql = 'SELECT distinct propertyID FROM properties where category = "RentLongTerm" OR category = "RentShortTerm" OR category = "Sale"; ';
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value = " . $row['propertyID'] . ">" . $row['propertyID'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control rounded-0" name="description" id="description" rows="8" cols="100"><?php echo $_GET['description'] ?></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="hidden" name="renovationID" value='<?php echo $_GET['renovationID'] ?>'>
                    <button type="submit" name="submitEditRenovation" value="Yes" class="btn btn-info">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add new multimedia Modal HTML -->
<div id="addRenovationMultimedia" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="includes/renovationsMultimedia.inc.php" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title">Add Renovation Multimedia</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="renovationID" class="form-control-label">Renovation:</label>
                        <select class="form-control" id="renovationID" name="renovationID">
                            <option value=""></option>
                            <!--PHP script to get all property IDs from database-->
                            <?php
                            include_once 'dbh.inc.php';
                            $sql = 'SELECT distinct renovationID FROM renovations; ';
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value = " . $row['renovationID'] . ">" . $row['renovationID'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Photos Before(.png, .jpeg) </label>
                        <input type="file" name="file1[]" multiple>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Photos After(.png, .jpeg) </label>
                        <input type="file" name="file2[]" multiple>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Video Before(.mp4)</label>
                        <input type="file" name="file3">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Video After(.mp4)</label>
                        <input type="file" name="file4">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" name="submitReno" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteRenovation" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="includes/deleteRenovation.inc.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Renovation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="hidden" name="renovationID" value='<?php echo $_GET['renovationID'] ?>'>
                    <button type="submit" name="submitDeleteRenovation" value="Yes" class="btn btn-danger">Delete</button>
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