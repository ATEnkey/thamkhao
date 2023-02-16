<!DOCTYPE html>
<html>
<body>

<?php

function convert_2_digits($number)
{
  $small_20s = [
    10 => 'ten', 
    11 => 'eleven', 
    12 => 'twelve', 
    13 => 'thirteen', 
    14 => 'fourteen', 
    15 => 'fifteen', 
    16 => 'sixteen', 
    17 => 'seventeen', 
    18 => 'eighteen', 
    19 => 'nineteen'
  ];

  $teens = [
      2 => 'twenty', 
      3 => 'thirty', 
      4 => 'fourty', 
      5 => 'fifty', 
      6 => 'sixty', 
      7 => 'seventy', 
      8 => 'eighty', 
      9 => 'nicety'
  ];
  
  echo $number[0];
  echo $number[1];

  if ($number < 20) {
    return $small_20s[$number];
  }
  
  if ($number[1] == 0) 
  {
     return $teens[$number[0]];
  }
  
  
}

echo convert_2_digits("30");

?>

</body>
</html>