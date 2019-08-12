<?php
include $_SERVER['DOCUMENT_ROOT']."/php/dipti_2/templates/header.php";
include('storeImages.php');
?>


<div id="add_imgs">

    <form method="post" class="form" enctype="multipart/form-data" data-parsley-validate>
        <div class="form-content">
            <input type="file" class="img-field" name="imgs[]" placeholder="Choose Images" multiple="multiple"  required />
            <select name="gallery_name" required>
                <option disabled selected value>-- Select Gallery --</option>
                <option value="Gallery_1">Gallery_1</option>
                <option value="Gallery_2">Gallery_2</option>
                <option value="Gallery_3">Gallery_3</option>
                <option value="Gallery_4">Gallery_4</option>
            </select>
            <input type="submit" name="storeImgs" class="btn" value="Upload Images" />
        </div>
    </form>

</div>



<?php
require('../templates/footer.php');
?>