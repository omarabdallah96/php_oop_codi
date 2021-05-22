<?php
function greaterFn($n)
{
    $r= $n ;
    if ($n > 30) {
        echo "$r greater than 30";
    } elseif ($n > 20) {
        echo " $r greater than 20";
    } elseif ($n > 10) {
        echo " $r greater than 10";
    } elseif ($n <10) {
        echo " $r greater than 10";
    }
}
greaterFn(40);
greaterFn(21);
greaterFn(12);
greaterFn(8);
?>