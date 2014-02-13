<?php
$dir = dir("DIRECTORY_TO_DISPLAY_HERE");
while (($file = $dir->read()) !== false)
{
 if ($file != '..' && $file != '.') {
  echo "$file";
 }
}
$dir->close();
?>