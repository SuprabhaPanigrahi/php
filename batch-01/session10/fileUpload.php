<?php
    print_r ($_FILES["photo"]);

    echo "<br> NAME  :".$_FILES["photo"]["name"] ;
    echo "<br> TYPE  :".$_FILES["photo"]["type"] ;
    echo "<br> TEMP_NAME  :".$_FILES["photo"]["tmp_name"] ;
    echo "<br> ERROR :".$_FILES["photo"]["error"] ;
    echo "<br> SIZE :".$_FILES["photo"]["size"] ;

    $target_dir = "uploads/";
    $target_file = $target_dir .basename($_FILES["photo"]["name"]); //uploads/xyx.pdf
    $imageFileType = strtolower( pathinfo ($target_file,PATHINFO_EXTENSION));
    $destination ='uploads/'.time().implode(['.',$imageFileType]);
    move_uploaded_file($_FILES["photo"]["tmp_name"],$destination);

?>