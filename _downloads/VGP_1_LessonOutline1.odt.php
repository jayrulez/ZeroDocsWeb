<?php
if (file_exists("VGP_1_LessonOutline1.odt")) {
header("Content-disposition: attachment; filename=\"VGP_1_LessonOutline1.odt\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("VGP_1_LessonOutline1.odt"));
readfile("VGP_1_LessonOutline1.odt");
}
?>