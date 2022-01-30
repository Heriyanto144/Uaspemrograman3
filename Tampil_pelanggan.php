<h3> Data pelanggan </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>id_pelanggan </th>
        <th>nama_pelanggan </th>
        <th>no_tlp</th>
        <th>status</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from pelanggan");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_pelanggan]</td>
            <td>$tampil[nama_pelanggan]</td>
            <td>$tampil[no_tlp]</td>
            <td>$tampil[status]</td>
        <tr>";
        $no++;
    }
    ?>