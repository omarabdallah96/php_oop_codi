<?php
// Define a class
 class Myclass
 {
    // Declaring three private varaibles
    private $str;


    // Declarte construct method which accepts three parameters
    function __construct($str)
    {
        $this->str = $str;
      
    }

    // Declare a method for customize print
    function customize_print()
    {
        echo "<p >"."Hello All, I am  ".$this->str."</p>";
    }
 }

// Create a new object and passes three parameters
 $f = new MyClass('Scott ');

// Call the method to display the string
 echo $f->customize_print();
 ?>
