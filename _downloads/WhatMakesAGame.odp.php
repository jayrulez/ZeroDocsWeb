<?php
if (file_exists("WhatMakesAGame.odp")) {
header("Content-disposition: attachment; filename=\"WhatMakesAGame.odp\"");
header("Content-type: application/octet-stream");
header('Content-Length: ' . filesize("WhatMakesAGame.odp"));
readfile("WhatMakesAGame.odp");
}
?>