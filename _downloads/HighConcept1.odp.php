<?php
if (file_exists("HighConcept1.odp")) {
header("Content-disposition: attachment; filename=\"HighConcept1.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("HighConcept1.odp"));
readfile("HighConcept1.odp");
}
?>