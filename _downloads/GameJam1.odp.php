<?php
if (file_exists("GameJam1.odp")) {
header("Content-disposition: attachment; filename=\"GameJam1.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("GameJam1.odp"));
readfile("GameJam1.odp");
}
?>