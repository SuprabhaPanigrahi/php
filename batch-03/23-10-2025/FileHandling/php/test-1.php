<?php
  /*
     File Handling in PHP:
      This script demonstrates basic file handling operations in PHP, including creating, writing, reading, and closing a file.
      It also includes error handling to manage file-related errors gracefully.
      The script uses the built-in PHP functions for file handling and demonstrates their usage with examples.
      - Operations covered:
        1. Creating a file
        2. Writing to a file
        3. Reading from a file
        4. Closing a file
        5. Error handling for file operations

      - Creating a file:
        Use fopen() function with 'w' mode to create a new file or overwrite an existing file.

  */
  $filename = "note.txt";
  $file = fopen($filename, "r+");
  if ($file === false) {
      die("Error: Unable to open the file.");
  }
  if( filesize($filename) > 0 ) {
    // Reading from the file
       $content = fread($file, filesize($filename));
 
     // Displaying the content
      echo $content;
  
      echo "File opened successfully.<br>";
  } else {    
      die("Error: File is empty.");
  }
  $data = readline("Enter data to append to the file: ");
  fwrite($file, $data);
  fclose($file);