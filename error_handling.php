<?php
echo "<h1>Error Handling in PHP</h1>";

// Error Handling Constants Reference: https://www.php.net/manual/en/errorfunc.constants.php
echo "<p>Error Handling Constants Reference: <a href='https://www.php.net/manual/en/errorfunc.constants.php'>https://www.php.net/manual/en/errorfunc.constants.php</a></p>";
// Error Handling Functions Reference: https://www.php.net/manual/en/function.set-error-handler.php
echo "<p>Error Handling Functions Reference: <a href='https://www.php.net/manual/en/function.set-error-handler.php'>https://www.php.net/manual/en/function.set-error-handler.php</a></p>";

echo "<p>Current Error Reporting Level: " . error_reporting() . "</p>";
trigger_error("This is a user-generated notice.", E_USER_NOTICE);
trigger_error("This is a user-generated warning.", E_USER_WARNING);
// trigger_error("This going to cause a fatal error.", E_WARNING); // This will not stop the script execution
// trigger_error("This is a user-generated error.", E_USER_ERROR); // This will stop the script execution

// Custom error handler function
function customErrorHandler(int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
    echo "<p><strong>Error:</strong> [$errno] $errstr - $errfile:$errline</p>";
    // Log the error to a file
    // error_log("Error: [$errno] $errstr - $errfile:$errline", 3, "error_log.txt");
    exit;
}

// Set the custom error handler
set_error_handler("customErrorHandler", E_ALL);

// Trigger an error to test the custom error handler
// trigger_error("This is a test error to trigger the custom error handler.", E_USER_ERROR);

echo $x; // This will trigger an undefined variable notice, which will be handled by the custom error handler

restore_error_handler(); // Restore the previous error handler

echo $y;

