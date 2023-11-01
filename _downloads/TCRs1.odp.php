<?php
if (file_exists("TCRs1.odp")) {
header("Content-disposition: attachment; filename=\"TCRs1.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("TCRs1.odp"));
readfile("TCRs1.odp");
}
?>