<h2>List Kategori</h2>
<table border="1">
    <tr><th>NO</th><th>Id_Kategori</th><th>Nama Kategori</th></tr>
    <?php
    include 'koneksi.php';
    $kategori = mysqli_query($koneksi, "SELECT * from kategori");
    $no=1;
    foreach ($kategori as $kt){
        echo "<tr>
            <td>$no</td>
            <td>".$kt['id_kategori']."</td>
            <td>".$kt['nama']."</td>
              </tr>";
        $no++;
    }
    ?>
</table>