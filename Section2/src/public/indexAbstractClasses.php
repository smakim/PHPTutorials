<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';


echo "<h1>Abstract Classes</h1>";
echo "More documentation at: <a href='https://www.php.net/manual/en/language.oop5.abstract.php'>Abstract Classes Reference</a> <br>";
echo "Tutorial video: <a href='https://youtu.be/UnwaW13xJuw?si=tzxm8K-D6TMgQSD0'>https://youtu.be/UnwaW13xJuw?si=tzxm8K-D6TMgQSD0</a> <br>";

$fields = [
    new \App\AbstractClasses\Text('textField'),
    new \App\AbstractClasses\Checkbox('checkboxField'),
    new \App\AbstractClasses\Radio('radioField'),
];

foreach($fields as $field) {
    echo $field->render() . '<br />';
}
