
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--
<form method="Get">                     //Create Method
    <input type="Text" name="person">   //input will be safed in Variable "name"   
    <button>SUBMIT</button>             //Create Button named SUBMIT
</form>
-->


<?php

/* Lesson 3, print out stuff

    echo "Hi there! ";   //echo is faster than print
    print "Github ";
    echo 7;             //prints out the number. No Quotationsmarks needed
    echo 10 + 5;        //Simple Math functions.
*/



/* Lesson 4, Variables 
    $name = "Kyrugaa ";         //Create Variable
    echo $name;                 //Print out Variable
    $name = $_GET['person'];    //Variable name is now equal to the input "person"
    echo $name." is busy";      //Combine Variable with String
*/



/*Lesson 5, Functions
    echo strlen("Hi Lorem");            //Prints out how many letter/ (Function)strlen = String lenght
    echo str_word_count("Hi Lorem");    //Prints out the number of Words
    echo strrev("Hi Lorem");            //Prints out text backwards (meroL iH)
    echo strpos("Hi Lorem", "Hi");      //Prints out the position of Hi (0)
    echo str_replace("Lorem", "ipsum", "Hi Lorem"); //Replaces the word Lorem with the word ipsum
*/



/* Lesson 6, Different Datatypes
    //Array
    $name = array("Lorem","Ipsum","Lorem2");    //Create Array
    echo $name['1']; 
*/



/* Lesson 8+9+10+11+12, Operators
    //Arthmetic Operators
    echo 5+5;               //The + is the Arethmetic Operator in this case
    echo 5**5;              //** is 5 power 5

    //Assigment Operators
    $x = 100;               //Variable x has a value of 100
    $x = $x + 20;           //Variable x is variable x + 20 (120)
    //same as
    $x += 20;               //Variable x is variable x + 20 (120)

    echo $x;                //Prints out Variable x

    //Comparsion Operators
    $x = "10";                 //Variable x has a value of 5
    $y = 10;                //Variable y has a value of 10

    if($x != $y){           //Checks if variable x includes NOT the same value. If so, it prints out True
        echo "True";
    }
    else{
        echo "False";
    }

    if($x === $y){           //Checks if variable x includes the same value AND the same Datatype. Both conditions have to be the same to write out True
        echo "True";
    }
    else{
        echo "False";
    }

    //Increment/Decrement Operators
    $x = 10;
    echo ++$x;              //++ means add 1

    //Logical Operators
    $x = 10;                //Variable x has a value of 10
    $y = 20;                //Variable y has a value of 20

    if ($x == $y){          //A if statement who checks if Variable x is the same as variable y
        echo "True";
    }

    if ($x == $y or 1 == 1){          //Logical operator, checks if one of those conditions is true. If so, it prints True
        echo "True";
    }

    if ($x == $y and 1 == 1){          //Checks if both conditions are True
        echo "True";
    }

    if ($x == $y xor 1 == 1){          //Just one of those conditions have to be True to print out True
        echo "True";
    }
*/

   

?>
    
</body>
</html>


