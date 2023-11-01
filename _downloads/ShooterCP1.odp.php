<?php
if (file_exists("ShooterCP1.odp")) {
header("Content-disposition: attachment; filename=\"ShooterCP1.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("ShooterCP1.odp"));
readfile("ShooterCP1.odp");
}
?>