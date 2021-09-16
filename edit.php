<?php 
include("header.php");

if (!empty($_GET['id'])){
    $id = $_GET['id'];
    include_once("action/connection.php");
    $query = "SELECT * FROM `doctors` WHERE id='$id'";
    $result = mysqli_query($cn,$query) or die("Cant connect".mysqli_error($cn));
    $row = mysqli_fetch_assoc($result);
} else {
    header("LOCATION:viewdoctors.php");
}

?>

<br>
<div class="container" style="margin-top:10%;">
    <h1 class="mb-5">Edit Doctor</h1>
    <form action="action/update.php?id=<?php echo $id; ?>" method="post">
        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="doctorName"
                    placeholder="Enter doctor's name">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="doctorEmail"
                    placeholder="Enter doctor's email">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Contact</label>
            <div class="col-sm-6">
                <input type="phone" class="form-control" value="<?php echo $row['contact']; ?>" name="doctorContact"
                    placeholder="Enter doctor's phone number">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Speciality</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $row['speciality']; ?>"
                    name="doctorSpeciality" placeholder="Enter doctor's speciality">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Doctor's Intro</label>
            <div class="col-sm-6">
                <textarea class="form-control" value="<?php echo $row['intro']; ?>" name="doctorIntro" rows="4"
                    placeholder="Write brief introduction of doctor (experience, qualification, etc)"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Upload Image</label>
            <div class="col-sm-6">
                <input type="file" name="doctorImage">
                <h6>Choose image if you want to update, otherwise leave empty.</h6>
            </div>
        </div>

        <button class="btn btn-primary w-25 mb-5" type="sumbit" name="sub" value="sub">Update</button>

    </form>
</div>