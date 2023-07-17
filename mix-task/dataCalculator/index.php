<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date-Calculator</title>
</head>
<body>
    <form method="POST" action="DateCalculator.php">
        <table>
            <tbody>
                <tr>
                    <td>
                         first date (YYYY-MM-DD)
                    </td>
                    <td>
                        <input type="text" name="date1" placeholder="Enter first date (YYYY-MM-DD):" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        second date (YYYY-MM-DD)
                    </td>
                    <td>
                        <input type="text" name="date2" placeholder="Enter second date (YYYY-MM-DD):" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="submit">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>