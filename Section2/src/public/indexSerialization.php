<?php

require_once __DIR__ . '/../vendor/autoload.php';

echo "<h1>Serialization in PHP</h1>";
echo "More documentation at: <a href='https://www.php.net/manual/en/language.oop5.serialization.php'>Serialization Reference</a> <br>";
echo "Magic Methods documentation at: <a href='https://www.php.net/manual/en/language.oop5.magic.php'>Magic Method Reference</a> <br>";
echo "Tutorial video: <a href='https://youtu.be/Jnm2m_Iw5CI?si=NGFq-TEoxndjDkMy'>https://youtu.be/Jnm2m_Iw5CI?si=NGFq-TEoxndjDkMy</a> <br>";

$invoice = new App\Serialization\Invoice();

echo "<h2>Primitive Serialization</h2>";
echo serialize(true) . '<br />';
echo serialize(1) . '<br />';
echo serialize(2.5) . '<br />';
echo serialize('Hello World') . '<br />';
echo serialize([1, 2, 3]) . '<br />';
echo serialize(['one' => 1, 'two' => 2, 'three' => 3]) . '<br />';

echo "<h2>Object Serialization</h2>";
echo "properties with different visibility are represented differently when serializing the object.<br />";
echo serialize($invoice);

echo "<h2>Unserialization</h2>";
var_dump(unserialize(serialize($invoice))); echo '<br />';

echo "<h3>unseriazing creates a new object.</h3>";
$str = serialize($invoice);
$invoice2 = unserialize($str);

var_dump($invoice, $invoice2, $invoice === $invoice2, $invoice == $invoice2); echo '<br />';

echo "<h3>Serialization magic methods __sleep(), __wakeup(), __serialize() and __unserialize()</h3>";
echo "<h4>If you have both _sleep() and __serialize() methods, only __serialize() will be called.</h4>";
echo "<h4>If you have both _wakeup() and __unserialize() methods, only __serialize() will be called.</h4>";
$invoice2 = new App\Serialization\Invoice2(10, 'Invoice 1', '1234567890');
$str2 = serialize($invoice2);
echo $str2 . '<br />';
$invoice3 = unserialize($str2);
var_dump($invoice3); echo '<br />';

echo '--------------- END ---------------<br />';

