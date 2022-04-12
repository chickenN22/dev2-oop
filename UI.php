<?php
    include 'classes/Fruits.php';
    $fruitOBj = new Fruits;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Fruit Name:
        <input type="text" name="fruit-name" id="">
        <br>
        Fruit Color:
        <input type="text" name="fruit-color" id="">
        <br>
        Fruit Size:
        <input type="text" name="fruit-size" id="">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $fruitname=$_POST['fruit-name'];
            $fruitcolor=$_POST['fruit-color'];
            $fruitsize=$_POST['fruit-size'];

            $fruitOBj->set_data($fruitname,$fruitcolor,$fruitsize);

            echo "Fruit Name:". $fruitOBj->get_name();
            echo "<br>";
            echo "Fruit Color:". $fruitOBj->get_color();
            echo "<br>";
            echo "Fruit Size:". $fruitOBj->get_size();
            echo "<br>";
        }

    ?>
</body>
</html>