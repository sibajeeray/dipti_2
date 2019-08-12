<?php 
    include $_SERVER['DOCUMENT_ROOT']."/php/dipti_2/templates/header.php"
?>


<div id="admin">

<div class="header">
    <h2>Welcome to the Admin Panel</h2>
</div>

<div class="op">

    <a class='btn' href="./add-images.php">Add New Images</a>
    <a class='btn' href="./add-volunteer.php">Add New Volunteer</a>

</div>

</div>



<?php 
    require('../templates/footer.php');
?>