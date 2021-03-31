<?php

include 'dbh.inc.php';

$sql = "SELECT * FROM properties ORDER BY propertyID ASC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        
      echo "<tr>
           
                 <td>".$row["propertyID"]."</td>
                 <td>".$row["type"]."</td>
                 <td>".$row["category"]."</td>
                 <td>".$row["country"]."</td>
                 <td>".$row["town"]."</td>
                 <td>".$row["area"]."</td>
                 <td>".$row["squarem"]."</td>
                 <td>".$row["address"]."</td>
                 <td>".$row["bedrooms"]."</td>
                 <td>".$row["bathrooms"]."</td>
                 <td>".$row["parking"]."</td>
                 <td>".$row["heating"]."</td>
                 <td>".$row["furniture"]."</td>
                 <td>".$row["floor"]."</td>
                 <td>".$row["dateOfBuild"]."</td>
                 <td>".$row["availableFrom"]."</td>
                 <td>".$row["pricePerSqm"]."</td>
                 <td>".$row["totalPrice"]."</td>
                 
                 
                 <td>
                 <a href='#editProperty' class='edit' data-toggle='modal'><i class='fas fa-edit' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
                 <a href='#deleteProperty' class='delete' data-toggle='modal'><i class='far fa-trash-alt' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>
                  </td>
                </tr> ";
                echo '  <!-- Edit Modal HTML -->
                <div id="editAdmin" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Admin</h4>
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
                </div>';
                echo '<!-- Delete Modal HTML -->
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
                </div>';

                
        
        }
      }