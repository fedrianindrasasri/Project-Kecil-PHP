<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laba Dan Rugi</title>
</head>
<body>
    <h3>membuat Untung dan Rugi dengan PHP</h3>
    <br>

    <form action="hitung.php" method="POST">
        <table>
            <tr>
                <td>Harga Jual</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Harga Modal</td>
                <td><input type="text" name="modal"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Hitung!"></td>
            </tr>
        </table>
    </form>
</body>
</html>