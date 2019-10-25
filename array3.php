<?php
$my_array = array(1,2,3,4,5,6,7,8,9,10);
$sredina = 0;
$zbroj = 0;
for($i = 0; $i<10; $i++)
{
    $zbroj += $my_array[$i];
}
$sredina = $zbroj/(sizeof($my_array));
echo "Aritmeticka sredina je = " . $sredina;
?>