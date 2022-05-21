<?php
$title = 'Administrators | The Handout Admin';
include_once 'includes/header.inc.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- Content Row -->
    <div class="row">


        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-4">
                            <h2>Manage <b>Administrators</b></h2>
                        </div>
                   
                        <div class="col-sm-8">
                                <a href="#generateReport" class="btn btn-info" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span><?php echo $lang['generatereport'] ?></span></a>
                           

                    </div>
                </div>
                <table data-page-length="5" id="contentTables" class="table table-striped table-hover">
                    <thead>
                        <tr>

                            <th>User ID</th>
                            <th><?php echo $lang['firstname']?></th>
                            <th><?php echo $lang['lastname']?></th>
                            <th><?php echo $lang['telephone']?></th>
                            <th><?php echo $lang['email']?></th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Occupation</th>
                            <th>Gender</th>
                            <th><?php echo $lang['actions']?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include_once "includes/updateAdminTable.inc.php" ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Edit Modal HTML -->
    <div id="editCustomer" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="includes/updateAdminRow.inc.php" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $lang['editcustomer']?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                                    <label>Role *</label>
                                        
                                        <select name="role" class="form-control" required data-error="Please enter this field">>
                                            <option value="<?php echo $_GET['role'] ?>">Currently Selected: Administrator </option>
                                            <option value="1">Administrator</option>
                                            <option value="2">User</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label><?php echo $lang['firstname']?>*</label>
                            <input type="text" class="form-control" name="firstname" value='<?php echo $_GET['firstname'] ?>' required>
                        </div>
                        <div class="form-group">
                            <label><?php echo $lang['lastname']?>*</label>
                            <input type="text" class="form-control" name="lastname" value='<?php echo $_GET['lastname'] ?>' required>
                        </div>
                        <div class="form-group">
                            <label><?php echo $lang['telephone']?>*</label>
                            <input type="text" class="form-control" name="telephone" value='<?php echo $_GET['phoneNo'] ?>' required>
                        </div>
                        <div class="form-group">
                            <label><?php echo $lang['email']?>*</label>
                            <input type="email" class="form-control" name="email" value='<?php echo $_GET['email'] ?>' required>
                        </div>
                        <div class="form-group">
                                    <label>City *</label>
                                        
                                        <select name="city" class="form-control" required data-error="Please enter this field">>
                                            <option value="<?php echo $_GET['city'] ?>">Currently Selected: <?php echo $_GET['city'] ?> </option>
                                            <option value="Limassol">Limassol</option>
                                            <option value="Larnaca">Larnaca</option>
                                            <option value="Paphos">Paphos</option>
                                            <option value="Nicosia">Nicosia</option>
                                            <option value="Famagousta">Famagousta</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label>Address*</label>
                            <input type="text" class="form-control" name="address" value='<?php echo $_GET['address'] ?>' required>
                        </div>
                        <div class="form-group">
                            <label>Occupation*</label>
                            <input type="text" class="form-control" name="occupation" value='<?php echo $_GET['occupation'] ?>' required>
                        </div>
                        <div class="form-group">
                                    <label>Gender *</label>
                                        
                                        <select name="gender" class="form-control" required data-error="Please enter this field">>
                                            <option value="<?php echo $_GET['gender'] ?>">Currently Selected: <?php echo $_GET['gender'] ?> </option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="<?php echo $lang['cancel']?>">
                        <input type="hidden" name="userID" value='<?php echo $_GET['userID'] ?>'>
                        <button type="submit" value="Yes" class="btn btn-info"><?php echo $lang['savechanges']?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteCustomer" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="includes/deleteCustomer.inc.php" method="POST">
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
                        <input type="hidden" name="userID" value='<?php echo $_GET['userID'] ?>'>
                        <button type="submit" value="Yes" class="btn btn-danger"><?php echo $lang['delete']?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- Manual Modal HTML -->
     <div id="manualCustomer" class="modal fade">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">              
                   <?php
                   if(isset($_SESSION['lang'])){
                       if($_SESSION['lang'] == "gr"){
                           include_once 'manuals/manualCustomersGreek.html';
                       }else if ($_SESSION['lang'] == "en"){
                           include_once 'manuals/manualCustomersEnglish.html';
                       }
                   }                   
                   ?>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-primary" data-dismiss="modal" value="Ok" ?>
                    </div>
               
            </div>
        </div>
    </div>

    <!--Generate Report Modal-->

    <div id="generateReport" class="modal fade">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form action="includes/adminPDF.inc.php" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $lang['generatereport'] ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="div container">
                            <div class="row">
                                <div class="col-md-6 mb-2">

                                
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">City</label>
                                    <div class="col-sm-6 mb-3">
                                        <select name="city" class="form-control">
                                            <option value='All'>All Cities</option>
                                            <option value='Limassol'>Limassol</option>
                                            <option value='Larnaca'>Larnaca</option>
                                            <option value='Nicosia'>Nicosia</option>
                                            <option value='Paphos'>Paphos</option>
                                            <option value='Famagusta'>Famagusta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 form-control-label text-right">Gender</label>
                                    <div class="col-sm-6 mb-3">
                                    <select name="gender" class="form-control">
                                            <option value="All">All Genders</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
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