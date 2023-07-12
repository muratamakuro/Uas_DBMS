<h1>Data Bagian</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>ID</td>
    <td>Nobk</td>
    <td>Barang ID</td>
    <td>Jumlah</td>
</tr>

<?php 
$no=0;
 foreach ($pengeluaranitemres as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->id_res?></td>
    <td><?php echo $row->nobk_res?></td>
    <td><?php echo $row->barangid_res?></td>
    <td><?php echo $row->jumlah_res?></td>
</tr>
<?php
}
?>

</table>