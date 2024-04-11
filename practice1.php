<?php
 echo"I like cake <br>";
echo"Its really good";
// This  is a comment
/* this is multi */
// variable 

  
$name = "Avisek";
$food = "cake";
$age = "20";
$email = "avisekmandal2003@gmail.com";
$user = "67";
$Quantity = "9";
$gpa = "2.9";
$price = "26000";
$tax_rate = "8.9";
$online = true ;
$for_sale = true;
$total = null;

echo $name;
echo "Hello {$name} <br>";
echo "My age is {$age} <br>";
echo "My gmail is {$email}<br>";
//echo "Total user is {$user}<br>";
echo "There are {$user} users online <br>";
echo "I have {$Quantity} cakes<br>";
echo "My grade is {$gpa}<br>";
echo "My shirt price is {$price}<br>";
echo "Goverment new tax rate is {$tax_rate} %<br>";
echo " online status :{$online} <br>";
echo "we have ordered {$Quantity} pizza whose price is {$price}<br>";
$total = $Quantity * $price;
echo "Your total is {$total} <br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <br>
  <button>
    please order 
  </button>

</body>
</html>
