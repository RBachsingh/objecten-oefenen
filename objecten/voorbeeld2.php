<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>object georienteerd programmeren</title>
</head>
<body>
<h1>
    <?php
    include 'classes/Person.php';

    $person1=new Person("Piet", 15);

    $person2=new Person('Klaas', 20);
    echo $person1->getName() . " is " . $person1->getAge() . " jaar oud. <br>";
    echo $person2->getName() . " is " . $person2->getAge() . " jaar oud. <br>";
    ?>
</h1>
</body>
</html>