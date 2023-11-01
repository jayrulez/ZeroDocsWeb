<?php
if (file_exists("ShooterContCP1.odp")) {
header("Content-disposition: attachment; filename=\"ShooterContCP1.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("ShooterContCP1.odp"));
readfile("ShooterContCP1.odp");
}
?>