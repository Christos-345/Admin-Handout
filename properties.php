<?php
$title = 'All Items | The Handout Admin';
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
                <div class="col-sm-4">
                    <h2><?php echo $lang['manage'] ?> <b>All Items</b></h2>
                </div>
                <div class="col-sm-8">

                    <a href="#addProperty" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Item</span></a>
                    &nbsp;&nbsp;<a href="#addPropertyMultimedia" class="btn btn-secondary" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span><?php echo $lang['addnewmultimedia'] ?></span></a>
                    &nbsp;&nbsp;<a href="#generateReport" class="btn btn-info" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span><?php echo $lang['generatereport'] ?></span></a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table data-page-length='5' id="contentTables" class="table table-striped table-hover">
                <thead>
                    <tr>

                        <th>Property ID</th>
                        <th>User ID</th>
                        <th>Type</th>
                        <th>Category</th>
                        <th>Town</th>
                        <th>Area</th>
                        <th>Address</th>
                        <th>Brand</th>
                        <th>State</th>
                        <th>Post Date</th>
                        <th>Last Date</th>
                        <th>Description</th>
                        <th>Active</th>
                        <th>Views</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php include_once "includes/updatePropertiesTable.inc.php"; ?>
                </tbody>
            </table>

        </div>


        <!-- Add Modal HTML -->
        <div id="addProperty" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="includes/insertProperty.inc.php" method="POST" role="form" data-toggle="validator">
                        <div class="modal-header">
                            <h4 class="modal-title">New Item Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['type'] ?> *</label>
                                    <div class="col-sm-6">
                                        <select name="type" class="form-control" required data-error="Please enter this field">>
                                            <option value="Appliance">Appliance</option>
                                            <option value="Furniture">Furniture</option>
                                            <option value="Clothing">Clothing</option>
                                            <option value="Electronics">Electronics</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['category'] ?> *</label>
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" name="category" class="form-control" required data-error="Please enter this field">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Town *</label>
                                    <div class="col-sm-6 mb-3">
                                        
                                        <select name="town" class="form-control" required data-error="Please enter this field">>
                                            <option value="Limassol">Limassol</option>
                                            <option value="Larnaca">Larnaca</option>
                                            <option value="Paphos">Paphos</option>
                                            <option value="Nicosia">Nicosia</option>
                                            <option value="Famagousta">Famagousta</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Area *</label>
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" name="area" class="form-control"  equired data-error="Please enter this field">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Address *</label>
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" name="address" class="form-control"  equired data-error="Please enter this field">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Brand *</label>
                                    <div class="help-block with-errors"></div>
                                    <div class="col-sm-6">
                                        <input type="text" name="brand" class="form-control"  equired data-error="Please enter this field">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Condition *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="state" class="form-control" equired data-error="Please enter this field">
                                            <option value='Brand New'>Brand New</option>
                                            <option value='Like New'>Like new</option>
                                            <option value='Very Good'>Very Good</option>
                                            <option value='Good'>Good</option>
                                            <option value='Acceptable'>Acceptable</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="description"><?php echo $lang['description'] ?></label>
                                    <textarea class="form-control rounded-0" name="description" id="description" rows="5" cols="100"  ></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                
                            </div>
                            
                        </div>
                            
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="submitInsertProperty" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal HTML -->

    <div id="editProperty" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="includes/updatePropertiesRow.inc.php" method="POST" role="form" data-toggle="validator">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Item Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body container">
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Active *</label>
                                    <div class="col-sm-6">
                                        <select name="active" class="form-control" required data-error="Please enter this field">>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['type'] ?> *</label>
                                    <div class="col-sm-6">
                                        <select name="type" class="form-control" required data-error="Please enter this field">>
                                            <option value="<?php echo $_GET['type'] ?>">Selected: <?php echo $_GET['type'] ?> </option>
                                            <option value="Appliance">Appliance</option>
                                            <option value="Furniture">Furniture</option>
                                            <option value="Clothing">Clothing</option>
                                            <option value="Electronics">Electronics</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['category'] ?> *</label>
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" name="category"  value ="<?php echo $_GET['category'] ?>" class="form-control" required data-error="Please enter this field">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Town *</label>
                                    <div class="col-sm-6 mb-3">
                                        
                                        <select name="town" class="form-control" required data-error="Please enter this field">>
                                        <option value="<?php echo $_GET['town'] ?>">Selected: <?php echo $_GET['town'] ?> </option>
                                            <option value="Limassol">Limassol</option>
                                            <option value="Larnaca">Larnaca</option>
                                            <option value="Paphos">Paphos</option>
                                            <option value="Nicosia">Nicosia</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Area *</label>
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" name="area" class="form-control" value="<?php echo $_GET['area'] ?>" required data-error="Please enter this field">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Address *</label>
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" name="address" class="form-control" value="<?php echo $_GET['address'] ?>" required data-error="Please enter this field">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Brand *</label>
                                    <div class="help-block with-errors"></div>
                                    <div class="col-sm-6">
                                        <input type="text" name="brand" class="form-control" value="<?php echo $_GET['brand'] ?>" required data-error="Please enter this field">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">State *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="state" class="form-control" required data-error="<?php echo $lang['pleaseselectnumbedrooms'] ?>.">
                                            <option value='Brand New'>Brand New</option>
                                            <option value='Like New'>Like new</option>
                                            <option value='Very Good'>Very Good</option>
                                            <option value='Good'>Good</option>
                                            <option value='Acceptable'>Acceptable</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="description"><?php echo $lang['description'] ?></label>
                                    <textarea class="form-control rounded-0" name="description" id="description"  rows="5" cols="100"  ><?php echo $_GET['description'] ?></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="hidden" name="propertyID" value='<?php echo $_GET['propertyID'] ?>'>
                        <button type="submitEditProperty" value="Yes" class="btn btn-info"><?php echo $lang['savechanges'] ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Add new multimedia Modal HTML -->
    <div id="addPropertyMultimedia" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="includes/propertiesMultimedia.inc.php" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $lang['addnewmultimedia'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="propertyID" class="form-control-label">Item:</label>
                            <select class="form-control" id="propertyID" name="propertyID">
                                <option value=""></option>
                                <!--PHP script to get all property IDs from database-->
                                <?php
                                include_once 'dbh.inc.php';
                                $sql = 'SELECT distinct propertyID FROM properties; ';
                                $result = mysqli_query($conn, $sql);
                                $resultCheck = mysqli_num_rows($result);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value = " . $row['propertyID'] . ">" . $row['propertyID'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label"><?php echo $lang['photos'] ?></label>
                            <input type="file" class="file-move" name="file1[]" multiple>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" name="submitPro" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteProperty" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="includes/deleteProperty.inc.php" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $lang['deleteproperty'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p><?php echo $lang['areyousure'] ?></p>
                        <p class="text-warning"><small><?php echo $lang['thisaction'] ?></small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="<?php echo $lang['cancel'] ?>">
                        <input type="hidden" name="propertyID" value='<?php echo $_GET['propertyID'] ?>'>
                        <button type="submit" value="Yes" class="btn btn-danger"><?php echo $lang['delete'] ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Generate Report Modal-->

    <div id="generateReport" class="modal fade">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form action="includes/revonationsPDF.inc.php" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $lang['generatereport'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="div container">
                            <div class="row">
                                <div class="col-md-6 mb-2">

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Category</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="type" class="form-control">
                                            <option value='All'>All Categories</option>
                                            <option value='Appliance'>Appliance</option>
                                            <option value='Furniture'>Furniture</option>
                                            <option value='Clothing'>Clothing</option>
                                            <option value='Electronics'>Electronics</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Town</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="town" class="form-control">
                                            <option value='All'>All Towns</option>
                                            <option value='Limassol'>Limassol</option>
                                            <option value='Larnaca'>Larnaca</option>
                                            <option value='Nicosia'>Nicosia</option>
                                            <option value='Paphos'>Paphos</option>
                                            <option value='Famagusta'>Famagusta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Condition</label>
                                    <div class="col-sm-6 mb-3">
                                    <select name="state" class="form-control">
                                            <option value="All">All Conditions</option>
                                            <option value="Brand new">Brand new</option>
                                            <option value="Like new">Like new</option>
                                            <option value="Very good">Very good</option>
                                            <option value="Good">Good</option>
                                            <option value="Acceptable">Acceptable</option>
                                    </select>
                                    </div>
                                </div>
                                </div>


                                

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="<?php echo $lang['cancel'] ?>">
                        <input type="submit" class="btn btn-info" value="Generate">
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