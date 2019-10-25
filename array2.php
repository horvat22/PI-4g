<?php
$zbroj = 0;
$my_array = array(1,2,3,4,5,6,7,8,9,10);
for ($i = 0; $i<10; $i++)
{
    if($my_array[$i]%2==0)
    {
        $zbroj += $my_array[$i];
    }

}
echo "Zbroj parnih brojeva je = ". $zbroj;
?>