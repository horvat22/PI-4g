<?php
$pr=0;
$ocjene3 = array(
"Ucenik 1" => array("Matematika"=>2, "Engleski"=>3, "Fizika"=>3),
"Ucenik 2" => array("Matematika"=>3, "Engleski"=>4, "Fizika"=>5),
"Ucenik 3" => array("Matematika"=>4, "Engleski"=>5, "Fizika"=>5)
);
$keys = array_keys($ocjene3);
for($i = 0; $i < count($ocjene3); $i++) {
echo $keys[$i] . "<br>";
foreach($ocjene3[$keys[$i]] as $key => $value) {
echo $key . " : " . $value . "<br>";
$pr+=$value;
}
echo "Prosjek: ". $pr/3;
echo "<br><br>";
$pr=0;
}
