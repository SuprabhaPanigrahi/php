<?php
//print_r($_FILES['file']);
$conn = mysqli_connect("localhost","root","csmpl@123","demo");  
$name = $_POST['name'];
$file = $_FILES['file'];

// $fileDetails =[
//    'FileName'=> $file['name'],
//    'FileType'=> $file['type'],
//    'Size'=> $file['size']/(1024*1024) .' MB',
//    'FileStoredAt'=>$file['tmp_name']
// ];

// Upload file to server folder

$target_path = 'uploads';

if (!is_dir($target_path)) {
  mkdir($target_path, 0777);
}
$extension = pathinfo($file['name'], PATHINFO_EXTENSION);
$filename = 'user_'.date_timestamp_get(new DateTime()).'.'.$extension;
echo $filename;
$final_path = $target_path . '/' . $filename;
if (!file_exists($final_path)) {
  if (move_uploaded_file($file['tmp_name'], $final_path)) {
    $sql = "Insert into user (name,image)values ('{$_POST['name']}','{$filename}')";
    if(mysqli_query($conn,$sql)){
        echo "file Uploaded Sucessfully"; 
    }
    
  } else {
    echo "file Uploaded Failed";
  }
}else{
  echo "File Already Existis";
}

// echo json_encode($fileDetails);
exit();