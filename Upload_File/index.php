<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>
</head>
<body>
    <h1>Membuat Upload File dengan PHP</h1>
    <form action="aksi.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Upload" name="upload">
    </form>
</body>
</html>