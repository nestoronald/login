<?php
/*
    $name_file=$_GET["url"];
    header( "Content-Type: application/octet-stream");
    header( "Content-Disposition: attachment; filename='$name_file'");
  */
   $filepath=$_GET["url"];
   //$filename = "ruta-archivo" . $archivo;
   header("Expires: -1");
   header("Content-type: application/zip;\n"); //or yours?
   header("Content-Transfer-Encoding: binary");
   header("Cache-Control: no-store, no-cache, must-revalidate");
   header("Cache-Control: post-check=0, pre-check=0");
   header("Pragma: no-cache");
   //$len = filesize($filename);
   //header("Content-Length: $len;\n");
   $filename=explode("/", $filepath);
   
   $outname=$filename[count($filename)-1];
   header("Content-Disposition: attachment; filename=".$outname.";\n\n");
   readfile($filepath);
  
  
    
?>
