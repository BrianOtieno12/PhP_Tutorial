<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Boolean Type</h1>
    <p>Expresses a true or false value</p>
    <small>To specify a bool literal, use the constants <b>true</b> or <b>false</b></small>

    <ul>Example: $foo = True;
        <li> echo $foo:
            <?php
            $foo = True;
            echo $foo;
            ?>
        </li>
    </ul>
    <p>To convert a value to bool, use the (bool) or (boolean) casts</p>
    <p>How to print false or 0 instead of nothing</p>
    <small>Example 1: </small>
    <?php
        //solution 1
        $bool_exp1 = (bool)false;
        echo $bool_exp1 ? 'true' : 'false';
    ;?>
    <br>
    <small>Example 2: </small>
    <?php
        //solution2
        $bool_exp2 = (bool)false;
        echo json_encode($bool_exp2);
    ;?>
    <br>
    <small>Example 3: </small>
    <?php 
        //solution 3
        $bool_exp3 = (bool)false;
        echo var_export($bool_exp3);
    ;?>
    <br>
    <small>Example 4: </small>
    <?php 
        //solution 4
        $bool_exp4 = (bool)false;
        echo (int)$bool_exp4;
    ;?>
    <br>
    <small>Example 5: </small>
    <?php 
        //solution 5
        $bool_exp5 = (bool)false;
        var_dump($bool_exp5);
    ;?>
    <br>
    <p>Check explicitly for boolean values: </p>
    <small>Example 1: any non-existent element will remove element 'A'</small> <br>
    <small>Array: ['A', 'B', 'C']</small>
    <?php 
        function remove_element($element, $array){
            //array search returns index of element, and False if nothing is found
            $index = array_search($element, $array);
            unset($array[$index]);
            return $array;
        }

        //this will remove element 'A'
        $array = ['A', 'B', 'C'];
        $array = remove_element('A', $array);
        ?>
        <pre>
            <?php
                var_dump($array);
            ?>
        </pre>
        <?php


        //any non-existent element will remove element 'A'
        $array = ['A', 'B', 'C'];
        $array = remove_element('X', $array);
        ?>
        <pre>
            <?php
                var_dump($array);
            ?>
        </pre>
        <?php

    ;?>

<small>Example 2: any non-existent element will not remove element 'A'</small> <br>
<small>Array: ['A', 'B', 'C']</small>
    <?php 
        function remove_elements($element, $array){
            //array search returns index of element, and False if nothing is found
            $index = array_search($element, $array);
            if($index !== FALSE)
            {
                unset($array[$index]);
            }
            return $array;
        }

        //this will remove element 'A'
        $array = ['A', 'B', 'C'];
        $array = remove_elements('A', $array);
        ?>
        <pre>
            <?php
                var_dump($array);
            ?>
        </pre>
        <?php


        //any non-existent element will remove element 'A'
        $array = ['A', 'B', 'C'];
        $array = remove_elements('X', $array);
        ?>
        <pre>
            <?php
                var_dump($array);
            ?>
        </pre>
        <?php

    ;?>
</body>
</html>