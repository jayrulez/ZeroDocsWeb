<?php
if (file_exists("Playtesting1.odp")) {
header("Content-disposition: attachment; filename=\"Playtesting1.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("Playtesting1.odp"));
readfile("Playtesting1.odp");
}
?>