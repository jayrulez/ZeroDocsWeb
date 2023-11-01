<?php
if (file_exists("GameProductionAndExpectations1.odp")) {
header("Content-disposition: attachment; filename=\"GameProductionAndExpectations1.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("GameProductionAndExpectations1.odp"));
readfile("GameProductionAndExpectations1.odp");
}
?>