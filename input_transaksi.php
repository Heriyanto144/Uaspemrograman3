<h3> transaksi </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> id_transaksi </td>
        <td> <input type="text" name="id_transaksi"> </td>
    </tr>
    <tr>
        <td> nama_transaksi</td>
        <td> <input type="text" name="nama_transaksi"> </td>
    </tr>
    <tr>
        <td> tgl_transaksi </td>
        <td> <input type="date" name="tgl_transaksi"> </td>
    </tr>
    <tr>
        <td> harga </td>
        <td> <input type="text" name="harga"> </td>
    </tr>
    <tr>
        <td> qty </td>
        <td> <input type="text" name="qty"> </td>
    </tr>
    <tr>
        <td> id_barang </td>
        <td> <input type="text" name="id_barang"> </td>
    </tr>
    <tr>
        <td> diskon </td>
        <td> <input type="text" name="diskon"> </td>
    </tr>
    <tr>
        <td> id_pelanggan </td>
        <td> <input type="text" name="id_pelanggan"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="save"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into transaksi set  
id_transaksi = '$_POST[id_transaksi]',
nama_transaksi = '$_POST[nama_transaksi]',
tgl_transaksi = '$_POST[tgl_transaksi]',
harga = '$_POST[harga]',
qty = '$_POST[qty]',
id_barang = '$_POST[id_barang]',
diskon = '$_POST[diskon]',
id_pelanggan = '$_POST[id_pelanggan]'");

echo "Alhamdulillah data disimpan";

}

?>