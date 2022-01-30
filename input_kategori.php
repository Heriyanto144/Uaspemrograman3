<h3> kategori </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> id_kategori </td>
        <td> <input type="text" name="id_kategori"> </td>
    </tr>
    <tr>
        <td> nama </td>
        <td> <input type="text" name="nama"> </td>
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
mysqli_query($koneksi, "insert into kategori set  
id_kategori = '$_POST[id_kategori]',
nama = '$_POST[nama]'");

echo "Alhamdulillah data disimpan";

}

?>