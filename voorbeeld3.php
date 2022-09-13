<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Object georienteerd programmeren</title>
</head>
<body>
<h1>
    <?php
    include "classes/Person.php";
    include "classes/Student.php";
    include "classes/Subject.php";

    $person1=new Person("Piet", 15);
    $person2=new Person("Klaas", 20);

    echo $person1->getName() . " is " . $person1->getAge() . " jaar oud. <br>";
    echo $person2->getName() . " is " . $person2->getAge() . " jaar oud. <br>";

    $student1=new Student("Eelco", 51,"ICT");
    echo $student1->getName() . " is " . $student1->getAge() . " jaar oud en studeert: ". $student1->getEducation();

    $student1->setSubject(new Subject("Duits"));
    $student1->setSubject(new Subject("Nederlands"));
    $student1->setSubject(new Subject("Database"));
    $student1->setSubject(new Subject("PHP"));

    $subjects=$student1->getSubjects();

    foreach ($subjects as $subject){
        echo "<br>" . $subject->getName();
    }
    ?>
</h1>
</body>
</html>