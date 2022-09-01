<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>
    <?php
    include 'classes/Car.php';
    $car1=new Car("Mercedes AMG", "one" , 2017);
    $car2=new Car("Nissan Skyline", "r34 gtr v-spec" , 1999);
    $car3=new Car("Nissan GTR", "r35" , 2015);

    echo $car1->getBrand() . " " . $car1->getModel() . " is gebouwd in : " . $car1->getBuild() . "<br>";
    echo $car2->getBrand() . " " . $car2->getModel() . " is gebouwd in : " . $car2->getBuild() . "<br>";
    echo $car3->getBrand() . " " . $car3->getModel() . " is gebouwd in : " . $car3->getBuild() . "<br>";

    ?>
</h1>
</body>
</html>