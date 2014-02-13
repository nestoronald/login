<?php

function phpFileTree($basepath,$relativepath){
	// Free PHP File Directory Listing Script - Version 1.4
	// HalGatewood.com
	
	$pathDirectory = $basepath.$relativepath;
	
	// ADD SPECIFIC FILES YOU WANT TO IGNORE HERE
	$ignore_file_list = array(".", "..", "Thumbs.db", ".DS_Store", "index.php", "icons.png");
	
	// ADD SPECIFIC FILE EXTENSIONS YOU WANT TO IGNORE HERE
	$ignore_ext_list = array();
	
	//$title = cleanTitle(basename(dirname(__FILE__)));
	
	// GET FILES AND PUT INTO AN ARRAY
	$files = $directories = array();
	//$handle=opendir(dirname(__FILE__));
	$handle=opendir($pathDirectory);
	while (($file = readdir($handle))!==false) { $files[] = $file; }
	closedir($handle);
	
	sort($files);
	
	$fileExt=array();
	$htmldir="";
	// GET DIRECTORIES
	foreach($files as $c => $file)
	{
		if(!is_dir($file)) { continue; }
		if(in_array($file, $ignore_file_list)) { continue; }
		if(in_array($fileExt, $ignore_ext_list)) { continue; }
	
		$htmldir.= "<div class=\"media_block\">";
		$htmldir.= "	<div class=\"media_block_image\"><a href='".$relativepath.$file."' class=\"dir\">&nbsp;</a></div>";
		$htmldir.= "	<div class=\"media_block_name\">\n";
		$htmldir.= "		<div class=\"media_block_file\"><a href='".$relativepath.$file."'>$file</a></div>\n";
		$htmldir.= "		<div class=\"media_block_date\">Last modified: " .  date("D. F jS, Y - h:ma", filemtime($pathDirectory.$file)) . "</div>\n";
		$htmldir.= "	</div>\n";
		$htmldir.= "</div>";
	
		unset($files[$c]);
	}
	
	$htmlfiles="";
	// LOOP THE FILES
	foreach($files as $file)
	{
		$fileExt = getFileExt($file);
		if(in_array($file, $ignore_file_list)) { continue; }
		if(in_array($fileExt, $ignore_ext_list)) { continue; }
		if(is_dir($file)) { $fileExt = "dir"; }
	
		$htmlfiles.=  "<div class=\"media_block\">";
		$htmlfiles.= "	<div class=\"media_block_image\"><a href='".$relativepath.$file."' class=\"$fileExt\">&nbsp;</a></div>";
		$htmlfiles.= "	<div class=\"media_block_name\">\n";
		$htmlfiles.= "		<div class=\"media_block_file\"><a href='".$relativepath.$file."'>$file</a></div>\n";
		//$htmlfiles.= "		<div class=\"media_block_date\">Size: " . format_size($pathDirectory.$file) . "<br />Last modified: " .  date("D. F jS, Y - h:ma", filemtime($pathDirectory.$file)) . "</div>\n";
		$htmlfiles.= "		<div class=\"media_block_date\">Tama&ntilde;o: " . format_size($pathDirectory.$file) . "</div>\n";
		$htmlfiles.= "		<div class=\"media_block_delete\"><a href=#  onclick=xajax_deleteFile('$basepath','$relativepath','$file')><img src='img/delete-file-icon.png'></a></div>\n";
		$htmlfiles.= "	</div>\n";
		$htmlfiles.= "</div>";
		
	}
	
	return $htmldir.$htmlfiles;
	
}

function cleanTitle($title)
{
	$title = str_replace("-", " ", $title);
	$title = str_replace("_", " ", $title);
	return ucwords($title);
}

function getFileExt($filename) 
{
	return substr(strrchr($filename,'.'),1);
}

function format_size($file) 
{
	$bytes = filesize($file);
	if ($bytes < 1024) return $bytes.'b';
	elseif ($bytes < 1048576) return round($bytes / 1024, 2).'kb';
	elseif ($bytes < 1073741824) return round($bytes / 1048576, 2).'mb';
	elseif ($bytes < 1099511627776) return round($bytes / 1073741824, 2).'gb';
	else return round($bytes / 1099511627776, 2).'tb';
}




?>