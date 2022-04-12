<?php
    include 'classes/Age.php';

    $ageOBj = new Age;
        
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
            <div class="card-header">
                DETERMINE AGE APP v1.0
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="text" name="firstname" id="" placeholder="FIRSTNAME" class="form-control mt-3">
                    
                    <input type="text" name="lastname" id="" placeholder="LASTNAME" class="form-control mt-3">
                    
                    <input type="number" name="birthyear" id="" placeholder="BIRTH YEAR" class="form-control mt-3">
                    
                    <input type="number" name="current" id="" placeholder="CURRENT YEAR" class="form-control mt-3">
                    
                    <button type="submit" name="submit" class="btn btn-outline-primary mt-3">Submit</button>
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        $firstname=$_POST['firstname'];
                        $lastname=$_POST['lastname'];
                        $birthyear=$_POST['birthyear'];
                        $current=$_POST['current'];

                        $ageOBj->set_data($firstname,$lastname,$birthyear,$current);

                        echo "<div class='alert alert-success mt-3'>The name is: ". $ageOBj->get_firstname(). "</div>";
                        echo "<div class='alert alert-success mt-3'>The lastname is: ". $ageOBj->get_lastname(). "</div>";
                        echo "<div class='alert alert-success mt-3'>The age is: ". $ageOBj->get_calculateAge(). "</div>";
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4367b61034.js" crossorigin="anonymous"></script>
</body>
</html>