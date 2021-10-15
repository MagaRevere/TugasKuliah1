<h2>List barang</h2>
<table border="1">
    <tr><th>NO</th><th>Id_barang</th><th>Id_Kategori</th><th>Nama Barang</th></tr>
    <?php
    include 'koneksi.php';
    $barang = mysqli_query($koneksi, "SELECT * from barang");
    $no=1;
    foreach ($barang as $br){
        echo "<tr>
            <td>$no</td>
            <td>".$br['id_barang']."</td>
            <td>".$br['id_kategori']."</td>
            <td>".$br['nama']."</td>
              </tr>";
        $no++;
    }
    ?>
</table>
