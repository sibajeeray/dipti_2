<?php

include("../php/connectDB.php");

if (isset($_POST['createVol'])) {
    $id_no = mysqli_real_escape_string($con, $_POST['Id_no']);
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $s_d_w_o = mysqli_real_escape_string($con, $_POST["s_d_w_o"]);
    $dob = $_POST["dob"];
    $occupation = mysqli_real_escape_string($con, $_POST["occupation"]);
    $area = mysqli_real_escape_string($con, $_POST["area"]);

    $sql_query_rep = "INSERT INTO volunteers(id_no, name, s_d_w_o, dob, occupation, area) VALUES ('$id_no', '$name', '$s_d_w_o', '$dob', '$occupation', '$area')";
    $is_saved = mysqli_query($con, $sql_query_rep);
    if ($is_saved) {
        echo "<h3>Volunteer saved successfully</h3>";
    }
    else{
        echo $con->error;
        echo "<h3>Volunteer could not be saved. Please try later.</h3>";
    } 
        
}
