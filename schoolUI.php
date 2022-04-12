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
        <div class="card w-50 mx-auto border border-0">
            <div class="card-header text-center text-info border border-0">
                TUITION CALCULATOR
            </div>
            <div class="card-body">
                <form action="" method="post">
                    Enter Full Name
                    <input type="text" name="fullname" id="" class="form-control mt-1">
                    Year Level
                    <select name="year_level" id="year_level" class="form-select mt-1">
                        <option value="" hidden>Choose Year Level</option>
                        <option value="first">First Year</option>
                        <option value="second">Second Year</option>
                        <option value="third">Third Year</option>
                        <option value="fourth">Fourth Year</option>
                    </select>
                    Total Units
                    <input type="number" name="total_units" id="" class="form-control mt-1">

                    <div class="form-check mt-2">
                        <input type="radio" name="laboratory" id="with_lab" value="with_lab" class="form-check-input">
                        <label for="with_lab" class="form-check-label">With Laboratory Fee</label>
                    </div>
                    <div class="form-check mt-2">
                        <input type="radio" name="laboratory" id="without_lab" value="without_lab" class="form-check-input">
                        <label for="without_lab" class="form-check-label">With No Laboratory Fee</label>
                    </div>
                    
                    <button type="submit" name="btn_calculate" class="btn btn-primary mt-3">Calculate</button>
                </form>
                <?php
                    include 'classes/School.php';
                    $tuitionOBj = new Tuition;
                    
                    if(isset($_POST['btn_calculate'])){
                        $fullname = $_POST['fullname'];
                        $year_level = $_POST['year_level'];
                        $total_units = $_POST['total_units'];
                        $laboratory = $_POST['laboratory'];

                        $tuitionOBj->set_values($fullname,$year_level,$total_units,$laboratory);

                        echo "<div class='alert alert-warning mt-3'>Name: ". $tuitionOBj->get_fullname()."<br>Total Tuition is: ". $tuitionOBj->get_totalTuition(). "</div>";
                        
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4367b61034.js" crossorigin="anonymous"></script>
</body>
</html>