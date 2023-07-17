<?php  
    $name = "Sanaya Sharma";        //global variable  
    function global_var()  
    {  
        global  $name;
        
        echo "Variable inside the function: " .  $name;  
        echo "</br>";  
    }  
    global_var();  
?>  