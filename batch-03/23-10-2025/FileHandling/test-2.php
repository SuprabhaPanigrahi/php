<?php

$filename = "note.txt";
if(file_exists($filename)){
    $file = fopen($filename, "r");
    if ($file === false) {
        die("Error: Unable to open the file.");
    }
    if( filesize($filename) > 0 ) {
        $lineCount =0;
        while(!feof($file)){
            $line = fgets($file);
            $lineCount++;
            echo "Line {$lineCount}: " . $line . "\n";
        }
        echo "Total Lines: " . $lineCount;
  
    } 
    else{    
        die("Error: File is empty.");
    }
    fclose($file);
} else {
    die("Error: File does not exist.");
}