<?php
// PHP Array
// * indexed array
/* $cars = array('BMW', 'Ferrari', 'TOYOTA');
echo "I Like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."; */

// * count array list
/* $colors = array('red', 'green', 'blue', 'orange', 'yellow');
echo count($colors); */

// * Associative Array with foreach loop
/* $info = array('Sujon' => 22, 'Riman' => 21);
foreach($info as $name => $age) {
    echo "$name is $age years old. <br>";
} */

// * Multidimensional Array 
/* echo "<table border='1' cellpadding='5' cellspacing='0' width='50%'>";
echo "<tr>
    <th>Name</th>
    <th>Stock</th>
    <th>Sold</th>
</tr>";
$cars = array(
    array('Volvo', 20, 12),
    array('BMW', 10, 8),
    array('TOYOTA', 15, 9),
    array('Saab', 18, 6),
    array('Ferrari', 21, 17)
);

foreach($cars as $row) {
    echo "<tr>";
    foreach($row as $col) {
        echo "<td>$col</td>";
    }
    echo "</td>";
}
echo "</table>"; */

// ? Sorting Array
// * sort array
/* $cars = array('BMW', 'TOYOTA', 'Ferrari', 'Saab');
sort($cars);
$cars_length = count($cars);
for($x = 0; $x < $cars_length; $x++) {
    echo $cars[$x];
    echo "<br>";
}
 */

// * rsort array
/* $numbers = array(4, 2, 6, 11, 9);
rsort($numbers);
$num_len = count($numbers);
for($i = 0; $i < $num_len; $i++) {
    echo $numbers[$i];
    echo "<br>";
} */

// * asort array
$numbers = array(4, 2, 6, 11, 9);
asort($numbers);
$num_len = count($numbers);
for($i = 0; $i < $num_len; $i++) {
    echo $numbers[$i];
    echo "<br>";
}


