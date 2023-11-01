<?php
if (file_exists("PlatformerCP.odp")) {
header("Content-disposition: attachment; filename=\"PlatformerCP.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("PlatformerCP.odp"));
readfile("PlatformerCP.odp");
}
?>