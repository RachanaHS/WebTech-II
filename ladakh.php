<?php
    header("Content-Type: text/xml");
    $feed = file_get_contents("ladakh.xml");
    echo $feed;
?>
