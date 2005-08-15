<?php
     include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/file/filecontents/file_get_contents.php" );
     include_once( PLOG_CLASS_PATH."plugins/templateeditor/class/file/filecontents/file_put_contents.php" );
     include_once( PLOG_CLASS_PATH."class/file/file.class.php" );

     class MyFile extends File
     {

         function MyFile( $fileName )
         {
             $this->File($fileName);
         }
         
         function readFileContent()
         {
             //$contents = file_get_contents( $this->_fileName );
             $contents = $this->readFile();
             $contents = implode("\n" , $contents);
                          
             return $contents;
         }
         
         function writeFileContent( $contents )
         {
             $bytes = file_put_contents( $this->_fileName, $contents );
             
             return $bytes;
         }
         
         /**
          * Recursively copy a folder and its contents
          * http://aidan.dotgeek.org/lib/?file=function.copyr.php
          *
          * @author      Aidan Lister <aidan@php.net>
          * @version     1.0.1
          * @param       string   $source    Source path
          * @param       string   $dest      Destination path
          * @return      bool     Returns TRUE on success, FALSE on failure
          */
         function copyDir($source, $dest)
         {
             clearstatcache();
             
             // Simple copy for a file
             if (is_file($source)) {
                 return File::copy($source, $dest);
             }
          
             // Make destination directory
             if (!File::isDir($dest)) {
                 File::createDir($dest);
             }
          
             // Loop through the folder
             $dir = dir($source);
             while (false !== $entry = $dir->read()) {
                 // Skip pointers
                 if ($entry == '.' || $entry == '..') {
                     continue;
                 }
          
                 // Deep copy directories
                 if ($dest !== "$source/$entry") {
                     MyFile::copyDir("$source/$entry", "$dest/$entry");
                 }
             }
          
             // Clean up
             $dir->close();
             return true;
         }
     }
?>
