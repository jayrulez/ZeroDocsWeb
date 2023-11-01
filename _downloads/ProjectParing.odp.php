<?php
if (file_exists("ProjectParing.odp")) {
header("Content-disposition: attachment; filename=\"ProjectParing.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("ProjectParing.odp"));
readfile("ProjectParing.odp");
}
?>