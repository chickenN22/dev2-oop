<?php
    include 'classes/Calculator.php';
    $calculatorOBj = new Calculator;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <div class="card w-50 mx-auto">
            <div class="card-header display-6">
                Calculator with OOP
            </div>
            <div class="card-body">
                <form action="" method="post">
                    Enter First Number
                    <input type="text" name="firstnumber" id="" class="form-control mt-1">
                    Enter Second Number
                    <input type="text" name="secondnumber" id="" class="form-control mt-1">
                    
                    <div class="form-check form-check-inline mt-2">
                        <input type="radio" name="arithmetic" id="addition" value="addition" class="form-check-input">
                        <label for="addition" class="form-check-label">Addition</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="arithmetic" id="subtraction" value="subtraction" class="form-check-input">
                        <label for="subtraction" class="form-check-label">Subtraction</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="arithmetic" id="multiplcation" value="multiplcation" class="form-check-input">
                        <label for="multiplcation" class="form-check-label">Multiplcation</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="arithmetic" id="division" value="division" class="form-check-input">
                        <label for="division" class="form-check-label">Division</label>
                    </div>
                    
                    <button type="submit" name="btn_calculate" class="btn btn-primary mt-3">Calculate</button>
                </form>
                <?php
                    if(isset($_POST['btn_calculate'])){
                        $firstnumber = $_POST['firstnumber'];
                        $secondnumber = $_POST['secondnumber'];
                        $arithmetic = $_POST['arithmetic'];

                        $calculatorOBj->set_data($firstnumber,$secondnumber);

                        echo "<div class='alert alert-success mt-3'>The answer is: ". $calculatorOBj->get_calculation(). "</div>";
                        
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4367b61034.js" crossorigin="anonymous"></script>
</body>
</html>