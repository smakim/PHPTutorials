<?php

declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';

echo "<h1>PHP Tutorial</h1>";
echo "More documentation at: <a href='https://www.php.net/manual/en/'>PHP Reference</a> <br>";

// create html table to creat href links to other files in this directory
echo '<table>';
echo '<tr>';
echo '<td><a href="indexObjects.php">Objects</a></td>';
echo '</tr>';
echo '<tr>';
echo '<td><a href="indexNamespaces.php">Namespaces</a></td>';
echo '</tr>';
echo '<tr>';
echo '<td><a href="indexInterfaces.php">Interfaces</a></td>';
echo '</tr>';
echo '<tr>';
echo '<td><a href="indexInheritance.php">Inheritance</a></td>';
echo '</tr>';
echo '<tr>';
echo '<td><a href="indexAbstractClasses.php">Abstract Classes</a></td>';
echo '</tr>';
echo '<tr>';
echo '<td><a href="indexMagicMethods.php">Magic Methods</a></td>';
echo '</tr>';
echo '<tr>';
echo '<td><a href="indexStaticBinding.php">Late Static Binding</a></td>';
echo '</tr>';
echo '<tr>';
echo '<td><a href="indexTraits.php">Traits</a></td>';
echo '</tr>';
echo '<tr>';
echo '<td><a href="indexAnonymous.php">Anonymous Classes & Functions</a></td>';
echo '</tr>';
echo '<tr>';
echo '<td><a href="indexCloning.php">Cloning</a></td>';
echo '</tr>';
echo '<tr>';
echo '<td><a href="indexSerialization.php">Serialization</a></td>';
echo '</tr>';
echo '<tr>';
echo '<td><a href="indexErrorHandling.php">Error Handling 1</a></td>';
echo '</tr>';
echo '<tr>';
echo '<td><a href="indexErrorHandling2.php">Error Handling 2</a></td>';
echo '</tr>';
echo '</table>';


