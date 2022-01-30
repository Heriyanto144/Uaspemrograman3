<h3> Data kategori </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>id_kategori </th>
        <th>nama </th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from kategori");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_kategori]</td>
            <td>$tampil[nama]</td>
        <tr>";
        $no++;
    }
    ?>