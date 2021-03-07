<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // $password = "Paskistan";
    // $blowfish = "$2y$10$";
    // $salt = "MYNAMEisatriadhikarirr";
    // echo "Length : " .strlen($salt);
    // $formatingblowfishwithsalt = $blowfish.$salt;
    // echo "<br>";
    // echo $formatingblowfishwithsalt;
    // $hash = crypt($password, $formatingblowfishwithsalt);
    // echo "<br>";
    // echo $hash;
    $password = "India";
    $blowfish = "$2y$15$";
    $salt = "MYNAMEisatriadhik1234arirr";
    echo "Length : " .strlen($salt);
    $formatingblowfishwithsalt = $blowfish.$salt;
    echo "<br>";
    echo $formatingblowfishwithsalt;
    $hash = crypt($password, $formatingblowfishwithsalt);
    echo "<br>";
    echo $hash;
    ?>

</body>
</html>