<?php
function Kineticka($m, $v)
{
    return ($m * $v * $v)/2;
}
function Kvadratna($kateta1, $kateta2)
{
    return($kateta1**2 + $kateta2**2);
}
function Energija($masa)
{
    $brzSvj = 300000;
    return ($masa * $brzSvj**2);
}
function Povrsina($prvaStr, $drugaStr)
{
    return ($prvaStr * $drugaStr)/2;
}
function KamenSkare($igrac)
{
    if ($igrac == 1)
    {
        echo "Igrac - kamen";
    }
    if ($igrac == 2)
    {
        echo "Igrac - skare";
    }
    if ($igrac == 3)
    {
        echo "Igrac - papir";
    }
    $cpu = rand(1, 3);
    if ($igrac == 1 and $cpu == 1)
    {
        echo "DRAW";
    }
    if ($igrac == 1 and $cpu == 2)
    {
        echo "Player wins";
    }
    if ($igrac == 1 and $cpu == 3)
    {
        echo "CPU wins";
    }
    if ($igrac == 2 and $cpu == 1)
    {
        echo "CPU wins";
    }
    if ($igrac == 2 and $cpu == 2)
    {
        echo "DRAW";
    }
    if ($igrac == 2 and $cpu == 3)
    {
        echo "Player wins";
    }
    if ($igrac == 3 and $cpu == 1)
    {
        echo "Player wins";
    }
    if ($igrac == 3 and $cpu == 2)
    {
        echo "CPU wins";
    }
    if ($igrac == 1 and $cpu == 1)
    {
        echo "DRAW";
    }
}
?>
