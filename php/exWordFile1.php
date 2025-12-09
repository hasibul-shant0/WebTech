<!DOCTYPE html>
<html>
<body>
 
<?php

echo "Calculate Area and perimeter of rectangle <br>";

$length = 10;
$width = 20;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Area = $area";
echo"<br> Perimeter = $perimeter<br>";

echo"<br>Calculate VAT <br>";
$salary = 50000;
$vat = 0.15 * $salary;
echo"Salary = $salary <br> VAT = $vat<br>";

echo "<br>ODD or EVEN<br>";
$number = 21;
if($number %2 == 0){
  echo "Number is EVEN<br>";
}
  else{
    echo"$number is ODD<br>";
  }
  echo"<br> Find leargest Number<br>";
  $num1 = 20;
  $num2 = 30;
  $num3 = 15;
  $largest = $num1;
  if($num2>$leargest){
    $leargest = $num2;
  }
  else if($num3>$leargest){
    $leargest = $num3;
  }
    
    echo "Largest Number is $leargest<br>";

echo"<br>Print ODD numbers between 10 to 100<br>";
for($i = 10; $i<=100; $i++){
  if($i%2 != 0){
    echo "$i ";
  }
}

?>

</body>
</html>