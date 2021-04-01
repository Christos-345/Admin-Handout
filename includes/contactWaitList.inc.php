<?php

include 'dbh.inc.php';

$sql = "SELECT userID, firstname, lastname, phoneNo, email, subject, message
        FROM users
        NATURAL JOIN contactwaitlist ;
         ";
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
                 <td>".$row["subject"]."</td>
                 <td>".$row["message"]."</td>

                 <td>
                 <a href='#editProperty' class='edit' data-toggle='modal'><i class='fas fa-edit' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
                 <a href='#deleteProperty' class='delete' data-toggle='modal'><i class='far fa-trash-alt' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>
                  </td>
                </tr> ";
                
                echo '<!-- Delete Modal HTML -->
                <div id="deleteProperty" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action = "includes/deleteProperty.inc.php" method = "POST">
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Interested</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete these Records?</p>
                                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                                </div>
                                <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="hidden" name ="propertyID" value = '.$row["userID"].'>
                                <button type="submitDeleteProperty" value="Yes" class="btn btn-danger" >Delete</button>   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>';
        
        }
      }
      