<?php
header("Content-type:text/xml");
$retstr=file_get_contents("https://www.tourmyindia.com/blog/feed/");
echo $retstr;
?>