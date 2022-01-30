<h3> satuan </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> id_satuan </td>
        <td> <input type="text" name="id_satuan"> </td>
    </tr>
    <tr>
        <td> nama </td>
        <td> <input type="text" name="nama"> </td>
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
mysqli_query($koneksi, "insert into satuan set  
id_satuan = '$_POST[id_satuan]',
nama = '$_POST[nama]'");

echo "Alhamdulillah data disimpan";

}

?>