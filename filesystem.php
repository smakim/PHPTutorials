<?php

echo "<h1>PHP Filesystem Functions</h1>";
// Filesystem Functions Reference: https://www.php.net/manual/en/ref.filesystem.php
echo "<p>PHP Filesystem Functions Reference: <a href='https://www.php.net/manual/en/ref.filesystem.php'>https://www.php.net/manual/en/ref.filesystem.php</a></p>";

// scandir() example
echo "<h2>scandir() Example</h2>";
$directory = ".";
$files = scandir($directory);
echo "<p>Files in directory '$directory':</p><ul>";
$x = 0;
foreach ($files as $file) {
    echo "<li>$file</li>";
    $x++;
    if ($x > 5) {
        break; // Limit the output to 5 files for demonstration
    }
}
echo "</ul>";

// is_file() example
echo "<h2>is_file() Example</h2>";
$filePath = "filesystem.php";
if (is_file($filePath)) {
    echo "<p>'$filePath' is a file.</p>";
} else {
    echo "<p>'$filePath' is not a file.</p>";
}

// is_dir() example
echo "<h2>is_dir() Example</h2>";
$dirPath = ".";
if (is_dir($dirPath)) {
    echo "<p>'$dirPath' is a directory.</p>";
} else {
    echo "<p>'$dirPath' is not a directory.</p>";
}

// mkdir() example
echo "<h2>mkdir() Example</h2>";
$newDir = "new_directory";
if (!is_dir($newDir)) {
    if (@mkdir($newDir, 0755)) {
        echo "<p>Directory '$newDir' created successfully.</p>";
    } else {
        echo "<p>Failed to create directory '$newDir'. Check write permissions.</p>";
    }
} else {
    echo "<p>Directory '$newDir' already exists.</p>";
}

// rmdir() example
echo "<h2>rmdir() Example</h2>";
if (is_dir($newDir)) {
    if (@rmdir($newDir)) {
        echo "<p>Directory '$newDir' removed successfully.</p>";
    } else {
        echo "<p>Failed to remove directory '$newDir'. Make sure it's empty and check write permissions.</p>";
    }
} else {
    echo "<p>Directory '$newDir' does not exist.</p>";
}

// mkdir recursive example
echo "<h2>mkdir() Recursive Example</h2>";
$nestedDir = "parent/child/grandchild";
if (!is_dir($nestedDir)) {
    if (@mkdir($nestedDir, 0755, recursive: true)) {
        echo "<p>Nested directory '$nestedDir' created successfully.</p>";
    } else {
        echo "<p>Failed to create nested directory '$nestedDir'. Check write permissions.</p>";
    }
} else {
    echo "<p>Nested directory '$nestedDir' already exists.</p>";
}

// file_exists() example
echo "<h2>file_exists() Example</h2>";
if (file_exists($filePath)) {
    echo "<p>File '$filePath' exists.</p>";
    echo "<p>File Size: " . filesize($filePath) . " bytes</p>";
} else {
    echo "<p>File '$filePath' does not exist.</p>";
}

// file_put_contents() example
echo "<h2>file_put_contents() Example</h2>";
$content = "This is a test file created by file_put_contents().";
if (@file_put_contents("test_file.txt", $content) !== false) {
    echo "filesize of 'test_file.txt': " . filesize("test_file.txt") . " bytes<br>";
    echo "<p>File 'test_file.txt' created successfully with content.</p>";
} else {
    echo "<p>Failed to create file 'test_file.txt'. Check write permissions.</p>";
}

// fopen() and fwrite() example
echo "<h2>fopen() and fwrite() Example</h2>";
$handle = @fopen("test_file2.txt", "w");
if ($handle) {
    $data = "This is a test file created using fopen() and fwrite().";
    if (fwrite($handle, $data) !== false) {
        echo "<p>File 'test_file2.txt' created successfully with content.</p>";
    } else {
        echo "<p>Failed to write to file 'test_file2.txt'. Check write permissions.</p>";
    }
    fclose($handle);
} else {
    echo "<p>Failed to open file 'test_file2.txt' for writing. Check write permissions.</p>";
}

