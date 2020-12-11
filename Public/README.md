<IfModule mod_rewrite.c>
   Options +FollowSymLinks

   RewriteEngine on


   # Send request via index.php

   RewriteCond %{REQUEST_FILENAME} !-f

   RewriteCond %{REQUEST_FILENAME} !-d

   RewriteRule ^(.*)-(.*)-(.*)\.html$ index.php?p=$1&c=$2&a=$3 [L]


</IfModule>