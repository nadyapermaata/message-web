<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Silaturahmi Online</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>Pesan</h2>
    </header>

    <div class="messages">
        <table>

            <?php
            $sql = "SELECT * FROM pesan";
            $query = mysqli_query($db, $sql);

            while($warga = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>";
                echo "<h3>".$warga['nama']."</h3>";
                echo "<h4>".$warga['no_telp']." - ".$warga['pekerjaan']."<br></h4>".$warga['pesan']."<br><br>";
                if ($warga['balasan']) {
                    echo "<h3>Balasan:</h3>";
                    echo "<p>".$warga['balasan']."</p>";
                }
                echo "<a href='form-reply.php?id=".$warga['id']."'>Balas</a>";
                
                
                
                echo "</td>";
                echo "</tr>";
            }
            ?>

        </table>
    </div>

    </body>
</html>