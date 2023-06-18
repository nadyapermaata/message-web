<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-pesan.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pesan WHERE id=$id";
$query = mysqli_query($db, $sql);
$warga = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Silaturahmi Online</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>Balas Pesan</h2>
    </header>

    <form action="proses-reply.php" method="POST">
        
        <!-- <fieldset> -->
            <input type="hidden" name="id" value="<?php echo $warga['id'] ?>" /></td>
            <div class="replies">

            <div class="messages">
                <table>
                    
                <?php 
                    echo "<tr>";

                    echo "<td>";
                    echo "<h3>".$warga['nama']."</h3>";
                    echo "<h4>".$warga['no_telp']." - ".$warga['pekerjaan']."<br></h4>".$warga['pesan']."<br><br>";
                    echo "</td>";
                    
                    echo "</tr>";
                ?>
                </table>
            </div>

            <div class="rep">
            <table>
                <!-- <input type="hidden" name="id" value="<?php echo $warga['id'] ?>" /></td> -->

            <tr>
                <td><label for="balasan">Balasan: </label></td>
                <td><textarea name="balasan"></textarea></td>
            </tr>
            
            </table>
            </div>
            
            <br><br><br><br><br><br><br><div class="daftar">
                <input type="submit" value="Kirim" name="kirim" />
            </div>

            </div>
        <!-- </fieldset> -->

        
        
    </form>
    
    </body>
</html>