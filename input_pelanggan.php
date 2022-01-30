<h3> pelanggan </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> id_pelanggan </td>
        <td> <input type="text" name="id_pelanggan"> </td>
    </tr>
    <tr>
        <td> nama_pelanggan </td>
        <td> <input type="text" name="nama_pelanggan"> </td>
    </tr>
    <tr>
        <td> no_tlp </td>
        <td> <input type="text" name="no_tlp"> </td>
    </tr>
    <tr>
        <td> status </td>
        <td> <input type="text" name="status"> </td>
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
mysqli_query($koneksi, "insert into pelanggan set  
id_pelanggan = '$_POST[id_pelanggan]',
nama_pelanggan = '$_POST[nama_pelanggan]',
no_tlp = '$_POST[no_tlp]',
status = '$_POST[status]'");

echo "Alhamdulillah data disimpan";

}

?>