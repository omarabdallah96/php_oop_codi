<pre><?php
$x=0;
while ($x<=10) {
    for ($j=0;$j<=$x;$j++) {
        print_r("*");
    }
    $x++;
    print_r("\xa") ;
}
?></pre>