
<?php

$devs=[

   [
       'name'=> 'Md Mohiuddin',
       'skill'=> 'PHP LARAVEL Developer',
       'desc'=>'Hi I am mohiuddin. I am a backend developer',
       'age'=>25,
       'gender'=>'male',
       'photo'=>'photo1.jpg'


   ],
   [
    'name'=> 'UZMA',
    'skill'=> 'PYTHON Developer',
    'desc'=>'Hi I am UZMA. I am a backend developer',
    'age'=>30,
    'gender'=>'female',
    'photo'=>'photo2.jpg'
   ],
   [
    'name'=> 'Abul kalam',
    'skill'=> 'javascript Developer',
    'desc'=>'Hi I am Abul kalam. I am a backend developer',
    'age'=>50,
    'gender'=>'male',
    'photo'=>'photo3.jpg'
   ],

   [
    'name'=> 'ONTIKA',
    'skill'=> 'PYTHON Developer',
    'desc'=>'Hi I am ONTIKA. I am a backend developer',
    'age'=>30,
    'gender'=>'female',
    'photo'=>'photo4.jpg'
   ],




];






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Member</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

   
    <div class="container">
        <div class="row">
        <?php
         foreach($devs as $dev):
           
         

    ?>
            <div class="col-md-3 mt-5">
                <div class="card">
                    <div class="card-body">
                      <img style="width:200px;height:200px" src="assets/media/img/<?php   echo $dev['photo'];?>">
                      <h3><?php echo $dev['name'];?></h3>
                      <h6><?php echo "<span style=\" color:orange\">SKILL:</span> {$dev['skill']}" ?></h6>
                      <p><?php echo "<span style=\" color:blue \">DESC:</span> {$dev['desc']}" ?></p>
                      <p><?php echo "<span style=\" color:green \">Age:</span> {$dev['age']}" ?></p>
                      <h6><?php echo "<span style=\"color:red \">Gender</span>: {$dev['gender']} " ?></h6>
                    </div>
                </div>
            </div>
            <?php  
               endforeach; ?>
            </div>
        </div>
    

    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>