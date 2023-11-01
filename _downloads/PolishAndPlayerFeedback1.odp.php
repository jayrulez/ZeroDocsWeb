<?php
if (file_exists("PolishAndPlayerFeedback1.odp")) {
header("Content-disposition: attachment; filename=\"PolishAndPlayerFeedback1.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("PolishAndPlayerFeedback1.odp"));
readfile("PolishAndPlayerFeedback1.odp");
}
?>