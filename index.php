<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<h1>This is my parent ecercices folder</h1>';
    $fruits =["Apple", "Strawberry", "Pineapple", "Lemon"];
        echo $fruits[1] .'<br>'; 

        $Stock=[
            "T-Shirts" => 20,
            "Caps" =>10,
            "Shoes" => 5
        ];

        echo $Stock["Caps"]. '<br>';

        $Stock["Caps"]+=5;
        $Stock["Shoes"]+=20;

        echo $Stock["Shoes"]. '<br>';

       /* $Contacts = [
            ["Name" => "Ricardo" , "Tel" => "0677777777" ,  "Email" => "ricardo@gmail.com"],
            ["Name" => "Michael" , "Tel" => "0606060606" ,  "Email" => "mj@gmail.com"],
            ["Name" => "Emmanuel" , "Tel" => "0610101010" ,  "Email" => "manu@gmail.com"]
        ]; */


        $Contacts = [
            "Ricardo" => [ "Tel" => 677777777 ,  "Email" => "ricardo@gmail.com"],
            "Michael" => [ "Tel" => 606060606 ,  "Email" => "mj@gmail.com"],
            "Emmanuel" => [  "Tel" => 610101010 ,  "Email" => "manu@gmail.com"]
        ]; 

        echo $Contacts['Ricardo']["Tel"];

       // var_dump ($Contacts[0]);
        //echo $Contacts[0]["Name"];

        $avatarHero = "https://cdn4.iconfinder.com/data/icons/character-avatar-3/64/26-people-avatar-512.png";
        $first_name ="bootyMan";
        $last_name ="Banana";
        $car = [
            "attackPoint" =>51,
             "defencePoint" => 847,
             "level" => 100,
              "hp" => 70 
        ]


    ?>

    <br>
    <br>
    <br>
    <img style="border-radius: 50%" src="<?php echo $avatarHero ?>" alt="">
    <h1><?php echo $first_name . ' ' . $last_name  ?></h1>
    <ul>
        <li>Attak point <?php echo $car["attackPoint"] ?></li>
        <li>Defense point  <?php echo $car["defencePoint"] ?></li>
        <li>Level  <?php echo $car["level"] ?></li>
        <li>HP  <?php echo $car["hp"] ?></li>
    </ul>

</body>
</html>




