<?php
if (file_exists("ShooterContCP.odp")) {
header("Content-disposition: attachment; filename=\"ShooterContCP.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("ShooterContCP.odp"));
readfile("ShooterContCP.odp");
}
?>