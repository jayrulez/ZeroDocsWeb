<?php
if (file_exists("PolishCP1.odp")) {
header("Content-disposition: attachment; filename=\"PolishCP1.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("PolishCP1.odp"));
readfile("PolishCP1.odp");
}
?>