<?php
if (file_exists("PlatformerCP1.odp")) {
header("Content-disposition: attachment; filename=\"PlatformerCP1.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("PlatformerCP1.odp"));
readfile("PlatformerCP1.odp");
}
?>