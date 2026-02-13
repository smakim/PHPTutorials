<?php
    echo "<h1>Strings in PHP</h1>";

    $firstName = "John";
    $lastName = 'Doe';

    echo "First Name: " . $firstName . "<br>";
    echo "Last Name: " . $lastName . "<br>";
    
    echo "Full Name: {$firstName} {$lastName}<br>";

    $name = $firstName . " " . $lastName;
    echo "Concatenated Name: " . $name . "<br>";

    echo $name[2] . "<br>"; // prints 'h' (3rd character)
    echo $name[-2] . "<br>"; // prints 'o' (2nd last character)
    echo strlen($name) . "<br>"; // prints length of the string

    $name[12] = 'X'; // modifies the string (if index is out of bounds, it will add blank spaces as needed)
    echo "Modified Name: " . $name . "<br>";
    echo "Length of Modified Name: " . strlen($name) . "<br>"; // length may increase if index is out of bounds
    var_dump($name);
    echo "<br>";

    //here-doc syntax
    $heredoc = <<<EOT
This is a heredoc string. ' ""
It can span multiple lines.
$firstName and $lastName will be parsed.
EOT;
    echo nl2br($heredoc) . "<br>";

    //now-doc syntax
    $nowdoc = <<<'EOT'
This is a nowdoc string. ' ""
It can also span multiple lines.
$firstName and $lastName will NOT be parsed.
EOT;
    echo nl2br($nowdoc) . "<br>";

  
?>
