<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo "PHP addignment by: Gino  (fix PHP syntax errors)"; ?></title>
</head>

<body>
<?php
$ages = [10,50,39,40,67,99,7,2,10,88];
//$sum = 0;

function getAverageAge($input) {
    $sum =0;
    for($i=0; $i<count($input); $i++) {
        //$sum = 0;
        $sum += $input[$i];
    }
    return $sum / $i;
}

echo getAverageAge($ages);
?>
</body>
</html>
