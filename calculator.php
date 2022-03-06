<form action="calculator.php" method="GET">
     Number1: <input type="number" name="number1">
     Number2: <input type="number" name="number2">
     <input type="submit">
</form>

<?php
     $number1 = $_GET["number1"];
     $numnber2 = $_GET["number2"];
     echo $num1 + $num2;
?>