$handle = @fopen("test_file3.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        echo "<p>Read from 'test_file3.txt': $line</p>";
    }
    fclose($handle);
} else {
    echo "<p>Failed to open file 'test_file3.txt' for reading. Check write permissions.</p>";
}

// fgetscsv() example
echo "<h2>fgetcsv() Example</h2>";
$csvFile = "test_file.csv";
$csvData = [
    ["Name", "Age", "City"],
    ["Alice", 30, "New York"],
    ["Bob", 25, "Los Angeles"],
    ["Charlie", 35, "Chicago"]
];
$handle = @fopen($csvFile, "w");
if ($handle) {
    foreach ($csvData as $row) {
        fputcsv($handle, $row);
    }
    fclose($handle);
    echo "<p>CSV file '$csvFile' created successfully.</p>";
} else {
    echo "<p>Failed to create CSV file '$csvFile'. Check write permissions.</p>";
}
$handle = @fopen($csvFile, "r");
if ($handle) {
    while (($data = fgetcsv($handle)) !== false) {
        echo "<p>Read from '$csvFile': " . implode(", ", $data) . "</p>";
    }
    fclose($handle);
} else {
    echo "<p>Failed to open CSV file '$csvFile' for reading. Check write permissions.</p>";
}

// file_get_contents() example
echo "<h2>file_get_contents() Example</h2>";
if (file_exists("test_file3.txt")) {
    $content = file_get_contents("test_file3.txt");
    echo "<p>Content of 'test_file3.txt': $content</p>";
} else {
    echo "<p>File 'test_file3.txt' does not exist.</p>";
}

// file_put_contents() with flags example
echo "<h2>file_put_contents() with Flags Example</h2>";
$additionalContent = "\nThis line is appended to the file.";
if (@file_put_contents("test_file.txt", $additionalContent, FILE_APPEND) !== false) {
    echo "<p>Content appended to 'test_file.txt' successfully.</p>";
    echo "<p>Updated content of 'test_file.txt':</p><pre>" . file_get_contents("test_file.txt") . "</pre>";
} else {
    echo "<p>Failed to append content to 'test_file.txt'. Check write permissions.</p>";
}

// unlink() example
echo "<h2>unlink() Example</h2>";
file_put_contents("test_file4.txt", "This file will be deleted using unlink().");
if (file_exists("test_file4.txt")) {
    if (@unlink("test_file4.txt")) {
        echo "<p>File 'test_file4.txt' deleted successfully using unlink().</p>";
    } else {
        echo "<p>Failed to delete file 'test_file4.txt'. Check write permissions.</p>";
    }
} else {
    echo "<p>File 'test_file4.txt' does not exist.</p>";
}

// copy() example
echo "<h2>copy() Example</h2>";
if (file_exists("test_file.txt")) {
    if (@copy("test_file.txt", "test_file_copy.txt")) {
        echo "<p>File 'test_file.txt' copied successfully to 'test_file_copy.txt'.</p>";
    } else {
        echo "<p>Failed to copy file 'test_file.txt'. Check write permissions.</p>";
    }
} else {
    echo "<p>File 'test_file.txt' does not exist.</p>";
}

// rename() example
echo "<h2>rename() Example</h2>";
if (file_exists("test_file_copy.txt")) {
    if (@rename("test_file_copy.txt", "renamed_test_file.txt")) {
        echo "<p>File 'test_file_copy.txt' renamed successfully to 'renamed_test_file.txt'.</p>";
    } else {
        echo "<p>Failed to rename file 'test_file_copy.txt'. Check write permissions.</p>";
    }
} else {
    echo "<p>File 'test_file_copy.txt' does not exist.</p>";
}

// pathinfo() example
echo "<h2>pathinfo() Example</h2>";
$filePath = "renamed_test_file.txt";
if (file_exists($filePath)) {
    $pathInfo = pathinfo($filePath);
    echo "<p>Path info for '$filePath':</p><pre>" . print_r($pathInfo, true) . "</pre>";
} else {
    echo "<p>File '$filePath' does not exist.</p>";
}


?>