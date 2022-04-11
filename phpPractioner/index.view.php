<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        header{
            /* padding: 2em;
            text-align: center; */
        }
    </style>
</head>
<body>

<header>
    <ul>
        {# Option 1 #}
        <?php 
            foreach ($names as $name) {
               echo "<li>$name</li>";
            }
        ?>

        <br>

        {# Option 2 #}

        <?php foreach($names as $name):?>

            <li><?= $name ;?></li>
            
        <?php endforeach ;?>
    </ul>
</header>
    
</body>
</html>