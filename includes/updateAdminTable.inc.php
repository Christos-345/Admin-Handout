<?php

include 'dbh.inc.php';

$sql = "SELECT * FROM users WHERE role = 1 ORDER BY userID ASC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        
      echo "<tr>
                 <td>".$row["userID"]."</td>
                 <td>".$row["firstname"]."</td>
                 <td>".$row["lastname"]."</td>
                 <td>".$row["phoneNo"]."</td>
                 <td>".$row["email"]."</td>
                 
                 <td>
                 
                 <a href='#editAdmin' class='edit' data-toggle='modal'><i class='fas fa-edit' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
                 <a href='#deleteAdmin' class='delete' data-toggle='modal'><i class='far fa-trash-alt' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>   
                 </form>
                 
                 </td>
                </tr> ";

                echo '  <!-- Edit Modal HTML -->
                <div id="editAdmin" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="includes/updateAdminRow.inc.php" method = "POST">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Admin</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Firstname*</label>
                                        <input type="text" class="form-control" name="firstname" value='.$row['firstname'].' required>
                                    </div>
                                    <div class="form-group">
                                        <label>Lastname*</label>
                                        <input type="text" class="form-control" name="lastname" value='.$row['lastname'].' required>
                                    </div>
                                    <div class="form-group">
                                        <label>Telephone*</label>
                                        <input type="text" class="form-control" name="telephone" value='.$row['phoneNo'].' required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" class="form-control" name="email" value='.$row['email'].' required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="hidden" name ="userID" value = '.$row["userID"].'>
                                    <button type="submit" value="Yes" class="btn btn-info" >Save Changes</button>   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>';

                echo '<!-- Delete Modal HTML -->
                <div id="deleteAdmin" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <form action="includes/deleteAdmin.inc.php" method = "POST">
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
                                    <input type="hidden" name ="userID" value = '.$row["userID"].'>
                                    <button type="submit" value="Yes" class="btn btn-danger" >Delete</button>   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>';
        
        }
      }

     