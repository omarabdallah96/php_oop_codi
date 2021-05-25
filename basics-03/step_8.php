<?php
$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 3,
       "name"=> "omar",
       "email"=> "omar@codi.tech"
    )
);
foreach ( $transactions as $key => $value ){

    echo "$key= $value\n";


}

?>
