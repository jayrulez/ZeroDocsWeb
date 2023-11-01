<?php
if (file_exists("PresentationTips1.odp")) {
header("Content-disposition: attachment; filename=\"PresentationTips1.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("PresentationTips1.odp"));
readfile("PresentationTips1.odp");
}
?>