<?php
if (file_exists("GameProductionAndExpectations.odp")) {
header("Content-disposition: attachment; filename=\"GameProductionAndExpectations.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("GameProductionAndExpectations.odp"));
readfile("GameProductionAndExpectations.odp");
}
?>