<?php
//GPA calculator using if else statement...
   $marks=-1;

   if($marks>=80 && $marks<=100){
    echo "You got A+";
   }else if($marks>=70 && $marks<=79){
    echo "You got A";
   }else if($marks>=60 && $marks<=69){
    echo "You got A-";
   }else if($marks>=50 && $marks<=59){
    echo "You got B";
   }else if($marks>=40 && $marks<=49){
    echo "You got C";
   }else if($marks>=33 && $marks<=39){
    echo "You got D";
   }else if($marks>=0 && $marks<=32){
    echo "You got F";
   }else{
    echo "Invalid Number";
   }
   

?> 

 <?php
//GPA calculator using Switch case ...
$mark=95;

switch($mark){
    case($mark>=80 && $mark<=100):
        echo "You got A+";
        break;
        case($mark>=70 && $mark<=79):
            echo "You got A";
            break;
        case($mark>=60 && $mark<=69):
            echo "You got A-";
            break; 
         case($mark>=50 && $mark<=59):
            echo "You got B";
            break; 
        case($mark>=40 && $mark<=49):
            echo "You got C";
            break; 
        case($mark>=33 && $mark<=39):
            echo "You got D";
            break; 
        case($mark>=0 && $mark<=32):
            echo "You got F";
            break;
            default:
            echo "Invalid number";

                   

}


?>