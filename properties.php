<?php
$title = 'Properties | APM Admin';
include_once 'includes/header.inc.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Properties</h1>
    </div>

    <!-- Content Row -->


    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-4">
                    <h2>Manage <b>Properties</b></h2>
                </div>
                <div class="col-sm-8">

                    <a href="#addProperty" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Property</span></a>
                    <a href="#editProperty" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Multimedia</span></a>
                    <a href="#deleteProperty" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                    <form action="includes/propertiesPDF.inc.php" method="POST">
                        <div class="col d-flex justify-content-end mb-2">
                            <button type="submit" name="create_pdf1" class="btn btn-primary">Generate report</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table data-page-length='5' id="propertiesTable" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </td>
                        <th>Property ID</th>
                        <th>Type</th>
                        <th>Category</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Region</th>
                        <th>Area</th>
                        <th>Address</th>
                        <th>Bedrooms</th>
                        <th>Bathrooms</th>
                        <th>Parking</th>
                        <th>Heating</th>
                        <th>Furniture</th>
                        <th>Floor(s)</th>
                        <th>Date of Build</th>
                        <th>Available From</th>
                        <th>Price Per Sqm</th>
                        <th>Total Price</th>
                        <th>Actions</th>
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
                        <h4 class="modal-title">Add Property Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Type *</label>
                                    <div class="col-sm-6">
                                        <select name="type" class="form-control" required data-error="Please select type.">>
                                            <option value=""></option>
                                            <option value="house">House</option>
                                            <option value="flat">Flat</option>

                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Category *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="category" class="form-control" required data-error="Please select category.">
                                            <option value=""></option>
                                            <option value="Sale">For sale</option>
                                            <option value="RentLongTerm">For rent long - term</option>
                                            <option value="RentShortTerm">For rent short - term</option>
                                            <option value="Decoration">For Decoration</option>
                                            <option value="Renovation">For Renovation</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Country *</label>
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" name="country" class="form-control" required data-error="Please enter a country.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">City *</label>
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" name="city" class="form-control" required data-error="Please enter a city.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Region *</label>
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" name="region" class="form-control" required data-error="Please enter a region.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Address *</label>
                                    <div class="help-block with-errors"></div>
                                    <div class="col-sm-6">
                                        <input type="text" name="address" class="form-control" requireddata-error="Please enter an address.">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Bedrooms *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="bedrooms" class="form-control" required data-error="Please select number of bedrooms.">
                                            <option value=''></option>
                                            <option value='0'>0</option>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option>
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Bathrooms *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="bathrooms" class="form-control" required data-error="Please select number of bathrooms.">
                                            <option value=''></option>
                                            <option value='0'>0</option>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option>
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Furniture *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="furniture" class="form-control" required required data-error="Please select if the property has furniture or not.">
                                            <option value=''></option>
                                            <option value='yes'>Yes</option>
                                            <option value='no'>No</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Parking *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="parking" class="form-control" required required data-error="Please select if the property has parking or not.">
                                            <option value=''></option>
                                            <option value='yes'>Yes</option>
                                            <option value='no'>No</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Floor *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="floor" class="form-control" required data-error="Please select floor">
                                            <option value=''></option>
                                            <option value='0'>0</option>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option>
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                            <option value='11'>11</option>
                                            <option value='12'>12</option>
                                            <option value='13'>13</option>
                                            <option value='14'>14</option>
                                            <option value='15'>15</option>
                                            <option value='16'>16</option>
                                            <option value='17'>17</option>
                                            <option value='18'>18</option>
                                            <option value='19'>19</option>
                                            <option value='20'>20</option>
                                            <option value='21'>21</option>
                                            <option value='22'>22</option>
                                            <option value='23'>23</option>
                                            <option value='24'>24</option>
                                            <option value='25'>25</option>
                                            <option value='26'>26</option>
                                            <option value='27'>27</option>
                                            <option value='28'>28</option>
                                            <option value='29'>29</option>
                                            <option value='30'>30</option>
                                            <option value='31'>31</option>
                                            <option value='32'>32</option>
                                            <option value='33'>33</option>
                                            <option value='34'>34</option>
                                            <option value='35'>35</option>
                                            <option value='36'>36</option>
                                            <option value='37'>37</option>
                                            <option value='38'>38</option>
                                            <option value='39'>39</option>
                                            <option value='40'>40</option>
                                            <option value='41'>41</option>
                                            <option value='42'>42</option>
                                            <option value='43'>43</option>
                                            <option value='44'>44</option>
                                            <option value='45'>45</option>
                                            <option value='46'>46</option>
                                            <option value='47'>47</option>
                                            <option value='48'>48</option>
                                            <option value='49'>49</option>
                                            <option value='50'>50</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Heating *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="heating" class="form-control" required data-error="Please select if the property has heating or not.">
                                            <option value=''></option>
                                            <option value='yes'>Yes</option>
                                            <option value='no'>No</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Date of build *</label>
                                    <div class="col-sm-6  mb-3">
                                        <div class="row">
                                            <input type="date" class="form-control" name="dateOfBuild" required data-error="Please enter year of build.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Available from *</label>
                                    <div class="col-sm-6  mb-3">
                                        <div class="row">
                                            <input type="date" class="form-control" name="availableFrom" required data-error="Please enter date available from.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Square meters*</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="sqm" class="form-control" required data-error="Please enter square meters.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Price per square meter *</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="pricePerSqrM" class="form-control" required data-error="Please enter price per square meter.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Total Price *</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="totalPrice" class="form-control" required data-error="Please enter total price.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control rounded-0" name="description" id="description" rows="5" cols="100"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="amenities">Amenities</label>
                                <textarea class="form-control rounded-0" name="amenities" id="amenities" rows="5" cols="100"></textarea>
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

    <!-- Edit Modal HTML -->
    <div id="editProperty" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteProperty" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee</h4>
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