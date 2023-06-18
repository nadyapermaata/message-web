<!DOCTYPE html>
<html>
<head>
    <title>Formulir Silaturahmi Online</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="box">

    <header>
        <h2>Pesan Untuk Cak Eri</h2>
    </header>

    <form action="proses-pesan.php" method="POST">
        <fieldset>
            <table>
            <tr>
                <td><label for="nama">Nama: </label></td>
                <td><input type="text" name="nama"/></td>
            </tr>
            <tr>
                <td><label for="no_telp">No. Telp: </label></td>
                <td><input type="text" name="no_telp"/></td>
            </tr>
            <tr>
                <td><label for="pekerjaan">Pekerjaan: </label></td>
                <td><select name="pekerjaan">
                        <option>Dokter</option>
                        <option>Polisi</option>
                        <option>Guru</option>
                        <option>Perawat</option>
                        <option>Lainnya</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="pesan">Pesan: </label></td>
                <td><textarea name="pesan"></textarea></td>
            </tr>
            </table>
        
            <div class="daftar">
                <input type="submit" value="Kirim" name="kirim" />
            </div>
            
        </fieldset>
    </form>
</div>

    </body>
</html>