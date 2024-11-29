<?php
function redirectTo($path)
{
   if (isset($path)) {
      header("Location: " . _WEB_ROOT . '/' . $path);
      exit;
   }
};
