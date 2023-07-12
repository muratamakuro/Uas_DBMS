<h1>Data Bagian</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Nobk</td>
    <td>Tanggal</td>
    <td>Noref</td>
    <td>Bagian ID</td>
    <td>petugas ID</td>
    <td>Keterangan</td>
</tr>

<?php 
$no=0;
 foreach ($pengeluaranres as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->nobk_res?></td>
    <td><?php echo $row->tanggal_res?></td>
    <td><?php echo $row->noref_res?></td>
    <td><?php echo $row->bagianid_res?></td>
    <td><?php echo $row->petugasid_res?></td>
    <td><?php echo $row->keterangan_res?></td>
</tr>
<?php
}
?>

</table>