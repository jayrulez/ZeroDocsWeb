<?php
if (file_exists("GameJam.odp")) {
header("Content-disposition: attachment; filename=\"GameJam.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("GameJam.odp"));
readfile("GameJam.odp");
}
?>