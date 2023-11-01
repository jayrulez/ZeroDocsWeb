<?php
if (file_exists("RubeGoldbergExample.exe")) {
header("Content-disposition: attachment; filename=\"RubeGoldbergExample.exe\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("RubeGoldbergExample.exe"));
readfile("RubeGoldbergExample.exe");
}
?>