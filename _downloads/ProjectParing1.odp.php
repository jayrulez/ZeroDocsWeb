<?php
if (file_exists("ProjectParing1.odp")) {
header("Content-disposition: attachment; filename=\"ProjectParing1.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("ProjectParing1.odp"));
readfile("ProjectParing1.odp");
}
?>