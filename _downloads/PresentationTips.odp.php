<?php
if (file_exists("PresentationTips.odp")) {
header("Content-disposition: attachment; filename=\"PresentationTips.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("PresentationTips.odp"));
readfile("PresentationTips.odp");
}
?>