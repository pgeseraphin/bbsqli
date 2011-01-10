<?php

if (function_exists('mysql_real_escape_string')) { 
   echo "Function is available.<br />\n"; 
} else { 
   echo "Function is not available.<br />\n"; 
} 
phpinfo();
?>
