<?php
if (file_exists("PolishAndPlayerFeedback.odp")) {
header("Content-disposition: attachment; filename=\"PolishAndPlayerFeedback.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("PolishAndPlayerFeedback.odp"));
readfile("PolishAndPlayerFeedback.odp");
}
?>