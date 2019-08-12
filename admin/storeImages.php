<?php
    if(isset($_POST['storeImgs']))
    {
        $error_files=array();
        $extensions=array("jpeg","jpg","png","gif");

        $gallery_name = $_POST['gallery_name'];

        foreach($_FILES["imgs"]["tmp_name"] as $key=>$tmp_name) {
            $file_name=$_FILES["imgs"]["name"][$key];
            $file_tmp=$_FILES["imgs"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);
        
            if(in_array($ext,$extensions)) {
                if(!file_exists(__DIR__."/../photo_gallery/".$gallery_name."/".$file_name)) {
                    move_uploaded_file($file_tmp, __DIR__."/../photo_gallery/".$gallery_name."/".$file_name);
                }
                else {
                    $filename=basename($file_name,$ext);
                    $newFileName=$filename.time().".".$ext;
                    echo $newFileName;
                    move_uploaded_file($file_tmp, __DIR__."/../photo_gallery/".$gallery_name."/".$newFileName);
                }
            }
            else {
                array_push($error_files,"$file_name");
            }
        }  
        echo "<h3>Files Uploaded Successfully</h3>";
        if($error_files){
            foreach($error_files as $err_file){
                echo "<h3>Error occured while uploading ".$err_file." .Please check the Format.</h3>";
            }
        };       
        
    }

?>
