<?php
if (file_exists("WhatMakesAGame1.odp")) {
header("Content-disposition: attachment; filename=\"WhatMakesAGame1.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("WhatMakesAGame1.odp"));
readfile("WhatMakesAGame1.odp");
}
?>