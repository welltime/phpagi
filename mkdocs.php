#!/usr/bin/env php
<?php
  $cwd = getcwd();
  passthru("phpdoc -t \"$cwd/api-docs\" -f \"$cwd/src/phpagi.php,$cwd/src/phpagi-asmanager.php,$cwd/src/phpagi-fastagi.php\" -pp on -ti \"phpAGI\" -o HTML:frames:earthli -s on");
?>


