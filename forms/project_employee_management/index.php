<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee management</title>
</head>
<body>
<h1 align="center"> STUDENT INFROMATION LOGIN</h1>
    <form method="POST" action="student.php">
        <table bgcolor="tan" border="5"  align="center">
            <tr>
                <td>
                    Name: 
                </td>
                <td>
                    <input type="text" name="name">
                </td>            
            </tr>
            <tr>
                <td>
                     Email: 
                </td> 
                <td>
                    <input type="email" name="email">
                </td>           
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr align="center" bgcolor="yellow">
                <td colspan="2">
                    <button colspan=2><input type= "submit" name="submit"></button>
                </td>
            </tr>
        </table>
 </form>
    
</body>
</html>