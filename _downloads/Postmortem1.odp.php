<?php
if (file_exists("Postmortem1.odp")) {
header("Content-disposition: attachment; filename=\"Postmortem1.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("Postmortem1.odp"));
readfile("Postmortem1.odp");
}
?>