##kelompok_bigpro
##pranadhitya(19090016)
##veldasalsabilillah(19090038)
<h3> namaa </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> Nama </td>
        <td> <input type="text" name="kode_barang"> </td>
    </tr>
    <tr>
        <td> Nim</td>
        <td> <input type="text" name="nama_barang"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "nama 
Nama = '$_POST[Nama]',
Nim = '$_POST[NIM]'");

echo "Data barang baru telah tersimpan";

}

?>