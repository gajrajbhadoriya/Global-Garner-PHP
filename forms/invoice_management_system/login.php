<?php
require_once("clientside2.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validate.php" method="POST" >
        <h1 align=center>
            Login Form
        </h1>
        <table bgcolor="silver" border="5" align="center"> 
            <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="Password" name="password">
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" name="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>