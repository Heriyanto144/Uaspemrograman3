<h3> Data barang </h3>
<h3> Data satuan </h3>
<h3> Data kategori </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>id_barang </th>
        <th>nama </th>
        <th>kategori_id</th>
        <th>satuan_id</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from barang");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_barang]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[kategori_id]</td>
            <td>$tampil[satuan_id]</td>
        <tr>";
        $no++;
    }
    ?>
    <h3>  </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>id_satuan </th>
        <th>nama </th>
    </tr>

    <?php
    include "koneksi.php";

    $no=2;
    $ambildata = mysqli_query($koneksi,"select * from satuan");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_satuan]</td>
            <td>$tampil[nama]</td>
        <tr>";
        $no++;
    }
    ?>
    
    <h3>  </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>id_kategori </th>
        <th>nama </th>
    </tr>

    <?php
    include "koneksi.php";

    $no=3;
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