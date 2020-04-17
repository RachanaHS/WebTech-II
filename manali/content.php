<?php
    extract($_GET);
	if($flag=="0")
	{
		$fname="image".$count.".txt";
		$file = fopen($fname,"r");
    	$size = filesize($fname);
    	$retstr = fread($file,$size);
    	echo $retstr;
	}
    if($flag == "1")
    {
       
  	$fname = "image".$count.".txt";
    	$file = fopen($fname,"r");
    	$size = filesize($fname);
    	$retstr = fread($file,$size);
    	echo $retstr;
    }

?>
