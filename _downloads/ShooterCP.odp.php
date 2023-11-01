<?php
if (file_exists("ShooterCP.odp")) {
header("Content-disposition: attachment; filename=\"ShooterCP.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("ShooterCP.odp"));
readfile("ShooterCP.odp");
}
?>