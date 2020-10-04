 <?php
$a = readline('Enter the number: '); 
$b = readline('Enter the second number: '); 
$op=readline('Enter operator: ');
switch ($op) {
         case 1:
            $c = $a + $b;
            echo "Addtion Operation Result: $c ";
            break;
         case 2:
            $c = $a - $b;
            echo "Subtraction Operation Result: $c ";
            break;
         case 3:
            $c = $a * $b;
            echo "Multiplication Operation Result: $c ";
            break;
         case 4:
            $c = $a / $b;
            echo "Division Operation Result: $c ";
            break;
         default:
            echo" Invalid input";
            break;
      }  
?>