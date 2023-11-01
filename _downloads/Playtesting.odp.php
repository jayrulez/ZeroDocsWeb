<?php
if (file_exists("Playtesting.odp")) {
header("Content-disposition: attachment; filename=\"Playtesting.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("Playtesting.odp"));
readfile("Playtesting.odp");
}
?>