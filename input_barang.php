<h3> barang </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> id_barang </td>
        <td> <input type="text" name="id_barang"> </td>
    </tr>
    <tr>
        <td> nama </td>
        <td> <input type="text" name="nama"> </td>
    </tr>
    <tr>
        <td> kategori_id </td>
        <td> <input type="text" name="kategori_id"> </td>
    </tr>
    <tr>
        <td> satuan_id </td>
        <td> <input type="text" name="satuan_id"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Save"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into barang set  
id_barang = '$_POST[id_barang]',
nama = '$_POST[nama]',
kategori_id = '$_POST[kategori_id]',
satuan_id = '$_POST[satuan_id]'");

echo "Alhamdulillah data disimpan";

}

?>