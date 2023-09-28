<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>

<?php

require_once 'holla.php';
$all = new Mathequations(50 , 6);

 $all->get_add();

 $all->get_sub();


 $all->get_mul();
 $all->get_mul();


?>


<p style = "color:#222 ; font-size:30px ;"><?php echo "Addition of two number is: " .$all->get_add();?></p>
<p style = "color:#222 ; font-size:30px ;"><?php echo "Subtruction  of two number is: " . $all->get_sub();?></p>
<p style = "color:#222 ; font-size:30px ;"> <?php echo "Multiplication  of two number is: " .$all->get_mul();?></p>
<p style = "color:#222 ; font-size:30px ;"><?php echo "Division  of two number is: " .$all->get_div();?></p>


     

</body>
</html>