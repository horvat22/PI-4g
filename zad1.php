<?php
$ocjene = array("Matisa" => 5, "Hrvatski" => 4, "Engleski" => 5);
echo "Matematika: {$ocjene["Matisa"]} <br> " ;
echo "Hrvatski: {$ocjene["Hrvatski"]} <br> " ;
echo "Engleski: {$ocjene["Engleski"]} <br> " ;
$prosjek=($ocjene["Matisa"]+$ocjene["Hrvatski"]+$ocjene["Engleski"])/3;
echo "Prosjek: $prosjek";
?>