<?php
if (file_exists("PlatformerExample.exe")) {
header("Content-disposition: attachment; filename=\"PlatformerExample.exe\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("PlatformerExample.exe"));
readfile("PlatformerExample.exe");
}
?>