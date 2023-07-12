<h1>Data Bagian</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Barang ID</td>
    <td>Nama Barang</td>
    <td>Satuan</td>
    <td>Harga</td>
    <td>Kategori ID</td>
</tr>

<?php 
$no=0;
 foreach ($barangres as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->barangid_res?></td>
    <td><?php echo $row->namabarang_res?></td>
    <td><?php echo $row->satuan_res?></td>
    <td><?php echo $row->harga_res?></td>
    <td><?php echo $row->kategiriid_res?></td>
</tr>
<?php
}
?>

</table>