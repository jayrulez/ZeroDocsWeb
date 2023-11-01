<?php
if (file_exists("HighConcept.odp")) {
header("Content-disposition: attachment; filename=\"HighConcept.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("HighConcept.odp"));
readfile("HighConcept.odp");
}
?>