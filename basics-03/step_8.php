<?php
$transactions = array(
    "music" => array(
        "id" => 5,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    "mp3" =>  array(
       "id" => 3,
       "name"=> "omar",
       "email"=> "omar@codi.tech"
    )
);
foreach ( $transactions as $key => $value ){
   

   $id=$transactions[$key]["id"] ;
    
    $name=$transactions[$key]["name"] ;

    $email=$transactions[$key]["email"] ;


    echo 
    "<div class='grid-item' >
    <br>
    <br>
    <br>

    <table style='width: 100%; text-align: center;'  border = '1'>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
        </tr>

        <tr>
            <td>$id</td>
            <td>$name$</td>
            <td>$email</td>

        </tr>

    </table> 
    </div>
    </div>

    ";

}

?>
