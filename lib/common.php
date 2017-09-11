<?php
// ProtonForum - Shared Functionality

// Error reporting mode
error_reporting(E_ALL ^ E_NOTICE | E_STRICT);

// Check for the config file or redirect to install
if(!is_file("db/config.php"))
	die(header("Location: installer/install.php"));
  
// Auto-get forum root
$forumRoot = preg_replace('{/[^/]*$}', '/', $_SERVER['SCRIPT_NAME']);

?>
