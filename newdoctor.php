<?php 
include("header.php");
?>
<br>
<div class="container" style="margin-top:10%;">
    <h1 class="mb-5">New Doctor</h1>

    <form action="action/newdoctoraction.php" enctype="multipart/form-data" method="post">
        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="doctorName" placeholder="Enter doctor's name">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" name="doctorEmail" placeholder="Enter doctor's email">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Contact</label>
            <div class="col-sm-6">
                <input type="phone" class="form-control" name="doctorContact" placeholder="Enter doctor's phone number">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Speciality</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="doctorSpeciality" placeholder="Enter doctor's speciality">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Doctor's Intro</label>
            <div class="col-sm-6">
                <textarea class="form-control" name="doctorIntro" rows="4"
                    placeholder="Write brief introduction of doctor (experience, qualification, etc)"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Upload Image</label>
            <div class="col-sm-6">
                <input type="file" name="fileToUpload">
            </div>
        </div>

        <!-- <h4 class="mt-5 text-center">Enter Schedule</h4>

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
                        <select name="selectDay1" class="form-control col-md-4">
                            <option selected>-</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                    </td>
                    <td> <input type="time" name="timeStart1" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeEnd1" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <td>
                        <select name="selectDay2" class="form-control col-md-4">
                            <option selected>-</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                    </td>
                    <td> <input type="time" name="timeStart2" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeEnd2" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <td>
                        <select name="selectDay3" class="form-control col-md-4">
                            <option selected>-</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                    </td>
                    <td> <input type="time" name="timeStart3" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeStart3" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <td>
                        <select name="selectDay4" class="form-control col-md-4">
                            <option selected>-</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                    </td>
                    <td> <input type="time" name="timeStart4" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeStart4" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <td>
                        <select name="selectDay5" class="form-control col-md-4">
                            <option selected>-</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                    </td>
                    <td> <input type="time" name="timeStart5" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeStart5" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <td>
                        <select name="selectDay6" class="form-control col-md-4">
                            <option selected>-</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                    </td>
                    <td> <input type="time" name="timeStart6" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeStart6" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <td>
                        <select name="selectDay7" class="form-control col-md-4">
                            <option selected>-</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                    </td>
                    <td> <input type="time" name="timeStart7" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeStart7" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <td>
                        <select name="selectDay8" class="form-control col-md-4">
                            <option selected>-</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                    </td>
                    <td> <input type="time" name="timeStart8" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeStart8" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <td>
                        <select name="selectDay9" class="form-control col-md-4">
                            <option selected>-</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                    </td>
                    <td> <input type="time" name="timeStart9" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeStart9" class="form-control col-md-4"></td>
                </tr>
                <tr>
                    <td>
                        <select name="selectDay10" class="form-control col-md-4">
                            <option selected>-</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                            <option>Sunday</option>
                        </select>
                    </td>
                    <td> <input type="time" name="timeStart10" class="form-control col-md-4"></td>
                    <td> <input type="time" name="timeStart10" class="form-control col-md-4"></td>
                </tr>

            </tbody>
        </table> -->

        <button class="btn btn-primary w-25 mt-5 mb-5" type="sumbit" name="sub" value="sub">Submit</button>

    </form>
</div>