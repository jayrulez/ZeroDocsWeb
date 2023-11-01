<?php
if (file_exists("PolishCP.odp")) {
header("Content-disposition: attachment; filename=\"PolishCP.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("PolishCP.odp"));
readfile("PolishCP.odp");
}
?>