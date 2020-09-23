<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form>
   <input type="text" name="num1" placeholder="Numbwe 1">
   <input type="text" name="operator" placeholder="Operator">
   <input type="text" name="num2" placeholder="Numbwe 2">

<br>
<button type="submit" name="submit" value="submit">Calculate</button>

</form> The answer is:</p>
<?php

if (isset($_GET["submit"])){  

   $result1 =$_GET["num1"];
   $result2 =$_GET["num2"];
   $operator=$_GET["operator"];
   switch ($operator){
     default :
      echo "you need to enter arthmetic  operator!";
     break;
     case "+":
     echo $result1 + $result2;
     break;
     case "-":
      echo $result1 - $result2;
     break;
     case "*";
     echo $result1 * $result2;
     break;
     case "/";
     echo $result1 / $result2;
     break;

   }
}

?>
<p>

</body>

</html>