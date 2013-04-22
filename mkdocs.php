#!/usr/local/bin/php -q
<?php
  $cwd = getcwd();
  passthru("phpdoc -t \"$cwd/api-docs\" -f \"$cwd/phpagi.php,$cwd/phpagi-asmanager.php,$cwd/phpagi-fastagi.php,$cwd/phpagi_1.php\" -pp on -ti \"phpAGI\" -o HTML:frames:earthli -s on");
?>


