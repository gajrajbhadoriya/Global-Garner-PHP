<?php
$_SERVER['REQUEST_METHOD']
if(isset($_POST["submit"]))
{
    $name = $_POST['username'];
    $password = $_POST['password'];
    $submit = $_POST['submit'];

    echo "welcome" . $name . "Your password is " . $password ;
}
else{
  
    echo 'data is not valid....';

}


?>