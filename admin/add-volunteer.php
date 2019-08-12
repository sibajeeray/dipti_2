<?php
include $_SERVER['DOCUMENT_ROOT']."/php/dipti_2/templates/header.php";
include('createVolunteer.php');
?>


<div id="add_rep">

    <form method="post" class="form" data-parsley-validate>
        <div class="form-content">

            <input type="text" class="field" name="Id_no" placeholder="ID Card No" required />
            <input type="text" class="field" name="name" placeholder="Name" required />
            <input type="text" class="field" name="s_d_w_o" placeholder="S/D/W/O" required/>
            <input type="date" class="field" name="dob" placeholder="DOB" required/>
            <input type="text" class="field" name="occupation" placeholder="Occupation" required/>
            <input type="text" class="field" name="area" placeholder="Area" required/>

            <input type="submit" name="createVol" class="btn" value="Save Volunteer" />
        </div>
    </form>

</div>



<?php
require('../templates/footer.php');
?>