<?php
$title = 'Properties | APM Admin';
include_once 'includes/header.inc.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $lang['properties'] ?></h1>
    </div>

    <!-- Content Row -->


    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-4">
                    <h2><?php echo $lang['manage'] ?> <b><?php echo $lang['properties'] ?></b></h2>
                </div>
                <div class="col-sm-8">

                    <a href="#addProperty" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span><?php echo $lang['addnewproperty'] ?></span></a>
                    <a href="#addPropertyMultimedia" class="btn btn-secondary" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span><?php echo $lang['addnewmultimedia'] ?></span></a>
                    <a href="#generateReport" class="btn btn-info" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span><?php echo $lang['generatereport'] ?></span></a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table data-page-length='5' id="contentTables" class="table table-striped table-hover">
                <thead>
                    <tr>

                        <th>Property ID</th>
                        <th><?php echo $lang['type'] ?></th>
                        <th><?php echo $lang['category'] ?></th>
                        <th><?php echo $lang['country'] ?></th>
                        <th><?php echo $lang['city'] ?></th>
                        <th><?php echo $lang['region'] ?></th>
                        <th><?php echo $lang['area'] ?></th>
                        <th><?php echo $lang['address'] ?></th>
                        <th><?php echo $lang['bedrooms'] ?></th>
                        <th><?php echo $lang['bathrooms'] ?></th>
                        <th><?php echo $lang['parking'] ?></th>
                        <th><?php echo $lang['heating'] ?></th>
                        <th><?php echo $lang['furniture'] ?></th>
                        <th><?php echo $lang['floors'] ?></th>
                        <th><?php echo $lang['dateofbuild'] ?></th>
                        <th><?php echo $lang['availablefrom'] ?></th>
                        <th><?php echo $lang['pricepersquare'] ?></th>
                        <th><?php echo $lang['totalprice'] ?></th>
                        <th><?php echo $lang['actions'] ?></th>
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
                            <h4 class="modal-title"><?php echo $lang['addpropertydetails'] ?></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['type'] ?> *</label>
                                        <div class="col-sm-6">
                                            <select name="type" class="form-control" required data-error="<?php echo $lang['pleaseselect'] ?>">>
                                                <option value=""></option>
                                                <option value="House"><?php echo $lang['house'] ?></option>
                                                <option value="Flat"><?php echo $lang['flat'] ?></option>

                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['category'] ?> *</label>
                                        <div class="col-sm-6 mb-3">
                                            <select name="category" class="form-control" required data-error="<?php echo $lang['pleaseselectcategory'] ?>.">
                                                <option value=""></option>
                                                <option value="Sale"><?php echo $lang['sale'] ?></option>
                                                <option value="RentLongTerm"><?php echo $lang['longtermrent'] ?></option>
                                                <option value="RentShortTerm"><?php echo $lang['shorttermrent'] ?></option>
                                                <option value="Decoration"><?php echo $lang['decoration'] ?></option>
                                                <option value="Renovation"><?php echo $lang['renovation'] ?></option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['country'] ?> *</label>
                                        <div class="col-sm-6 mb-3">
                                            <input type="text" name="country" class="form-control" required data-error="<?php echo $lang['pleaseentercountry'] ?>.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['city'] ?> *</label>
                                        <div class="col-sm-6 mb-3">
                                            <input type="text" name="city" class="form-control" required data-error="<?php echo $lang['pleaseentercity'] ?>.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['region'] ?> *</label>
                                        <div class="col-sm-6 mb-3">
                                            <input type="text" name="region" class="form-control" required data-error="<?php echo $lang['pleaseenterregion'] ?>">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['address'] ?> *</label>
                                        <div class="help-block with-errors"></div>
                                        <div class="col-sm-6">
                                            <input type="text" name="address" class="form-control" requireddata-error="<?php echo $lang['pleaseenteraddress'] ?>.">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['bedrooms'] ?> *</label>
                                        <div class="col-sm-6 mb-3">
                                            <select name="bedrooms" class="form-control" required data-error="<?php echo $lang['pleaseselectnumbedrooms'] ?>">
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
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['bathrooms'] ?> *</label>
                                        <div class="col-sm-6 mb-3">
                                            <select name="bathrooms" class="form-control" required data-error="<?php echo $lang['pleaseselectnumbathrooms'] ?>.">
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
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['furniture'] ?> *</label>
                                        <div class="col-sm-6 mb-3">
                                            <select name="furniture" class="form-control" required required data-error="<?php echo $lang['pleaseselectfurniture'] ?>.">
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
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['parking'] ?> *</label>
                                        <div class="col-sm-6 mb-3">
                                            <select name="parking" class="form-control" required required data-error="<?php echo $lang['pleaseselectparking'] ?>.">
                                                <option value=''></option>
                                                <option value='yes'>Yes</option>
                                                <option value='no'>No</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['floor'] ?> *</label>
                                        <div class="col-sm-6 mb-3">
                                            <select name="floor" class="form-control" required data-error="<?php echo $lang['pleaseselectfloor'] ?>">
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
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['heating'] ?> *</label>
                                        <div class="col-sm-6 mb-3">
                                            <select name="heating" class="form-control" required data-error="<?php echo $lang['pleaseselectheating'] ?>.">
                                                <option value=''></option>
                                                <option value='yes'>Yes</option>
                                                <option value='no'>No</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['dateofbuild'] ?> *</label>
                                        <div class="col-sm-6  mb-3">
                                            <div class="row">
                                                <input type="date" class="form-control" name="dateOfBuild" required data-error="<?php echo $lang['pleaseenteryear'] ?>.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['availablefrom'] ?>*</label>
                                        <div class="col-sm-6  mb-3">
                                            <div class="row">
                                                <input type="date" class="form-control" name="availableFrom" required data-error="<?php echo $lang['pleaseenterdate'] ?>.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['squaremeters'] ?>*</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="sqm" class="form-control" required data-error="<?php echo $lang['pleaseentersquare'] ?>.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['pricepersquaremeter'] ?>*</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="pricePerSqrM" class="form-control" required data-error="<?php echo $lang['pleaseentersquareprice'] ?>.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 form-control-label text-right"><?php echo $lang['totalprice'] ?>*</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="totalPrice" class="form-control" required data-error="<?php echo $lang['pleaseenterprice'] ?>.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 form-control-label text-right">Display to carousel*</label>
                                        <div class="col-sm-6">
                                            <select name="displayCarousel" class="form-control" required data-error="Please select if to display to home carousel.">
                                                <option value=''></option>
                                                <option value='yes'>Yes</option>
                                                <option value='no'>No</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="description"><?php echo $lang['description'] ?></label>
                                    <textarea class="form-control rounded-0" name="description" id="description" rows="5" cols="100"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="amenities"><?php echo $lang['amenities'] ?></label>
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
    </div>

    <!-- Edit Modal HTML -->

    <div id="editProperty" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="includes/updatePropertiesRow.inc.php" method="POST" role="form" data-toggle="validator">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $lang['editpropertydetails'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['type'] ?> *</label>
                                    <div class="col-sm-6">
                                        <select name="type" class="form-control" required data-error="<?php echo $lang['pleaseselect'] ?>.">>
                                            <option value="<?php echo $_GET['type'] ?>"><?php echo $_GET['type'] ?></option>
                                            <option value="House"><?php echo $lang['house'] ?></option>
                                            <option value="Flat"><?php echo $lang['flat'] ?></option>

                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['category'] ?> *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="category" class="form-control" required data-error="<?php echo $lang['pleaseselectcategory'] ?>.">
                                            <option value="<?php echo $_GET['category'] ?>"><?php echo $_GET['category'] ?></option>
                                            <option value="Sale"><?php echo $lang['sale'] ?></option>
                                            <option value="RentLongTerm"><?php echo $lang['longtermrent'] ?></option>
                                            <option value="RentShortTerm"><?php echo $lang['shorttermrent'] ?></option>
                                            <option value="Decoration"><?php echo $lang['decoration'] ?></option>
                                            <option value="Renovation"><?php echo $lang['renovation'] ?></option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['country'] ?> *</label>
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" name="country" class="form-control" value="<?php echo $_GET['country'] ?>" required data-error="<?php echo $lang['pleaseentercountry'] ?>.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['city'] ?> *</label>
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" name="city" class="form-control" value="<?php echo $_GET['town'] ?>" required data-error="<?php echo $lang['pleaseentercity'] ?>.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['region'] ?> *</label>
                                    <div class="col-sm-6 mb-3">
                                        <input type="text" name="region" class="form-control" value="<?php echo $_GET['area'] ?>" required data-error="<?php echo $lang['pleaseenterregion'] ?>.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['address'] ?> *</label>
                                    <div class="help-block with-errors"></div>
                                    <div class="col-sm-6">
                                        <input type="text" name="address" class="form-control" value="<?php echo $_GET['address'] ?>" required data-error="<?php echo $lang['pleaseenteraddreess'] ?>.">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['bedrooms'] ?> *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="bedrooms" class="form-control" required data-error="<?php echo $lang['pleaseselectnumbedrooms'] ?>.">
                                            <option value='<?php echo $_GET['bedrooms'] ?>'><?php echo $_GET['bedrooms'] ?></option>
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
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['bathrooms'] ?> *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="bathrooms" class="form-control" required data-error="<?php echo $lang['pleaseselectnumbathrooms'] ?>.">
                                            <option value='<?php echo $_GET['bathrooms'] ?>'><?php echo $_GET['bathrooms'] ?></option>
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
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['furniture'] ?> *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="furniture" class="form-control" required required data-error="<?php echo $lang['pleaseselectfurniture'] ?>.">
                                            <option value='<?php echo $_GET['furniture'] ?>'><?php echo $_GET['furniture'] ?></option>
                                            <option value='yes'>Yes</option>
                                            <option value='no'>No</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['parking'] ?> *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="parking" class="form-control" required required data-error="<?php echo $lang['pleaseselectparking'] ?>.">
                                            <option value='<?php echo $_GET['parking'] ?>'><?php echo $_GET['parking'] ?></option>
                                            <option value='yes'>Yes</option>
                                            <option value='no'>No</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['floor'] ?> *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="floor" class="form-control" required data-error="<?php echo $lang['pleaseselectfloor'] ?>">
                                            <option value='<?php echo $_GET['floor'] ?>'><?php echo $_GET['floor'] ?></option>
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
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['heating'] ?> *</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="heating" class="form-control" required data-error="<?php echo $lang['pleaseselectheating'] ?>.">
                                            <option value='<?php echo $_GET['heating'] ?>'><?php echo $_GET['heating'] ?></option>
                                            <option value='yes'>Yes</option>
                                            <option value='no'>No</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['dateofbuild'] ?>*</label>
                                    <div class="col-sm-6  mb-3">
                                        <div class="row">
                                            <input type="date" class="form-control" name="dateOfBuild" value="<?php echo $_GET['dateOfBuild'] ?>" required data-error="<?php echo $lang['pleaseeneteryear'] ?>.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['availablefrom'] ?>*</label>
                                    <div class="col-sm-6  mb-3">
                                        <div class="row">
                                            <input type="date" class="form-control" name="availableFrom" value="<?php echo $_GET['availableFrom'] ?>" required data-error="<?php echo $lang['pleaseenterdate'] ?>.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['squaremeters'] ?>*</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="sqm" class="form-control" value="<?php echo $_GET['squarem'] ?>" required data-error="<?php echo $lang['pleaseentersquare'] ?>.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['pricepersquaremeter'] ?>*</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="pricePerSqrM" class="form-control" value="<?php echo $_GET['pricePerSqm'] ?>" required data-error="<?php echo $lang['pleaseentersquareprice'] ?>.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right"><?php echo $lang['totalprice'] ?>*</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="totalPrice" class="form-control" value="<?php echo $_GET['totalPrice'] ?>" required data-error="<?php echo $lang['pleaseenterprice'] ?>.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Display to carousel*</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="totalPrice" class="form-control" value="<?php echo $_GET['displayCarousel'] ?>" required data-error="Please select to display to home carousel.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="description"><?php echo $lang['description'] ?></label>
                                <textarea class="form-control rounded-0" name="description" id="description" rows="5" cols="100"><?php echo $_GET['description'] ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="amenities"><?php echo $lang['amenities'] ?></label>
                                <textarea class="form-control rounded-0" name="amenities" id="amenities" rows="5" cols="100"><?php echo $_GET['amenities'] ?></textarea>
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
                        <h4 class="modal-title"><?php echo $lang['addpropertymultimedia'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="propertyID" class="form-control-label"><?php echo $lang['property1'] ?></label>
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
                            <input type="file" name="file[]" multiple>
                        </div>
                        <div class="form-group">
<<<<<<< Updated upstream
                            <label class="form-control-label"><?php echo $lang['video'] ?></label>
                            <input type="file" name="file[]" multiple>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label"><?php echo $lang['3dphoto'] ?></label>
                            <input type="file" name="file[]" multiple>
=======
                            <label class="form-control-label">3D Photos(.jpg)</label>
                            <input type="file" name="file2[]" multiple>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Video(.mp4)</label>
                            <input type="file" name="file3" multiple>
>>>>>>> Stashed changes
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
                <form action="includes/generateReport.inc.php" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $lang['generatereport'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="div container">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="Type"><?php echo $lang['type'] ?></label>
                                        <select class="form-control form-control-lg form-control-a" id="Type" name="type">
                                            <option value="allTypes"><?php echo $lang['alltypes'] ?></option>
                                            <!--PHP script to get all cities from database-->
                                            <?php
                                            include_once 'dbh.inc.php';
                                            $sql = 'SELECT distinct type FROM properties where category = "RentLongTerm" OR category = "RentShortTerm" OR category = "Sale"; ';
                                            $result = mysqli_query($conn, $sql);
                                            $resultCheck = mysqli_num_rows($result);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value = " . $row['type'] . ">" . $row['type'] . "</option>";
                                            }
                                            ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="Category"><?php echo $lang['category'] ?></label>
                                        <select class="form-control form-control-lg form-control-a" id="Category" name="category" onchange="setPriceRange()">
                                            <option value="allCategories"><?php echo $lang['allcategory'] ?></option>
                                            <option value="forRentShort"><?php echo $lang['shorttermrent'] ?></option>
                                            <option value="forRentLong"><?php echo $lang['longtermrent'] ?></option>
                                            <option value="forSale"><?php echo $lang['sale'] ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="city"><?php echo $lang['country'] ?></label>
                                        <select class="form-control form-control-lg form-control-a" id="country" name="country">
                                            <option value="allCountries"><?php echo $lang['allcountries'] ?></option>
                                            <!--PHP script to get all cities from database-->
                                            <?php
                                            include_once 'dbh.inc.php';
                                            $sql = 'SELECT distinct country FROM properties where category = "RentLongTerm" OR category = "RentShortTerm" OR category = "Sale"; ';
                                            $result = mysqli_query($conn, $sql);
                                            $resultCheck = mysqli_num_rows($result);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value = " . $row['country'] . ">" . $row['country'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <select class="form-control form-control-lg form-control-a" id="city" name="city">
                                            <option value="allCities"><?php echo $lang['allcities'] ?></option>
                                            <!--PHP script to get all cities from database-->
                                            <?php
                                            include_once 'dbh.inc.php';
                                            $sql = 'SELECT distinct town FROM properties where category = "RentLongTerm" OR category = "RentShortTerm" OR category = "Sale"; ';
                                            $result = mysqli_query($conn, $sql);
                                            $resultCheck = mysqli_num_rows($result);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value = " . $row['town'] . ">" . $row['town'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="region"><?php echo $lang['region'] ?></label>
                                        <select class="form-control form-control-lg form-control-a" id="region" name="region">
                                            <option value="allRegions"><?php echo $lang['allregions'] ?></option>
                                            <!--PHP script to get all cities from database-->
                                            <?php
                                            include_once 'dbh.inc.php';
                                            $sql = 'SELECT distinct area FROM properties where category = "RentLongTerm" OR category = "RentShortTerm" OR category = "Sale"; ';
                                            $result = mysqli_query($conn, $sql);
                                            $resultCheck = mysqli_num_rows($result);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value = " . $row['area'] . ">" . $row['area'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="bedrooms"><?php echo $lang['bedrooms'] ?></label>
                                        <select class="form-control form-control-lg form-control-a" id="bedrooms" name="bedrooms">
                                            <option value='any'>Any</option>
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
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <label for="bathrooms"><?php echo $lang['bathrooms'] ?></label>
                                        <select class="form-control form-control-lg form-control-a" id="bathrooms" name="bathrooms">
                                            <option value='any'>Any</option>
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
                                    </div>
                                </div>
                                <div class="col-md-6   mb-2">
                                    <label for="features"><?php echo $lang['features'] ?></label>
                                    <div class="form-group" id='features' name="features">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="parking" name="parking" value="parking">
                                            <label class="form-check-label" for="inlineCheckbox1"><?php echo $lang['parking'] ?></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="furniture" value="furniture" name="furniture">
                                            <label class="form-check-label" for="furniture"><?php echo $lang['furniture'] ?></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="heating" name="heating" value="heating">
                                            <label class="form-check-label" for="inlineCheckbox3"><?php echo $lang['heating'] ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6   mb-2">
                                    <label for="priceRange">Min</label>
                                    <div class="form-group" id='priceMin'>
                                        <input type="text" class="form-control form-control-lg form-control-a" name="priceMin">
                                    </div>
                                </div>
                                <div class="col-md-6   mb-2">
                                    <label for="priceRange">Max</label>
                                    <div class="form-group" id='priceMax'>
                                        <input type="text" class="form-control form-control-lg form-control-a" name="priceMax">
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