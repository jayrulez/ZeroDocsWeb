<?php
if (file_exists("Scope_and_Sequence_for_VD1.xlsx")) {
header("Content-disposition: attachment; filename=\"Scope_and_Sequence_for_VD1.xlsx\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("Scope_and_Sequence_for_VD1.xlsx"));
readfile("Scope_and_Sequence_for_VD1.xlsx");
}
?>