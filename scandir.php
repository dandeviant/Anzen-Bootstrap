<?php

   $scan = scandir('.');
   foreach($scan as $file) {
      if (!is_dir("./$file")) {
         echo $file.'<br>';
      }
      else {
         echo $file." is a Folder";
         echo "<br>";
      }

   }

?>
<script>
   document.write("Hello World");
</script>