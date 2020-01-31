
<?php

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/

?php
$food = array("Burgers", "Pizza", "Sandwiches", "Candy");
echo count($food);




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>Burgers</li>
  <li> Pizza</li>
  <li>Sandwiches</li>
  <li>Candy</li>
</ul>
*/


echo "<ul>";

$food = (array("Burgers","Pizza","Sandwiches", "Candy" as $string)) {
    echo "<li>".$string. "</li>}" }



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/


$food_assoc = array("Burgers"=>"main", "Pizza"=>"side", "Sandwiches"=>"entree", "Candy"=>"dessert");


/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

$food_assoc['Burgers'] = "main";
$food_assoc['Pizza'] = "side";
$food_assoc['Sandwciches'] = "entree";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$pizza = [
    "type" => "main course",
    "origin" => "italy",
    ];
    
    $cheesecake = [
    "type" => "dessert",
    "origin" => "greece",
    ];
  



/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/



function html_table($data = array())
    
{
    $rows = array();
    foreach ($food as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<td>{$cell}</td>";
        }
        $rows[] = "<tr>" . implode('type', $cells) . "</tr>";
    }
    return "<table class='table'>" . implode('origin', $rows) . "</table>";
}

$food = array(
    array('pizza' => 'main course', 'italy'),
    array('cheesecake' => 'greece', 'dessert'),
    );

echo html_table($food);

?>

