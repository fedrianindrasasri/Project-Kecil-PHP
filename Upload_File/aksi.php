<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Upload</title>
</head>
<body>
    <h1>Upload Gambar dengan PHP</h1>
    <?php
        include 'koneksi.php';
        if($_POST['upload'])
        {
            // ekstensi yang diperbolehkan
            $ekstensi_boleh = array('png', 'jpg');
            $nama = $_FILES['file']['name'];
            $x = explode('.', $nama);
            $ekstensi = strtolower(end($x));
            $ukuran = $_FILES['file']['size'];
            $file_tmp = $_FILES['file']['tmp_name'];

            if(in_array($ekstensi, $ekstensi_boleh) === true)
            {
                if($ukuran < 1044070)
                {
                    move_uploaded_file($file_tmp, 'file/'.$nama);
                    $query = mysqli_query($host, "INSERT INTO upload VALUES(NULL, '$nama')");
                    if($query)
                    {
                        echo 'FILE BERHASIL DIUPLOAD';
                    }
                    else
                    {
                        echo 'FILE GAGAL DIUPLOAD';
                    }
                }
                else
                {
                    echo "UKURAN FILE TERLALU BESAR";
                }
            }
            else
            {
                echo "Ekstensi Tidak Diizinkan";
            }
        }
    ?>

    <br>
    <br>
    <a href="index.php">Upload lagi</a>
    <br>
    <br>

    <table>
        <?php
        
            $data = mysqli_query($host, "SELECT * FROM upload");

            while($d = mysqli_fetch_array($data))
            {
        ?>
            <tr>
                <td>
                    <img src="<?php echo "file/".$d['nama_file']; ?>">
                </td>
            </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>