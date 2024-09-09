<?php
    // $file  = fopen("example.txt",'w');
    // fwrite($file,"Welcome to File Chapter in PHP");
    // fclose($file);
    // $file  = fopen("example.txt",'r+');
    // $data = fread($file,20);

    // echo $data ;

    // fwrite($file,"New content added");

    //$file = fopen("example.txt","r");

    // $no_of_bytes = readfile("example.txt");
    // echo $no_of_bytes;

    // $data = file_get_contents("example.txt") ;
    // echo $data;

    // $data = file("example.txt") ;
    // print_r($data);
    // foreach($data as $line){
    //     echo $line;
    // }

    // if(rename("example.txt","note.txt"))
    // {
    //     echo 'File Successfully renamed';

    // }else{
    //     echo 'File failed to renamed';
    // }

    // if(unlink("note.md"))
    // {
    //     echo 'File deleted successfully';
    // }


?>

<?php
//  // The directory path 
// $dir = "testdir"; 
// // Check the existence of directory 
// if(!file_exists($dir)){ 
// // Attempt to create directory 
// if(mkdir($dir)){
//  echo "Directory created successfully.";
//  } else{ 
// echo "ERROR: Directory could not be created.";
//  } 
// } else{
//  echo "ERROR: Directory already exists."; 
// } 

copy("note.txt","testdir/backup.txt");
?>
