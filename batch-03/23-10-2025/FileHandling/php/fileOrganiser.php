<?php

 $files = scandir('.');
 print_r($files);

//  $extensions = [];
//  foreach ($files as $file) {
//      $ext = substr($file, strrpos($file, '.') + 1);
//      array_push($extensions, $ext);
//  }
  $extensions = array_map(function($file) {
    $ext = substr($file, strrpos($file, '.') + 1);
    return strlen($ext) > 2 ? $ext : null;
  }, $files);
 print_r($extensions);

 $fileTypes = array_unique($extensions);
 print_r($fileTypes);

 foreach ($fileTypes as $type) {
    if ($type) {
        if (!is_dir($type)) {
            mkdir($type);
        }
        foreach ($files as $file) {
            $ext = substr($file, strrpos($file, '.') + 1);
            if ($ext === $type) {
                rename($file, $type . '/' . $file);
            }
        }
    }
 }

//  $fileTypes = array_filter(array_unique($extensions),function($ext) {
//      return strlen($ext) > 2;
//  });
//  print_r($fileTypes);

 /*

   if (is_file($file)) {
          $ext = pathinfo($file, PATHINFO_EXTENSION);
          if (!in_array($ext, $extensions)) {
              $extensions[] = $ext;
          }
      }
      */