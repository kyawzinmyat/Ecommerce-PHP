<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = "Kyaw";
        define('PI', 3.14);
        function hello(){
            global $name;
            echo true;
        }
        $day = 'Monday';
        $test = match($day){
            'Monday' => 'Today is Monday',
            'Tuesday' => 'Today is Tuesday',
            default => 'Today is not Monday or Tuesday'
        };
        echo $test;
    ?>
    <?php if ($time < 6 || $time > 18): ?>
        <h1>Good night!</h1>
        <?php hello(); ?>
    <?php  else:  ?>
        <h1>Good morning!</h1>    
    <?php endif?>
</body>
</html>