<?php
if (file_exists("Postmortem.odp")) {
header("Content-disposition: attachment; filename=\"Postmortem.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("Postmortem.odp"));
readfile("Postmortem.odp");
}
?>