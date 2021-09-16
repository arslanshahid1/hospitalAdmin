<?php 
    include_once("header.php");
    include_once("action/connection.php");
    $query= "SELECT * FROM doctors";
    $result= mysqli_query($cn,$query); 
?>
<br>
<div class="container" style="margin-top:10%;">

    <h2 class="mt-5 text-center pb-3">Our Doctors</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Speciality</th>
                <th scope="col">Image</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>


            <?php
    while($row=mysqli_fetch_assoc($result)){
    ?>
            <tr>
                <th scope="row"><?php echo $row['id']; ?></th>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['speciality']; ?></td>
                <td>
                    <img src="action/uploads/<?php echo $row['photo']; ?>" height="70" width="70" />
                </td>
                <td><a href="schedule.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Schedule</a></td>
                <td><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a></td>
                <td>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteModal">
                        Delete
                    </button>

                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                        aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Are you sure you want to delete?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                

                                    <a href="action/delete.php?id=<?php echo $row['id']; ?>">
									<button class="btn btn-danger"><?php $row['id']; ?>Delete</button>
								    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </td>
            </tr>




        </tbody>
        <?php
    }
        ?>
    </table>

</div>