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
    {# Example 1 #}
    <p>Today's Task</p>
    <ul>
        <?php foreach($task as $heading => $val):?>
            <li><?=ucwords($heading)?>: <?=$val?></li>
       <?php endforeach ?>
    </ul>
    
    <br>

    {# Example 2 #}
    <p>Today's Task</p>
    <ul>
        <li><?=$task['title']?></li>
        <li><?=$task['assigned']?></li>
        <li><?=$task['due']?></li>
        <li><?=($task['completed'])?'completed':'Incomplete'?></li>
    </ul>
</header>
    
</body>
</html>