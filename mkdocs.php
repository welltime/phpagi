#!/usr/bin/env php
<?php
  $cwd = getcwd();
  passthru("phpdoc -t \"$cwd/api-docs\" -f \"$cwd/phpagi.php,$cwd/phpagi-asmanager.php,$cwd/phpagi-fastagi.php\" -pp on -ti \"phpAGI\" -o HTML:frames:earthli -s on");
?>


