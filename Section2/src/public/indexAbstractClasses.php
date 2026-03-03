<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';


echo "<h4>Abstract Classes</h4>";

$fields = [
    new \App\AbstractClasses\Text('textField'),
    new \App\AbstractClasses\Checkbox('checkboxField'),
    new \App\AbstractClasses\Radio('radioField'),
];

foreach($fields as $field) {
    echo $field->render() . '<br />';
}
