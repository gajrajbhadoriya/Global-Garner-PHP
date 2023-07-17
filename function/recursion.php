<?php    
// function factorial($n)    
// {    
//     if ($n < 0)    
//         return -1; /*Wrong value*/    
//     if ($n == 0)    
//         return 1; /*Terminating condition*/    
//     return ($n * factorial ($n -1));    
// }    
    
// echo factorial(5);  


   
// function display($number) {    
//     if($number<=5){    
//      echo "$number <br/>";    
//      display($number+1);    
//     }  
// }    
    
// display(1);       

// <!-- printing number -->
 
function display($number) {    
    if($number<=5){    
     echo "$number <br/>";    
     display($number+1);    
    }  
}    
    
display(1);    
?>    
  