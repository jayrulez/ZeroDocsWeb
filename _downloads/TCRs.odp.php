<?php
if (file_exists("TCRs.odp")) {
header("Content-disposition: attachment; filename=\"TCRs.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("TCRs.odp"));
readfile("TCRs.odp");
}
?>