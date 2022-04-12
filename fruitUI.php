<?php
#goal: to display property $name inside this file
    #1: connect UI file to class "file"
    include 'classes/Fruits.php';
    #2: create an object: what is an object? an object is a copy of your class. a brige to use the method or property inside the class
        #syntax: $variableName =new ClassName;
    $fruitOBj = new Fruits;
    #3 display the property
        #syntax: echo $objName->propertyName

        $fruitname='grapes';
        $fruitcolor='green';
        $fruitsize='small';

        $fruitOBj->set_data($fruitname,$fruitcolor,$fruitsize);

        // $fruitOBj->set_data('banana','yellow','big');

        echo "Fruit Name: " . $fruitOBj->get_name();
        echo "<br>";
        echo "Fruit Color:" . $fruitOBj->get_color();
        echo "<br>";
        echo "Fruit Size:" . $fruitOBj->get_size();
?>