<?php
include_once("header.php");
$id = $_GET['id'];
?>
<br>
<div class="container mt-5">
         <h4 class="mt-5 pt-5 text-center">Enter Schedule</h4>

         <form action="action/scheduleaction.php?id=<?php echo $id; ?>" method="post">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Select Day</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" name="day[]" class="form-control col-md-4" value="Sunday" />
                    </td>
                    <td> <input type="time" name="timeStart[]" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeEnd[]" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="day[]" class="form-control col-md-4" value="Monday" />
                    </td>
                    <td> <input type="time" name="timeStart[]" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeEnd[]" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="day[]" class="form-control col-md-4" value="Tuesday" />
                    </td>
                    <td> <input type="time" name="timeStart[]" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeEnd[]" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="day[]" class="form-control col-md-4" value="Wednesday" />
                    </td>
                    <td> <input type="time" name="timeStart[]" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeEnd[]" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="day[]" class="form-control col-md-4" value="Thursday" />
                    </td>
                    <td> <input type="time" name="timeStart[]" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeEnd[]" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="day[]" class="form-control col-md-4" value="Friday" />
                    </td>
                    <td> <input type="time" name="timeStart[]" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeEnd[]" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="day[]" class="form-control col-md-4" value="Saturday" />
                    </td>
                    <td> <input type="time" name="timeStart[]" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeEnd[]" class="form-control col-md-4"></td>
                </tr>
             </tbody>
        </table>


        <button type="submit" class="btn btn-primary w-100 mb-5">Submit</button>
        
    </form>

</div>