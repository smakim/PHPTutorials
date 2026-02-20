<?php

// PHP Configuration Reference: https://www.php.net/manual/en/ini.list.php
echo "<h1>PHP Configurations</h1>";
echo "PHP Configuration Settings Reference: <a href='https://www.php.net/manual/en/ini.list.php'>https://www.php.net/manual/en/ini.list.php</a><br><br>";

echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Loaded Extensions: " . implode(", ", get_loaded_extensions()) . "</p>";
echo "<p>Memory Limit: " . ini_get("memory_limit") . "</p>";
echo "<p>Max Execution Time: " . ini_get("max_execution_time") . " seconds</p>";
ini_set("max_execution_time", 60);
echo "<p>Updated Max Execution Time: " . ini_get("max_execution_time") . " seconds</p>";
echo "<p>Display Errors: " . (ini_get("display_errors") ? "On" : "Off") . "</p>";
echo "<p>Error Reporting Level: "   . error_reporting() . "</p>";
echo "<p>Display Error Level E_ALL: " . E_ALL . "</p>";
echo "<p>Default Timezone: " . date_default_timezone_get() . "</p>";
echo "<p>Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
echo "<p>PHP SAPI: " . php_sapi_name() . "</p>";
echo "<p>PHP Extensions Directory: " . ini_get("extension_dir") . "</p>";
echo "<p>PHP Include Path: " . get_include_path() . "</p>";
echo "<p>PHP Error Log: " . ini_get("error_log") . "</p>";
echo "<p>File Uploads: " . (ini_get("file_uploads") ? "On" : "Off") . "</p>";
echo "<p>PHP Upload Temp Directory: " . ini_get("upload_tmp_dir") . "</p>";
echo "<p>PHP Upload Max Filesize: " . ini_get("upload_max_filesize") . "</p>";
echo "<p>PHP Post Max Size: " . ini_get("post_max_size") . "</p>";
echo "<p>PHP Max Input Vars: " . ini_get("max_input_vars") . "</p>";
echo "<p>PHP Session Save Path: " . ini_get("session.save_path") . "</p>";
echo "<p>PHP Session Name: " . ini_get("session.name") . "</p>";
echo "<p>PHP Session Cookie Lifetime: " . ini_get("session.cookie_lifetime") . " seconds</p>";
echo "<p>PHP Session Cookie Path: " . ini_get("session.cookie_path") . "</p>";
echo "<p>PHP Session Cookie Domain: " . ini_get("session.cookie_domain") . "</p>";
echo "<p>PHP Session Cookie Secure: " . (ini_get("session.cookie_secure") ? "On" : "Off") . "</p>";
echo "<p>PHP Session Cookie HttpOnly: " . (ini_get("session.cookie_httponly") ? "On" : "Off") . "</p>";
echo "<p>PHP Session Cookie SameSite: " . ini_get("session.cookie_samesite") . "</p>";
echo "<p>PHP Session Use Only Cookies: " . (ini_get("session.use_only_cookies") ? "On" : "Off") . "</p>";
echo "<p>PHP Session Use Trans_sid: " . (ini_get("session.use_trans_sid") ? "On" : "Off") . "</p>";
echo "<p>PHP Session Use Strict Mode: " . (ini_get("session.use_strict_mode") ? "On" : "Off") . "</p>";
echo "<p>PHP Session Use Cookies: " . (ini_get("session.use_cookies") ? "On" : "Off") . "</p>";