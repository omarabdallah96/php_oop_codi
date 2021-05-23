<?php


function word_counter($str, $word)
{
    $a = explode(" ", $str);

    $count = 0;
    for ($i = 0; $i < sizeof($a); $i++) {
        if ($word == $a[$i]) {
            $count++;
        }
    }

    return $count;
}

$str = "Joseph is the Programme Director at Codi, responsible 
for all operations across Codi activities (incl.
 Administration & Logistics, IT, Finance & Fundraising,
  Marketing & Social Media). He is also responsible for
   relationships with our Employment partners, mainly through project
    and internship opportunities with current students. Outside Codi, 
    Joseph consults pro-bono as a sales consultant for various software companies.


Joseph is passionate about Codi because he
 believes in the power of programming as a tool 
 to building a better future and a long term sustainable 
 career. His mission: to inspire and empower.


Before Codi, Joseph worked as an Operations Manager
 across multiple sectors (IT, Retail, Software) and has 
 over ten years’ experience. He holds a B.Sc. in Management I
 nformation Systems and an MBA from AUST (Beirut, Lebanon).";
$word = "Joseph";
echo(word_counter($str, $word));
