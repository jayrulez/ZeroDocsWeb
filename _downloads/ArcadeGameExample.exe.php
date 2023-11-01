<?php
if (file_exists("ArcadeGameExample.exe")) {
header("Content-disposition: attachment; filename=\"ArcadeGameExample.exe\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("ArcadeGameExample.exe"));
readfile("ArcadeGameExample.exe");
}
?>