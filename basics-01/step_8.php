<?php
//simple array 
$grocery=array("Eggs","Milk","Cheese","Water Pack","Tissues","Watermelon");  
//multi array
$items=[
['balade','balade'],
['fresh','Taanayel'],
['Tanoureen', 'Reem']



];
echo "Hey Sir, Please I need 1 pack of ". $items[0][0]." eggs and 3 ".$items[2][1] ." Water Pack";
echo"<br>";

echo "Hello Sir, do you have  $grocery[0], $grocery[1] and $grocery[2]?"." also if you sell fruits can I find a $grocery[5]";  

?>


