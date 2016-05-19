<?php
   $hostName = "localhost";
   $databaseName = "stream";
   $username = "mb";
   $password = "vayne";
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
