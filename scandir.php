<?php
   $path    = '.';
   $files = scandir($path);
   $files = array_diff(scandir($path), array('.', '..'));
?>
<input class="form-control col-xs-1" id="ex1" type="text">