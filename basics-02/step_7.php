<?php
$paragraph = "Python: Python is one of the most 
popular choices of backend programming. It is relatively new and has enormous library support.
PHP: PHP has been in the market for a long time 
and it is widely used even today. Facebook, 
for instance, has its substantial backend developed in 
PHP in initial days.
JavaScript: With powerful
 web frameworks like NodeJS, JavaScript has captured a huge chunk of the market and emerged as one of the most popular backend programming languages.
Ruby: Ruby on Rails is one of the most popular web development frameworks and currently tons of startups use it.
";
// Display replaced string
echo str_replace("PHP", "Python", $paragraph),str_replace("Python", "PHP", $paragraph);

?>