<?php
$title = 'Renovations| APM Admin';
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
                            <a href="#generateReport" class="btn btn-info" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Generate Report</span></a>
                            <a href="#addRenovation" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Renovation</span></a>
                            <a href="#addRenovationMultimedia" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Multimedia</span></a>
                            <a href="#deleteRenovation" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </td>
                            <th>Property ID</th>
                            <th>Renovation ID</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox5" name="options[]" value="1">
                                    <label for="checkbox5"></label>
                                </span>
                            </td>
                            <td>User ID</td>
                            <td>Firstname</td>
                            <td>Lastname</td>



                            <td>
                                <a href="#editRenovation" class="edit" data-toggle="modal"><i class="fas fa-edit " data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="#deleteRenovation" class="delete" data-toggle="modal"><i class="far fa-trash-alt" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Modal HTML -->
    <div id="addRenovation" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Add Renovation</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Property ID*</label>
                            <select name="propertyID" id="propertyID" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control rounded-0" name="description" id="description" rows="8" cols="100"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-defauls" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal HTML -->
    <div id="editRenovation" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Renovation Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Property ID*</label>
                            <select name="propertyID" id="propertyID" class="form-control">
                                <option value=""></option>
                                <option value="1">1</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control rounded-0" name="description" id="description" rows="8" cols="100"></textarea>
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
    <div id="deleteRenovation" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
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