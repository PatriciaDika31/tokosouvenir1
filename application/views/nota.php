Toko Souvenir<br>
____________________________<br>
No Nota : <?= $ts->kode_transaksi?><br>
Nama Kasir : <?= $ts->nama_user?><br>
Tanggal Transaksi : <?= $ts->tanggal_beli?>


<table border="1px solid black" style="border-collapse: collapse;">
	<tr>
		<th>No</th>
		<th>Judul</th>
		<th>Harga</th>
		<th>Jumlah</th>
		<th>Sub Total</th>
	</tr>
	<?php $no=0; foreach($dts as $val):$no++?>
	<tr>
		<td><?= $no?></td>
		<td><?= $val->nama_barang?></td>
		<td><?= number_format($val->harga)?></td>
		<td><?= $val->jumlah?></td>
		<td><?= number_format($val->harga*$val->jumlah)?></td>
	</tr>
	<?php endforeach?>
	<tr>
		<td colspan="2">Total</td>
		<td colspan="3"><?= $ts->total?></td>
	</tr>
	<tr>
		<td colspan="2">Jumlah Bayar</td><td colspan="3"><?= $this->session->flashdata('kembali') + $ts->total ?></td>
	</tr>
	<tr>
		<td colspan="2">Kembalian</td><td colspan="3"><?= $this->session->flashdata('kembali')?></td>
	</tr>
</table>
<script type="text/javascript">
	
window.print();

</script>
